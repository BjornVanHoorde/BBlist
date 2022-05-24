<?php

namespace App\Http\Controllers;

use App\Mail\sendContributorMail;
use App\Mail\sendOrderConfirmation;
use App\Models\List_product;
use App\Models\Lists;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Mollie\Laravel\Facades\Mollie;

class WebhooksController extends Controller
{
    public function handle(Request $request) {

        if (! $request->has('id')) {
            return;
        }

        $payment = Mollie::api()->payments()->get($request->id);

        if ($payment->isPaid() && ! $payment->hasRefunds() && ! $payment->hasChargebacks()) {

            $orderId = $payment->metadata->order_id;
            $order = Order::findOrFail($orderId);
            $order->status = 'paid';
            $order->save();

            Log::alert('Betaling is gelukt');

        } elseif ($payment->isOpen()) {
            /*
             * The payment is open.
             */
        } elseif ($payment->isPending()) {
            /*
             * The payment is pending.
             */
        } elseif ($payment->isFailed()) {
            /*
             * The payment has failed.
             */
        } elseif ($payment->isExpired()) {
            /*
             * The payment is expired.
             */
        } elseif ($payment->isCanceled()) {
            /*
             * The payment has been canceled.
             */
        } elseif ($payment->hasRefunds()) {
            /*
             * The payment has been (partially) refunded.
             * The status of the payment is still "paid"
             */
        } elseif ($payment->hasChargebacks()) {
            /*
             * The payment has been (partially) charged back.
             * The status of the payment is still "paid"
             */
        }
    }

    private function getCartKey($slug) {
        return session()->get('_token') . $slug;
    }
}

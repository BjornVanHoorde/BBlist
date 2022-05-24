<?php

namespace App\Mail;

use App\Models\Lists;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendOrderConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order, $products, $list)
    {
        $this->order = $order;
        $this->products = $products;
        $this->list = $list;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject(__('Order conformation'))
            ->markdown('emails.guest.new', [
                'order' => $this->order,
                'products' => $this->products,
                'list' => $this->list,
            ]);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendContributorMail extends Mailable
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
        return $this->subject(__('New contribution'))
            ->markdown('emails.user.new', [
                'order' => $this->order,
                'products' => $this->products,
                'list' => $this->list,
            ]);
    }
}

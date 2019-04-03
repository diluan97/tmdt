<?php

namespace App\Listeners;

use Mail;
use App\Events\CheckOutEvent;
use App\Mail\CheckOutWithMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CheckOutListener implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CheckOutEvent  $event
     * @return void
     */
    public function handle(CheckOutEvent $event)
    {
        $order = $event->order;
        $email = $order->customer_email;
        $name = $order->customer_name;

        Mail::to($email, $name)
            ->send(new CheckOutWithMail($order, $name));
        Mail::to('duongdiluan1997@gmail.com', $name)
            ->send(new CheckOutWithMail($order, $name));

    }
}

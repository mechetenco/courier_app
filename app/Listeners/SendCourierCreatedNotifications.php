<?php

namespace App\Listeners;
use App\Models\Courier;
use App\Notifications\NewCourier;
use App\Events\CourierCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendCourierCreatedNotifications implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CourierCreated $event): void
    {
        foreach (Courier::whereNot('id', $event->courier->id)->cursor() as $courier) {
            $courier->notify(new NewCourier($event->courier));
        }
    }
}

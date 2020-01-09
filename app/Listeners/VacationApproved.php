<?php

namespace App\Listeners;

use App\Events\VacationAccepted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class VacationApproved
{
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
     * @param  VacationAccepted  $event
     * @return void
     */
    public function handle(VacationAccepted $event)
    {
        //
        $balance = $event->emp->balance - 1;
        $event->emp->update(['balance' => $balance]);
    }
}

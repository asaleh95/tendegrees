<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class VacationAccepted
{
    use Dispatchable, SerializesModels;
    public $emp;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($emp)
    {
        //
        $this->emp = $emp;
        // dd($emp->balance);
    }
}

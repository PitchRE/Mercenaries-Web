<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\kd_history;

class GenerateUserDummyData
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
     * @param  UserCreated  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
        error_log('Some message here. dsaasaasdsd');
        for ($i = 0; $i < 5; $i++) {
            $kd_history = new kd_history;
            $kd_history->user_id = $event->user->id;
            $kd_history->kd = 0;
            $kd_history->save();
        }
    }
}

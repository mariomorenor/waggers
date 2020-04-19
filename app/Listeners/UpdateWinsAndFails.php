<?php

namespace App\Listeners;

use App\Events\WaggerCreated;
use App\User;
use App\Wagger;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateWinsAndFails
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
     * @param  object  $event
     * @return void
     */
    public function handle(WaggerCreated $event)
    {
        
        $this->updateWinsAndFails($event->winner);
        $this->updateWinsAndFails($event->loser);
    }

    public function updateWinsAndFails(User $user)
    {
        $wins =  Wagger::where('winner_user_id',$user->id)->count();
        $fails = Wagger::where('loser_user_id',$user->id)->count();

        $user->update(['wins'=>$wins,'fails'=>$fails]);
    }


}

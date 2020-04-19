<?php

namespace App\Events;

use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class WaggerCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public $winner;
    public $loser;
    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($winner_id, $loser_id)
    {   
        $this->winner = User::find($winner_id);
        $this->loser = User::find($loser_id);
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}

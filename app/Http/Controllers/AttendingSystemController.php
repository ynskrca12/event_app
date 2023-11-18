<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
class AttendingSystemController extends Controller
{
    public function __invoke($id)
    {
        $event = Event::findOrFail($id);
        $attending = $event->attendings()->where('user_id',auth()->id())->first();
        if(!is_null($attending)){
            $attending->delete();
            return null;
        }else{
            $attending = $event->attendings()->create([
                'user_id' => auth()->id(),
                'num_tickets' => 1
            ]);
            return $attending;
        }
    }
}

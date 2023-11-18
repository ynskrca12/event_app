<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventShowController extends Controller
{
    public function __invoke($id)
    {
        $event = Event::findOrFail($id);
        $like = $event->likes()->where('user_id',auth()->id())->first();
        $savedEvent = $event->savedEvents()->where('user_id',auth())->first();
        $attending = $event->attendings()->where('user_id',auth())->first();
        return view('eventsShow',compact('event','like','attending','savedEvent'));
    }
}

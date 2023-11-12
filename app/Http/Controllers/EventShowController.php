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
        return view('eventsShow',compact('event','like'));
    }
}

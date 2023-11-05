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

        return view('eventsShow',compact('event'));
    }
}

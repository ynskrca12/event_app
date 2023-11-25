<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $events = Event::with('country','tags')->where('start_date','>=',today())->orderBy('created_at','desc')->get();

        return view('welcome',compact('events'));
    }
}

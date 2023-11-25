<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;


class AttendingEventController extends Controller
{
    public function __invoke()
    {
        $events= Event::with('attendings')->whereHas('attendings',function($q){
            $q->where('user_id',auth()->id());
        })->get();
    
        return view('events.likedEvents',compact('events'));
    }
   
}

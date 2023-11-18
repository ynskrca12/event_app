<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
class SaveSystemController extends Controller
{
    public function __invoke($id)
    {
        $event = Event::findOrFail($id);
        $savedEvent = $event->savedEvents()->where('user_id',auth()->id())->first();
        if(!is_null($savedEvent)){
            $savedEvent->delete();
            return null;
        }else{
            $savedEvent = $event->like()->create([
                'user_id' => auth()->id()
            ]);
            return $savedEvent;
        }
    }
}

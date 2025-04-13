<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Events;
use SimpleSoftwareIO\QrCode\Facades\QrCode;



class PageController extends Controller
{
    //
    public function eventform(){
        $event=Events::all();

        return view('pages.eventform',compact('event'));



    }
    public function saveform(Request $request)
    {
        //
        $this->validate($request, [
            'questions' => 'required|string|max:200',
        ]);
        $userId = Auth::id(); 
        $eventId= Event::id();
        
        $event = new Events;
        $event->questions = $request->input('questions');
        $event->event_id=$eventId;
        $event->user_id = $userId;

        $event->user_id = $userId;
        $event->save();
    }
    // public function qrcode(){
    //     $url=url("event/$event->id");
    // }
}

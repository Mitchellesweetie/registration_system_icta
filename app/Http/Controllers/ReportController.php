<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ReportController extends Controller
{
    public function download($id)
    {
        $event = DB::table('events')
            ->join('event_forms', 'events.id', '=', 'event_forms.events_id')
            ->join('client_responses', 'event_forms.id', '=', 'client_responses.event_forms_id')
            ->select('events.id as event_id','events.event_name', 'events.event_description', 
               'event_forms.id as form_id','event_forms.questions', 'client_responses.answer','client_responses.id as client_id')
            ->where('events.id', $id)  
            ->get();
            
        if ($event->isEmpty()) {
            abort(404, 'Event not found');
        }
    
        $groupedEvents = $event->groupBy('event_id');
        $uniqueQuestions = $event->pluck('questions','form_id')->unique();
        $groupedResponses = $event->groupBy('client_id');

        $eventName = $event->first()->event_name;

    
        $pdf = PDF::loadView('pdf', compact('groupedEvents','uniqueQuestions','groupedResponses'));
    
        // return $pdf->download('event_' . $id . '.pdf');
        $filename = 'event_' . Str::slug($eventName) . '.pdf';

        return $pdf->download($filename);
    }
    

        public function reports(){
            $event = DB::table('events')
              ->get();
            
            return view('pages.reports',compact('event'));

        }


}
 

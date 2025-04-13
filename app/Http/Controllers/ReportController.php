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
            ->leftjoin('event_forms', 'events.id', '=', 'event_forms.events_id')
            ->leftjoin('client_responses', 'event_forms.id', '=', 'client_responses.event_forms_id')
            ->select('events.event_name', 'events.event_description', 'event_forms.questions', 'client_responses.answer')
            ->where('events.id', $id)  
            ->get();
            
        if ($event->isEmpty()) {
            abort(404, 'Event not found');
        }
    
        $groupedEvents = $event->groupBy('event_id');
        $eventName = $event->first()->event_name;

    
        $pdf = PDF::loadView('pdf', compact('groupedEvents'));
    
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
 

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function download($id)
    {
        // Get the event data from the database for the selected event
        $event = DB::table('events')
            ->leftjoin('event_forms', 'events.id', '=', 'event_forms.events_id')
            ->leftjoin('client_responses', 'event_forms.id', '=', 'client_responses.event_forms_id')
            ->select('events.event_name', 'events.event_description', 'event_forms.questions', 'client_responses.answer')
            ->where('events.id', $id)  // Fix: `events.id` instead of `event.id`
            ->get();
            
        // Check if data was found
        if ($event->isEmpty()) {
            abort(404, 'Event not found');
        }
    
        // Group data by event_id (if necessary)
        $groupedEvents = $event->groupBy('event_id');
    
        // Load the PDF view with event data
        $pdf = PDF::loadView('pdf', compact('groupedEvents'));
    
        // Return the generated PDF for download
        return $pdf->download('event_' . $id . '.pdf');
    }
    

        public function reports(){
            $event = DB::table('events')
              ->get();
            
            return view('pages.reports',compact('event'));

        }


}
 

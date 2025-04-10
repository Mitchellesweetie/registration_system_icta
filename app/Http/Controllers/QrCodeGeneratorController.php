<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Events;
use Illuminate\Support\Facades\DB;
 

class QrCodeGeneratorController extends Controller
{
  
    public function qrform($id)
{
    $event = DB::table('events')
        ->leftjoin('event_forms', 'events.id', '=', 'event_forms.events_id')
        ->leftjoin('client_responses', 'event_forms.id', '=', 'client_responses.event_forms_id')
        ->select('events.event_name', 'events.event_description', 'event_forms.questions', 'client_responses.answer')
        ->where('events.id', $id)  
        ->get();
        
    return view('pages.formqr', compact('event'));
}
public function selected($id)
{
    $event = DB::table('events')
        ->leftjoin('event_forms', 'events.id', '=', 'event_forms.events_id')
        ->leftjoin('client_responses', 'event_forms.id', '=', 'client_responses.event_forms_id')
        ->select('events.event_name', 'events.event_description', 'event_forms.questions', 'client_responses.answer')
        ->where('events.id', $id)  
        ->get();

    return redirect()->route('generate', ['eventId' => $id]);
}
public function generate($eventId)
{
    $url = url("/qrform/{$eventId}");
    
    $qrCode = QrCode::size(200)->generate($url);
    
    return view('pages.qr', [
        'event' => $eventId,
        'url' => $url,
        'qrCode' => $qrCode
    ]);
}

    
}

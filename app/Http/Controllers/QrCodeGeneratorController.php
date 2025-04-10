<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Events;
use Illuminate\Support\Facades\DB;
 

class QrCodeGeneratorController extends Controller
{
    // public function generate($eventId) {
    //     // $qrCodes = [];
    //     $event = Events::findOrFail($eventId);

    //     $url=url("event/$event->id");

    //     $qrCodes['simple'] = QrCode::size(120)->generate($url);
    //     // $qrCodes = QrCode::size(120)->generate('url');

    //     // $qrCodes['changeColor'] = QrCode::size(120)->color(255, 0, 0)->generate('https://www.binaryboxtuts.com/');
    //     // $qrCodes['changeBgColor'] = QrCode::size(120)->backgroundColor(255, 0, 0)->generate('https://www.binaryboxtuts.com/');
         
    //     // $qrCodes['styleDot'] = QrCode::size(120)->style('dot')->generate('https://www.binaryboxtuts.com/');
    //     // $qrCodes['styleSquare'] = QrCode::size(120)->style('square')->generate('https://www.binaryboxtuts.com/');
    //     // $qrCodes['styleRound'] = QrCode::size(120)->style('round')->generate('https://www.binaryboxtuts.com/');
     
    //     // $qrCodes['withImage'] = QrCode::size(200)->format('png')->merge('/public/img/logo.png', .4)->generate('https://www.binaryboxtuts.com/');
         
    //     return view('pages.qr', $qrCodes);
 
    // }
    // public function qrform($id){
    //     $event = DB::table('events')
    //         ->leftjoin('event_forms', 'events.id', '=', 'event_forms.events_id')
    //         ->leftjoin('client_responses', 'event_forms.id', '=', 'client_responses.event_forms_id')
    //         ->select('events.event_name', 'events.event_description', 'event_forms.questions', 'client_responses.answer')
    //         ->where('events.id', $id)  
    //         ->get();
            

    //     return view('pages.formqr',compact('event'));
    // }
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

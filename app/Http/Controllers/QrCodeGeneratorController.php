<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Events;
 
class QrCodeGeneratorController extends Controller
{
    public function generate($eventId) {
        // $qrCodes = [];
        $event = Events::findOrFail($eventId);

        $url=url("event/$event->id");

        $qrCodes['simple'] = QrCode::size(120)->generate($url);
        // $qrCodes = QrCode::size(120)->generate('url');

        // $qrCodes['changeColor'] = QrCode::size(120)->color(255, 0, 0)->generate('https://www.binaryboxtuts.com/');
        // $qrCodes['changeBgColor'] = QrCode::size(120)->backgroundColor(255, 0, 0)->generate('https://www.binaryboxtuts.com/');
         
        // $qrCodes['styleDot'] = QrCode::size(120)->style('dot')->generate('https://www.binaryboxtuts.com/');
        // $qrCodes['styleSquare'] = QrCode::size(120)->style('square')->generate('https://www.binaryboxtuts.com/');
        // $qrCodes['styleRound'] = QrCode::size(120)->style('round')->generate('https://www.binaryboxtuts.com/');
     
        // $qrCodes['withImage'] = QrCode::size(200)->format('png')->merge('/public/img/logo.png', .4)->generate('https://www.binaryboxtuts.com/');
         
        return view('pages.qr', $qrCodes);
 
    }
}
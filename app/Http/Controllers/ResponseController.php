<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\EventForms;
use App\Models\ClientResponse;
use Illuminate\Validation\ValidationException;

class ResponseController extends Controller
{
    public function questionsresponse(Request $request)
    {
        $validatedData = $request->validate([
            'answers' => 'required|array', // Ensure answers is an array
            'answers.*' => 'required|string|max:2000', // Each answer must be a string with a maximum length
        ]);

        // $event = Event::findorFail($id);

        // if (!$event) {
            // If the event doesn't exist, return an error response
            // return redirect()->route('events.index')->with('error', 'Event not found.');
        // }

        foreach ($validatedData['answers'] as $questionId => $answer) {
            $question = EventForms::find($questionId);

            if ($question) {
                ClientResponse::create([
                    'answer' => $answer,
                    // 'events_id' => $id,
                    'event_forms_id' => $questionId,
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Question with ID $questionId not found.',
                ], 500);
            }
        }

        // Return success response
        // return redirect()->route('events.index')
        // ->with('success', 'Thank you! Your responses have been saved.')
        // ->with('event',$event);
        // return redirect()->route('index')->with('success','Post Updated');
        return response()->json([
            'success' => true,
            'message' => 'Thank you! Your responses have been saved.',], 200); 
    }
}

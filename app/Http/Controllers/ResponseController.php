<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\EventForms;
use App\Models\ClientResponse;
use Illuminate\Validation\ValidationException;

class ResponseController extends Controller
{
    public function questionsresponse(Request $request, string $id)
    {
        // Validate the incoming answers
        $validatedData = $request->validate([
            'answers' => 'required|array', // Ensure answers is an array
            'answers.*' => 'required|string|max:2000', // Each answer must be a string with a maximum length
        ]);

        // Find the event to ensure it exists
        $event = Events::find($id);

        if (!$event) {
            // If the event doesn't exist, return an error response
            return redirect()->route('events.index')->with('error', 'Event not found.');
        }

        // Iterate over the answers and save them
        foreach ($validatedData['answers'] as $questionId => $answer) {
            // Ensure the question exists
            $question = EventForms::find($questionId);

            if ($question) {
                // Save the answer to the ClientResponse table
                ClientResponse::create([
                    'answer' => $answer,
                    'events_id' => $id,
                    'event_form_id' => $questionId,
                ]);
            } else {
                // Optional: Add a log or notification if the question was not found
                // Log::warning("Question with ID $questionId not found.");
            }
        }

        // Return success response
        return redirect()->route('events.index')
        ->with('success', 'Thank you! Your responses have been saved.')
        ->with('event',$event);
    }
}

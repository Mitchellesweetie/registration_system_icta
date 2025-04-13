<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Events;
use App\Models\EventForms;
use Illuminate\Support\Facades\DB;




class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
    
        $event = Events::all();
        return view('pages.events', compact('event'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.events');
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
{
    if (!Auth::check()) {
        return response()->json([
            'success' => false,
            'message' => 'User not authenticated.',
        ], 401);
    }

    $this->validate($request, [
        'event_name' => 'required|string|max:200',
        'event_description' => 'required|string|max:2000',
        'questions' => 'nullable|array', 
        'questions.*' => 'string|max:500',
    ]);

    $userId = Auth::id();
    $event = new Events();
    $event->event_name = $request->input('event_name');
    $event->event_description = $request->input('event_description');
    $event->user_id = $userId;

    try {
        $event->save(); 

        if ($request->has('questions') && is_array($request->input('questions'))) {
            $questions = $request->input('questions');
            
            foreach ($questions as $question) {
                EventForms::create([
                    'questions' => $question,
                    'events_id' => $event->id,  
                    'user_id' => $userId,
                ]);
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Event and questions saved successfully.',
            'event' => $event,  
        ]);

    } catch (\Exception $e) {
        \Log::error('Error saving event or questions: ' . $e->getMessage());

        return response()->json([
            'success' => false,
            'message' => 'An error occurred while saving your event. Please try again.',
        ], 500);
    }
}


    /**
     * Display the specified resource.
     */
    public function show($id) {
        $event = DB::table('events')->where('id', $id) ->first();
            
        if (!$event) {
            return redirect()->route('events.index')->with('error', 'Event not found.');
        }
        
        $questions = DB::table('event_forms')->where('events_id', $id)->get();
    
        return view('pages.eventsedit', compact('event', 'questions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $event=Events::find($id);
        return redirect('/eventsedit')->with('success','Event Updated');
    }

    /**
     * Update the specified resource in storage.
     */
   
    
    public function update(Request $request, string $id)
{
    if (!Auth::check()) {
        return response()->json([
            'success' => false,
            'message' => 'User not authenticated.',
        ], 401);
    }

    $this->validate($request, [
        'event_name' => 'required|string|max:200',
        'event_description' => 'required|string|max:2000',
        'questions' => 'nullable|array', 
        'questions.*' => 'string|max:500',
    ]);

    $userId = Auth::id();
    
    $event = Events::findOrFail($id);

    $event->event_name = $request->input('event_name');
    $event->event_description = $request->input('event_description');
    $event->user_id = $userId;

    try {
        $event->save(); 
        
        EventForms::where('events_id', $event->id)->delete();

        if ($request->has('questions') && is_array($request->input('questions'))) {
            $questions = $request->input('questions');
            
            foreach ($questions as $question) {
                EventForms::create([
                    'questions' => $question,
                    'events_id' => $event->id,  
                    'user_id' => $userId,
                ]);
            }
        }

        return redirect()->route('events.index')->with('success', 'Event Updated Successfully');
    } catch (\Exception $e) {
        \Log::error('Error saving event or questions: ' . $e->getMessage());

        return response()->json([
            'success' => false,
            'message' => 'An error occurred while saving your event. Please try again.',
        ], 500);
    }
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $event=Events::find($id);
        EventForms::where('events_id', $event->id)->delete();

        $event->delete();
        return redirect('/events')->with('success','event deleted');
    }
}

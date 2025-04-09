<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Events;
use App\Models\EventForms;

class EventformController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.eventforms');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'questions' => 'required|string|max:2000',
        ]);
        $userId = Auth::id(); 
        $eventId=Event::id();
#
        // Create a new user
        $event = new EventForms;
        $event->questions = $request->input('questions');
        $event->events_id=$eventId;
        $event->user_id = $userId;
        $event->save();

        return response()->json([
            'success' => true,
            'message' => 'Questions saved successfully',
        ]);    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

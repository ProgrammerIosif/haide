<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $events = Event::with('organizer')->get();
        return view('events.index', [
            'events' => $events
        ]);
    }

    public function create() {
        return view('events.create');
    }

    public function show(Event $event) {
        return view('events.show', [
            'event' => $event
        ]);
    }

    public function store() {
        request()->validate([
            'name' => ['required','min:5'],
            'location' => ['required','min:5']
        ]);
    
        Event::create([
            'name' => request('name'),
            'location' => request('location'),
    
            // hardcoded at the moment
            'description' => 'created with the api',
            'organizer_id' => 1
        ]);
    
        return redirect('/events');
    }

    public function edit(Event $event) {
        return view('events.edit', [
            'event' => $event
        ]);
    }
    
    public function update(Event $event) {
        //authorize
        request()->validate([
            'name' => ['required','min:5'],
            'location' => ['required','min:5']
        ]);
    
        $event->update([
            'name' => request('name'),
            'location' => request('location'),
        ]);
    
        return redirect('/events/' . $event->id);
    }

    public function destroy(Event $event) {
        //authorize
        $event->delete();
        return redirect('/events');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
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

    public function store(Request $request, User $user) {
        $request->validate([
            'name' => ['required','min:5'],
            'location' => ['required','min:5']
        ]);
    
        Event::create([
            'name' => $request->name,
            'location' => $request->location,
            'organizer_id' => $user->id,
    
            // hardcoded at the moment
            'description' => 'created with the api',
        ]);
    
        return redirect('events');
    }

    public function edit(Event $event) {
        return view('events.edit', [
            'event' => $event
        ]);
    }

    public function update(Request $request, Event $event) {
        $request->validate([
            'name' => ['required','min:5'],
            'location' => ['required','min:5']
        ]);
        $event->update([
            'name' => $request->name,
            'location' => $request->location,
        ]);
    
        return redirect('events/' . $event->id);
    }

    public function destroy(Event $event) {
        $event->delete();
        return redirect('events');
    }
}

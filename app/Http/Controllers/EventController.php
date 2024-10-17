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

    public function store(Request $request) {
        $request->validate([
            'name' => ['required','string','max:64'],
            'location' => ['required','max:64'],
            'datetime' => ['required','date'],
            'description' => ['required','string','max:1000'],
            'image' => ['required','image','max:512'],
            'links' => ['nullable', 'array'], 
            'links.*' => ['required', 'url', 'max:255', 'distinct', 'regex:/^https:\/\/.+$/i']
        ]);

        $event = Event::create([
            'name' => $request->name,
            'location' => $request->location,
            'datetime' => $request->datetime,
            'description' => $request->description,
            'links' => json_encode($request->links),
            'organizer_id' => $request->user()->id
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $event->id . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/events'), $imageName);
            $event->image = 'img/events/' . $imageName;
            $event->save();
        }
    
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

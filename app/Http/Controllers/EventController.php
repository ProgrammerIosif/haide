<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $request->validate($this->validationRules());
        $event = Event::create($this->validatedFields($request));

        if($request->image) {
            $event->image = $this->storeImage($request, $event->id);
            $event->save();
        }
    
        return redirect('events/' . $event->id);
    }

    public function edit(Event $event) {
        return view('events.edit', [
            'event' => $event
        ]);
    }

    public function update(Request $request, Event $event) {
        $request->validate($this->validationRules());
        $event->update($this->validatedFields($request));

        if($request->image) {
            $event->image = $this->storeImage($request, $event->id);
            $event->save();
        }
        
        return redirect('events/' . $event->id);
    }

    public function destroy(Event $event) {
        File::delete(public_path($event->image));
        $event->delete();
        return redirect('events');
    }

    // Helper functions
    private function validationRules() {
        return [
            'name' => ['required','string','max:64'],
            'location' => ['required','max:64'],
            'datetime' => ['required','date'],
            'description' => ['required','string','max:1000'],
            'image' => ['image','max:512'],
            'links' => ['nullable', 'array'], 
            'links.*' => ['required', 'url', 'max:255', 'distinct', 'regex:/^https:\/\/.+$/i']
        ];
    }
    
    private function validatedFields(Request $request) {
        return [
            'name' => $request->name,
            'location' => $request->location,
            'datetime' => Carbon::parse($request->datetime)->format('d.m.Y H:i'),
            'description' => $request->description,
            'links' => json_encode($request->links),
            'organizer_id' => $request->user()->id
        ];
    }

    private function storeImage(Request $request, $name) {
        $image = $request->file('image');
        $imageName = $name . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/events'), $imageName);
        return 'img/events/' . $imageName;
    }
}

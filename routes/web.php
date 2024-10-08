<?php

use App\Models\Event;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/events', function () {
    $events = Event::with('organizer')->get();
    return view('events.index', [
        'events' => $events
    ]);
});

Route::get('/events/create', function () {
    return view('events.create');
});

Route::post('/events', function () {
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
});

Route::get('/events/{event}', function (Event $event) {
    return view('events.show', [
        'event' => $event
    ]);
});

Route::get('/events/{event}/edit', function (Event $event) {
    return view('events.edit', [
        'event' => $event
    ]);
});

Route::patch('/events/{event}', function (Event $event) {
    request()->validate([
        'name' => ['required','min:5'],
        'location' => ['required','min:5']
    ]);

    //authorize (On hold...)

    $event->update([
        'name' => request('name'),
        'location' => request('location'),
    ]);

    return redirect('/events/' . $event->id);
});

Route::delete('/events/{event}', function (Event $event) {
    //authorize
    $event->delete();
    return redirect('/events');
});
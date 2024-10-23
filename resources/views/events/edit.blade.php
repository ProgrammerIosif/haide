<x-layout title="Haide | Edit {{$event->name}}">
    <form method="POST" action="/events/{{ $event->id }}" enctype="multipart/form-data" class="section mx-auto grid md:grid-cols-2 md:gap-y-5 gap-x-20 mt-[6vh]">
        @csrf
        @method('PATCH')
        <h1 class="text-3xl md:text-4xl text-center font-semibold leading-7 mb-10 md:col-span-2">Edit {{$event->name}}</h2>
        <div>
            <x-form-field name="name" :value="$event->name" required>Name</x-form-field>
            <x-form-field name="location" :value="$event->location" required>Location</x-form-field>
            <x-form-field name="datetime" type="datetime-local" :value="Carbon\Carbon::parse($event->datetime)" required>Date & Time</x-form-field>
            <x-form-field type="file" name="image">Cover Image <small>(square images recommended)</small></x-form-field>
        </div>
        <div>
            <x-form-field type="textarea" name="description" :value="$event->description" required>Description</x-form-field>
            <x-links_input :values="json_decode($event->links)"/>
        </div>
            <x-anchor tag="button" colors="secondary" style="md:col-span-2 max-md:my-10">Update event</x-anchor>
</x-layout>
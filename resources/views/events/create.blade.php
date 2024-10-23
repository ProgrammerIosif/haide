<x-layout title="Haide | Create a new event">
    <form method="POST" action="/events" enctype="multipart/form-data" class="section mx-auto grid md:grid-cols-2 md:gap-y-5 gap-x-20 mt-[6vh]">
        @csrf
        <h1 class="text-3xl md:text-4xl text-center font-semibold leading-7 mb-10 md:col-span-2">Create a new event</h2>
        <div>
            <x-form-field name="name" :value="old('name')" required>Name</x-form-field>
            <x-form-field name="location" :value="old('location')" required>Location</x-form-field>
            <x-form-field name="datetime" type="datetime-local" :value="old('datetime')" required>Date & Time</x-form-field>
            <x-form-field type="file" name="image" required>Cover Image <small>(square images recommended)</small></x-form-field>
        </div>
        <div>
            <x-form-field type="textarea" name="description" :value="old('description')" required>Description</x-form-field>
            <x-links_input :values="old('links')"/>
        </div>
            <x-anchor tag="button" colors="secondary" style="md:col-span-2 max-md:my-10">Create new event</x-anchor>
    </form> 
</x-layout>
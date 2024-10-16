<x-layout title="Haide | Edit {{$event->name}}">
    <form method="POST" action="/events/{{ $event->id }}">
        @csrf
        @method('PATCH')
        <div class="space-y-6">
            <div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field name="name" :value="$event->name" required>Name</x-form-field>
                    <x-form-field name="location" :value="$event->location" required>Location</x-form-field>
                </div>
            </div>
            <x-anchor tag="button" colors="secondary" size="small">Update</x-anchor>
        </div>
    </form> 
</x-layout>
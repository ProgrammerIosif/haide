<x-layout>
    <form method="POST" action="/events">
        @csrf
        <div class="space-y-6">
            <div>
                <h2 class="text-base font-semibold leading-7">Create a New Event</h2>
                <p class="mt-1 text-sm leading-6">We just need a handful of details from you.</p>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field name="name" :value="old('name')" required>Name</x-form-field>
                    <x-form-field name="location" :value="old('location')" required>Location</x-form-field>
                </div>
            </div>
            <x-anchor tag="button" type="secondary" size="small">Create</x-anchor>
        </div>
    </form> 
</x-layout>
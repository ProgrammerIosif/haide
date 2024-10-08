<x-layout>
    <form method="POST" action="/events">
        @csrf
        <div class="space-y-6">
            <div>
                <h2 class="text-base font-semibold leading-7">Create a New Event</h2>
                <p class="mt-1 text-sm leading-6">We just need a handful of details from you.</p>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="name" class="block text-sm font-medium leading-6">Name</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset sm:max-w-md mb-5">
                                <input 
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    type="text"
                                    name="name"
                                    id="name"
                                    placeholder="name"
                                >
                            </div>
                            @error('name')
                                <p class="text-xs text-[#cc241d] font-bold -mt-4">{{ $message }}</p> 
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="location" class="block text-sm font-medium leading-6">Location</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md mb-5">
                                <input 
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    type="text"
                                    name="location"
                                    id="location"
                                    placeholder="location"
                                >
                            </div>
                            @error('location')
                                <p class="text-xs text-[#cc241d] font-bold -mt-4">{{ $message }}</p> 
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <x-anchor tag="button" type="secondary" size="small">Create</x-anchor>
        </div>
    </form> 
</x-layout>
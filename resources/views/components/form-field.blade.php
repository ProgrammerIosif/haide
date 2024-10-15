@props([
    'type' => 'text',
    'name',
    'value' => '',
    'required' => false
])

<div class="text-sm sm:text-base lg:text-xl">
    <label for={{ $name }} class="block font-medium">{{ $slot }}</label>
    <div class="mt-2">
        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-[#ebdbb2] focus-within:ring-2 focus-within:ring-inset focus-within:ring-[#98971a] mb-10">
            <input 
                class="block w-full border-0 bg-transparent py-2.5 px-2 lg:text-lg focus:ring-0 outline-none"
                type={{ $type }}
                name={{ $name }}
                id={{ $name }}
                value="{{ $value }}"
                {{ $required ? ' required' : ''}}
            >
        </div>
        @error($name)
            <p class="text-sm text-[#cc241d] font-bold -mt-8 mb-3">{{ $message }}</p> 
        @enderror
    </div>
</div>
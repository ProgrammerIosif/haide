@props([
    'type' => 'text',
    'name',
    'value' => '',
    'required' => false
])

<div class="sm:col-span-4">
    <label for={{ $name }} class="block text-sm font-medium leading-6">{{ $slot }}</label>
    <div class="mt-2">
        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-[#ebdbb2] focus-within:ring-2 focus-within:ring-inset focus-within:ring-[#98971a] sm:max-w-md mb-5">
            <input 
                class="block flex-1 border-0 bg-transparent py-1.5 pl-1 focus:ring-0 sm:text-sm sm:leading-6 outline-none"
                type={{ $type }}
                name={{ $name }}
                id={{ $name }}
                value="{{ $value }}"
                {{ $required ? ' required' : ''}}
            >
        </div>
        @error($name)
            <p class="text-xs text-[#cc241d] font-bold -mt-4">{{ $message }}</p> 
        @enderror
    </div>
</div>
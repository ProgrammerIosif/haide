@props([
    'type' => 'text',
    'name',
    'value',
    'required' => false
])

<div class="text-sm sm:text-base lg:text-xl">
    <label for={{ $name }} class="block font-medium">{{ $slot }}</label>
    @if ($type === 'textarea')
        <div class="mt-2 flex rounded-md shadow-sm ring-1 ring-inset ring-[#ebdbb2] focus-within:ring-2 focus-within:ring-inset focus-within:ring-[#98971a] mb-10">
            <textarea 
                class="block w-full border-0 bg-transparent py-2.5 px-2 lg:text-lg focus:ring-0 outline-none"
                rows="4"
                name={{ $name }}
                id={{ $name }}
                @if ($required) required @endif
            >{{ $value }}</textarea>
        </div>
    @else
        <div class="mt-2 flex rounded-md shadow-sm ring-1 ring-inset ring-[#ebdbb2] focus-within:ring-2 focus-within:ring-inset focus-within:ring-[#98971a] mb-10">
            <input 
                class="block w-full border-0 bg-transparent py-2.5 px-2 lg:text-lg focus:ring-0 outline-none"
                type={{ $type }}
                name={{ $name }}
                id={{ $name }}
                @if (isset($value)) value="{{ $value }}" @endif 
                @if ($required) required @endif
                @if ($type === 'file') accept=".jpg, .jpeg, .png, .webp" @endif 
            >
        </div>
    @endif
    @error($name)
        <p class="text-sm text-[#cc241d] font-bold -mt-8 mb-3">{{ $message }}</p> 
    @enderror
</div>
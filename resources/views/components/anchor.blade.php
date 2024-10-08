@props([
    'tag' => 'a',        // a / button, anchor or button
    'type' => 'primary', // default to 'primary'
    'outline' => false,  // default outline to false
    'size' => 'normal',  // default size to 'normal'
    'hover' => 'darken', // default hover style
    'style' => ''        // custom styles
])

@php
    $class = 
        'flex rounded-lg transition-all duration-500 font-semibold leading-6 hover:cursor-pointer ' .
        match($type) {
            'primary' => 'primary-colors ',
            'secondary' => 'secondary-colors ',
            'warning' => 'bg-[#cc241d] '
        } .
        ($outline ? 'border-2 ' : '') . // Outline class
        ($hover === 'darken' ? 'hover:brightness-75 ' : ($type === 'primary' ? 'hover:secondary-colors ' : 'hover:primary-colors ')) . // Hover behaviour
        match($size) { // Size class
            'small' => 'text-sm py-1 px-2 lg:text-md lg:py-1.5 lg:px-3',
            'large' => 'text-lg py-2 px-4 sm:text-2xl sm:py-3 sm:px-6 lg:text-3xl lg:py-4 lg:px-8',
            default => 'text-base py-2 px-4 sm:text-lg sm:py-3 sm:px-6 lg:text-xl lg:py-4 lg:px-8',
        } . $style // Optional inline styles
@endphp

@if ($tag === 'a')
    <a {{ $attributes->merge(['class' => $class]) }}>
        {{ $slot }}
    </a>
@elseif ($tag === 'button')
    <button {{ $attributes->merge(['class' => $class]) }}>
        {{ $slot }}
    </button>
@endif
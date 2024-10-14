<x-layout title="Haide | {{$event->name}}">
   <div class="flex flex-col items-start justify-between">
        <div class="flex items-center gap-x-4 text-xs">
            <p>{{$event->location}}</p>
        </div>
        <div class="group relative">
            <h3 class="mt-3 text-lg font-semibold">
            <a href="#">
                <span class="absolute inset-0"></span>
                {{ $event->id }}. {{ $event->name }}
            </a>
            </h3>
            <p class="mt-5">{{ $event->description }}</p>
        </div>
        <div class="relative my-8 flex items-center gap-x-4">
            {{ $event->organizer->name }}
        </div>
        @can('edit', $event)
            <div class="flex gap-5">
                <x-anchor type="secondary" size="small" href="/events/{{ $event->id }}/edit">Edit</x-anchor>
                <x-anchor form="delete" tag="button" type="warning" size="small">Delete</x-anchor>
            </div>
        @endcan
    </div>
    <form method="POST" action="/events/{{ $event->id }}" id="delete" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
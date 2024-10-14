<x-layout title="Haide | Search events">
    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-2 gap-x-8 gap-y-16">
        @foreach ($events as $event)
        <div class="flex max-w-xl flex-col items-start justify-between">
            <div class="flex items-center gap-x-4 text-xs">
                <p>{{$event->location}}</p>
            </div>
            <div class="group relative">
                <h3 class="mt-3 text-lg font-semibold">
                    <a href="/events/{{ $event->id }}">
                    <span class="absolute inset-0"></span>
                    {{ $event->id }}. {{ $event->name }}
                    </a>
                </h3>
                <p class="mt-5">{{ $event->description }}</p>
            </div>
            <div class="relative mt-8 flex items-center gap-x-4">
                {{ $event->organizer->name }}
            </div>
        </div>
        @endforeach
    </div>
</x-layout>

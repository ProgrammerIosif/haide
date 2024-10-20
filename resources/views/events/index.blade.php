<x-layout title="Haide | Search events">
    <div class="section mx-auto grid lg:grid-cols-2 gap-8">
        <h1 class="lg:col-span-2 my-4 text-center text-5xl">Events</h1>
        @foreach ($events as $event)
            <a href="/events/{{ $event->id }}">
                <div class="primary-colors shadow-lg shadow-black rounded-xl overflow-hidden grid md:grid-cols-2 md:min-h-72 ">
                    <div class="h-full overflow-hidden md:aspect-square">
                        <img class="md:h-full md:object-cover" src="{{ asset($event->image) }}" alt="">
                    </div>
                    <div class="h-full relative p-5 flex flex-col justify-center primary-colors bg-[#1d2021]">
                        <p class="text-[#458588] font-bold">{{ $event->location }}</p>
                        <p class="text-[#98971a]">{{ $event->datetime }}</p>
                        <h2 class="text-2xl font-bold mt-2 ">{{ $event->name }}</h3>
                        <p class="text-sm">{{ substr($event->description, 0, 80) }}...</p>
                        <p class="text-[#cc241d] font-bold mt-5">{{ '@' . $event->organizer->name }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</x-layout>

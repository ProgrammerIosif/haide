<x-layout title="Haide | {{$event->name}}">
    <div class=" h-screen top-0 blur-lg absolute w-full -z-10 bg-center bg-cover" 
        style="background-image: url('{{ asset($event->image) }}');">
    </div>
    <div class="section max-md:min-h-[85vh] md:h-[90vh] flex items-center">
        <div class="overflow-hidden shadow-xl shadow-black rounded-2xl grid md:grid-cols-5 md:min-h-72">
            <div class="md:h-full md:w-full md:col-span-3">
                <img class="h-full object-cover" src="{{ asset($event->image) }}" alt="">
            </div>
            <div class="p-8 flex flex-col justify-center bg-[#1d2021] md:col-span-2">
                <p class="text-[#458588] font-bold lg:text-2xl">{{ $event->location }}</p>
                <p class="text-[#98971a] lg:text-2xl">{{ $event->datetime }}</p>
                <h2 class="font-bold text-2xl lg:text-4xl mt-2 lg:my-4">{{ $event->name }}</h3>
                <p class="text-sm lg:text-lg">{{ $event->description }}</p>
                <p class="text-[#cc241d] font-bold lg:text-2xl mt-5">{{ '@' . $event->organizer->name }}</p>
                @can('edit', $event)
                    <div class="flex gap-5 mt-5">
                        <x-anchor colors="secondary" size="small" href="/events/{{ $event->id }}/edit">Edit</x-anchor>
                        <x-anchor form="delete" tag="button" colors="warning" size="small">Delete</x-anchor>
                    </div>
                @endcan
            </div>
        </div>
    </div>
    <form method="POST" action="/events/{{ $event->id }}" id="delete" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
    {{-- <div class="section max-h-[80vh] mt-[5vh] mb-10 primary-colors overflow-hidden shadow-lg shadow-black rounded-xl flex items-stretch md:min-h-72">
        <div class="overflow-hidden max-w-[60%]">
            <img class="md:h-full md:object-cover" src="{{ asset($event->image) }}" alt="">
        </div>
        <div class="p-5 flex flex-col justify-center bg-[#1d2021]">
            <p class="text-[#458588] font-bold">{{ $event->location }}</p>
            <p class="text-[#98971a]">{{ $event->datetime }}</p>
            <h2 class="text-2xl font-bold mt-2 ">{{ $event->name }}</h3>
            <p class="text-sm">{{ $event->description }}</p>
            <p class="text-[#cc241d] font-bold mt-5">{{ '@' . $event->organizer->name }}</p>
            @can('edit', $event)
                <div class="flex gap-5 mt-5">
                    <x-anchor colors="secondary" size="small" href="/events/{{ $event->id }}/edit">Edit</x-anchor>
                    <x-anchor form="delete" tag="button" colors="warning" size="small">Delete</x-anchor>
                </div>
            @endcan
        </div>
    </div> --}}
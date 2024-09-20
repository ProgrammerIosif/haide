<x-layout>

   <div class="flex max-w-xl flex-col items-start justify-between">
    <div class="flex items-center gap-x-4 text-xs">
      <p class="text-gray-600">{{$event->location}}</p>
    </div>
    <div class="group relative">
      <h3 class="mt-3 text-lg font-semibold">
        <a href="#">
          <span class="absolute inset-0"></span>
          {{ $event->id }}. {{ $event->name }}
        </a>
      </h3>
      <p class="mt-5 text-gray-600">{{ $event->description }}</p>
    </div>
    <div class="relative mt-8 flex items-center gap-x-4">
      {{ $event->organizer->name }}
    </div>
  </div>

</x-layout>
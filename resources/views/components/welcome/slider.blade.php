@php
    $items = [
        [
            'text' => 'Car Meetings',
            'image' => asset('img/slider/car-meet.webp'),
            'color' => "#b16286"
        ],
        [
            'text' => 'Concerts',
            'image' => asset('img/slider/concert.webp'),
            'color' => "#458588"
        ],
        [
            'text' => 'Parties',
            'image' => asset('img/slider/party.webp'),
            'color' => "#d79921"
        ],
        [
            'text' => 'Sports Events',
            'image' => asset('img/slider/sports-event.webp'),
            'color' => "#cc241d"
        ],
        [
            'text' => 'Expeditions',
            'image' => asset('img/slider/expedition.webp'),
            'color' => "#689b64"
        ],
    ]
@endphp

<div class="section grid gap-y-5 lg:grid-cols-2 max-sm:mt-16 sm:my-28">
    <div class="relative heading flex flex-col items-center justify-center font-medium mb-20">
        <div class="max-sm:hidden text-center whitespace-nowrap mr-16">
            <span>Visit</span>
            <x-glowing_logo colors='primary'></x-glowing_logo>
        </div>
        <div class="max-sm:hidden">and search for</div>
        <div class="sm:hidden">Search for</div>
        <div id="word-slider" class="relative text-center">
            @foreach($items as $key => $item)
                <div class="absolute -translate-x-1/2 transition-opacity whitespace-nowrap duration-500 leading-normal lg:leading-relaxed"  
                    style="opacity: {{ $key === 0 ? 1 : 0 }}; color: {{ $item['color']}}">
                    {{ $item['text'] }}
                </div>
            @endforeach
        </div>
    </div>
    <div id="image-slider" class="relative w-80 h-80 sm:w-[470px] sm:h-[470px] xl:w-[600px] xl:h-[600px] shadow-2xl shadow-black mx-auto">
        @foreach($items as $key => $item)
            <div class="absolute w-full h-full overflow-hidden transition-opacity duration-500 rounded-xl border-4"
                style="opacity: {{ $key === 0 ? 1 : 0 }}; border-color: {{ $item["color"]}}"
            >
                <img loading="lazy" src="{{ $item['image'] }}" 
                    alt="Slideshow Image {{ $key+1 }}">
            </div>
        @endforeach
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var words = document.querySelectorAll('#word-slider *');
        var images = document.querySelectorAll('#image-slider > *');
        var currentIndex = 0;
        var totalItems = words.length;

        function changeItem() {
            words[currentIndex].style.opacity = 0;
            images[currentIndex].style.opacity = 0;
            currentIndex = (currentIndex + 1) % totalItems;
            words[currentIndex].style.opacity = 1;
            images[currentIndex].style.opacity = 1;
        }

        setInterval(changeItem, 2500);
    });
</script>
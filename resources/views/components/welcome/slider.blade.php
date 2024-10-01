@php
    $items = [
        [
            'text' => 'Car Meetings',
            'image' => asset('img/slider/car-meet.jpg'),
            'color' => "#b16286"
        ],
        [
            'text' => 'Concerts',
            'image' => asset('img/slider/concert.jpg'),
            'color' => "#458588"
        ],
        [
            'text' => 'Parties',
            'image' => asset('img/slider/party.jpg'),
            'color' => "#d79921"
        ],
        [
            'text' => 'Sports Events',
            'image' => asset('img/slider/sports-event.jpg'),
            'color' => "#cc241d"
        ],
        [
            'text' => 'Expeditions',
            'image' => asset('img/slider/expedition.jpg'),
            'color' => "#689b64"
        ],
    ]
@endphp

<div class="section grid grid-cols-2 my-28">
    <div class="relative flex flex-col items-center justify-center font-medium text-6xl leading-relaxed mb-20">
        <div class="text-center whitespace-nowrap mr-16">
            <span>Visit</span>
            <x-glowing_logo colors='primary'></x-glowing_logo>
        </div>
        <div>and search for</div>
        <div id="word-slider" class="relative text-center">
            @foreach($items as $key => $item)
                <div class="absolute -translate-x-1/2 transition-opacity whitespace-nowrap duration-500"  
                    style="opacity: {{ $key === 0 ? 1 : 0 }}; color: {{ $item['color']}}">
                    {{ $item['text'] }}
                </div>
            @endforeach
        </div>
    </div>
    <div>
        <div id="image-slider" class="relative w-[600px] h-[600px]">
            @foreach($items as $key => $item)
                <div class="absolute w-full h-full overflow-hidden transition-opacity duration-500 rounded-xl border-4"
                    style="opacity: {{ $key === 0 ? 1 : 0 }}; border-color: {{ $item["color"]}}"
                >
                    <img src="{{ $item['image'] }}" 
                        alt="Slideshow Image {{ $key+1 }}">
                </div>
            @endforeach
        </div>
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
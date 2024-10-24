@php
    $reviews = [
        [
            'name' => 'Sarah Mitchell',
            'occupation' => 'Event Planner',
            'text' => "Haide has been a game-changer for my work! It's so easy to create, promote, and manage events all in one place. I love the sleek design and how seamlessly I can invite attendees. Plus, the ability to follow other organizers and communities keeps me updated with trends. Highly recommend to anyone managing events!"
        ],
        [
            'name' => 'David Rodriguez',
            'occupation' => 'Marketing Manager',
            'text' => "I've been using Haide to stay updated on industry conferences and networking events, and it's made a huge difference. The personalized recommendations are spot-on, and the interface is so user-friendly. Haide helps me stay connected to my professional community with ease."
        ],
        [
            'name' => 'Alex Harper',
            'occupation' => 'Freelance Photographer',
            'text' => "Haide is my go-to app for discovering local events, especially in the arts and creative scene. The ability to explore by location, follow organizers, and even post my own events is amazing. It has made it so easy to connect with like-minded people and grow my network. It's perfect for anyone who's passionate about attending or hosting events!"
        ]

    ];
@endphp
<div class="grid lg:grid-cols-3 gap-20 place-content-center">
    @foreach ($reviews as $review)
        <div class="flex flex-col justify-between max-w-[400px]">
            <p class="before:content-[&quot;“&quot;] after:content-[&quot;“&quot;] mb-3">
                {{ $review['text'] }}
            </p>
            <div class="flex">
                <img loading="lazy" src="{{ asset('img/reviews/' . $loop->index . '.webp') }}" alt="" class="rounded-full" width="64" height="64">
                <div class="flex flex-col justify-center ml-4">
                    <p class="text-[#98971a] font-semibold"> {{ $review['name'] }} </p>
                    <p class="text-[#458588]"> {{ $review['occupation'] }} </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
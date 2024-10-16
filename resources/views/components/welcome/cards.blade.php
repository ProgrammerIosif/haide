@php
    $items = [
        "Browse events by category, date, or location.",
        "Create and post your own events.",
        "Invite friends to join.",
        "Stay updated to the latest posted events",
        "Get to know people with whom you can share your passion.",
        "Explore trending events happening in your area.",
    ];
    $colors = [
        "bg-[#8ec07c]",
        "bg-[#458588]",
        "bg-[#689d6a]",
        "bg-[#b16286]",
        "bg-[#d79921]",
        "bg-[#cc241d]"
    ]
@endphp
<style>
    #cards li {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 1s ease, transform 1s ease;
    }
    #cards li.show {
        opacity: 1;
        transform: translateY(0);
    }
</style>
<ul id="cards" class="grid grid-cols-3 gap-12 relative mt-16">
    @foreach($items as $item)
        <li class="group relative overflow-hidden h-60 p-10 flex items-center justify-center primary-colors rounded-[25%_10%]">
            <div class="h-40 w-40 {{ $colors[$loop->index] }} absolute -top-20 -right-20 rounded-[50%] group-hover:scale-[6] transition-transform duration-500"></div>
            <p class="relative text-2xl text-center">{{ $item }}</p>
        </li>
    @endforeach
</ul>
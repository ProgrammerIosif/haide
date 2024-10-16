<x-layout title="Haide | Find here your next adventure">
    <section class="section">
        <div class="mt-20">
            <div class="heading relative z-10">
                <span>Welcome to </span>
                <x-glowing_logo colors='primary'></x-glowing_logo>
                <h1>Here you will find your next adventure.</h1>
            </div>
            <div class="flex items-center justify-center gap-12 mt-8">
                @guest
                    <x-anchor href="/register" colors="secondary" size="large">Sign up</x-anchor>
                @endguest
                @auth
                    <x-anchor href="/events/create" colors="secondary" size="large">Add New Event</x-anchor>
                @endauth
                <x-anchor href="/events" colors="primary" outline hover="inverse" size="large">Browse Events</x-anchor>
            </div>
        </div>
        <div id="image-container">
            <img loading="lazy"  class="mb-32 w-full h-auto" src="{{ asset('img/events.webp') }}" alt="">
        </div>
    </section>
    
    <div class="semicircle-divider-up"></div>

    <section class="secondary-colors mt-[-400px] relative pb-20">
        <div class="section grid grid-cols-5 pb-32 pt-10 gap-10">
            <div class="heading h-full col-span-2 relative flex flex-col items-center justify-center mb-20">
                <div class="whitespace-nowrap mr-16">
                    <span>Join </span>
                    <x-glowing_logo colors='secondary'></x-glowing_logo>
                </div>
                <div class="mb-4">from anywhere</div>
                @guest
                    <x-anchor href="/sign-up" colors="secondary" outline hover="inverse" size="large">Join Now</x-anchor>
                @endguest
            </div>
            <div class="col-span-3">
                <img loading="lazy" src="{{ asset('img/devices.webp') }}" alt="">
            </div>
        </div>
    </section>
    <section class="secondary-colors relative pb-32">
        <div class="section">
            <div class="heading">
                <span>Do whatever you want with </span>
                <x-glowing_logo colors='secondary'></x-glowing_logo>
            </div>
            <x-welcome.cards></x-welcome.cards>
        </div>
    </section>
    
    <div class="semicircle-divider-down mt-[-520px]"></div>

    <section class="primary-colors">
        <x-welcome.slider></x-welcome.slider>
    </section>

    <section class="primary-colors">
        <div class="section py-20">
            <div class="heading mb-20">
                <span>People love  </span>
                <x-glowing_logo colors='primary'></x-glowing_logo>
            </div>
            <x-welcome.reviews></x-welcome.reviews>
        </div>
    </section>
</x-layout>
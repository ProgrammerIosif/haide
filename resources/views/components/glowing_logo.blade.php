<div class="glowing-logo inline-block relative max-w-xs w-full ml-6 p-0.5">
    <div class="rounded-lg {{ $colors === 'primary' ? 'primary-colors' : 'secondary-colors'}}">
        <img class="inline h-24 -mr-4" 
            src="{{ $colors === 'primary' ? asset('img/logo.png') : asset('img/logo-dark.png')}}" 
            alt="">
        Haide
    </div>
</div>
<style>
    .glowing-logo::before,
    .glowing-logo::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background: linear-gradient(
            45deg,
            #98971a,
            #d79921,
            #458588,
            #b16286,
            #cc241d
        );
        background-size: 400%;
        animation: glow 20s linear infinite;
        border-radius: 10px;
    }

    .glowing-logo::after {
        filter: blur(25px);
        transform: translate3d(0, 0, 0);
    }

    .glowing-logo * {
        position: relative;
        z-index: 2;
    }
    
    @keyframes glow {
        0% {
            background-position: 0 0;
        }
        50% {
            background-position: 100% 0;
        }
        100% {
            background-position: 0 0;
        }
    }

</style>
@props(['size'])
<div {{ $attributes }}>
    @guest
        <x-anchor href="/events" colors="primary" hover="inverse" :size="$size">Events</x-anchor>
        <x-anchor href="/login" colors="primary" hover="inverse" :size="$size">Log in</x-anchor>
        <x-anchor href="/register" colors="secondary" :size="$size">Sign up</x-anchor>
    @endguest
    @auth
        <x-anchor href="/events" colors="primary" hover="inverse" :size="$size">Events</x-anchor>
        <x-anchor href="/events/create" colors="primary" hover="inverse" :size="$size">Create</x-anchor>
        <form method="POST" action="/logout">
            @csrf
            <x-anchor tag="button" colors="secondary" :size="$size">Log out</x-anchor>
        </form>
    @endauth
</div>
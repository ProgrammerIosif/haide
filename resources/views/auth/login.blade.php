<x-layout title="Haide | Log in">
    @guest
        <form method="POST" action="/login" class="max-w-96 mx-auto flex flex-col mt-[calc(100px+8vh)]">
            @csrf
            <x-form-field type="email" name="email" required>Email</x-form-field>
            <x-form-field type="password" name="password" required>Password</x-form-field>
            <br>
            <x-anchor tag="button" colors="secondary">Log in</x-anchor>
        </form> 
    @endguest
    @auth
        <h1 class="text-center text-5xl mt-[30vh]">You are already logged in</h1>
    @endauth
</x-layout>
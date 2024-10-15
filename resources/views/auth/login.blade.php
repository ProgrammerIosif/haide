<x-layout title="Haide | Log in">
    <form method="POST" action="/login" class="max-w-96 mx-auto flex flex-col mt-[calc(100px+8vh)]">
        @csrf
        <x-form-field type="email" name="email" required>Email</x-form-field>
        <x-form-field type="password" name="password" required>Password</x-form-field>
        <br>
        <x-anchor tag="button" type="secondary">Log in</x-anchor>
    </form> 
</x-layout>
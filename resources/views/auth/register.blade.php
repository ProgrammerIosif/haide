<x-layout title="Haide | Register">
    <form method="POST" action="/register" class="max-w-96 mx-auto flex flex-col mt-[calc(8vh)]">
        @csrf
        <x-form-field name="name" :value="old('name')" required>Name</x-form-field>
        <x-form-field type="email" name="email" :value="old('email')" required>Email</x-form-field>
        <x-form-field type="password" name="password" required>Password</x-form-field>
        <x-form-field type="password" name="password_confirmation" required>Confirm password</x-form-field>
        <br>
        <x-anchor tag="button" type="secondary">Register</x-anchor>
    </form> 
</x-layout>
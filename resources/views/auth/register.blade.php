<x-layout>
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-6">
            <div>
                <p class="mt-1 text-sm leading-6">We just need a handful of details from you.</p>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field name="name" :value="old('name')" required>Name</x-form-field>
                    <x-form-field type="email" name="email" :value="old('email')" required>Email</x-form-field>
                    <x-form-field type="password" name="password" required>Password</x-form-field>
                    <x-form-field type="password" name="password_confirmation" required>Confirm password</x-form-field>
                </div>
            </div>
            <x-anchor tag="button" type="secondary" size="small">Register</x-anchor>
        </div>
    </form> 
</x-layout>
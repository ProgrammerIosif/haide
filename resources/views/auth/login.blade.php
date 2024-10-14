<x-layout title="Haide | Log in">
    <form method="POST" action="/login">
        @csrf
        <div class="space-y-6">
            <div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field type="email" name="email" required>Email</x-form-field>
                    <x-form-field type="password" name="password" required>Password</x-form-field>
                </div>
            </div>
            <x-anchor tag="button" type="secondary" size="small">Log in</x-anchor>
        </div>
    </form> 
</x-layout>
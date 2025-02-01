<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-form method="POST" action="/register" enctype="multipart/form-data">

        <x-input label="Your Name" name="name"></x-input>
        <x-input label="Email" name="email" type="email"></x-input>
        <x-input label="password" name="password" type="password"></x-input>
        <x-input label="password confirmation" name="password confirmation" type="password"></x-input>
        <x-divider></x-divider>

        <x-input label="Employer Name" name="employer"></x-input>
        <x-input label="Employer Logo" name="logo" type="file"></x-input>
        <x-button>Create Account</x-button>

    </x-form>

</x-layout>
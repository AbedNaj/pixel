<x-layout>
    <x-page-heading>Login</x-page-heading>

    <x-form method="POST" action="/login" enctype="multipart/form-data">


        <x-input label="Email" name="email" type="email"></x-input>
        <x-input label="password" name="password" type="password"></x-input>



        <x-button>Create Account</x-button>

    </x-form>

</x-layout>
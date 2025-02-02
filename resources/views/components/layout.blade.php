<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>

<body class="bg-black text-white">
    <div class="px-10">

        <nav class="flex justify-between items-center py-10 border-b border-white/10 ">
            <div><a href="/"><img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="icon"></a></div>
            <div class="space-x-6 font-bold">
                <a href="">Jobs</a>
                <a href="">Carrers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
            @auth
            <div><a href="/jobs/create">Post A Job</a>
                <form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')
                    <button>logout</button>
                </form>
            </div>
            @endauth

            @guest
            <div>
                <a href="/register">Sign Up</a>
                <a href="/login">Log In</a>
            </div>
            @endguest
        </nav>

        <main>
            <div class="mt-10 max-w-[986px] mx-auto">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>
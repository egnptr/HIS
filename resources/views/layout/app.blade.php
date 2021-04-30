<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('title')
</head>
<body class="bg-keppel-100">
        <nav class="flex flex-wrap items-center justify-between p-4 mb-6 bg-keppel-500">
            <div class="flex md:hidden">
                <button id="hamburger">
                  <img class="toggle block" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png" width="40" height="40" />
                  <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png" width="40" height="40" />
                </button>
            </div>

            <div class="toggle hidden md:flex w-full md:w-auto text-right text-bold mt-5 md:mt-0 border-t-2 border-keppel-900 md:border-none">
                <a href="/" class="toggle invisible md:visible">
                    <img src="{{ url('/apicss/assets/images/coderdocs-logo.svg') }}" alt="LOGO" width="50" height="50" />
                </a>
                <a href="/" class="block md:inline-block text-white hover:text-gray-500	 px-3 py-3 border-b-2 border-keppel-900 md:border-none">Home</a>
                @canany(['admin', 'doctor'])
                <a href="{{ route('schedule') }}" class="block md:inline-block text-white hover:text-gray-500 px-3 py-3 border-b-2 border-keppel-900 md:border-none">Schedule</a>
                @endcanany
                <a href="{{ route('dashboard') }}" class="block md:inline-block text-white hover:text-gray-500 px-3 py-3 border-b-2 border-keppel-900 md:border-none">Dashboard</a>
                <a href="{{ route('facility') }}" class="block md:inline-block text-white hover:text-gray-500 px-3 py-3 border-b-2 border-keppel-900 md:border-none">Facility</a>
                <a href="/api" class="block md:inline-block text-white hover:text-gray-500 px-3 py-3 border-b-2 border-keppel-900 md:border-none">Documentation</a>
            </div>

            <div class="toggle hidden md:flex w-full md:w-auto text-right text-bold mt-5 md:mt-0 md:border-none">
                @auth
                    <a href="" class="block md:inline-block text-white hover:text-gray-500 px-5 py-3">{{ auth()->user()->name }}</a>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="block md:inline-block px-5 py-3 bg-keppel-600 hover:bg-keppel-700 text-white md:rounded-xl">Logout</button>
                    </form>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="block md:inline-block text-white hover:text-gray-500 px-5 py-3">Login</a>
                    <a href="{{ route('register') }}" class="block md:inline-block px-5 py-3 bg-keppel-600 hover:bg-keppel-700 text-white md:rounded-xl">Register</a>
                @endguest
            </div>
        </nav>
    @yield('content')
</body>

<script>
    document.getElementById("hamburger").onclick = function toggleMenu() {
        const navToggle = document.getElementsByClassName("toggle");
        for (let i = 0; i < navToggle.length; i++) {
            navToggle.item(i).classList.toggle("hidden");
        }
    };
</script>

</html>

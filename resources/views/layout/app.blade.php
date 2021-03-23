<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>HIS Project</title>
</head>
<body class="bg-keppel-100">
        <nav class="p-6 bg-keppel-500 flex justify-between mb-6">
            <ul class="flex items-center">
                <li class="nav-item">
                    <a href="/" class="p-3 text-white">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="p-3 text-white">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('facility') }}" class="p-3 text-white">Facility</a>
                </li>
            </ul>

            <ul class="flex items-center">
                @auth
                    <li>
                        <a href="" class="p-3 text-white">{{ auth()->user()->name }}</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                            @csrf
                            <button type="submit" class="rounded-full py-2 px-4 text-white bg-keppel-600 hover:bg-keppel-700 focus:outline-none">Logout</button>
                        </form>
                    </li>
                @endauth

                @guest
                    <li>
                        <a href="{{ route('login') }}" class="p-3 text-white">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="rounded-full py-2 px-4 text-white bg-keppel-600 hover:bg-keppel-700 focus:outline-none">Register</a>
                    </li>
                @endguest
            </ul>
        </nav>
    @yield('content')
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>HIS Project</title>
</head>
<body class="bg-gray-200">
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <a href="/" class="p-3">Home</a>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
                </li>
                @auth
                    <li>
                        <a href="{{ route('doctor') }}" class="p-3">Doctors</a>
                    </li>
                    <li>
                        <a href="{{ route('patient') }}" class="p-3">Patients</a>
                    </li>
                    <li>
                        <a href="{{ route('room') }}" class="p-3">Rooms</a>
                    </li>
                @endauth
            </ul>

            <ul class="flex items-center">
                @auth
                    <li>
                        <a href="" class="p-3">{{ auth()->user()->name }}</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                            @csrf
                            <button type="submit" class="rounded-full py-2 px-4 text-gray-100 bg-gray-600 hover:bg-gray-700 focus:outline-none">Logout</button>
                        </form>
                    </li>
                @endauth

                @guest
                    <li>
                        <a href="{{ route('login') }}" class="p-3">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="rounded-full py-2 px-4 text-gray-100 bg-gray-600 hover:bg-gray-700 focus:outline-none">Register</a>
                    </li>
                @endguest
            </ul>
        </nav>
    @yield('content')
</body>
</html>
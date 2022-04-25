<!DOCTYPE html>
<html>

    <head>
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Laravel Auth</title>
    </head>

    <body class="bg-gray-100">
        <nav class="p-6 bg-white flex justify-between">
            <ul class="flex items-center">
                <li>
                    <a href="/" class="p-3">Home</a>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
                </li>
            </ul>
            <ul class="flex items-center">
                <li>
                    <a href="" class="p-3">Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="p-3">Register</a>
                </li>
                <li>
                    <a href="" class="p-3">Name Here</a>
                </li>
                <li>
                    <a href="" class="p-3">Logout</a>
                </li>
            </ul>
        </nav>
        <div class="container mx-auto mt-6 px-6">
            @yield('content')
        </div>
    </body>

</html>
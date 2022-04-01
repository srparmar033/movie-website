<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie App</title>

    <link rel="stylesheet" href="/css/main.css">
    <livewire:styles>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    {{-- fav icon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/favicon/site.webmanifest') }}">
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{ route('movies.index') }}">
                <img class="w-10 mr-3 md:ml-8 mt-3 md:mt-0 h-full items-center demo" src="{{ asset('/images/srp.png') }}" alt="">
                    </a>
                </li>
                <li class="md:ml-8 mt-3 md:mt-0">
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-300 hover:text-orange-500">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{ route('tv.index') }}" class="hover:text-gray-300 hover:text-orange-500">TV Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{ route('actors.index') }}" class="hover:text-gray-300 hover:text-orange-500">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <livewire:search-dropdown>
            <div class="flex ml-2">
                @if (Auth::check() )
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
    
                @else
                <div class="">
                    <a href="{{ ('login') }}">
                    <button class="text-black font-semibold bg-orange-500 hover:bg-orange-600   w-24  h-full border rounded border-orange-500 hover:border-orange-600 uppercase mr-3">Login</button></a>
                    <a href="{{ ('register') }}">
                    <button class="text-black font-semibold bg-orange-500 hover:bg-orange-600  w-24  border rounded border-orange-500 hover:border-orange-600 uppercase">Register</button></a>
                </div>
                @endif
                
            </div>
            </div>

        </div>
    </nav>
    @yield('content')
    <footer class="border border-t border-gray-800">
        <div class="container mx-auto text-sm px-4 py-6">
            created : <a href="" class="underline hover:text-gray-300">SRP</a>
        </div>
    </footer>
    <livewire:scripts>
    @yield('scripts')
</body>
</html>

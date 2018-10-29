<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-grey-lightest font-nunito">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-laravel px-5">
            <div class="container max-w-3xl p-0 mx-auto">
                <a class="inline-block mr-4 text-xl no-underline py-1 whitespace-no-wrap"
                    href="{{ url('/') }}"
                >
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="flex pl-0 mb-0 list-reset ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="px-0 mr-6">
                                <a class="text-blue hover:text-blue-darker no-underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="px-0 mr-6">
                                @if (Route::has('register'))
                                    <a class="text-blue hover:text-blue-darker no-underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="mr-6 px-0">
                                <div>
                                    <a class="text-blue hover:text-blue-darker no-underline" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 px-5">
            @yield('content')
        </main>
    </div>
</body>
</html>

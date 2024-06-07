<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authen</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <style>
        body {
            padding: 0!important;
            margin: 0!important;
        }
    </style>
</head>
<body>
    <div class="header-container bg-[#be1e2d]">
        <nav class="border-gray-200 dark:bg-gray-900">
            <div class="container mx-auto p-4 max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Media Market</span>
                </a>
                <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        @guest()
                            <img class="w-8 h-8 rounded-full" src="https://tse4.mm.bing.net/th?id=OIP.GKRHL0liZHDKBSIi_TW7ZAHaHa&pid=Api&P=0&h=220" alt="user photo">
                        @else
                            <img class="w-8 h-8 rounded-full" src="{{ Auth::user()->avatar }}" alt="user photo">
                        @endguest
                    </button>
                    <!-- Dropdown menu -->
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                        @guest()
                            <ul class="py-2" aria-labelledby="user-menu-button">
                                @if (Route::has('admin.login'))
                                    <li>
                                        <a href="{{ route('admin.login.form') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('admin.register'))
                                        <li>
                                            <a href="{{ route('admin.register.form') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">{{ __('Register') }}</a>
                                        </li>
                                @endif
                            </ul>
                        @else
                            <div class="px-4 py-3">
                                <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                                <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                            </div>
                            <div class="py-2" aria-labelledby="user-menu-button">
                                <div>
                                    <a href="{{ route('admin.logout') }}"
                                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Sign out') }}</a>
                                    <form id="logout-form" action="{{ route('admin.auth.logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest
                    </div>
                </div>

            </div>
        </nav>

    </div>
    <div class="content-container">
        @yield('content')
    </div>
</body>
</html>

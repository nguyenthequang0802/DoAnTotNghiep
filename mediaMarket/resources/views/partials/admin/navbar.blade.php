<nav class="fixed top-0 z-50 w-full bg-[#be1e2d] border-b border-gray-200">
    <div class="container mx-auto py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                    </svg>
                </button>
                <a href="https://flowbite.com" class="flex ms-2 md:me-24">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
                    <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-white">Media Market</span>
                </a>
            </div>
            <div class="flex items-center justify-center max-md:hidden">
                <form class="min-w-[35rem] mx-auto">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required />
                        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ms-3">
                    <div class="max-md:mr-2.5">
                        <button type="button" class="flex text-md bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <span class="sr-only">Open user menu</span>
                            @guest()
                                <i class="fa-regular fa-user"></i>
                                {{--                                    <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">--}}
                            @else
                                <img class="w-8 h-8 rounded-full" src="https://tse4.mm.bing.net/th?id=OIP.JBpgUJhTt8cI2V05-Uf53AHaG1&pid=Api&P=0&h=220" alt="user photo">
                            @endguest
                        </button>
                    </div>
                    <div class="px-4 py-3 max-md:hidden" role="none">
                        @guest()
                            <p class="text-sm text-white dark:text-white" role="none">
                                User Name
                            </p>
                            <p class="text-sm font-medium text-white truncate" role="none">
                                user@gmail.com
                            </p>
                        @else
                            <p class="text-sm text-white" role="none">
                                {{ Auth::user()->name }}
                            </p>
                            <p class="text-sm font-medium text-white truncate" role="none">
                                {{ Auth::user()->email }}
                            </p>
                        @endguest

                    </div>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                        @guest()
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    Chưa đăng nhập tài khoản
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                @if (Route::has('admin.login'))
                                    <li>
                                        <a href="{{ route('admin.login.form') }}" class="block px-4 py-2 text-md text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                            <i class="fa-solid fa-right-to-bracket mr-1.5"></i>
                                            Đăng nhập
                                        </a>
                                    </li>
                                @endif

                                @if (Route::has('admin.register'))
                                    <li>
                                        <a href="{{ route('admin.register.form') }}" class="block px-4 py-2 text-md text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                            <i class="fa-solid fa-registered mr-1.5"></i>
                                            Đăng ký
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        @else
                            <div class="px-4 py-3" role="none">
                                <p class="text-md text-gray-900 dark:text-white" role="none">
                                    <i class="fa-regular fa-address-card mr-1.5"></i>
                                    Hồ sơ cá nhân
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-md text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                        <i class="fa-solid fa-chart-pie mr-1.5"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-md text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                        <i class="fa-solid fa-gear mr-1.5"></i>
                                        Settings
                                    </a>
                                </li>
                                <li>
                                    <a class="block px-4 py-2 text-md text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa-solid fa-right-from-bracket mr-1.5"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

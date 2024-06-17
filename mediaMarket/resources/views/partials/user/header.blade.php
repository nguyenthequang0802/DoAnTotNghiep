<header class="block relative" id="section-header">
    <div id="header-top" class="header-top py-1 bg-[#d70018] hidden lg:block">
        <div class="container mx-auto px-[15px]">
            <div class="flex header-top-container flex justify-between">
                <ul class="header-top-left flex">
                    <li class="ps-2 text-white flex items-center pr-[15px] relative item-top">
                        <span class="flex items-center me-1.5"><i class="fa-solid fa-phone"></i></span>
                        <span>1900 323 322</span>
                    </li>
                    <li class="ps-2 text-white flex items-center pl-[15px] relative">
                        <span class="flex items-center me-1.5"><i class="fa-regular fa-envelope"></i></span>
                        <span>info@gmail.com</span>
                    </li>
                </ul>
                <ul class="header-top-right flex">
                    <li class="ps-2 text-white flex items-center pr-[15px] relative item-top">
                        <a href="">
                            <span class="flex items-center me-1.5"><i class="fa-solid fa-location-dot"></i></span>
                        </a>
                    </li>
                    <li class="pl-[15px] pr-[15px] text-white flex items-center relative item-top">
                        <a href="">
                            <span class="flex items-center me-1.5"><i class="fa-regular fa-user"></i></span>
                        </a>
                    </li>
                    <li class="ps-2 text-white flex items-center pl-[15px] relative">
                        <a href="">
                            <span class="flex items-center me-1.5"><i class="fa-solid fa-globe"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="header-bottom" class="header-bottom w-full bg-[#be1e2d] py-[10px] md:py-[20px] lg:py-0 z-50" style="box-shadow: 0 0 8px #c9c9c9bf">
        <div class="container mx-auto px-[5px] md:px-[10px] lg:px-[15px]">
            <div class="hidden lg:block">
                <div class="header-bottom-container min-h-20 grid grid-cols-5">
                    <div class="col-span-1 flex items-center pr-4">
                        <div class="logo-container flex">
                            <div class="logo">
                                <a href="{{ route('user.index') }}" class="theme-logo flex items-center space-x-2 rtl:space-x-reverse cursor-pointer">
                                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                                    <h1 class="lg:text-3xl text-white font-bold">Media Market</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-menu h-full px-4 col-span-3 flex items-center px-4">
                        <div id="mega-menu-icons" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
                            <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                                @foreach($global_menus as $menu)
                                    @if(count($menu->subcategory) == 0)
                                        <li>
                                            <a href="{{ route('user.store', $menu->slug) }}" class="py-2 px-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-blue-500 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">
                                                <div class="w-full flex justify-center items-center">
                                                    <img height="30" width="30" src="{{ asset($menu->icon_path) }}">
                                                </div>
                                                <p class="text-xs">{{ $menu->name }}</p>
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('user.store', $menu->slug) }}">
                                                <button data-popover-target="popover-bottom-{{ $menu->id }}" data-popover-placement="bottom" type="button" class="w-full py-2 px-3 font-medium text-white border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                                                    <div class="w-full flex justify-center items-center">
                                                        <img height="30" width="30" src="{{ asset($menu->icon_path) }}">
                                                    </div>
                                                    <p class="text-xs">{{ $menu->name }}</p>
                                                </button>
                                            </a>

                                            <div data-popover id="popover-bottom-{{ $menu->id }}" role="tooltip" class="absolute z-10 grid inline-block invisible w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700">
                                                @foreach($menu->subCategory as $sub_menu)
                                                    <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                                        <a href="{{ route('user.store', $sub_menu->slug) }}" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                            <span class="sr-only">{{ $sub_menu->name }}</span>
                                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                                                <path d="M15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783ZM6 2h6a1 1 0 1 1 0 2H6a1 1 0 0 1 0-2Zm7 5H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Z"/>
                                                                <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"/>
                                                            </svg>
                                                            <h4>{{ $sub_menu->name }}</h4>
                                                        </a>

                                                    </div>
                                                @endforeach
{{--                                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">--}}
{{--                                                    <ul class="space-y-4" aria-labelledby="mega-menu-icons-dropdown-button">--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">--}}
{{--                                                                <span class="sr-only">About us</span>--}}
{{--                                                                <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>--}}
{{--                                                                </svg>--}}
{{--                                                                About Us--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">--}}
{{--                                                                <span class="sr-only">Library</span>--}}
{{--                                                                <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                                                    <path d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z"/>--}}
{{--                                                                    <path d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z"/>--}}
{{--                                                                    <path d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z"/>--}}
{{--                                                                </svg>--}}
{{--                                                                Library--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">--}}
{{--                                                                <span class="sr-only">Resources</span>--}}
{{--                                                                <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">--}}
{{--                                                                    <path d="M15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783ZM6 2h6a1 1 0 1 1 0 2H6a1 1 0 0 1 0-2Zm7 5H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Z"/>--}}
{{--                                                                    <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"/>--}}
{{--                                                                </svg>--}}
{{--                                                                Resources--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">--}}
{{--                                                                <span class="sr-only">Pro Version</span>--}}
{{--                                                                <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                                                    <path d="m7.164 3.805-4.475.38L.327 6.546a1.114 1.114 0 0 0 .63 1.89l3.2.375 3.007-5.006ZM11.092 15.9l.472 3.14a1.114 1.114 0 0 0 1.89.63l2.36-2.362.38-4.475-5.102 3.067Zm8.617-14.283A1.613 1.613 0 0 0 18.383.291c-1.913-.33-5.811-.736-7.556 1.01-1.98 1.98-6.172 9.491-7.477 11.869a1.1 1.1 0 0 0 .193 1.316l.986.985.985.986a1.1 1.1 0 0 0 1.316.193c2.378-1.3 9.889-5.5 11.869-7.477 1.746-1.745 1.34-5.643 1.01-7.556Zm-3.873 6.268a2.63 2.63 0 1 1-3.72-3.72 2.63 2.63 0 0 1 3.72 3.72Z"/>--}}
{{--                                                                </svg>--}}
{{--                                                                Pro Version--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">--}}
{{--                                                    <ul class="space-y-4">--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">--}}
{{--                                                                <span class="sr-only">Blog</span>--}}
{{--                                                                <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                                                    <path d="M19 4h-1a1 1 0 1 0 0 2v11a1 1 0 0 1-2 0V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V5a1 1 0 0 0-1-1ZM3 4a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4Zm9 13H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Z"/>--}}
{{--                                                                    <path d="M6 5H5v1h1V5Z"/>--}}
{{--                                                                </svg>--}}
{{--                                                                Blog--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">--}}
{{--                                                                <span class="sr-only">Newsletter</span>--}}
{{--                                                                <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                                                    <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>--}}
{{--                                                                </svg>--}}
{{--                                                                Newsletter--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">--}}
{{--                                                                <span class="sr-only">Playground</span>--}}
{{--                                                                <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">--}}
{{--                                                                    <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10ZM17 13h-2v-2a1 1 0 0 0-2 0v2h-2a1 1 0 0 0 0 2h2v2a1 1 0 0 0 2 0v-2h2a1 1 0 0 0 0-2Z"/>--}}
{{--                                                                </svg>--}}
{{--                                                                Playground--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">--}}
{{--                                                                <span class="sr-only">License</span>--}}
{{--                                                                <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">--}}
{{--                                                                    <path d="M13.383.076a1 1 0 0 0-1.09.217L11 1.586 9.707.293a1 1 0 0 0-1.414 0L7 1.586 5.707.293a1 1 0 0 0-1.414 0L3 1.586 1.707.293A1 1 0 0 0 0 1v18a1 1 0 0 0 1.707.707L3 18.414l1.293 1.293a1 1 0 0 0 1.414 0L7 18.414l1.293 1.293a1 1 0 0 0 1.414 0L11 18.414l1.293 1.293A1 1 0 0 0 14 19V1a1 1 0 0 0-.617-.924ZM10 15H4a1 1 0 1 1 0-2h6a1 1 0 0 1 0 2Zm0-4H4a1 1 0 1 1 0-2h6a1 1 0 1 1 0 2Zm0-4H4a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z"/>--}}
{{--                                                                </svg>--}}
{{--                                                                License--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <div class="p-4 text-gray-900 dark:text-white">--}}
{{--                                                    <ul class="space-y-4">--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">--}}
{{--                                                                <span class="sr-only">Contact Us</span>--}}
{{--                                                                <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">--}}
{{--                                                                    <path d="M12 0H2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM7.5 17.5h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2ZM12 13H2V4h10v9Z"/>--}}
{{--                                                                </svg>--}}
{{--                                                                Contact Us--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">--}}
{{--                                                                <span class="sr-only">Support Center</span>--}}
{{--                                                                <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 21">--}}
{{--                                                                    <path d="m5.4 2.736 3.429 3.429A5.046 5.046 0 0 1 10.134 6c.356.01.71.06 1.056.147l3.41-3.412c.136-.133.287-.248.45-.344A9.889 9.889 0 0 0 10.269 1c-1.87-.041-3.713.44-5.322 1.392a2.3 2.3 0 0 1 .454.344Zm11.45 1.54-.126-.127a.5.5 0 0 0-.706 0l-2.932 2.932c.029.023.049.054.078.077.236.194.454.41.65.645.034.038.078.067.11.107l2.927-2.927a.5.5 0 0 0 0-.707Zm-2.931 9.81c-.024.03-.057.052-.081.082a4.963 4.963 0 0 1-.633.639c-.041.036-.072.083-.115.117l2.927 2.927a.5.5 0 0 0 .707 0l.127-.127a.5.5 0 0 0 0-.707l-2.932-2.931Zm-1.442-4.763a3.036 3.036 0 0 0-1.383-1.1l-.012-.007a2.955 2.955 0 0 0-1-.213H10a2.964 2.964 0 0 0-2.122.893c-.285.29-.509.634-.657 1.013l-.01.016a2.96 2.96 0 0 0-.21 1 2.99 2.99 0 0 0 .489 1.716c.009.014.022.026.032.04a3.04 3.04 0 0 0 1.384 1.1l.012.007c.318.129.657.2 1 .213.392.015.784-.05 1.15-.192.012-.005.02-.013.033-.018a3.011 3.011 0 0 0 1.676-1.7v-.007a2.89 2.89 0 0 0 0-2.207 2.868 2.868 0 0 0-.27-.515c-.007-.012-.02-.025-.03-.039Zm6.137-3.373a2.53 2.53 0 0 1-.35.447L14.84 9.823c.112.428.166.869.16 1.311-.01.356-.06.709-.147 1.054l3.413 3.412c.132.134.249.283.347.444A9.88 9.88 0 0 0 20 11.269a9.912 9.912 0 0 0-1.386-5.319ZM14.6 19.264l-3.421-3.421c-.385.1-.781.152-1.18.157h-.134c-.356-.01-.71-.06-1.056-.147l-3.41 3.412a2.503 2.503 0 0 1-.443.347A9.884 9.884 0 0 0 9.732 21H10a9.9 9.9 0 0 0 5.044-1.388 2.519 2.519 0 0 1-.444-.348ZM1.735 15.6l3.426-3.426a4.608 4.608 0 0 1-.013-2.367L1.735 6.4a2.507 2.507 0 0 1-.35-.447 9.889 9.889 0 0 0 0 10.1c.1-.164.217-.316.35-.453Zm5.101-.758a4.957 4.957 0 0 1-.651-.645c-.033-.038-.077-.067-.11-.107L3.15 17.017a.5.5 0 0 0 0 .707l.127.127a.5.5 0 0 0 .706 0l2.932-2.933c-.03-.018-.05-.053-.078-.076ZM6.08 7.914c.03-.037.07-.063.1-.1.183-.22.384-.423.6-.609.047-.04.082-.092.129-.13L3.983 4.149a.5.5 0 0 0-.707 0l-.127.127a.5.5 0 0 0 0 .707L6.08 7.914Z"/>--}}
{{--                                                                </svg>--}}
{{--                                                                Support Center--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">--}}
{{--                                                                <span class="sr-only">Terms</span>--}}
{{--                                                                <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">--}}
{{--                                                                    <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>--}}
{{--                                                                </svg>--}}
{{--                                                                Terms--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
                                            </div>
                                        </li>
                                    @endif
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="header-action-list col-span-1 flex items-center pl-4">
                        <div class="header-search-icon flex items-center text-white cursor-pointer" style="transition: all .35s ease-in-out">
                            <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" class="flex relative inline-flex items-center text-sm font-medium text-center text-white hover:text-white focus:outline-none dark:hover:text-white dark:text-gray-400" type="button">
                                <i class="fa-solid fa-magnifying-glass text-lg font-bold"></i>
                            </button>

                            <!-- Dropdown menu -->
                            <div id="dropdownNotification" class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700" aria-labelledby="dropdownNotificationButton">
                                <div class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
                                    <form action="" method="" class="flex min-w-[355px] border-[2px] border-solid border-[#ffd400] rounded-[25px] relative">
                                        <input type="text" name="search-header" class="border-none w-full h-[38px] rounded-[25px] pe-[65px] focus:ring-[#ffd400]" placeholder="Tìm kiếm..." autocomplete="off">
                                        <button type="submit" class="btn-search absolute top-[-2px] right-[-3px] bottom-[-2px] flex items-center justify-center w-[60px] p-0 rounded-r-[25px] bg-[#ffd400] border-[2px] border-solid border-[#ffd400]">
                                            <i class="fa-solid fa-magnifying-glass text-lg font-bold" style="height: 20px; width: 20px;"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="divide-y divide-gray-100 dark:divide-gray-700">
                                    <div class="search-result-list max-h-[362px] overflow-y-auto overflow-x-hidden">
                                        <div class="search-results_list-inner h-[calc(100%-58px)] pt-5 overflow-x-hidden overflow-y-auto p-t-[20px]">
                                            <div class="search-results_group mb-1.5">
                                                <a href="" class="search-results_item grid grid-cols-4 items-center mt-0 mx-4 mb-4 text-[14px] font-normal leading-normal">
                                                    <div class="search-results_item-image col-span-1 me-2">
                                                        <span class="image_style relative block" style="padding-top: 92%">
                                                            <img src="https://electrox.arenacommerce.com/cdn/shop/products/iapdlap_eab4e830-a9be-4d49-860e-ee11100c8fa7.png?v=1649400222&width=100" class="absolute left-0 top-0 h-full w-full max-w-full">
                                                        </span>
                                                    </div>
                                                    <div class="search-results_item-info col-span-3">
                                                        <div class="search-results_item-title text-[#0062bd] text-[14px] font-bold mb-[10px] hover:text-[#ffd400]">Ipad pro</div>
                                                        <div class="search-results_item-price flex items-center justify-start flex-wrap font-normal text-[#343f49] text-[20px]">
                                                            <div class="price">$70.00</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="" class="search-results_item grid grid-cols-4 items-center mt-0 mx-4 mb-4 text-[14px] font-normal leading-normal">
                                                    <div class="search-results_item-image col-span-1 me-2">
                                                        <span class="image_style relative block" style="padding-top: 92%">
                                                            <img src="https://electrox.arenacommerce.com/cdn/shop/products/iapdlap_eab4e830-a9be-4d49-860e-ee11100c8fa7.png?v=1649400222&width=100" class="absolute left-0 top-0 h-full w-full max-w-full">
                                                        </span>
                                                    </div>
                                                    <div class="search-results_item-info col-span-3">
                                                        <div class="search-results_item-title text-[#0062bd] text-[14px] font-bold mb-[10px] hover:text-[#ffd400]">Ipad pro</div>
                                                        <div class="search-results_item-price flex items-center justify-start flex-wrap font-normal text-[#343f49] text-[20px]">
                                                            <div class="price-sale text-[20px] text-[#dc3545] me-[12px]">$225.00</div>
                                                            <del class="price-compare text-[12px] text-[#848484]">$250.00</del>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <button class="btn-search-view_all w-full px-[14px] py-[10px] text-center cursor-pointer rounded-b-[10px] text-[14px] font-bold text-[#333e48] hover:text-white bg-[#ffd400] hover:bg-[#333e48] border-2 border-solid border-[#ffd400] hover:border-[#333e48]">View All</button>
                                    </div>
                                    <div class="search-result_empty p-[20px] text-center text-[#333e48] hover:text-[#ffd400]">Không có sản phầm bạn đang tìm kiếm.</div>
                                </div>
                            </div>
                        </div>
                        <div class="header-action-item header-cart ms-14 flex items-center relative">
                            <div class="flex items-center relative text-white">
                                <div class="header-action-item_group flex me-[10px] relative">
                                    <button data-popover-target="popover-click-cart" data-popover-trigger="click" data-popover-placement="bottom" type="button" class="font-medium text-white hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                                        <i class="fa-solid fa-bag-shopping text-xl font-bold"></i>
                                    </button>
                                    <div class="number absolute right-[-9px] bottom-[-10px] w-[22px] h-[22px] rounded-full flex items-center justify-center bg-white border border-[#d70018] text-[#d70018] text-[12px] font-bold">0</div>
                                </div>
                                <div class="header-action-item_group">
                                    <div class="font-bold text-white">$0.00</div>
                                </div>
                            </div>

                            <div data-popover id="popover-click-cart" role="tooltip" class="absolute top-[100%] right-0 z-10 inline-block invisible w-[335px] min-h-[100px] mt-[10px] items-center justify-center px-[25px] py-[15px] border-t-[2px] border-solid border-t-[#fed700] text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700">
                                <div class="w-full block m-0">
                                    <header class="dropdown-cart_title border-b-[1px] border-b-solid border-b-[#dddddd] py-[7px] flex justify-between items-center text-[15px] font-bold">
                                        <span>My cart</span>
                                    </header>
                                    <main class="dropdown-cart_body cart-item-list max-h-[50vh] h-full overflow-y-auto overflow-x-hidden relative">
                                        <div class="cart-line-item grid grid-cols-3 border-b-[1px] border-b-solid border-b-[#dddddd] px-1.5 py-4">
                                            <div class="cart-line-item_info col-span-1 flex justify-between items-center pe-[15px]">
                                                <a href="" class="cart-line-item_img h-full w-full">
                                                                <span class="image_style relative" style="padding-top: 92%">
                                                                    <img src="https://electrox.arenacommerce.com/cdn/shop/products/iapdlap_eab4e830-a9be-4d49-860e-ee11100c8fa7.png?v=1649400222&width=100" class="absolute left-0 top-0 h-full w-full max-w-full">
                                                                </span>
                                                </a>
                                            </div>
                                            <div class="cart-line-item_info_content col-span-2">
                                                <a class="cart-line-item_title mb-3 text-[#0062bd] text-[14px] font-bold">Iphone 12 pro max 128GB</a>
                                                <div class="cart-line-item_wrapper">
                                                    <span class="cart-line-item_variant mb-1.5">Gray</span>
                                                    <span class="cart-line-item_qty mb-1.5 block">
                                                                    QTY: <span class="value_qty">1</span>
                                                                </span>
                                                    <div class="cart-line-item_price flex items-center justify-between">
                                                        <span class="value_price block text-[#343f49] text-sm">$250.00</span>
                                                        <a href="" class="btn-remove text-[#086479] text-sm underline transform-none text-start p-0 ms-[5px] font-bold">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </main>
                                    <footer class="dropdown-cart_footer pt-4 border-t border-solid border-[#dddddd]">
                                        <div class="cart-total dropdown-cart_border-bottom flex justify-between items-center">
                                            <span class="cart-total_label text-xl">Cart total</span>
                                            <div class="cart-total_price text-xl font-bold text-[#343f49]">$250.00</div>
                                        </div>
                                        <div class="cart-btn flex items-center justify-between border-t border-solid border-[#dddddd] mt-4">
                                            <a href="" class="btn-review-cart mt-4 p-[10px] text-center font-normal text-[#333e48] text-sm bg-[#e6e6e6] border border-solid border-[#e6e6e6] rounded-full hover:bg-[#fed700]" style="width: calc(50% - 7px)">View cart</a>
                                            <button type="submit" name="checkout" class="btn-checkout mt-4 p-[10px] font-normal text-[#333e48] text-sm bg-[#fed700] border border-solid border-[#fed700] rounded-full hover:bg-[#333e48] hover:text-[#ffffff] hover:border-[#333e48]" style="width: calc(50% - 7px)">Checkout</button>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-mobile block lg:hidden py-2.5 px-0 relative">
                <div class="container mx-auto px-4 max-w-[760px]">
                    <div class="header-mobile_top flex">
                        <!-- drawer init and show -->
                        <div class="text-center flex items-center m-0 me-5">
                            <button class="text-[#333e48] hover:bg-[#333e48] hover:text-white font-bold rounded-lg text-2xl dark:bg-blue-600" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                                <i class="fa-solid fa-bars h-full w-[16px]"></i>
                            </button>
                        </div>
                        <!-- drawer component -->
                        <div id="drawer-navigation" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-64 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label">
                            <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu</h5>
                            <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close menu</span>
                            </button>
                            <div class="py-4 overflow-y-auto">
                                <ul class="space-y-2 font-medium">
                                    <li>
                                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                            <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                                                <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                                                <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                                            </svg>
                                            <span class="ms-3">Dashboard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                                                <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                                            </svg>
                                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">E-commerce</span>
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                            </svg>
                                        </button>
                                        <ul id="dropdown-example" class="hidden py-2 space-y-2">
                                            <li>
                                                <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                                <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                                            </svg>
                                            <span class="flex-1 ms-3 whitespace-nowrap">Kanban</span>
                                            <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>
                                            </svg>
                                            <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
                                            <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                                <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                                            </svg>
                                            <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                                <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                                            </svg>
                                            <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                                            </svg>
                                            <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                                                <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                                                <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
                                            </svg>
                                            <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-mobile_logo flex items-center">
                            <div class="logo">
                                <a class="theme-logo flex items-center space-x-2 rtl:space-x-reverse cursor-pointer">
                                    {{--                                                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />--}}
                                    <h1 class="lg:text-3xl text-blue-950 font-bold">Media Market</h1>
                                </a>
                            </div>
                        </div>
                        <div class="header-mobile_icons flex ms-auto">
                            <ul class="icon-list flex">
                                <li class="icon-item icon-search flex items-center cursor-pointer ms-4">
                                    <span class="btn-moblie-search_open">
                                        <i class="fa-solid fa-magnifying-glass text-lg font-bold" style="height: 20px; width: 20px;"></i>
                                    </span>
                                    <span class="btn-moblie-search_close hidden">
                                        <i class="fa-solid fa-xmark text-lg font-bold" style="height: 20px; width: 20px;"></i>
                                    </span>

                                </li>
                                <li class="icon-item mobile-icon-user flex items-center cursor-pointer ms-4">
                                    <a href="">
                                        <i class="fa-regular fa-user text-lg font-bold" style="height: 20px; width: 20px;"></i>
                                    </a>
                                </li>
                                <li class="icon-item moblie-icon-cart flex items-center cursor-pointer ms-4">
                                    <a href="" class="relative">
                                        <i class="fa-solid fa-bag-shopping text-lg font-bold" style="height: 20px; width: 20px;"></i>
                                        <div class="number absolute right-[-9px] bottom-[-10px] w-[20px] h-[20px] rounded-full flex items-center justify-center bg-[#333e48] text-[#FED700] text-[12px] font-bold">0</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-mobile_bottom">
                        <div class="header-mobile-search absolute left-0 top-16 right-0 mt-0 py-2.5 px-0 bg-white z-50 hidden" style="box-shadow: 0 0 8px #c9c9c9bf;">
                            <form action="" method="" class="flex min-w-[355px] border-[2px] border-solid border-[#ffd400] rounded-[25px] relative">
                                <input type="text" name="search-header" class="border-none w-full h-[38px] rounded-[25px] pe-[65px] focus:ring-[#ffd400]" placeholder="Tìm kiếm..." autocomplete="off">
                                <button type="submit" class="btn-search absolute top-[-2px] right-[-3px] bottom-[-2px] flex items-center justify-center w-[60px] p-0 rounded-r-[25px] bg-[#ffd400] border-[2px] border-solid border-[#ffd400]">
                                    <i class="fa-solid fa-magnifying-glass text-lg font-bold" style="height: 20px; width: 20px;"></i>
                                </button>
                            </form>
                            <div class="search-result absolute w-full left-0 top-[100%] z-10 rounded-b-[10px] shadow-xl border-t-2 border-solid border-t-[#ffd400]">
                                <div class="search-result-list max-h-[362px] overflow-y-auto overflow-x-hidden">
                                    <div class="search-results_list-inner bg-white h-[calc(100%-58px)] pt-5 overflow-x-hidden overflow-y-auto p-t-[20px]">
                                        <div class="search-results_group mb-1.5">
                                            <a href="" class="search-results_item grid grid-cols-4 items-center mt-0 mx-4 mb-4 text-[14px] font-normal leading-normal">
                                                <div class="search-results_item-image col-span-1 me-2">
                                                    <span class="image_style relative block" style="padding-top: 92%">
                                                        <img src="https://electrox.arenacommerce.com/cdn/shop/products/iapdlap_eab4e830-a9be-4d49-860e-ee11100c8fa7.png?v=1649400222&width=100" class="absolute left-0 top-0 h-full w-full max-w-full">
                                                    </span>
                                                </div>
                                                <div class="search-results_item-info col-span-3">
                                                    <div class="search-results_item-title text-[#0062bd] text-[14px] font-bold mb-[10px] hover:text-[#ffd400]">Ipad pro</div>
                                                    <div class="search-results_item-price flex items-center justify-start flex-wrap font-normal text-[#343f49] text-[20px]">
                                                        <div class="price">$70.00</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="" class="search-results_item grid grid-cols-4 items-center mt-0 mx-4 mb-4 text-[14px] font-normal leading-normal">
                                                <div class="search-results_item-image col-span-1 me-2">
                                                    <span class="image_style relative block" style="padding-top: 92%">
                                                        <img src="https://electrox.arenacommerce.com/cdn/shop/products/iapdlap_eab4e830-a9be-4d49-860e-ee11100c8fa7.png?v=1649400222&width=100" class="absolute left-0 top-0 h-full w-full max-w-full">
                                                    </span>
                                                </div>
                                                <div class="search-results_item-info col-span-3">
                                                    <div class="search-results_item-title text-[#0062bd] text-[14px] font-bold mb-[10px] hover:text-[#ffd400]">Ipad pro</div>
                                                    <div class="search-results_item-price flex items-center justify-start flex-wrap font-normal text-[#343f49] text-[20px]">
                                                        <div class="price-sale text-[20px] text-[#dc3545] me-[12px]">$225.00</div>
                                                        <del class="price-compare text-[12px] text-[#848484]">$250.00</del>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <button class="btn-search-view_all w-full px-[14px] py-[10px] text-center cursor-pointer rounded-b-[10px] text-[14px] font-bold text-[#333e48] hover:text-white bg-[#be1e2d] hover:bg-[#d70018] border-2 border-solid border-[#ffd400] hover:border-[#333e48]">View All</button>
                                </div>
                                <div class="search-result_empty p-[20px] text-center text-[#333e48] hover:text-[#ffd400]">Không có sản phầm bạn đang tìm kiếm.</div>
                            </div>
                        </div>
                        <script>
                            let misOpen = document.querySelector('.btn-moblie-search_open');
                            let misClose = document.querySelector('.btn-moblie-search_close');
                            let mobile_search = document.querySelector('.header-mobile-search');
                            misOpen.addEventListener('click', function (e){
                                misOpen.classList.add('hidden');
                                misClose.classList.remove('hidden');
                                mobile_search.classList.remove('hidden');
                            });
                            misClose.addEventListener('click', function (e){
                                misOpen.classList.remove('hidden');
                                misClose.classList.add('hidden');
                                mobile_search.classList.add('hidden');
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

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
        <div class="w-full xl:container xl:mx-auto px-[5px] md:px-[10px] lg:px-[15px]">
            <div class="hidden lg:block">
                <div class="header-bottom-container min-h-20 grid grid-cols-5">
                    <div class="col-span-1 flex items-center pr-4">
                        <div class="logo-container flex">
                            <div class="logo">
                                <a href="{{ route('user.index') }}" class="theme-logo flex items-center space-x-2 rtl:space-x-reverse cursor-pointer">
                                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                                    <h1 class="text-lg xl:text-3xl text-white font-bold">Media Market</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-menu h-full px-2 col-span-3 flex items-center justify-center">
                        <div id="mega-menu-icons" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
                            <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                                @foreach($global_menus as $menu)
                                    @if(count($menu->subcategory) == 0)
                                        <li>
                                            <a href="{{ $menu->model_type == 'post' ? route('user.post', $menu->slug) : route('user.store', $menu->slug) }}" class="py-2 px-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-blue-500 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">
                                                <div class="w-full flex justify-center items-center">
                                                    <img height="30" width="30" src="{{ asset($menu->icon_path) }}">
                                                </div>
                                                <p class="xl:text-xs text-[8px] text-center">{{ $menu->name }}</p>
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ $menu->model_type == 'post' ? route('user.post', $menu->slug) : route('user.store', $menu->slug) }}">
                                                <button data-popover-target="popover-bottom-{{ $menu->id }}" data-popover-placement="bottom" type="button" class="w-full py-2 px-3 font-medium text-white border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                                                    <div class="w-full flex justify-center items-center">
                                                        <img height="30" width="30" src="{{ asset($menu->icon_path) }}">
                                                    </div>
                                                    <p class="xl:text-xs text-[8px] text-center">{{ $menu->name }}</p>
                                                </button>
                                            </a>

                                            <div data-popover id="popover-bottom-{{ $menu->id }}" role="tooltip" class="absolute z-10 grid inline-block invisible w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700">
                                                @foreach($menu->subCategory as $sub_menu)
                                                    <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                                        <a href="{{ $sub_menu->model_type == 'post' ? route('user.post', $sub_menu->slug) : route('user.store', $sub_menu->slug) }}" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                            <span class="sr-only">{{ $sub_menu->name }}</span>
                                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                                                <path d="M15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783ZM6 2h6a1 1 0 1 1 0 2H6a1 1 0 0 1 0-2Zm7 5H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Z"/>
                                                                <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"/>
                                                            </svg>
                                                            <h4>{{ $sub_menu->name }}</h4>
                                                        </a>

                                                    </div>
                                                @endforeach
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
                        <div class="header-action-item header-cart ms-8 flex items-center relative">
                            <div class="flex items-center relative text-white">
                                <div class="header-action-item_group flex me-[10px] relative">
                                    <button data-popover-target="popover-click-cart" data-popover-trigger="click" data-popover-placement="bottom" type="button" class="font-medium text-white hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                                        <i class="fa-solid fa-bag-shopping text-xl font-bold"></i>
                                    </button>
                                    @php
                                        $total_quantity_cart = 0;
                                        $cart = Session::get('cart');

                                        if ($cart) {
                                            foreach ($cart as $item) {
                                                $total_quantity_cart += $item['product_quantity'];
                                            }
                                        }
                                    @endphp
                                    <div class="number absolute right-[-9px] bottom-[-10px] w-[22px] h-[22px] rounded-full flex items-center justify-center bg-white border border-[#d70018] text-gray-900 text-[12px] font-bold">{{ $total_quantity_cart }}</div>
                                </div>
                            </div>

                            <div data-popover id="popover-click-cart" role="tooltip" class="absolute top-[100%] right-0 z-10 inline-block invisible w-[335px] min-h-[100px] mt-[10px] items-center justify-center px-[25px] py-[15px] border-t-[2px] border-solid border-t-[#fed700] text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700">
                                <div class="w-full block m-0">
                                    <header class="dropdown-cart_title border-b-[1px] border-b-solid border-b-[#dddddd] py-[7px] flex justify-between items-center text-[15px] font-bold">
                                        <span>Giỏ hàng</span>
                                    </header>
                                    <main class="dropdown-cart_body cart-item-list max-h-[50vh] h-full overflow-y-auto overflow-x-hidden relative">
                                        @php
                                            $total_goods = 0;
                                        @endphp
                                        @if( Session::get('cart') == true)
                                            @foreach(Session::get('cart') as $key => $item_cart)
                                                @php
                                                    // Xử lý product_image nếu cần thiết
                                                    $product_image = json_decode($item_cart['product_image'], true);
                                                    // Tính toán giá sau khi áp dụng khuyến mãi
                                                    $discountedPrice = $item_cart['product_price'] - ($item_cart['product_price'] * $item_cart['product_promotion'] / 100);
                                                    // Tính toán thành giá tiền của sản phẩm
                                                    $into_money = $item_cart['product_quantity'] * $discountedPrice;
                                                    $total_goods += $into_money;
                                                @endphp
                                                <div class="cart-line-item grid grid-cols-3 border-b-[1px] border-b-solid border-b-[#dddddd] px-1.5 py-4">
                                                    <div class="cart-line-item_info col-span-1 flex justify-between items-center pe-[15px]">
                                                        <a href="" class="cart-line-item_img h-full w-full">
                                                            @if(isset($product_image['path_image']))
                                                                <span class="image_style relative" style="padding-top: 92%">
                                                                <img src="{{ asset($product_image['path_image']) }}" class="h-full w-full max-w-full" alt="{{ $item_cart['product_name'] }}" style="object-fit: contain;">
                                                            </span>
                                                            @else
                                                                <span class="image_style relative" style="padding-top: 92%">
                                                                Ảnh chưa được cập nhật
                                                            </span>
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="cart-line-item_info_content col-span-2">
                                                        <a class="cart-line-item_title mb-3 text-[#0062bd] text-[14px] font-bold">{{ $item_cart['product_name'] }}</a>
                                                        <div class="cart-line-item_wrapper">
                                                            <span class="cart-line-item_variant mb-1.5">{{ $item_cart['product_color'] }}</span>
                                                            <span class="cart-line-item_qty mb-1.5 block">
                                                                    QTY: <span class="value_qty">{{ $item_cart['product_quantity'] }}</span>
                                                                </span>
                                                            <div class="cart-line-item_price flex items-center justify-between">
                                                                <span class="value_price block text-[#343f49] text-md font-bold">{{ number_format($discountedPrice, 0, ',', '.') }} VNĐ</span>
                                                                <a href="{{ route('user.delete_cart_product', $item_cart['session_id']) }}" class="btn-remove text-[#086479] text-sm underline transform-none text-start p-0 ms-[5px] font-bold">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        @endif
                                    </main>
                                    <footer class="dropdown-cart_footer pt-4 border-t border-solid border-[#dddddd]">
                                        <div class="cart-total dropdown-cart_border-bottom flex justify-between items-center">
                                            <span class="cart-total_label text-xl">Tồng tiền:</span>
                                            <div class="cart-total_price text-xl font-bold text-[#343f49]">{{ number_format($total_goods, 0, ',', '.') }} VNĐ</div>
                                        </div>
                                        <div class="cart-btn flex items-center justify-between border-t border-solid border-[#dddddd] mt-4">
                                            <a href="{{ route('user.showCart') }}" class="btn-review-cart mt-4 p-[10px] text-center font-bold text-[#333e48] text-sm bg-[#e6e6e6] border border-solid border-[#e6e6e6] rounded-full hover:bg-[#fed700]" style="width: calc(50% - 7px)">View cart</a>
                                            <a href="{{ route('user.check-out') }}" class="btn-checkout mt-4 text-center font-bold p-[10px] text-[#333e48] text-sm bg-[#fed700] border border-solid border-[#fed700] rounded-full hover:bg-[#333e48] hover:text-[#ffffff] hover:border-[#333e48]" style="width: calc(50% - 7px)">Check out</a>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </div>
                        <div class="header-info_customer ms-8">
                            <div class="flex">
                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white focus:ring-0 focus:outline-none font-medium rounded-lg text-md text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                    @guest()
                                        <i class="fa-regular fa-user"></i>
                                        <div class="text-left ml-1.5">
                                            <p class="text-xs xl:text-sm text-white" role="none">
                                                Đăng nhập/
                                            </p>
                                            <p class="text-xs xl:text-sm font-medium text-white truncate" role="none">
                                                Đăng ký
                                            </p>
                                        </div>
                                    @else
                                        <i class="fa-solid fa-user"></i>
                                        <div class="text-left ml-1.5">
                                            <p class="text-sm text-white" role="none">
                                                {{ Auth::user()->name }}
                                            </p>
                                            <p class="text-sm font-medium text-white truncate" role="none">
                                                {{ Auth::user()->email }}
                                            </p>
                                        </div>
                                    @endguest
                                </button>
                            </div>

                            <!-- Dropdown menu -->
                            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                    @guest()
                                        @if (Route::has('user.login'))
                                            <li>
                                                <a href="{{ route('user.form_login') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><i class="fa-solid fa-right-to-bracket mr-1.5"></i>Đăng nhập</a>
                                            </li>
                                        @endif
                                        @if(Route::has('user.register'))
                                                <li>
                                                    <a href="{{ route('user.form_login') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><i class="fa-solid fa-right-to-bracket mr-1.5"></i>Đăng ký</a>
                                                </li>
                                        @endif
                                    @else
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><i class="fa-solid fa-bag-shopping mr-1.5"></i>{{ __('Lịch sử mua hàng') }}</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-2 text-md text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem" href="{{ route('user.logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i class="fa-solid fa-right-from-bracket mr-1.5"></i>
                                                {{ __('Đăng xuất') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('user.auth.logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    @endguest
                                </ul>
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
                            <button class="text-gray-200 hover:bg-[#333e48] hover:text-white font-bold rounded-lg text-2xl dark:bg-blue-600" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
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
                                    @foreach($global_menus as $menu)
                                        @if(count($menu->subcategory) == 0)
                                            <li>
                                                <a href="{{ $menu->model_type == 'post' ? route('user.post', $menu->slug) : route('user.store', $menu->slug) }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                                    <span class="ms-3">{{ $menu->name }}</span>
                                                </a>
                                            </li>
                                        @else
                                            <li>
                                                <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-menu-{{ $menu->id }}">
                                                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">{{ $menu->name }}</span>
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                                    </svg>
                                                </button>
                                                <ul id="dropdown-menu-{{ $menu->id }}" class="hidden py-2 space-y-2">
                                                    @foreach($menu->subCategory as $sub_menu)
                                                        <li>
                                                            <a href="{{ $sub_menu->model_type == 'post' ? route('user.post', $sub_menu->slug) : route('user.store', $sub_menu->slug) }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ $sub_menu->name }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="header-mobile_logo flex items-center">
                            <div class="logo">
                                <a href="{{ route('user.index') }}" class="theme-logo flex items-center space-x-2 rtl:space-x-reverse cursor-pointer">
                                    <h1 class="lg:text-3xl text-gray-200 font-bold">Media Market</h1>
                                </a>
                            </div>
                        </div>
                        <div class="header-mobile_icons flex ms-auto">
                            <ul class="icon-list flex">
                                <li class="icon-item icon-search flex items-center cursor-pointer ms-4">
                                    <span class="btn-moblie-search_open text-gray-200">
                                        <i class="fa-solid fa-magnifying-glass text-lg font-bold" style="height: 20px; width: 20px;"></i>
                                    </span>
                                    <span class="btn-moblie-search_close hidden">
                                        <i class="fa-solid fa-xmark text-lg font-bold" style="height: 20px; width: 20px;"></i>
                                    </span>

                                </li>
                                <li class="icon-item moblie-icon-cart flex items-center cursor-pointer ms-4">
                                    <a href="{{ route('user.showCart') }}" class="relative text-gray-200">
                                        <i class="fa-solid fa-bag-shopping text-lg font-bold" style="height: 20px; width: 20px;"></i>
                                        <div class="number absolute right-[-9px] bottom-[-10px] w-[20px] h-[20px] rounded-full flex items-center justify-center bg-white text-gray-900 text-[12px] font-bold">{{ $total_quantity_cart }}</div>
                                    </a>
                                </li>
                                <li class="icon-item mobile-icon-user flex items-center cursor-pointer ms-4">
                                    <button id="dropdownDefaultButton" data-dropdown-toggle="login-check" class="text-gray-200">
                                        @guest()
                                            <i class="fa-regular fa-user text-lg font-bold" style="height: 20px; width: 20px;"></i>
                                        @else
                                            <i class="fa-solid fa-user"></i>
                                        @endguest
                                    </button>
                                    <div id="login-check" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                            @guest()
                                                @if (Route::has('user.login'))
                                                    <li>
                                                        <a href="{{ route('user.form_login') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Đăng nhập</a>
                                                    </li>
                                                @endif
                                                @if(Route::has('user.register'))
                                                    <li>
                                                        <a href="{{ route('user.form_login') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Đăng ký</a>
                                                    </li>
                                                @endif

                                            @else
                                                <li>
                                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lịch sử mua hàng</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-2 text-md text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem" href="{{ route('user.logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        <i class="fa-solid fa-right-from-bracket mr-1.5"></i>
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('user.auth.logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </li>
                                            @endguest
                                        </ul>
                                    </div>

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
                                    <button class="btn-search-view_all w-full px-[14px] py-[10px] text-center cursor-pointer rounded-b-[10px] text-[14px] font-bold text-[#333e48] hover:text-white bg-[#ffd400] hover:bg-[#d70018] border-2 border-solid border-[#ffd400] hover:border-[#333e48]">View All</button>
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

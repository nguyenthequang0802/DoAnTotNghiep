@extends('Layouts.homePage')
@section('content')
    <div class="container antialiased">
        <a class="" href="{{ route('user.index') }}">
            <p class="mt-4 text-sm font-medium text-[#be1e2d]">&lt; Tiếp tục mua hàng</p>
        </a>
        <div class="grid grid-cols-3 max-xl:grid-cols-1 items-start justify-start xl:gap-4 mb-12">
            <div class="col-span-2 ">
                <div class="my-3 flex-col rounded-lg bg-white py-3 px-4">
                    <div class="flex justify-between mb-4">
                        <div class="flex">
                            <div class="flex justify-start items-center text-xl text-[#be1e2d]">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                            <p class="px-3 text-2xl font-bold">Giỏ hàng (1 sản phẩm)</p>
                        </div>
                        @if(Session::get('cart') == true)
                        <div class="flex justify-center items-center">
                            <a href="{{ route('user.delete_cart_all') }}" onclick="return confirm('Bạn có chắc chắn muốn giỏ hàng xóa?')" class="underline text-blue-500 text-md">
                                Xóa tất cả
                            </a>
                        </div>
                        @endif
                    </div>
                    <form action="{{ route('user.update-cart') }}" method="POST">
                        @csrf
                        <div class="flex flex-col w-full">
                            <div class="w-full">
                                <div class="grid grid-cols-7 max-xl:hidden">
                                    <div class="col-span-3 px-2 py-2  text-left text-sm font-medium text-gray-900">Tên sản phẩm</div>
                                    <div class="col-span-1 px-2 py-2 text-right text-sm font-medium text-gray-900">Đơn giá</div>
                                    <div class="col-span-1 px-2 py-2 text-right text-sm font-medium text-gray-900">Số lượng</div>
                                    <div class="col-span-1 px-2 py-2 text-right text-sm font-medium text-gray-900">Thành tiền</div>
                                    <div class="col-span-1 px-2 py-2 text-right text-sm font-medium text-gray-900">Thao tác</div>
                                </div>
                                @php
                                    $sub_total = 0;
                                @endphp
                                @if(Session::get('cart') == false)
                                    <div class="flex flex-col">
                                        <div class="h-px w-full bg-[#bfc4c9]"></div>
                                        <span class="text-center inline-block font-bold text-xl mt-4">Chưa có sản phẩm nào trong giỏ hàng</span>
                                    </div>

                                @else
                                    @foreach(Session::get('cart') as $key => $item_cart)
                                        @php
                                            // Xử lý product_image nếu cần thiết
                                            $product_image = json_decode($item_cart['product_image'], true);
                                            // Tính toán giá sau khi áp dụng khuyến mãi
                                            $discountedPrice = $item_cart['product_price'] - ($item_cart['product_price'] * $item_cart['product_promotion'] / 100);
                                            // Tính toán thành giá tiền của sản phẩm
                                            $into_money = $item_cart['product_quantity'] * $discountedPrice;
                                            $sub_total += $into_money;
                                        @endphp
                                        <div class="h-px w-full bg-[#bfc4c9]"></div>
                                        <div class="grid w-full grid-cols-7 items-center max-xl:hidden">
                                            <div class="col-span-3 flex w-full flex-col items-center justify-start  overflow-hidden  px-2 py-2 text-sm text-gray-900">
                                                <div class="flex w-full items-center justify-start">
                                                    @if(isset($product_image['path_image']))
                                                        <div style="width: 20%;">
                                                            <img src="{{ asset($product_image['path_image']) }}" width="61" height="64" alt="{{ $item_cart['product_name'] }}" style="height: 64px; object-fit: contain;">
                                                        </div>
                                                    @else
                                                        <p>Chưa cập nhật ảnh</p>
                                                    @endif
                                                    <div style="width: 79%;">
                                                        <p class="px-3 text-left text-14">{{ $item_cart['product_name'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="whitespace-nowrap px-0 xl:px-2 py-4 text-right text-sm font-bold text-gray-900">{{ number_format($discountedPrice, 0, ',', '.') }} VNĐ</div>
                                            <div class="whitespace-nowrap pl-2 py-4 text-right text-sm font-light text-gray-900">
                                                <div class="flex items-end justify-center">
                                                    <form class="max-w-xs mx-auto">
                                                        <div class="relative flex items-center max-w-[8rem]">
                                                            <button type="button" id="decrement-button-{{ $item_cart['product_id'] }}" data-input-counter-decrement="quantity-input-{{ $item_cart['product_id'] }}" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg xl:p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                                <i class="fa-solid fa-minus"></i>
                                                            </button>
                                                            <input type="text" name="cart_qty[{{ $item_cart['session_id'] }}]" id="quantity-input-{{ $item_cart['product_id'] }}" data-input-counter aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full xl:py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $item_cart['product_quantity'] }}" required />
                                                            <button type="button" id="increment-button-{{ $item_cart['product_id'] }}" data-input-counter-increment="quantity-input-{{ $item_cart['product_id'] }}" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg xl:p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                                <i class="fa-solid fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="whitespace-nowrap px-2 py-4 text-right text-sm font-medium text-[#be1e2d]">
                                                <p class="text-right text-sm">{{ number_format($into_money, 0, ',', '.') }} VNĐ</p>
                                            </div>
                                            <div class="flex justify-end whitespace-nowrap px-2 py-4 text-sm font-light">
                                                <a href="{{ route('user.delete_cart_product', $item_cart['session_id']) }}">
                                                    <button type="button" class="text-[#be1e2d] border border-[#be1e2d] hover:bg-[#be1e2d] hover:text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 lg:m-0">
                                                        <i class="fa-regular fa-trash-can"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="cart-mobile xl:hidden">
                                            <div class="grid grid-cols-4 items-center gap-4 py-2 ">
                                                <div class="col-span-1 flex w-full items-start justify-center">
                                                    @if(isset($product_image['path_image']))
                                                        <div style="width: 20%;">
                                                            <img src="{{ asset($product_image['path_image']) }}" width="61" height="64" alt="{{ $item_cart['product_name'] }}" style="height: 64px; object-fit: contain;">
                                                        </div>
                                                    @else
                                                        <p>Chưa cập nhật ảnh</p>
                                                    @endif
                                                </div>
                                                <div class="col-span-3 w-full flex-col items-start justify-start">
                                                    <p class="text-sm ">{{ $item_cart['product_name'] }}</p>
                                                    <p class="text-left text-sm font-medium text-[#be1e2d]">{{ number_format($discountedPrice, 0, ',', '.') }} VNĐ</p>
                                                    <div class="flex items-center justify-between">
                                                        <div class="flex items-end justify-center">
                                                            <form class="max-w-xs mx-auto">
                                                                <div class="relative flex items-center max-w-[8rem]">
                                                                    <button type="button" id="decrement-button-{{ $item_cart['product_id'] }}" data-input-counter-decrement="quantity-input-moblie-{{ $item_cart['product_id'] }}" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                                        <i class="fa-solid fa-minus"></i>
                                                                    </button>
                                                                    <input type="text" id="quantity-input-moblie-{{ $item_cart['product_id'] }}" data-input-counter aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="1" value="{{ $item_cart['product_quantity'] }}" required />
                                                                    <button type="button" id="increment-button-{{ $item_cart['product_id'] }}" data-input-counter-increment="quantity-input-moblie-{{ $item_cart['product_id'] }}" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                                        <i class="fa-solid fa-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <button type="button" class="text-[#be1e2d] border border-[#be1e2d] hover:bg-[#be1e2d] hover:text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center m-0 sm:me-2 sm:mb-2">
                                                            <i class="fa-regular fa-trash-can"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                            @if(Session::get('cart') == true)
                                <div class="flex justify-end">
                                    <div class="">
                                        <button type="submit" class="focus:outline-none w-full text-white bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cập nhập</button>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </form>

                </div>
                <div class="xl:hidden">
                    <div class="my-3 flex-col rounded-lg bg-white py-3 px-4">
                        <div class="m-2 flex pt-4 ">
                            <p class="flex justify-center items-center text-[#be1e2d] text-2xl">
                                <i class="fa-solid fa-coins"></i>
                            </p>
                            <p class="px-3 text-2xl font-bold">Tạm tính</p>
                        </div>
                        <div class="flex items-center justify-between py-2">
                            <p class="text-sm">Tiền hàng:</p>
                            <p class="text-sm font-bold">{{ number_format($sub_total, 0, ',', '.') }} VNĐ</p>
                        </div>
                        <div class="flex items-center justify-between py-2">
                            <p class="text-sm">Thuế VAT:</p>
                            <p class="text-sm font-bold">0%</p>
                        </div>
                        <div class="flex items-center justify-between py-2">
                            <p class="text-sm">Phí vận chuyển:</p>
                            <p class="text-sm font-bold">0 đ</p>
                        </div>
                        <div class="flex items-center justify-between py-2">
                            <p class="text-sm">Khuyến mãi:</p>
                            <p class="text-sm font-bold">-0 đ</p>
                        </div>
                        <div class="flex w-full items-center justify-between py-2">
                            <div class="mantine-Input-wrapper  w-full pr-2 relative">
                                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Nhập mã khuyến mãi" value="">
                            </div>
                            <button class="btn-promo flex items-center justify-center rounded border-0 bg-[#be1e2d]">
                                <p class="text-sm font-medium text-white">Áp dụng</p>
                            </button>
                        </div>
                        <div class="h-px w-full bg-[#bfc4c9] my-3"></div>
                        <div class="flex items-center justify-between py-2">
                            <p class="text-lg font-bold">Tổng cộng:</p>
                            <p class="text-sm font-bold text-[#be1e2d]">57.580.000 đ</p>
                        </div>
                        <div class="w-full">
                            <button type="button" class="focus:outline-none w-full text-white bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Đặt hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1 max-xl:hidden">
                <div class="my-3 flex-col rounded-lg bg-white py-3 px-4">
                    <div class="m-2 flex pt-4 ">
                        <p class="flex justify-center items-center text-[#be1e2d] text-2xl">
                            <i class="fa-solid fa-coins"></i>
                        </p>
                        <p class="px-3 text-2xl font-bold">Tạm tính</p>
                    </div>
                    <div class="flex items-center justify-between py-2">
                        <p class="text-sm">Tiền hàng:</p>
                        <p class="text-sm font-bold">{{ number_format($sub_total, 0, ',', '.') }} VNĐ</p>
                    </div>
                    <div class="flex items-center justify-between py-2">
                        <p class="text-sm">Thuế VAT:</p>
                        <p class="text-sm font-bold">0%</p>
                    </div>
                    <div class="flex items-center justify-between py-2">
                        <p class="text-sm">Phí vận chuyển:</p>
                        <p class="text-sm font-bold">0 đ</p>
                    </div>
                    <div class="flex items-center justify-between py-2">
                        <p class="text-sm">Khuyến mãi:</p>
                        <p class="text-sm font-bold">-0 đ</p>
                    </div>
                    <div class="flex w-full items-center justify-between py-2">
                        <div class="mantine-Input-wrapper w-[70%] pr-2 relative">
                            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Nhập mã khuyến mãi" value="">
                        </div>
                        <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Áp dụng</button>
                    </div>
                    <div class="h-px w-full bg-[#bfc4c9] my-3"></div>
                    <div class="flex items-center justify-between py-2">
                        <p class="text-lg font-bold">Tổng cộng:</p>
                        <p class="text-sm font-bold text-[#be1e2d]">57.580.000 đ</p>
                    </div>
                    <div class="w-full">
                        <button type="button" class="focus:outline-none w-full text-white bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Đặt hàng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed top-[160px] right-[26px]">
        @include('pages.user.common.alert')
    </div>
    @include('pages.user.common.javascript')
@endsection

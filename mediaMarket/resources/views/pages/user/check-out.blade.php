@extends('Layouts.homePage')
@section('content')
    <div class="container antialiased">
        <a class="" href="{{ route('user.index') }}">
            <p class="mt-4 text-sm font-medium text-[#be1e2d]">&lt; Tiếp tục mua hàng</p>
        </a>
        <div class="grid grid-cols-3 max-xl:grid-cols-1 items-start justify-start xl:gap-4">
            <div class="col-span-2 ">
                <div class="my-3 flex-col rounded-lg bg-white py-3 px-4">
                    <div class="flex items-center justify-between">
                        <div class="flex">
                            @php
                                $total_quantity_cart = 0;
                                $cart = Session::get('cart');

                                if ($cart) {
                                    foreach ($cart as $item) {
                                        $total_quantity_cart += $item['product_quantity'];
                                    }
                                }
                            @endphp
                            <div class="flex justify-start items-center text-xl text-[#be1e2d]">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                            <p class="px-3 text-2xl font-bold">Giỏ hàng ({{ $total_quantity_cart }} sản phẩm)</p>
                        </div>
                        @if(Session::get('cart') == true)
                        <a href="{{ route('user.showCart') }}">
                            <button class="flex items-center text-[#2d9cdb]">
                                <p class="pr-2 text-xs">Chỉnh sửa</p>
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                        </a>
                        @endif
                    </div>
                    @php
                        $total_goods = 0;
                        $coupon_value = 0;
                        $coupon_code = '';
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
                                $total_goods += $into_money;
                            @endphp
                            <div class="flex my-4 items-center justify-start w-full">
                                <div>
                                    @if(isset($product_image['path_image']))
                                        <div>
                                            <img src="{{ asset($product_image['path_image']) }}" width="61" height="64" alt="{{ $item_cart['product_name'] }}" style="height: 64px; object-fit: contain;">
                                        </div>
                                    @else
                                        <p>Chưa cập nhật ảnh</p>
                                    @endif
                                </div>
                                <div class="flex-col items-center justify-start">
                                    <p class="px-3 text-sm font-medium">{{ $item_cart['product_name'] }}</p>
                                    <div class="flex items-center justify-start">
                                        <p class="px-3 text-sm font-bold text-[#be1e2d]">{{ number_format($discountedPrice, 0, ',', '.') }} VNĐ</p>
                                        <p class="px-3 text-sm font-medium">SL: {{ $item_cart['product_quantity'] }} VNĐ</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
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
                            <p class="text-sm font-bold">{{ number_format($total_goods, 0, ',', '.') }} VNĐ</p>
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
                            @if(Session::get('coupon'))
                                @foreach(Session::get('coupon') as $key => $cou)
                                    @php
                                        $coupon_value = $cou['coupon_value'];
                                        $coupon_code = $cou['coupon_code'];
                                    @endphp
                                    <p class="text-sm font-bold">-{{ number_format($coupon_value, 0, ',', '.') }} VNĐ</p>
                                @endforeach
                            @else
                                <p class="text-sm font-bold">-0 VNĐ</p>
                            @endif
                        </div>
                        <div class="flex w-full items-center justify-between py-2">
                            @if(Session::get('coupon'))
                                <input name="coupon_code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Nhập mã khuyến mãi" value="{{ $coupon_code }}" readonly>
                            @else
                                <input name="coupon_code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Nhập mã khuyến mãi">
                            @endif
                        </div>
                        <div class="h-px w-full bg-[#bfc4c9] my-3"></div>
                        <div class="flex items-center justify-between py-2">
                            <p class="text-lg font-bold">Tổng cộng:</p>
                            <p class="text-sm font-bold text-[#be1e2d]">{{ number_format($total_goods - $coupon_value, 0, ',', '.') }} VNĐ</p>
                        </div>
                    </div>
                </div>
                <div class="my-3 flex-col rounded-lg bg-white pb-3 px-4">
                    <div class="m-2 flex pt-4 ">
                        <p class="flex justify-center items-center text-[#be1e2d] text-2xl">
                            <i class="fa-solid fa-box "></i>
                        </p>
                        <p class="px-3 text-xl font-bold">Thông tin người nhận hàng</p>
                    </div>
                    <form method="POST">
                        @csrf
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="">
                                <label for="name_receiver" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Họ tên người nhận</label>
                                <input type="text" name="name_receiver" id="name_receiver" class="shipping_name bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nhập họ tên người nhận" required="">
                            </div>
                            <div class="w-full">
                                <label for="phone_receiver" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Số điện thoại người nhận</label>
                                <input type="text" name="phone_receiver" id="phone_receiver" class="shipping_phone bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nhập số điện thoại người nhận" required="">
                            </div>
                            <div>
                                <label for="province" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tỉnh thành</label>
                                <select id="province" name="province" class="shipping_province bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="0">Chọn tỉnh thành</option>
                                </select>
                            </div>
                            <div>
                                <label for="district" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quận/huyện</label>
                                <select id="district" name="district" class="shipping_district bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="0">Chọn quận/huyện</option>
                                </select>
                            </div>
                            <div>
                                <label for="ward" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phường/xã</label>
                                <select id="ward" name="ward" class="shipping_ward bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="0">Chọn phường/xã</option>
                                </select>
                            </div>
                            <div></div>
                            <div class="col-span-2">
                                <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Địa chỉ</label>
                                <input type="text" name="address" id="address" class="shipping_address bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Địa chỉ người nhận" required="">
                            </div>

                            <div class="">
                                <div class="flex items-center me-4">
                                    <input id="inline-radio" type="radio" value="cod" name="method_payment" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-radio" class="flex ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" height="20" width="20"><path d="M160 0c17.7 0 32 14.3 32 32V67.7c1.6 .2 3.1 .4 4.7 .7c.4 .1 .7 .1 1.1 .2l48 8.8c17.4 3.2 28.9 19.9 25.7 37.2s-19.9 28.9-37.2 25.7l-47.5-8.7c-31.3-4.6-58.9-1.5-78.3 6.2s-27.2 18.3-29 28.1c-2 10.7-.5 16.7 1.2 20.4c1.8 3.9 5.5 8.3 12.8 13.2c16.3 10.7 41.3 17.7 73.7 26.3l2.9 .8c28.6 7.6 63.6 16.8 89.6 33.8c14.2 9.3 27.6 21.9 35.9 39.5c8.5 17.9 10.3 37.9 6.4 59.2c-6.9 38-33.1 63.4-65.6 76.7c-13.7 5.6-28.6 9.2-44.4 11V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.1c-.4-.1-.9-.1-1.3-.2l-.2 0 0 0c-24.4-3.8-64.5-14.3-91.5-26.3c-16.1-7.2-23.4-26.1-16.2-42.2s26.1-23.4 42.2-16.2c20.9 9.3 55.3 18.5 75.2 21.6c31.9 4.7 58.2 2 76-5.3c16.9-6.9 24.6-16.9 26.8-28.9c1.9-10.6 .4-16.7-1.3-20.4c-1.9-4-5.6-8.4-13-13.3c-16.4-10.7-41.5-17.7-74-26.3l-2.8-.7 0 0C119.4 279.3 84.4 270 58.4 253c-14.2-9.3-27.5-22-35.8-39.6c-8.4-17.9-10.1-37.9-6.1-59.2C23.7 116 52.3 91.2 84.8 78.3c13.3-5.3 27.9-8.9 43.2-11V32c0-17.7 14.3-32 32-32z"/></svg>
                                        Thanh toán khi nhận hàng
                                    </label>
                                </div>
                                <div class="flex items-center me-4 mt-2">
                                    <input id="inline-2-radio" type="radio" value="payUrl" name="method_payment" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-2-radio" class="flex items-center ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        <svg width="20px" height="20px" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>momo_icon_square_pinkbg</title>
                                            <g id="5.-Kiểm-tra-giao-dịch" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="momo_icon_square_pinkbg">
                                                    <path d="M55.9459459,0 L4.05405405,0 C2.56756757,0 1.21621622,0 0,0 L0,55.9459459 C0,57.4324324 0,58.7837838 0,60 L60,60 C60,58.7837838 60,57.4324324 60,55.9459459 L60,0 C58.7837838,0 57.4324324,0 55.9459459,0 Z" id="Path"></path>
                                                    <g id="Group" transform="translate(4.000000, 5.500000)" fill="#A50064" fill-rule="nonzero">
                                                        <path d="M40.9111892,22.0954907 C47.0426493,22.0954907 52,17.1564987 52,11.0477454 C52,4.93899204 47.0426493,0 40.9111892,0 C34.7797291,0 29.8223783,4.93899204 29.8223783,11.0477454 C29.8223783,17.1564987 34.7797291,22.0954907 40.9111892,22.0954907 Z M40.9111892,6.34270557 C43.5203211,6.34270557 45.633718,8.44827586 45.633718,11.0477454 C45.633718,13.6472149 43.5203211,15.7527851 40.9111892,15.7527851 C38.3020572,15.7527851 36.1886603,13.6472149 36.1886603,11.0477454 C36.1886603,8.44827586 38.3020572,6.34270557 40.9111892,6.34270557 Z" id="Shape"></path>
                                                        <path d="M40.9111892,26.8785146 C34.7797291,26.8785146 29.8223783,31.8175066 29.8223783,37.9262599 C29.8223783,44.0350133 34.7797291,48.9740053 40.9111892,48.9740053 C47.0426493,48.9740053 52,44.0350133 52,37.9262599 C52,31.8175066 47.0426493,26.8785146 40.9111892,26.8785146 Z M40.9111892,42.6312997 C38.3020572,42.6312997 36.1886603,40.5257294 36.1886603,37.9262599 C36.1886603,35.3267905 38.3020572,33.2212202 40.9111892,33.2212202 C43.5203211,33.2212202 45.633718,35.3267905 45.633718,37.9262599 C45.633718,40.5257294 43.5203211,42.6312997 40.9111892,42.6312997 Z" id="Shape"></path>
                                                        <path d="M18.3161064,26.8785146 C16.4375314,26.8785146 14.7155043,27.5023873 13.3326643,28.5421751 C11.9498244,27.5023873 10.201706,26.8785146 8.34922228,26.8785146 C3.75715003,26.8785146 0.0260913196,30.595756 0.0260913196,35.1708223 L0.0260913196,49 L6.39237331,49 L6.39237331,35.0928382 C6.39237331,34.0530504 7.22729553,33.2212202 8.27094832,33.2212202 C9.3146011,33.2212202 10.1495233,34.0530504 10.1495233,35.0928382 L10.1495233,48.9740053 L16.5158053,48.9740053 L16.5158053,35.0928382 C16.5158053,34.0530504 17.3507275,33.2212202 18.3943803,33.2212202 C19.4380331,33.2212202 20.2729553,34.0530504 20.2729553,35.0928382 L20.2729553,48.9740053 L26.613146,48.9740053 L26.613146,35.1448276 C26.613146,30.595756 22.9081786,26.8785146 18.3161064,26.8785146 Z" id="Path"></path>
                                                        <path d="M18.3161064,0 C16.4375314,0 14.7155043,0.623872679 13.3326643,1.66366048 C11.9498244,0.623872679 10.201706,0 8.34922228,0 C3.73105871,0 0,3.71724138 0,8.29230769 L0,22.0954907 L6.36628199,22.0954907 L6.36628199,8.21432361 C6.36628199,7.17453581 7.20120421,6.34270557 8.244857,6.34270557 C9.28850978,6.34270557 10.123432,7.17453581 10.123432,8.21432361 L10.123432,22.0954907 L16.489714,22.0954907 L16.489714,8.21432361 C16.489714,7.17453581 17.3246362,6.34270557 18.368289,6.34270557 C19.4119418,6.34270557 20.246864,7.17453581 20.246864,8.21432361 L20.246864,22.0954907 L26.613146,22.0954907 L26.613146,8.29230769 C26.613146,3.71724138 22.9081786,0 18.3161064,0 Z" id="Path"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        Thanh toán qua Momo
                                    </label>
                                </div>
                                <div class="flex items-center me-4 mt-2">
                                    <input id="inline-3-radio" type="radio" value="redirect" name="method_payment" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-3-radio" class="flex items-center ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        <img class="h-[20px] w-[20px]" src="{{ asset('storage/products/VNPAY-QR.png') }}">
                                        Thanh toán qua VnPay
                                    </label>
                                </div>
                            </div>
                            @if(Session::get('coupon'))
                                @foreach(Session::get('coupon') as $key => $cou)
                                    <input type="hidden" name="order_coupon" class="order_coupon" value="{{ $cou['coupon_code'] }}">
                                    <input type="hidden" name="order_coupon_value" class="order_coupon_value" value="{{ $cou['coupon_value'] }}">
                                @endforeach
                            @else
                                <input type="hidden" name="order_coupon" class="order_coupon" value="null">
                                <input type="hidden" name="order_coupon_value" class="order_coupon_value" value="0">
                            @endif
                            @if(Session::get('cart'))
                                <input type="hidden" name="order_total_price" class="order_total_price" value="{{ $total_goods }}">
                            @else
                                <input type="hidden" name="order_total_price" class="order_total_price" value="0">
                            @endif
                            <div class="sm:col-span-2">
                                <label for="note" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ghi chú</label>
                                <textarea id="note" name="note" rows="8" class="shipping_note block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ghi chú thêm"></textarea>
                            </div>
                        </div>
                        @if(Session::get('cart') == true)
                            <div class="w-full flex justify-end">
                                <button type="submit" class="send_order text-white border border-[#be1e2d] bg-[#be1e2d] font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 my-2">
                                    <span>Xác nhận</span>
                                </button>
                            </div>
                        @endif
                    </form>
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
                        <p class="text-sm font-bold">{{ number_format($total_goods, 0, ',', '.') }} VNĐ</p>
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
                        @if(Session::get('coupon'))
                            <p class="text-sm font-bold">-{{ number_format($coupon_value, 0, ',', '.') }} VNĐ</p>
                        @else
                            <p class="text-sm font-bold">-0 VNĐ</p>
                        @endif
                    </div>
                    <div class="flex w-full items-center justify-between py-2">
                        @if(Session::get('coupon'))
                            <input name="coupon_code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Nhập mã khuyến mãi" value="{{ $coupon_code }}" readonly>
                        @else
                            <input name="coupon_code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Nhập mã khuyến mãi" readonly>
                        @endif
                    </div>
                    <div class="h-px w-full bg-[#bfc4c9] my-3"></div>
                    <div class="flex items-center justify-between py-2">
                        <p class="text-lg font-bold">Tổng cộng:</p>
                        <p class="text-sm font-bold text-[#be1e2d]">{{ number_format($total_goods - $coupon_value, 0, ',', '.') }} VNĐ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://esgoo.net/scripts/jquery.js"></script>
    <script>
        $(document).ready(function() {
            //Lấy tỉnh thành
            $.getJSON('https://esgoo.net/api-tinhthanh/1/0.htm',function(data_tinh){
                if(data_tinh.error==0){
                    $.each(data_tinh.data, function (key_tinh,val_tinh) {
                        $("#province").append('<option value="'+val_tinh.id+'">'+val_tinh.full_name+'</option>');
                    });
                    $("#province").change(function(e){
                        var idtinh=$(this).val();
                        //Lấy quận huyện
                        $.getJSON('https://esgoo.net/api-tinhthanh/2/'+idtinh+'.htm',function(data_quan){
                            if(data_quan.error==0){
                                $("#district").html('<option value="0">Quận Huyện</option>');
                                $("#ward").html('<option value="0">Phường Xã</option>');
                                $.each(data_quan.data, function (key_quan,val_quan) {
                                    $("#district").append('<option value="'+val_quan.id+'">'+val_quan.full_name+'</option>');
                                });
                                //Lấy phường xã
                                $("#district").change(function(e){
                                    var idquan=$(this).val();
                                    $.getJSON('https://esgoo.net/api-tinhthanh/3/'+idquan+'.htm',function(data_phuong){
                                        if(data_phuong.error==0){
                                            $("#ward").html('<option value="0">Phường Xã</option>');
                                            $.each(data_phuong.data, function (key_phuong,val_phuong) {
                                                $("#ward").append('<option value="'+val_phuong.id+'">'+val_phuong.full_name+'</option>');
                                            });
                                        }
                                    });
                                });

                            }
                        });
                    });

                }
            });
        });
    </script>
@endsection

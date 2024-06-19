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
                            <div class="flex justify-start items-center text-xl text-[#be1e2d]">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                            <p class="px-3 text-2xl font-bold">Giỏ hàng (1 sản phẩm)</p>
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
                                    <input id="inline-radio" type="radio" value="0" name="method_payment" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-radio" class="flex ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        <p class="flex items-center text-gray-300 mr-1">
                                            <i class="fa-solid fa-money-bill"></i>
                                        </p>
                                        Thanh toán khi nhận hàng
                                    </label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="inline-2-radio" type="radio" value="1" name="method_payment" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-2-radio" class="flex ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        <img src="https://vnpay.vn/s1/statics.vnpay.vn/2023/9/06ncktiwd6dc1694418196384.png" height="30" width="30">
                                        Thanh toán qua VNPay
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
                    <div class="w-full">
                        <button type="button" class="focus:outline-none w-full text-white bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Thanh toán</button>
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

@extends('Layouts.homePage')
@section('content')
    <div class="container antialiased">
        <a class="" href="">
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
                        <a href="">
                            <button class="flex items-center text-[#2d9cdb]">
                                <p class="pr-2 text-xs">Chỉnh sửa</p>
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                        </a>
                    </div>

                    <div class="flex my-4 items-center justify-start w-full">
                        <div>
                            <img src="https://cdn-v2.didongviet.vn/files/products/2023/8/13/1/1694547644321_thumb_iphone_15.png" width="61" height="64" alt="di động việt" style="height: 64px; object-fit: contain;">
                        </div>
                        <div class="flex-col items-center justify-start">
                            <p class="px-3 text-sm">APPLE IPHONE 15 128GB (CTY) - Hồng - New</p>
                            <div class="flex items-center justify-start">
                                <p class="px-3 text-sm font-bold text-[#be1e2d]">28.790.000</p>
                                <p class="px-3 text-sm font-medium">SL: 1</p>
                            </div>
                        </div>
                    </div>
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
                            <p class="text-sm font-bold">57.580.000 đ</p>
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
                    </div>
                </div>
                <div class="my-3 flex-col rounded-lg bg-white pb-3 px-4">
                    <div class="m-2 flex pt-4 ">
                        <p class="flex justify-center items-center text-[#be1e2d] text-2xl">
                            <i class="fa-solid fa-box "></i>
                        </p>
                        <p class="px-3 text-xl font-bold">Hình thức giao hàng</p>
                    </div>
                    <form action="#">
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Họ tên ngời nhận</label>
                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nhập họ tên người nhận" required="">
                            </div>
                            <div class="w-full">
                                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Số điện thoại người nhận</label>
                                <input type="text" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nhập số điện thoại người nhận" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email người nhận</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nhập email người nhận" required="">
                            </div>
                            <div>
                                <label for="provinces" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tỉnh thành</label>
                                <select id="provinces" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option selected="">Chọn tỉnh thành</option>
                                    <option value="TV">TV/Monitors</option>
                                    <option value="PC">PC</option>
                                    <option value="GA">Gaming/Console</option>
                                    <option value="PH">Phones</option>
                                </select>
                            </div>
                            <div>
                                <label for="districts" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quận/huyện</label>
                                <select id="districts" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option selected="">Chọn quận/huyện</option>
                                    <option value="TV">TV/Monitors</option>
                                    <option value="PC">PC</option>
                                    <option value="GA">Gaming/Console</option>
                                    <option value="PH">Phones</option>
                                </select>
                            </div>
                            <div>
                                <label for="wards" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phường/xã</label>
                                <select id="wards" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option selected="">Chọn phường/xã</option>
                                    <option value="TV">TV/Monitors</option>
                                    <option value="PC">PC</option>
                                    <option value="GA">Gaming/Console</option>
                                    <option value="PH">Phones</option>
                                </select>
                            </div>
                            <div>
                                <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Địa chỉ</label>
                                <input type="text" name="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Địa chỉ người nhận" required="">
                            </div>

                            <div class="">
                                <div class="flex items-center me-4">
                                    <input id="inline-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-radio" class="flex ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        <p class="flex items-center text-gray-300 mr-1">
                                            <i class="fa-solid fa-money-bill"></i>
                                        </p>
                                        Thanh toán khi nhận hàng
                                    </label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="inline-2-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-2-radio" class="flex ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        <img src="https://vnpay.vn/s1/statics.vnpay.vn/2023/9/06ncktiwd6dc1694418196384.png" height="30" width="30">
                                        Thanh toán qua VNPay
                                    </label>
                                </div>

                            </div>

                            <div class="sm:col-span-2">
                                <label for="note" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ghi chú</label>
                                <textarea id="note" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ghi chú thêm"></textarea>
                            </div>
                        </div>
                        <div class="w-full flex justify-end">
{{--                            <button type="submit" class="text-white border border-[#be1e2d] bg-[#be1e2d] font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 my-2">--}}
{{--                                <span>Xác nhận</span>--}}
{{--                            </button>--}}
                        </div>
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
                        <p class="text-sm font-bold">57.580.000 đ</p>
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
                        <button type="button" class="focus:outline-none w-full text-white bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Thanh toán</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

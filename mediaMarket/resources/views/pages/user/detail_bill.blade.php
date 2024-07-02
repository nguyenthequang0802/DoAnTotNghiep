@extends('Layouts.homePage')
@section('content')
    <div class="container antialiased">
        <a class="" href="{{ route('user.index') }}">
            <p class="mt-4 text-sm font-medium text-gray-800 hover:underline">&lt; Tiếp tục mua hàng</p>
        </a>
    </div>
    <div class="box-sale-container w-full py-2.5 rounded-md bg-white my-1.5 lg:my-2.5 max-md:bg-[#f2f2f2]" style="box-shadow: 0 0 3px 0 #dee2e6">
        <div class="header-box px-4 mb-5">
            <div class="header bg-[#009981]  inline-block h-7 overflow-hidden after:border-t-[30px] after:border-t-[#00483d] after:border-l-[30px] after:border-l-[#009981] after:ml-[40px]">
                <h2 class="title text-white py-1 pr-14 pl-9 ml-14 bg-[#00483d] text-[14px] uppercase font-bold">
                    <a href="">Chi tiết đơn hàng</a>
                </h2>
            </div>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-4 mb-5">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tên người nhận
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Số điện thoại
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Địa chỉ
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ghi chú
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                        </th>
                        <td class="px-6 py-4">
                            {{ $shipping->shipping_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $shipping->shipping_phone }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $shipping->shipping_address }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $shipping->shipping_note }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-4">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tên sản phẩm
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Số lượng
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Khuyến mãi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Giá tiền
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Đơn giá
                    </th>
                </tr>
                </thead>
                <tbody>
                @php
                    $total_price = 0;
                @endphp
                @foreach($order_products as $item_product)
                    @php
                        $price_discount = $item_product->product_price - ($item_product->product_price * $item_product->product_promotion /100);
                        $into_price = $item_product->product_order_quantity * $price_discount;
                        $total_price += $into_price;
                    @endphp
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->index+1 }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item_product->product_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item_product->product_order_quantity }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item_product->product_promotion }}

                        </td>
                        <td class="px-6 py-4">
                            {{ number_format($item_product->product_price, 0, ',', '.') }}đ
                        </td>
                        <td class="px-6 py-4">
                            {{ number_format($into_price, 0, ',', '.') }}đ
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <td class="px-6 py-4 ">
                </td>
                <td class="px-6 py-4">
                </td>
                <td class="px-6 py-4">
                </td>
                <td class="px-6 py-4">
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Tổng tiền
                </td>
                <td class="px-6 py-4">
                    {{ number_format($total_price, 0, ',', '.') }}đ
                </td>
                </tfoot>
            </table>
        </div>

    </div>
@endsection

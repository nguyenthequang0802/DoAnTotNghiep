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
                    <a href="">Lịch sử đơn hàng</a>
                </h2>
            </div>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-4">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Mã đơn hàng
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tên người nhận
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Phương thức thanh toán
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Mã phiếu mua hàng
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Trạng thái
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tổng hóa đơn
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Thao tác
                    </th>
                </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        @php
                            $order_total = $order->order_total - $order->order_code_value;
                        @endphp
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->index+1 }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $order->order_code }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->shipping->shipping_name }}
                            </td>
                            <td class="px-6 py-4">
                                @if($order->order_payment_method == 'cod')
                                    Thanh toán khi nhận hàng
                                @elseif($order->order_payment_method == 'payUrl')
                                    Thanh toán qua Momo
                                @elseif($order->order_payment_method == 'redirect')
                                    Thanh toán qua VnPay
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->order_code_coupon }}
                            </td>
                            <td class="px-6 py-4">
                                @if($order->order_status == 0)
                                    <p class="text-red-500 font-bold">Đơn hàng mới</p>
                                @elseif($order->order_status == 1)
                                    <p class="text-green-500 font-bold">Đã xử lý-giao hàng</p>
                                @elseif($order->order_status == 2)
                                    <p class="font-bold">Đơn hàng đã hủy</p>
                                @endif
                            </td>
                            <td class="px-6 py-4 font-bold">
                                {{ number_format($order_total, 0, ',', '.') }}đ
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('user.history_bill.detail', $order->order_code) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Chi tiết</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection

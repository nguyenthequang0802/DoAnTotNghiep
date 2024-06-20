@extends('Layouts.adminPage')
@section('content')
    <section class="py-3 sm:py-5">
        <div class="px-4">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row items-center justify-center space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="text-center ">
                        <h3 class="text-lg uppercase font-bold">Thông tin khách hàng</h3>
                    </div>
                </div>
                <div class="overflow-x-auto p-2.5">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">Tên khách hàng</th>
                            <th scope="col" class="px-4 py-3">Số điện thoại</th>
                            <th scope="col" class="px-4 py-3">Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $customer->name }}</th>
                            <td class="px-4 py-3">{{ $customer->phone_number }}</td>
                            <td class="px-4 py-3">{{ $customer->email }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="py-3 sm:py-5">
        <div class="px-4">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row items-center justify-center space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="text-center ">
                        <h3 class="text-lg uppercase font-bold">Thông tin nhận hàng</h3>
                    </div>
                </div>
                <div class="overflow-x-auto p-2.5">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">Tên người nhận</th>
                            <th scope="col" class="px-4 py-3">Số điện thoại</th>
                            <th scope="col" class="px-4 py-3">Địa chỉ</th>
                            <th scope="col" class="px-4 py-3">Ghi chú</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $shipping->shipping_name }}</th>
                            <td class="px-4 py-3">{{ $shipping->shipping_phone }}</td>
                            <td class="px-4 py-3">{{ $shipping->shipping_address }}</td>
                            <td class="px-4 py-3">{{ $shipping->shipping_note }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="py-3 sm:py-5">
        <div class="px-4">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row items-center justify-center space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="text-center ">
                        <h3 class="text-lg uppercase font-bold">Chi tiết đơn hàng</h3>
                    </div>
                </div>
                <div class="overflow-x-auto p-2.5">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">#</th>
                            <th scope="col" class="px-4 py-3">Tên sản phẩm</th>
                            <th scope="col" class="px-4 py-3">Số lượng kho còn</th>
                            <th scope="col" class="px-4 py-3">Khuyến mãi</th>
                            <th scope="col" class="px-4 py-3">Số lượng</th>
                            <th scope="col" class="px-4 py-3">Giá tiền</th>
                            <th scope="col" class="px-4 py-3 float-right">Thành tiền</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $total_price = 0;
                        @endphp
                        @foreach($order_details as $item_product)
                            @php
                                $price_discount = $item_product->product_price - ($item_product->product_price * $item_product->product_promotion /100);
                                $into_price = $item_product->product_order_quantity * $price_discount;
                                $total_price += $into_price;
                            @endphp
                            <tr class="border-b dark:border-gray-700 color_qty_{{ $item_product->product_id }}">
                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $loop->index+1 }}</th>
                                <td class="px-4 py-3">{{ $item_product->product_name }}</td>
                                <td class="px-4 py-3">{{ $item_product->product->quantity}}</td>
                                <td class="px-4 py-3">{{ $item_product->product_promotion }}%</td>
                                <td class="px-4 py-3">
                                    <form>
                                        <input name="product_sell_quantity" {{ ($order_status == 1) ? 'disabled' : '' }}  class="sell_quantity_{{ $item_product->product_id }} py-1 px-2 mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" type="number" min="1" value="{{ $item_product->product_order_quantity}}">
                                        <input type="hidden" name="order_code" class="order_code" value="{{ $item_product->order_code }}">
                                        <input type="hidden" name="order_product_id" class="order_product_id" value="{{ $item_product->product_id }}">
                                        <input type="hidden" name="quantity_storage" class="quantity_storage_{{ $item_product->product_id}}" value="{{ $item_product->product->quantity}}">

                                        <button type="button" name="btn-sell_quantity" data-product_id="{{ $item_product->product_id }}" class="btn-sell_quantity py-1.5 px-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 {{ ($order_status == 1) ? 'hidden' : '' }}"><i class="fa-solid fa-file-arrow-down"></i></button>
                                    </form>
                                </td>
                                <td class="px-4 py-3 font-semibold text-black">{{ number_format($item_product->product_price, 0, ',', '.') }} VNĐ</td>
                                <td class="px-4 py-3 font-semibold text-black float-right">{{ number_format($into_price, 0, ',', '.') }} VNĐ</td>
                            </tr>
                        @endforeach
                        <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Tổng tiền</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="px-4 py-3 font-semibold text-black float-right">{{ number_format($total_price, 0, ',', '.') }} VNĐ</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="my-1.5">
                        <div class="flex justify-between">
                            <span class="text-gray-900 whitespace-nowrap dark:text-white">Mã phiếu mua hàng:</span>
                            <span class="font-medium">{{ $shipping->order->order_code_coupon }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-900 whitespace-nowrap dark:text-white">Giá trị phiếu mua hàng:</span>
                            <span class="font-medium">{{ number_format($shipping->order->order_code_value, 0, ',', '.') }} VNĐ</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-900 whitespace-nowrap dark:text-white">Thanh toán:</span>
                            <span class="font-medium">{{ number_format($total_price - $shipping->order->order_code_value, 0, ',', '.') }} VNĐ</span>
                        </div>
                    </div>
                    <div>
                        <form class="max-w-sm">
                            @csrf
                            <label for="small" class="block mb-2 text-sm text-gray-900 dark:text-white">Trạng thái đơn hàng:</label>
                            <select id="small" class="order_status block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option data-id="{{$shipping->order->id}}" value="0" {{ $shipping->order->order_status == 0 ? 'selected' : '' }}>Chờ xử lý</option>
                                <option data-id="{{$shipping->order->id}}" value="1" {{ $shipping->order->order_status == 1 ? 'selected' : '' }}>Đã xử lý-giao hàng</option>
                                <option data-id="{{$shipping->order->id}}" value="2" {{ $shipping->order->order_status == 2 ? 'selected' : '' }}>Hủy đơn hàng</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=" fixed top-[115px] right-[26px]">
        @include('admin.common.alert')
    </div>
    @include('admin.common.javascript')
@endsection

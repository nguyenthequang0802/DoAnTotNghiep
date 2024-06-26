@extends('Layouts.adminPage')
@section('content')
    <section class="py-3 sm:py-5">
        <div class="px-4">
            <!-- Start coding here -->
            <div class="bg-white min-h-[275px] dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2">
                        <form class="flex items-center form_search" method="POST">
                            @csrf
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" name="simple-search" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                            </div>
                        </form>
                    </div>
                    <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <a href="">
                            <button type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                </svg>
                                Thêm mới
                            </button>
                        </a>
                    </div>
                </div>
                <div class="overflow-x-auto p-2.5">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">#</th>
                                <th scope="col" class="px-4 py-3">Mã đơn hàng</th>
                                <th scope="col" class="px-4 py-3">Khách hàng</th>
                                <th scope="col" class="px-4 py-3">Tên người nhận</th>
                                <th scope="col" class="px-4 py-3">Trạng thái</th>
                                <th scope="col" class="px-4 py-3">Phương thức t.toán</th>
                                <th scope="col" class="px-4 py-3">Giảm giá</th>
                                <th scope="col" class="px-4 py-3">Thanh toán</th>
                                <th scope="col" class="px-4 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="results-search">
                        @foreach($orders as $item)
                            <tr class="border-b dark:border-gray-700">
                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $loop->index+1 }}</th>
                                <td class="px-4 py-3">{{ $item->order_code }}</td>

                                <td class="px-4 py-3">{{ $item->user->name }}</td>
                                <td class="px-4 py-3">{{ $item->shipping->shipping_name }}</td>
                                <td class="px-4 py-3">
                                    @if($item->order_status == 0)
                                        <p class="text-red-500 font-bold">Đơn hàng mới</p>
                                    @elseif($item->order_status == 1)
                                        <p class="text-green-500 font-bold">Đã xử lý-giao hàng</p>
                                    @elseif($item->order_status == 2)
                                        <p class="font-bold">Đơn hàng đã hủy</p>
                                    @endif
                                </td>
                                <td class="px-4 py-3">
                                    @if($item->order_payment_method == 'payUrl')
                                        Thanh toán ví điện tử Momo
                                    @elseif($item->order_payment_method == 'cod')
                                        Thanh toán khi nhận hàng
                                    @elseif($item->order_payment_method == 'redirect')
                                        Thanh toán VNpay
                                    @endif
                                </td>
                                <td class="px-4 py-3 font-semibold text-black">{{ number_format($item->order_code_value, 0, ',', '.') }} VNĐ</td>
                                <td class="px-4 py-3 font-semibold text-black">{{ number_format($item->order_total - $item->order_code_value, 0, ',', '.') }} VNĐ</td>
                                <td class="px-4 py-3 flex items-center justify-end">
                                    <a href="{{ route('admin.order.show', $item->order_code) }}" class="flex text-md py-2 px-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        <button>
                                            <p class="text-[#F7BE38]"><i class="fa-solid fa-pen-to-square"></i></p>
                                        </button>
                                    </a>
                                    <a href="" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="action-delete text-md flex py-2 px-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                        <button>
                                            <p class="text-red-700"><i class="fa-regular fa-trash-can"></i></p>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center">{{$orders->links('vendor.pagination.tailwind')}}</div>
            </div>
        </div>
    </section>
    <div class=" fixed top-[115px] right-[26px]">
        @include('admin.common.alert')
    </div>
    @include('admin.common.javascript')

    <script>
        $('.form_search').on('input', function (e){
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.order.search') }}',
                data: $('.form_search').serialize(),
                success: function(response){
                    console.log(response)
                    let html = '';
                    let urlTemplate = `{{ route('admin.order.show', ':order_code') }}`;
                    for (let i = 0; i < response.length; i++){
                        console.log(response[i].order_id);
                        let total_price_order = parseFloat(response[i].total_price).toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
                        let value_coupon = parseFloat(response[i].coupon_value).toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
                        let orderDetailUrl = urlTemplate.replace(':order_code', response[i].order_code);
                        if(response[i].order_status == 0){
                            order_status = 'Chưa xử lý';
                        } else if(response[i].order_status == 1){
                            order_status = 'Đã xử lý-giao hàng';
                        } else if(response[i].order_status == 2){
                            order_status = 'Hủy đơn hàng';
                        }

                        if(response[i].order_payment_method == 'cod'){
                            order_payment = 'Thanh toán khi nhận hàng';
                        } else if(response[i].order_payment_method == 'redirect'){
                            order_payment = 'Thanh toán VnPay';
                        } else if(response[i].order_payment_method == 'payUrl'){
                            order_payment = 'Thanh toán Momo';
                        }
                        html += `
                            <tr class="border-b dark:border-gray-700">
                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">${ i +1}</th>
                                <td class="px-4 py-3">${ response[i].order_code}</td>

                                <td class="px-4 py-3">${ response[i].user_name}</td>
                                <td class="px-4 py-3">${ response[i].shipping_name}</td>
                                <td class="px-4 py-3">
                                    ${order_status}
                                </td>
                                <td class="px-4 py-3">
                                    ${order_payment}
                                </td>
                                <td class="px-4 py-3 font-semibold text-black">${value_coupon}</td>
                                <td class="px-4 py-3 font-semibold text-black">${total_price_order}</td>
                                <td class="px-4 py-3 flex items-center justify-end">
                                     <a href="${orderDetailUrl}" class="flex text-md py-2 px-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        <button>
                                            <p class="text-[#F7BE38]"><i class="fa-solid fa-pen-to-square"></i></p>
                                        </button>
                                    </a>
                                    <a href="" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="action-delete text-md flex py-2 px-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                        <button>
                                            <p class="text-red-700"><i class="fa-regular fa-trash-can"></i></p>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        `
                    }

                    $('.results-search').html(html);
                },
            })
        })
    </script>
@endsection

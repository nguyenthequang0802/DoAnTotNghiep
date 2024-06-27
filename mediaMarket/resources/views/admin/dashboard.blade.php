@extends('Layouts.adminPage')
@section('content')
    <section class="py-3 sm:py-5">
        <div class="px-4">
            <div class="bg-white  dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden p-4 grid grid-cols-4 gap-4 items-center">
                <button class="flex flex-col gap-1 p-6 border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-5">
                    <span class="w-full text-center text-lg">{{number_format($number_cutomers, 0, ',', '.')}}</span>
                    <span class="w-full text-center text-lg">Khách Hàng</span>
                </button>
                <button class="flex flex-col gap-1 p-6 border border-gray-200 shadow text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-8 py-5">
                    <span class="w-full text-center text-lg">{{number_format($number_products, 0, ',', '.')}}</span>
                    <span class="w-full text-center text-lg">Sản Phẩm</span>
                </button>
                <button class="flex flex-col gap-1 p-6 border border-gray-200 shadow text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-8 py-5">
                    <span class="w-full text-center text-lg">{{number_format($number_brands, 0, ',', '.')}}</span>
                    <span class="w-full text-center text-lg">Nhãn hiệu</span>
                </button>
                <button class="flex flex-col gap-1 p-6 border border-gray-200 shadow text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-8 py-5">
                    <span class="w-full text-center text-lg">{{number_format($number_orders, 0, ',', '.')}}</span>
                    <span class="w-full text-center text-lg">Đơn Hàng</span>
                </button>
            </div>
        </div>
    </section>

    <section class="py-3 sm:py-5 mb-8">
        <div class="px-4">
            <div class="bg-white  dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden p-4 items-center">
                <div class="header-box px-4 mb-5">
                    <div class="header bg-[#d70018]  inline-block h-7 overflow-hidden after:border-t-[30px] after:border-t-[#be1e2d] after:border-l-[30px] after:border-l-[#d70018] after:ml-[40px]">
                        <h2 class="title text-white py-1 pr-14 pl-9 ml-14 bg-[#be1e2d] text-[14px] uppercase font-bold">
                            <a href="">Sản phẩm bán chạy</a>
                        </h2>
                    </div>
                </div>
                <div class="overflow-x-auto p-2.5">
                    @if(count($best_sell) === 0)
                        <div class="w-full flex flex-col justify-center items-center">
                            <h1 class="font-bold text-xl block">Chưa có sản phẩm</h1>
                            <img src="https://web.nvnstatic.net/tp/T0207/img/tmp/empty_cart.png?v=3">
                        </div>
                    @else
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">#</th>
                                <th scope="col" class="px-4 py-3">Tên sản phẩm</th>
                                <th scope="col" class="px-4 py-3">Ảnh</th>
                                <th scope="col" class="px-4 py-3">Nhà sản xuất</th>
                                <th scope="col" class="px-4 py-3">Màu</th>
                                <th scope="col" class="px-4 py-3">Số lượng</th>
                                <th scope="col" class="px-4 py-3">Trạng thái</th>
                                <th scope="col" class="px-4 py-3">Khuyến mãi</th>
                                <th scope="col" class="px-4 py-3">Giá niêm yết</th>
                                <th scope="col" class="px-4 py-3">Đã bán</th>
                            </tr>
                            </thead>
                            <tbody class="results-search">
                            @foreach($best_sell as $product)
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $loop->index+1 }}</th>
                                    <td class="px-4 py-3">{{ $product->name }}</td>
                                    <td class="px-4 py-3">
                                        @foreach($product->images as $key => $image)
                                            @if($key == 0)
                                                <img src="{{ asset($image->path_image) }}" class="w-16 md:w-32 max-w-full max-h-full" alt="{{ $product->name }}">
                                                @break
                                            @endif
                                        @endforeach
                                    </td>
                                    <td class="px-4 py-3">{{ $product->brand->name }}</td>
                                    <td class="px-4 py-3">{{ $product->color }}</td>
                                    <td class="px-4 py-3">{{ $product->quantity }}</td>
                                    <td class="px-4 py-3">{{ $product->status }}</td>
                                    <td class="px-4 py-3">{{ $product->promotion }}%</td>
                                    <td class="px-4 py-3"><strong>{{ number_format($product->price, 0, ',', '.') }} đ</strong></td>
                                    <td class="px-4 py-3">{{ $product->quantity_sold }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('Layouts.adminPage')
@section('content')
    <section class="py-3 sm:py-5">
        <div class="px-4">
            <div class="bg-white  dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden p-4 grid grid-cols-2 lg:grid-cols-4 gap-4 items-center">
                <button class="button-dashboard flex items-center gap-3 p-6 border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 text-gray-800 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-8 py-5">
                    <div class="h-10 w-10 rounded-lg bg-orange-200 flex items-center justify-center">
                        <svg class="w-[32px] h-[32px] text-orange-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                        </svg>

                    </div>
                    <div class="flex flex-col">
                        <span class="w-full text-lg">Khách Hàng</span>
                        <span class="w-full text-left text-lg">{{number_format($number_cutomers, 0, ',', '.')}}</span>
                        <div class="p-2.5"></div>
                    </div>
                </button>
                <button class="flex items-center gap-3 p-6 border border-gray-200 shadow text-gray-800 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-blue-300  font-medium rounded-lg text-sm px-8 py-5">
                    <div class="h-10 w-10 rounded-lg bg-blue-200 flex items-center justify-center">
                        <svg class="w-[32px] h-[32px] text-blue-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 13h3.439a.991.991 0 0 1 .908.6 3.978 3.978 0 0 0 7.306 0 .99.99 0 0 1 .908-.6H20M4 13v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-6M4 13l2-9h12l2 9M9 7h6m-7 3h8"/>
                        </svg>

                    </div>
                    <div class="flex flex-col">
                        <span class="w-full text-lg">Sản Phẩm</span>
                        <span class="w-full text-left text-lg">{{number_format($number_products, 0, ',', '.')}}</span>
                        <div class="p-2.5"></div>
                    </div>
                </button>
                <button class="flex items-center gap-3 p-6 border border-gray-200 shadow text-gray-800 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-8 py-5">
                    <div class="h-10 w-10 rounded-lg bg-green-200 flex items-center justify-center">
                        <svg class="w-[32px] h-[32px] text-green-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.583 8.445h.01M10.86 19.71l-6.573-6.63a.993.993 0 0 1 0-1.4l7.329-7.394A.98.98 0 0 1 12.31 4l5.734.007A1.968 1.968 0 0 1 20 5.983v5.5a.992.992 0 0 1-.316.727l-7.44 7.5a.974.974 0 0 1-1.384.001Z"/>
                        </svg>

                    </div>
                    <div class="flex flex-col">
                        <span class="w-full text-lg">Nhãn hiệu</span>
                        <span class="w-full text-left text-lg">{{number_format($number_brands, 0, ',', '.')}}</span>
                        <div class="p-2.5"></div>
                    </div>
                </button>
                <button class="flex items-center gap-3 border border-gray-200 shadow text-gray-800 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-8 py-5">
                    <div class="h-10 w-10 rounded-lg bg-purple-200 flex items-center justify-center">
                        <svg class="w-[32px] h-[32px] text-purple-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6"/>
                        </svg>

                    </div>
                    <div class="flex flex-col">
                        <span class="w-full text-lg">Đơn Hàng</span>
                        <span class="w-full text-left text-lg">{{number_format($number_orders, 0, ',', '.')}}</span>
                        <div class="p-2.5"></div>
                    </div>
                </button>
            </div>
        </div>
    </section>

    <section class="py-3 sm:py-5 mb-8">
        <div class="px-4">
            <div class="bg-white  dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden p-4 items-center">
                <div class="header-box px-4 mb-5">
                    <div class="header bg-[#009981]  inline-block h-7 overflow-hidden after:border-t-[30px] after:border-t-[#00483d] after:border-l-[30px] after:border-l-[#009981] after:ml-[40px]">
                        <h2 class="title text-white py-1 pr-14 pl-9 ml-14 bg-[#00483d] text-[14px] uppercase font-bold">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        {{--$('.button-dashboard').on('click', function (e){--}}
        {{--    e.preventDefault();--}}
        {{--    let name = 'test123';--}}
        {{--    let slug = 'test123';--}}
        {{--    let description = 'test description';--}}
        {{--    let brand = '5';--}}
        {{--    let category = '36';--}}
        {{--    let color = 'red';--}}
        {{--    let qty = '3';--}}
        {{--    let price = '100000';--}}
        {{--    let promotion = '12';--}}
        {{--    let status = '1';--}}
        {{--    let info_product = 'test'--}}
        {{--    let _token = $('input[name="_token"]').val();--}}

        {{--    $.ajax({--}}
        {{--        url: '{{ route("admin.product.store") }}',--}}
        {{--        method: 'POST',--}}
        {{--        data: {--}}
        {{--            name: name,--}}
        {{--            slug: slug,--}}
        {{--            description: description,--}}
        {{--            brand: brand,--}}
        {{--            category: category,--}}
        {{--            color: color,--}}
        {{--            qty: qty,--}}
        {{--            price: price,--}}
        {{--            promotion: promotion,--}}
        {{--            status: status,--}}
        {{--            info_product: info_product,--}}
        {{--            _token: _token,--}}
        {{--        },--}}
        {{--        success: function(response){--}}
        {{--            alert('Thêm thành công');--}}
        {{--        }--}}
        {{--    })--}}
        {{--})--}}
    </script>
@endsection

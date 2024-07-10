@extends('Layouts.homePage')

@section('content')
    <div class="slider-container mt-2.5 mb-5 lg:my-8">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-32 overflow-hidden rounded-lg md:h-72">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('storage/banner/store/store-1.jpg') }}" class="h-32 lg:h-72 absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('storage/banner/store/store-4.png') }}" class="h-32 lg:h-72 absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('storage/banner/store/store-9.jpg') }}" class="h-32 lg:h-72 absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

    </div>
    <div class="list-product-container grid grid-cols-1 lg:grid-cols-4 mb-8">
        <div class="box-filter col-span-1 mx-2 lg:mx-0 p-5 lg:p-0 lg:pr-8 border border-gray-200 lg:border-0 rounded-lg mb-4 max-md:shadow-md max-md:bg-white">
            <div class="list-filters ">
                <h3 class="text-md font-bold block lg:hidden mb-2">Bộ lọc:</h3>
                <div class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <div class="flex gap-2.5 justify-between items-center border-b border-gray-300 pb-1 mt-2">
                        <h3 class="text-black font-bold text-lg">Khoảng giá</h3>
                        <p class="text-gray-500 font-normal text-sm">
                            <span id="min_price_value">{{ number_format(request()->has('min_price') ? request('min_price') : $minPrice, 0, ',', '.')}}</span>
                            -
                            <span id="max_price_value">{{ number_format(request()->has('max_price') ? request('max_price') : $maxPrice, 0, ',', '.')}}</span>
                        </p>
                    </div>
                    <div class="relative mb-6">
                        <label for="labels-range-input" class="sr-only">Labels range</label>
                        <input id="labels-range-input" type="range" value="{{ request()->has('min_price') ? request('min_price') : 0}}" min="{{$minPrice}}" max="{{ $maxPrice }}" step="1000000" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700" oninput="change_price_range(this.value)" onchange="apply_price_filter(this.value)">
                        <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">{{ number_format($minPrice, 0, ',', '.') }} VNĐ</span>
                        <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">{{ number_format($maxPrice, 0, ',', '.') }}VNĐ</span>
                    </div>
                </div>
                <div class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <div class="flex gap-2.5 justify-between items-center pb-1 mt-2">
                        <h3 class="text-black font-bold text-lg">Hãng sản xuất</h3>
                    </div>
                    <div class="relative mb-6 grid grid-cols-3 lg:grid-cols-2 max-lg:gap-2.5">
                        @foreach($brands as $brand)
                            <a href="{{ route('user.store', ['category_slug' => $category->slug, ...$query, 'brand' => $brand->slug]) }}">
                                <button type="button" class="h-[40px] w-[125px] flex justify-center items-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                                    <img class="h-[32px]" src="{{ asset($brand->icon_path) }}">
                                </button>
                            </a>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
        <div class="box-products col-span-3">

            <div class="card-listProducts w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="card-body-listProduct">
                    <div class="header-card px-4 mb-6 flex justify-between">
                        <div class="flex">
                            <a href="{{ route('user.store', ['category_slug' => $category->slug, ...$query, 'price' => 'ASC']) }}">
                                <button type="button" class="py-2.5 px-2 lg:px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Giá tăng dần</button>
                            </a>
                            <a href="{{ route('user.store', ['category_slug' => $category->slug, ...$query, 'price' => 'DESC']) }}">
                                <button type="button" class="py-2.5 px-2 lg:px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Giá giảm dần</button>
                            </a>
                        </div>

                        <div class="flex">
                            <a href="{{ route('user.store', ['category_slug' => $category->slug, ...$query, 'name' => 'ASC']) }}">
                                <button type="button" class="py-2.5 px-2.5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                    <span class="text-[20px]">
                                        <i class="fa-solid fa-arrow-up-a-z"></i>
                                    </span>
                                </button>
                            </a>
                            <a href="{{ route('user.store', ['category_slug' => $category->slug, ...$query, 'name' => 'DESC']) }}">
                                <button type="button" class="py-2.5 px-2.5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                    <span class="text-[20px]">
                                        <i class="fa-solid fa-arrow-down-z-a"></i>
                                    </span>
                                </button>
                            </a>
                        </div>

                    </div>
                    <div class="list-products grid grid-cols-2 gap-2 md:grid-cols-3 xl:grid-cols-4 lg:gap-3 mb-5 px-4">
                        @foreach($products as $product)
                            <div class="product-item col-span-1">
                                <div class="card-item bg-white flex pt-2.5 px-2.5 pb-3.5 border-2 h-full flex-col items-center justify-start rounded border-[#f0f0f0] hover:border-white hover:drop-shadow-xl max-md:border-0 cursor-pointer">
                                    <a href="{{ route('user.product_detail', $product->slug) }}" class="discourd-item pb-2 h-8 flex w-full items-center justify-start">
                                        <p class="border-2 m-1 items-center whitespace-nowrap rounded border-[#be1e2d] bg-[#be1e2d] px-2 py-1 text-xs text-white max-md:text-[10px]">Giảm {{ $product->promotion }}%</p>
                                        <p class="border-2 m-1 items-center whitespace-nowrap rounded border-[#be1e2d] bg-white px-2 py-1 text-xs text-[#be1e2d] max-md:text-[10px]">Trả góp 0%</p>
                                    </a>
                                    <a href="{{ route('user.product_detail', $product->slug) }}" class="thumbnail-item relative w-full">
                                        <div class="w-full h-[250px] max-md:h-auto relative flex items-center justify-center">
                                            <div class="img-product transition duration-200 ease-in-out hover:scale-105 md:h-[200px] md:w-[200px]">
                                                @foreach($product->images as $key => $image)
                                                    @if($key == 0)
                                                        <img src="{{ asset($image->path_image) }}" width="600" height="600">
                                                    @endif
                                                @endforeach
{{--                                                <img src="https://cdn-v2.didongviet.vn/files/products/2024/3/16/1/1713264914921_20215292_6208434_02.jpg" width="600" height="600">--}}
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ route('user.product_detail', $product->slug) }}" class="w-full">
                                        <h3 class="name-item w-full px-2 py-2.5 text-left text-sm max-md:text-[13px] font-bold text-black">{{ $product->name }}</h3>
                                    </a>
                                    <div class="price-item flex w-full items-center justify-start px-2 py-2.5">
                                        <a href="{{ route('user.product_detail', $product->slug) }}" class="w-full flex flex-col items-start justify-start">
                                            <span class="price-sale text-left text-[16px] font-bold text-[#be1e2d]"><p class="inline-block">{{ number_format($product->price - $product->price * $product->promotion / 100, 0, ',', '.') }}</p> VNĐ</span>
                                            <span class="price text-left line-through text-sm text-[#666666]"><del class="inline-block">{{ number_format($product->price, 0, ',', '.') }}</del> VNĐ</span>
                                        </a>
                                        <form>
                                            @csrf
                                            <input type="hidden" class="cart_product_id_{{ $product->id }}" value="{{ $product->id }}">
                                            <input type="hidden" class="cart_product_name_{{ $product->id }}" value="{{ $product->name }}">
                                            <input type="hidden" class="cart_product_quantity_{{ $product->id }}" value="1">
                                            <input type="hidden" class="storage_product_qty_{{ $product->id }}" value="{{ $product->quantity }}">
                                            <input type="hidden" class="cart_product_color_{{ $product->id }}" value="{{ $product->color }}">
                                            <input type="hidden" class="cart_product_image_{{ $product->id }}" value="{{ $product->images->first()}}">
                                            <input type="hidden" class="cart_product_price_{{ $product->id }}" value="{{ $product->price }}">
                                            <input type="hidden" class="cart_product_promotion_{{ $product->id }}" value="{{ $product->promotion }}">
                                            <button type="submit" data-id_product="{{ $product->id }}" class="btn-add_to_cart h-11 w-11 flex justify-center items-center my-2.5 hover:text-white hover:bg-[#00483d] text-[#333] bg-white border border-[#00483d] focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @if($products->total() != 0)
                        <div class="d-flex justify-content-center">{{$products->links('vendor.pagination.tailwind')}}</div>
                    @else
                        <p>Không có sản phẩm</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        const min_price = {{ $minPrice }};
        const max_price = {{ $maxPrice }};
        const delta = 1000000;

        function change_price_range(value) {
            value = parseInt(value);
            document.getElementById("min_price_value").innerText = Math.max(min_price, value - delta).toLocaleString('vi-VN');
            document.getElementById("max_price_value").innerText = Math.min(max_price, value + delta).toLocaleString('vi-VN');
        }

        function apply_price_filter(value){
            value = parseInt(value);
            const min_filter_price = Math.max(min_price, value - delta).toString();
            const max_filter_price = Math.min(max_price, value + delta).toString();

            const url = new URL(window.location.href);
            console.log(url);
            // url.searchParams.set('min_price', min_filter_price);
            url.searchParams.set('min_price', min_filter_price);
            url.searchParams.set('max_price', max_filter_price);
            console.log(url);

            // redirect to new url
            window.location.href = url;
        }
    </script>
@endsection

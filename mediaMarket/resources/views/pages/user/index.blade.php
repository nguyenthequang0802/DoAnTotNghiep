@extends('Layouts.homePage')

@section('content')
    <div class="slider-container my-2.5 lg:my-8">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative min-h-[15rem] overflow-hidden rounded-lg lg:h-[30rem] xl:h-[40rem]">
                @foreach($banners as $banner)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset($banner->path) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="{{ $banner->name }}">
                    </div>
                @endforeach
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                @foreach($banners as $banner)
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide {{ $loop->index }}" data-carousel-slide-to="{{ $loop->index }}"></button>
                @endforeach
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
    <div class="quick-sale-container my-1.5 lg:my-2.5">
        <div class="quick-sales grid grid-cols-2 lg:grid-cols-4 gap-2">
            <div class="quick-sales-item">
                <a href="">
                    <img class="w-full rounded-md" src="https://cdn.hoanghamobile.com/i/home/Uploads/2024/04/19/s23-ultra-21790.gif">
                </a>
            </div>
            <div class="quick-sales-item">
                <a href="">
                    <img class="w-full rounded-md" src="https://cdn.hoanghamobile.com/i/home/Uploads/2024/04/15/redmi-13c.png">
                </a>
            </div>
            <div class="quick-sales-item">
                <a href="">
                    <img class="w-full rounded-md" src="https://cdn.hoanghamobile.com/i/home/Uploads/2024/04/17/sanphamhotwweb.png">
                </a>
            </div>
            <div class="quick-sales-item">
                <a href="">
                    <img class="w-full rounded-md" src="https://cdn.hoanghamobile.com/i/home/Uploads/2024/04/18/huawei-matebook-d-15-amd-2021.png">
                </a>
            </div>
        </div>
    </div>
    <div class="box-sale">
        <div class="box-sale-container w-full py-2.5 rounded-md bg-white my-1.5 lg:my-2.5 max-md:bg-[#f2f2f2]" style="box-shadow: 0 0 3px 0 #dee2e6">
            <div class="header-box px-4 mb-5">
                <div class="header bg-[#009981]  inline-block h-7 overflow-hidden after:border-t-[30px] after:border-t-[#00483d] after:border-l-[30px] after:border-l-[#009981] after:ml-[40px]">
                    <h2 class="title text-white py-1 pr-14 pl-9 ml-14 bg-[#00483d] text-[14px] uppercase font-bold">
                        <a href="">Khuyến mãi hot</a>
                    </h2>
                </div>
            </div>
            <div class="list-products grid grid-cols-2 gap-2 md:grid-cols-3 xl:grid-cols-5 lg:gap-3 mb-5 px-4">
                @foreach($sale_products as $sale_product)
                    <div class="product-item col-span-1">
                        <div class="card-item bg-white flex pt-2.5 px-2.5 pb-3.5 border-2 h-full flex-col items-center justify-start rounded border-[#f0f0f0] hover:border-white hover:drop-shadow-xl max-md:border-0 cursor-pointer">
                            <a href="{{ route('user.product_detail', $sale_product->slug) }}" class="discourd-item pb-2 h-8 flex w-full items-center justify-start">
                                <p class="border-2 m-1 items-center whitespace-nowrap rounded border-[#be1e2d] bg-[#be1e2d] px-2 py-1 text-xs text-white max-md:text-[10px]">Giảm {{ $sale_product->promotion }}%</p>
                                <p class="border-2 m-1 items-center whitespace-nowrap rounded border-[#be1e2d] bg-white px-2 py-1 text-xs text-[#be1e2d] max-md:text-[10px]">Trả góp 0%</p>
                            </a>
                            <a href="{{ route('user.product_detail', $sale_product->slug) }}" class="thumbnail-item relative w-full">
                                <div class="w-full h-[250px] max-md:h-auto relative flex items-center justify-center">
                                    <div class="img-product transition duration-200 ease-in-out hover:scale-105 md:h-[200px] md:w-[200px]">
                                        <img src="https://cdn-v2.didongviet.vn/files/products/2024/3/16/1/1713264914921_20215292_6208434_02.jpg" width="600" height="600">
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('user.product_detail', $sale_product->slug) }}" class="w-full">
                                <h3 class="name-item w-full px-2 py-2.5 text-left text-sm max-md:text-[13px] font-bold text-black">{{ $sale_product->name }}</h3>
                            </a>
                            <div class="price-item flex w-full items-center justify-start px-2 py-2.5">
                                <a href="{{ route('user.product_detail', $sale_product->slug) }}" class="w-full flex flex-col items-start justify-start">
                                    <span class="price-sale text-left text-[16px] font-bold text-[#be1e2d]"><p class="price_format inline-block">{{ number_format($sale_product->price - $sale_product->price * $sale_product->promotion / 100) }}</p> VNĐ</span>
                                    <span class="price text-left line-through text-sm text-[#666666]"><del class="price_format inline-block">{{ number_format($sale_product->price) }}</del> VNĐ</span>
                                </a>
                                <form>
                                    @csrf
                                    <input type="hidden" class="cart_product_id_{{ $sale_product->id }}" value="{{ $sale_product->id }}">
                                    <input type="hidden" class="cart_product_name_{{ $sale_product->id }}" value="{{ $sale_product->name }}">
                                    <input type="hidden" class="cart_product_quantity_{{ $sale_product->id }}" value="1">
                                    <input type="hidden" class="cart_product_color_{{ $sale_product->id }}" value="{{ $sale_product->color }}">
                                    <input type="hidden" class="storage_product_qty_{{ $sale_product->id }}" value="{{ $sale_product->quantity }}">
                                    <input type="hidden" class="cart_product_image_{{ $sale_product->id }}" value="{{ $sale_product->images->first()}}">
                                    <input type="hidden" class="cart_product_price_{{ $sale_product->id }}" value="{{ $sale_product->price }}">
                                    <input type="hidden" class="cart_product_promotion_{{ $sale_product->id }}" value="{{ $sale_product->promotion }}">
                                    <button type="submit" data-id_product="{{ $sale_product->id }}" class="btn-add_to_cart h-11 w-11 flex justify-center items-center my-2.5 hover:text-white hover:bg-[#00483d] text-[#333] bg-white border border-[#00483d] focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                        <i class="fa-solid fa-cart-plus"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
{{--            <a href="" class="see-all px-4 mb-3 flex justify-center items-center">--}}
{{--                <button type="button" class="hover:text-white hover:bg-[#be1e2d] bg-[white] border border-[#be1e2d] focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Xem thêm</button>--}}
{{--            </a>--}}
        </div>
    </div>

    <div class="box-laptop">
        <div class="box-sale-container w-full py-2.5 rounded-md bg-white my-1.5 lg:my-2.5 max-md:bg-[#f2f2f2]" style="box-shadow: 0 0 3px 0 #dee2e6">
            <div class="header-box px-4 mb-5">
                <div class="header bg-[#009981]  inline-block h-7 overflow-hidden after:border-t-[30px] after:border-t-[#00483d] after:border-l-[30px] after:border-l-[#009981] after:ml-[40px]">
                    <h2 class="title text-white py-1 pr-14 pl-9 ml-14 bg-[#00483d] text-[14px] uppercase font-bold">
                        <a href="">Laptop</a>
                    </h2>
                </div>
            </div>
            <div class="list-products grid grid-cols-2 gap-2 md:grid-cols-3 xl:grid-cols-5 lg:gap-3 mb-5 px-4">
                @foreach($laptops as $laptop)
                    <div class="product-item col-span-1">
                        <div class="card-item bg-white flex pt-2.5 px-2.5 pb-3.5 border-2 h-full flex-col items-center justify-start rounded border-[#f0f0f0] hover:border-white hover:drop-shadow-xl max-md:border-0 cursor-pointer">
                            <a href="{{ route('user.product_detail', $laptop->slug) }}" class="discourd-item pb-2 h-8 flex w-full items-center justify-start">
                                <p class="border-2 m-1 items-center whitespace-nowrap rounded border-[#be1e2d] bg-[#be1e2d] px-2 py-1 text-xs text-white max-md:text-[10px]">Giảm {{ $laptop->promotion }}%</p>
                                <p class="border-2 m-1 items-center whitespace-nowrap rounded border-[#be1e2d] bg-white px-2 py-1 text-xs text-[#be1e2d] max-md:text-[10px]">Trả góp 0%</p>
                            </a>
                            <a href="{{ route('user.product_detail', $laptop->slug) }}" class="thumbnail-item relative w-full">
                                <div class="w-full h-[250px] max-md:h-auto relative flex items-center justify-center">
                                    <div class="img-product transition duration-200 ease-in-out hover:scale-105 md:h-[200px] md:w-[200px]">
                                        <img src="https://cdn-v2.didongviet.vn/files/products/2024/3/16/1/1713264914921_20215292_6208434_02.jpg" width="600" height="600">
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('user.product_detail', $laptop->slug) }}" class="w-full">
                                <h3 class="name-item w-full px-2 py-2.5 text-left text-sm max-md:text-[13px] font-bold text-black">{{ $laptop->name }}</h3>
                            </a>
                            <div class="price-item flex w-full items-center justify-start px-2 py-2.5">
                                <a href="{{ route('user.product_detail', $laptop->slug) }}" class="w-full flex flex-col items-start justify-start">
                                    <span class="price-sale text-left text-[16px] font-bold text-[#be1e2d]"><p class="price_format inline-block">{{ number_format($laptop->price - $laptop->price * $laptop->promotion / 100) }}</p> VNĐ</span>
                                    <span class="price text-left line-through text-sm text-[#666666]"><del class="price_format inline-block">{{ number_format($laptop->price) }}</del> VNĐ</span>
                                </a>
                                <form>
                                    @csrf
                                    <input type="hidden" class="cart_product_id_{{ $laptop->id }}" value="{{ $laptop->id }}">
                                    <input type="hidden" class="cart_product_name_{{ $laptop->id }}" value="{{ $laptop->name }}">
                                    <input type="hidden" class="cart_product_quantity_{{ $laptop->id }}" value="1">
                                    <input type="hidden" class="cart_product_color_{{ $laptop->id }}" value="{{ $laptop->color }}">
                                    <input type="hidden" class="storage_product_qty_{{ $laptop->id }}" value="{{ $laptop->quantity }}">
                                    <input type="hidden" class="cart_product_image_{{ $laptop->id }}" value="{{ $laptop->images->first()}}">
                                    <input type="hidden" class="cart_product_price_{{ $laptop->id }}" value="{{ $laptop->price }}">
                                    <input type="hidden" class="cart_product_promotion_{{ $laptop->id }}" value="{{ $laptop->promotion }}">
                                    <button type="submit" data-id_product="{{ $laptop->id }}" class="btn-add_to_cart h-11 w-11 flex justify-center items-center my-2.5 hover:text-white hover:bg-[#00483d] text-[#333] bg-white border border-[#00483d] focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                        <i class="fa-solid fa-cart-plus"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('user.store', ['laptop']) }}" class="see-all px-4 mb-3 flex justify-center items-center">
                <button type="button" class="hover:text-white hover:bg-[#0a6e5f] bg-white border border-[#0a6e5f] focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Xem thêm</button>
            </a>
        </div>
    </div>

    <div class="box-phone">
        <div class="box-sale-container w-full py-2.5 rounded-md bg-white my-1.5 lg:my-2.5 max-md:bg-[#f2f2f2]" style="box-shadow: 0 0 3px 0 #dee2e6">
            <div class="header-box px-4 mb-5">
                <div class="header bg-[#009981]  inline-block h-7 overflow-hidden after:border-t-[30px] after:border-t-[#00483d] after:border-l-[30px] after:border-l-[#009981] after:ml-[40px]">
                    <h2 class="title text-white py-1 pr-14 pl-9 ml-14 bg-[#00483d] text-[14px] uppercase font-bold">
                        <a href="">Điện thoại</a>
                    </h2>
                </div>
            </div>
            <div class="list-products grid grid-cols-2 gap-2 md:grid-cols-3 xl:grid-cols-5 lg:gap-3 mb-5 px-4">
                @foreach($phones as $phone)
                    <div class="product-item col-span-1">
                        <div class="card-item bg-white flex pt-2.5 px-2.5 pb-3.5 border-2 h-full flex-col items-center justify-start rounded border-[#f0f0f0] hover:border-white hover:drop-shadow-xl max-md:border-0 cursor-pointer">
                            <a href="{{ route('user.product_detail', $phone->slug) }}" class="discourd-item pb-2 h-8 flex w-full items-center justify-start">
                                <p class="border-2 m-1 items-center whitespace-nowrap rounded border-[#be1e2d] bg-[#be1e2d] px-2 py-1 text-xs text-white max-md:text-[10px]">Giảm {{ $phone->promotion }}%</p>
                                <p class="border-2 m-1 items-center whitespace-nowrap rounded border-[#be1e2d] bg-white px-2 py-1 text-xs text-[#be1e2d] max-md:text-[10px]">Trả góp 0%</p>
                            </a>
                            <a href="{{ route('user.product_detail', $phone->slug) }}" class="thumbnail-item relative w-full">
                                <div class="w-full h-[250px] max-md:h-auto relative flex items-center justify-center">
                                    <div class="img-product transition duration-200 ease-in-out hover:scale-105 md:h-[200px] md:w-[200px]">
                                        <img src="https://cdn-v2.didongviet.vn/files/products/2024/3/16/1/1713264914921_20215292_6208434_02.jpg" width="600" height="600">
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('user.product_detail', $phone->slug) }}" class="w-full">
                                <h3 class="name-item w-full px-2 py-2.5 text-left text-sm max-md:text-[13px] font-bold text-black">{{ $phone->name }}</h3>
                            </a>
                            <div class="price-item flex w-full items-center justify-start px-2 py-2.5">
                                <a href="{{ route('user.product_detail', $phone->slug) }}" class="w-full flex flex-col items-start justify-start">
                                    <span class="price-sale text-left text-[16px] font-bold text-[#be1e2d]"><p class="price_format inline-block">{{ number_format($phone->price - $phone->price * $phone->promotion / 100) }}</p> VNĐ</span>
                                    <span class="price text-left line-through text-sm text-[#666666]"><del class="price_format inline-block">{{ number_format($phone->price) }}</del> VNĐ</span>
                                </a>
                                <form>
                                    @csrf
                                    <input type="hidden" class="cart_product_id_{{ $phone->id }}" value="{{ $phone->id }}">
                                    <input type="hidden" class="cart_product_name_{{ $phone->id }}" value="{{ $phone->name }}">
                                    <input type="hidden" class="cart_product_quantity_{{ $phone->id }}" value="1">
                                    <input type="hidden" class="cart_product_color_{{ $phone->id }}" value="{{ $phone->color }}">
                                    <input type="hidden" class="storage_product_qty_{{ $phone->id }}" value="{{ $phone->quantity }}">
                                    <input type="hidden" class="cart_product_image_{{ $phone->id }}" value="{{ $phone->images->first()}}">
                                    <input type="hidden" class="cart_product_price_{{ $phone->id }}" value="{{ $phone->price }}">
                                    <input type="hidden" class="cart_product_promotion_{{ $phone->id }}" value="{{ $phone->promotion }}">
                                    <button type="submit" data-id_product="{{ $phone->id }}" class="btn-add_to_cart h-11 w-11 flex justify-center items-center my-2.5 hover:text-white hover:bg-[#00483d] text-[#333] bg-white border border-[#00483d] focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                        <i class="fa-solid fa-cart-plus"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('user.store', ['dien-thoai']) }}" class="see-all px-4 mb-3 flex justify-center items-center">
                <button type="button" class="hover:text-white hover:bg-[#0a6e5f] bg-white border border-[#0a6e5f] focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Xem thêm</button>
            </a>
        </div>
    </div>
    @if(!empty($posts))
        <div class="box-news">
            <div class="box-news-container w-full py-2.5 rounded-md bg-white my-1.5 lg:my-2.5 max-md:bg-[#f2f2f2]" style="box-shadow: 0 0 3px 0 #dee2e6">
                <div class="header-box px-4 mb-5">
                    <div class="header bg-[#009981]  inline-block h-7 overflow-hidden after:border-t-[30px] after:border-t-[#00483d] after:border-l-[30px] after:border-l-[#009981] after:ml-[40px]">
                        <h2 class="title text-white py-1 pr-14 pl-9 ml-14 bg-[#00483d] text-[14px] uppercase font-bold">
                            <a href="">Tin tức mới nhất</a>
                        </h2>
                    </div>
                </div>
                <div class="list-news w-full grid grid-cols-1 lg:grid-cols-2 gap-3 mb-5 px-4">
                    @php $first_post = $posts->first(); @endphp
                    <div class="hot-news col-span-1 w-full">
                        <div class="news-item inline-block ml-0 mb-0 w-full float-left relative overflow-hidden py-2.5">
                            <div class="img-news w-full h-full float-left bg-cover bg-center">
                                <a href="{{ route('user.post_detail', [$first_post->slug]) }}" class="relative inline-block">
                                    <img class="rounded-lg" src="{{ asset($first_post->preview_image) }}" alt="{{ $first_post->title }}">
                                </a>
                            </div>
                            <div class="title-news pl-0 w-full float-left ">
                                <a href="{{ route('user.post_detail', [$first_post->slug]) }}" class="mt-2.5 text-xl font-bold overflow-hidden text-[#333]">
                                    {{ $first_post->title }}
                                </a>
                                <div class="flex gap-2.5 items-center max-xl:text-xs">
                                        <span class="flex gap-1 items-center text-gray-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="16" width="16"><path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                                            <p>{{ $first_post->created_at->format('d-m-Y H:i') }}</p>
                                        </span>
                                    <span class="flex gap-1 items-center text-gray-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" height="16" width="16"><path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/></svg>
                                            <p>{{ number_format($first_post->views) }} lượt xem</p>
                                        </span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="normal-news col-span-1 w-full">
                        @foreach($posts->slice(1) as $post)
                            <div class="news-item md:flex float-left w-full relative max-lg:border max-lg:border-gray-200 max-lg:pt-0 rounded-lg max-lg:mt-2 lg:border-b lg:border-b-[#ebebeb] py-3.5 mb-0 items-center">
                                <div class="img-news w-full md:w-[30%] h-full float-left bg-cover bg-center">
                                    <a href="{{ route('user.post_detail', [$post->slug]) }}" class="relative inline-block">
                                        <img class="rounded-lg" src="{{ asset($post->preview_image) }}" alt="{{ $post->title }}">
                                    </a>
                                </div>
                                <div class="title-news-item w-full md:w-[70%] float-left pl-2.5">
                                    <a href="{{ route('user.post_detail', [$post->slug]) }}" class="mt-2.5 text-xl font-bold lg:text-sm xl:font-medium overflow-hidden text-[#333]">{{ $post->title }}</a>
                                    <div class="description-news">
                                        <span class="inline-block h-[50px] overflow-hidden text-xs">
                                            {!! $post->description !!}
                                        </span>
                                    </div>
                                    <div class="flex gap-2.5 items-center max-xl:text-xs">
                                        <span class="flex gap-1 items-center text-gray-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="16" width="16"><path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                                            <p>{{ $first_post->created_at->format('d-m-Y H:i') }}</p>
                                        </span>
                                        <span class="flex gap-1 items-center text-gray-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" height="16" width="16"><path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/></svg>
                                            <p>{{ number_format($first_post->views) }} lượt xem</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <a href="{{ route('user.post', ['tin-tuc']) }}" class="see-all px-4 mb-3 flex justify-center items-center">
                    <button type="button" class="hover:text-white hover:bg-[#0a6e5f] bg-white border border-[#0a6e5f] focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Xem thêm</button>
                </a>
            </div>
        </div>
    @endif

    <div class="box-core_value grid grid-cols-2 lg:grid-cols-4 gap-5 py-2.5 px-8 lg:px-16 my-5">
        <div class="item flex w-[1/4] text-center items-center justify-center">
            <span class="icon text-[60px] mr-2.5 text-[#00917a]">
                <i class="fa-regular fa-circle-check"></i>
            </span>
            <div class="text text-left pb-2">
                <span class="block text-[13px]">Sản phẩm</span>
                <strong class="block uppercase text-[16px] font-bold">Chính hãng</strong>
            </div>
        </div>
        <div class="item flex w-[1/4] text-center items-center justify-center">
            <span class="icon text-[60px] mr-2.5 text-[#00917a]">
                <i class="fa-solid fa-cart-flatbed"></i>
            </span>
            <div class="text text-left pb-2">
                <span class="block text-[13px]">Miễn phí vận chuyển</span>
                <strong class="block uppercase text-[16px] font-bold">Toàn quốc</strong>
            </div>
        </div>
        <div class="item flex w-[1/4] text-center items-center justify-center">
            <span class="icon text-[60px] mr-2.5 text-[#00917a]">
                <i class="fa-solid fa-headphones-simple"></i>
            </span>
            <div class="text text-left pb-2">
                <span class="block text-[13px]">Hotline hỗ trợ</span>
                <strong class="block uppercase text-[16px] font-bold">1900 323 322</strong>
            </div>
        </div>
        <div class="item flex w-[1/4] text-center items-center justify-center">
            <span class="icon text-[60px] mr-2.5 text-[#00917a]">
                <i class="fa-solid fa-arrows-rotate"></i>
            </span>
            <div class="text text-left pb-2">
                <span class="block text-[13px]">Thủ tục đổi trả</span>
                <strong class="block uppercase text-[16px] font-bold">Dễ Dàng</strong>
            </div>
        </div>
    </div>
@endsection

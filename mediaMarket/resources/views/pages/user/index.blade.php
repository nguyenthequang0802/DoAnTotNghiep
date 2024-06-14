@extends('Layouts.homePage')

@section('content')
    <div class="slider-container my-2.5 lg:my-8">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative min-h-[15rem] overflow-hidden rounded-lg lg:h-[30rem] xl:h-[40rem]">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://hoanghamobile.com/Uploads/2024/04/25/dien-thoai-iphone-6.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://hoanghamobile.com/Uploads/2024/04/25/dien-thoai-iphone-13.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://hoanghamobile.com/Uploads/2024/04/25/dien-thoai-iphone-14.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://hoanghamobile.com/Uploads/2024/04/25/dien-thoai-iphone-7.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://hoanghamobile.com/Uploads/2024/04/25/dien-thoai-iphone-4.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
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
                <div class="header bg-[#d70018]  inline-block h-7 overflow-hidden after:border-t-[30px] after:border-t-[#be1e2d] after:border-l-[30px] after:border-l-[#d70018] after:ml-[40px]">
                    <h2 class="title text-white py-1 pr-14 pl-9 ml-14 bg-[#be1e2d] text-[14px] uppercase font-bold">
                        <a href="">Khuyến mãi hot</a>
                    </h2>
                </div>
            </div>
            <div class="list-products grid grid-cols-2 gap-2 md:grid-cols-3 xl:grid-cols-5 lg:gap-3 mb-5 px-4">
                @foreach($sale_products as $sale_product)
                    <div class="product-item col-span-1">
                        <div class="card-item bg-white flex pt-2.5 px-2.5 pb-3.5 border-2 h-full flex-col items-center justify-start rounded border-[#f0f0f0] hover:border-white hover:drop-shadow-xl max-md:border-0 cursor-pointer">
                            <a href="{{ route('user.product_detail', $sale_product->id) }}" class="discourd-item pb-2 h-8 flex w-full items-center justify-start">
                                <p class="border-2 m-1 items-center whitespace-nowrap rounded border-[#be1e2d] bg-[#be1e2d] px-2 py-1 text-xs text-white max-md:text-[10px]">Giảm {{ $sale_product->promotion }}%</p>
                                <p class="border-2 m-1 items-center whitespace-nowrap rounded border-[#be1e2d] bg-white px-2 py-1 text-xs text-[#be1e2d] max-md:text-[10px]">Trả góp 0%</p>
                            </a>
                            <a href="{{ route('user.product_detail', $sale_product->id) }}" class="thumbnail-item relative w-full">
                                <div class="w-full h-[250px] max-md:h-auto relative flex items-center justify-center">
                                    <div class="img-product transition duration-200 ease-in-out hover:scale-105 md:h-[200px] md:w-[200px]">
                                        <img src="https://cdn-v2.didongviet.vn/files/products/2024/3/16/1/1713264914921_20215292_6208434_02.jpg" width="600" height="600">
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('user.product_detail', $sale_product->id) }}" class="w-full">
                                <h3 class="name-item w-full px-2 py-2.5 text-left text-sm max-md:text-[13px] font-bold text-black">{{ $sale_product->name }}</h3>
                            </a>
                            <div class="price-item flex w-full items-center justify-start px-2 py-2.5">
                                <a href="{{ route('user.product_detail', $sale_product->id) }}" class="w-full flex flex-col items-start justify-start">
                                    <span class="price-sale text-left text-[16px] font-bold text-[#be1e2d]"><p class="price_format inline-block">{{ number_format($sale_product->price - $sale_product->price * $sale_product->promotion / 100) }}</p> VNĐ</span>
                                    <span class="price text-left line-through text-sm text-[#666666]"><del class="price_format inline-block">{{ number_format($sale_product->price) }}</del> VNĐ</span>
                                </a>
                                <div class="">
                                    <button type="button" class="btn-add_to_cart h-11 w-11 flex justify-center items-center my-2.5 hover:text-white hover:bg-[#be1e2d] text-[#333] bg-white border border-[#be1e2d] focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                        <i class="fa-solid fa-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="action-item_container w-full">
                                {{--                                <div class="action-item w-full flex justify-around items-center px-2">--}}
                                {{--                                    <button type="button" class="btn-add_to_cart w-full hidden my-2.5 text-[#333] bg-[#ffd400] hover:bg-[#ffb208] focus:outline-none focus:ring-4 focus:ring-[#00483d] font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">--}}
                                {{--                                        <i class="fa-solid fa-cart-plus"></i>--}}
                                {{--                                        <span class="text-[0.8rem] md:text-md hidden lg:inline-block">Thêm giỏ hàng</span>--}}
                                {{--                                    </button>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                @endforeach

                <style>
                    /*.card-item{*/
                    /*    transition: all 400ms ease-in-out 0s;*/
                    /*}*/
                    /*.card-item:hover{*/
                    /*    transition: all 400ms ease-in-out 0s;*/
                    /*}*/
                    /*.card-item>.action-item_container{*/
                    /*    transition: all 400ms ease-in-out 0s;*/
                    /*}*/
                    /*.card-item:hover .price-item{*/
                    /*    display: none;*/
                    /*}*/
                    /*.card-item:hover .btn-add_to_cart{*/
                    /*    display: block;*/
                    /*    transition: all 400ms ease-in-out 0s;*/
                    /*}*/
                </style>
            </div>
            <a href="" class="see-all px-4 mb-3 flex justify-center items-center">
                <button type="button" class="hover:text-white hover:bg-[#be1e2d] bg-[white] border border-[#be1e2d] focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Xem thêm</button>
            </a>
        </div>
    </div>
    <div class="box-news">
        <div class="box-news-container w-full py-2.5 rounded-md bg-white my-1.5 lg:my-2.5 max-md:bg-[#f2f2f2]" style="box-shadow: 0 0 3px 0 #dee2e6">
            <div class="header-box px-4 mb-5">
                <div class="header bg-[#d70018]  inline-block h-7 overflow-hidden after:border-t-[30px] after:border-t-[#be1e2d] after:border-l-[30px] after:border-l-[#d70018] after:ml-[40px]">
                    <h2 class="title text-white py-1 pr-14 pl-9 ml-14 bg-[#be1e2d] text-[14px] uppercase font-bold">
                        <a href="">Khuyến mãi hot</a>
                    </h2>
                </div>
            </div>
            <div class="list-news w-full grid grid-cols-1 lg:grid-cols-2 gap-3 mb-5 px-4">
                <div class="hot-news col-span-1 w-full">
                    <div class="news-item inline-block ml-0 mb-0 w-full float-left relative overflow-hidden py-2.5">
                        <div class="img-news w-full h-full float-left bg-cover bg-center">
                            <a href="" class="relative inline-block">
                                <img class="rounded-lg" src="https://cdn.mediamart.vn/images/news/don-cho-thu-sau-cuong-nhiet---hot-friday-0205-sale-banh-noc-den-50-giam-them-10_292d8b24.webp">
                            </a>
                        </div>
                        <div class="title-news pl-0 w-full float-left ">
                            <a href="" class="mt-2.5 text-xl font-bold overflow-hidden text-[#333]">
                                [Đón chờ] Thứ Sáu Cuồng Nhiệt - Hot Friday 03/05: Sale banh nóc đến 50% + Giảm thêm 10%
                            </a>
                        </div>
                    </div>
                </div>
                <div class="normal-news col-span-1 w-full">
                    <div class="news-item md:flex float-left ml-[1.2%] w-full relative lg:border-b lg:border-b-[#ebebeb] py-2.5 mb-0 items-center">
                        <div class="img-news w-full md:w-[30%] h-full float-left bg-cover bg-center">
                            <a href="" class="relative inline-block">
                                <img class="rounded-lg" src="https://cdn.mediamart.vn/thumb/images/news/he-ruc-ro---giam-het-co---sale-soc-toi-50_809aedce.webp">
                            </a>
                        </div>
                        <div class="title-news-item w-full md:w-[70%] float-left pl-2.5">
                            <a href="" class="mt-2.5 text-xl font-bold xl:text-sm xl:font-medium overflow-hidden text-[#333]">Hè rực rõ - Giảm hết cỡ - Sale Sốc tới 50%</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="" class="see-all px-4 mb-3 flex justify-center items-center">
                <button type="button" class="hover:text-white hover:bg-[#be1e2d] bg-[white] border border-[#be1e2d] focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Xem thêm</button>
            </a>
        </div>
    </div>
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

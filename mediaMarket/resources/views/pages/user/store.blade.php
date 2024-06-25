@extends('Layouts.homePage')

@section('content')
    <div class="slider-container mt-2.5 mb-5 lg:my-8">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-32 overflow-hidden rounded-lg md:h-72">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://images.fpt.shop/unsafe/fit-in/1200x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/4/25/638496013270633381_F-C1_1200x300.png" class="h-32 lg:h-72 absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://images.fpt.shop/unsafe/fit-in/1200x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/5/1/638501202115899743_F-C1_1200x300_1.png" class="h-32 lg:h-72 absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://images.fpt.shop/unsafe/fit-in/1200x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/5/2/638502482810664191_F-C1_1200x300@2x.png" class="h-32 lg:h-72 absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
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
                <div id="accordion-arrow-icon" data-accordion="open">
                    <h2 id="accordion-filter-brand-heading">
                        <button type="button"
                                class="flex items-center justify-between w-full font-medium rtl:text-right text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-filter_brand" aria-expanded="true" aria-controls="accordion-filter_brand">
                            <h3 class="filter-item_title text-sm text-[#212529] font-bold mb-5">
                                    Hãng Sản Xuất
                                </h3>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-filter_brand" class="" aria-labelledby="accordion-filter-brand-heading">
                            <div class="filter-item_checkList grid grid-cols-2">
                                <div class="flex items-center mb-4">
                                    <input checked id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tất cả</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Apple</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">SamSung</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Oppo</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Xiaomi</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nokia</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Huawei</label>
                                </div>
                            </div>

                        </div>

                    <h2 id="accordion-filter-price_range-heading">
                            <button type="button"
                                    class="flex items-center justify-between w-full font-medium rtl:text-right text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-filter-price_range-body" aria-expanded="true" aria-controls="accordion-filter-price_range-body">
                                <h3 class="filter-item_title text-sm text-[#212529] font-bold mb-5">
                                    Mức giá
                                </h3>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                    <div id="accordion-filter-price_range-body" class="" aria-labelledby="accordion-filter-price_range-heading">
                            <div class="filter-item_checkList grid grid-cols-1">
                                <div class="flex items-center mb-4">
                                    <input checked id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tất cả</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Dưới 2 triệu</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Từ 2 - 4 triệu</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Từ 4 - 7 triệu</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Từ 7 - 13 triệu</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Trên 13 triệu</label>
                                </div>
                            </div>
                        </div>

                    <h2 id="accordion-filter-OS-heading">
                            <button type="button"
                                    class="flex items-center justify-between w-full font-medium rtl:text-right text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-filter-OS-body" aria-expanded="true" aria-controls="accordion-filter-OS-body">
                                <h3 class="filter-item_title text-sm text-[#212529] font-bold mb-5">
                                    Hệ điều hành
                                </h3>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                    <div id="accordion-filter-OS-body" class="" aria-labelledby="accordion-filter-OS-heading">
                            <div class="filter-item_checkList grid grid-cols-1">
                                <div class="flex items-center mb-4">
                                    <input checked id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tất cả</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Android</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">iOS</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Thông thường</label>
                                </div>
                            </div>
                        </div>

                    <h2 id="accordion-filter-memory-heading">
                            <button type="button"
                                    class="flex items-center justify-between w-full font-medium rtl:text-right text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-filter-memory-body" aria-expanded="true" aria-controls="accordion-filter-memory-body">
                                <h3 class="filter-item_title text-sm text-[#212529] font-bold mb-5">
                                    Dung lượng bộ nhớ
                                </h3>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                    <div id="accordion-filter-memory-body" class="" aria-labelledby="accordion-filter-memory-heading">
                            <div class="filter-item_checkList grid grid-cols-1">
                                <div class="flex items-center mb-4">
                                    <input checked id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tất cả</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">32GB</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">64GB</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">128GB</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">256GB</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">512GB</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1TB</label>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="box-products col-span-3">
            <div class="card-listBrands w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-8 hidden lg:block">
                <div class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab">
                    <h2 class="p-4 text-black text-lg font-bold rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">Hãng Sản Xuất</h2>
                </div>
                <div id="defaultTabContent">
                    <div class="p-4 flex bg-white rounded-lg md:p-5 dark:bg-gray-800">
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

            <div class="card-listProducts w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="card-body-listProduct">
                    <div class="header-card px-4 mb-6 flex justify-between">
                        <div class="flex">
                            <a href="{{ route('user.store', ['category_slug' => $category->slug, ...$query, 'price' => 'ASC']) }}">
                                <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Giá tăng dần</button>
                            </a>
                            <a href="{{ route('user.store', ['category_slug' => $category->slug, ...$query, 'price' => 'DESC']) }}">
                                <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Giá giảm dần</button>
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

{{--                        <div class="flex justify-center items-center mr-2">--}}
{{--                            <h4 class="text-sm font-bold">Sắp xếp:</h4>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <select id="small" class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white focus:ring-0 focus:border-gray-300">--}}
{{--                                <option value="">Sản phẩm nổi bật</option>--}}
{{--                                <option value="US">Sản phẩm mới nhất</option>--}}
{{--                                <option value="CA">Giá tăng dân</option>--}}
{{--                                <option value="FR">Giá giảm dần</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
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
                                                <img src="https://cdn-v2.didongviet.vn/files/products/2024/3/16/1/1713264914921_20215292_6208434_02.jpg" width="600" height="600">
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
                                            <button type="submit" data-id_product="{{ $product->id }}" class="btn-add_to_cart h-11 w-11 flex justify-center items-center my-2.5 hover:text-white hover:bg-[#be1e2d] text-[#333] bg-white border border-[#be1e2d] focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
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
@endsection

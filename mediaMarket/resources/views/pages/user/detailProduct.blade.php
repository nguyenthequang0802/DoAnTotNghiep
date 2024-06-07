@extends('Layouts.homePage')
@section('content')
     <div class="container w-full opacity-100">
        <div class="container antialiased">
            {{-- Chi tiết về sản phẩm--}}
            <div class=" my-3 grid grid-cols-2 gap-4 rounded-lg p-3 bg-white max-md:my-2 max-md:grid-cols-1">
                <div class="overflow-hidden">
                    <div>
                        <div class="thumb-product col-span-1 min-h-[600px]">
                            <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mySwiper"
                                              thumbs-swiper=".mySwiper2" loop="true" space-between="10" navigation="true">
                                <swiper-slide>
                                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                </swiper-slide>
                            </swiper-container>
                            <swiper-container class="mySwiper2" loop="true" space-between="10" slides-per-view="4" free-mode="true"
                                              watch-slides-progress="true">
                                <swiper-slide>
                                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                </swiper-slide>
                            </swiper-container>
                            <style>
                                swiper-container {
                                    width: 100%;
                                    height: 100%;
                                }

                                swiper-slide {
                                    text-align: center;
                                    font-size: 18px;
                                    background: #fff;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                }

                                swiper-slide img {
                                    /*display: sw </swiper-slidek;*/
                                    width: 100%;
                                    height: 100%;
                                    object-fit: cover;
                                }

                                swiper-container {
                                    width: 100%;
                                    height: 300px;
                                    margin-left: auto;
                                    margin-right: auto;
                                }

                                swiper-slide {
                                    background-size: cover;
                                    background-position: center;
                                }

                                .mySwiper {
                                    height: 80%;
                                    width: 100%;
                                }

                                .mySwiper2 {
                                    height: 20%;
                                    box-sizing: border-box;
                                    padding: 10px 0;
                                }

                                .mySwiper2 swiper-slide {
                                    width: 25%;
                                    height: 100%;
                                    opacity: 0.4;
                                }

                                .mySwiper2 .swiper-slide-thumb-active {
                                    opacity: 1;
                                }

                                swiper-slide img {
                                    /*display: sw </swiper-slidek;*/
                                    width: 100%;
                                    height: 100%;
                                    object-fit: cover;
                                }
                            </style>
                            <div class="flex w-full items-start justify-start py-2.5 ">
                                <div class="w-full rounded">
                                    <div class="text-left text-sm antialiased">
                                        <p class="text-center">
                                            <img src="https://cdn-v2.didongviet.vn/files/default/2024/4/1/0/1714581029000_1713111765109_2024_04_13_10_02_17_8e2mgrmfwv.jpeg">
                                        </p>
                                        <p class="text-center">
                                    <span class="text-black">
                                        <span class="text-[8pt]">
                                            Tặng thêm
                                            <span class="text-[#e03e2d] text-[10pt]">
                                                <strong>2 triệu</strong>
                                            </span>
                                            khi lên đời
                                        </span>
                                    </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="max-md:hidden">
                                <div class="w-full rounded bg-pink-100 p-2">
                                    <div>
                                        <div class="flex items-center">
                                            <svg width="17" height="15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.964 5.563v-.036c-.036-.035-.036-.071-.072-.071L8.787.542C8.75.506 8.715.506 8.679.506L.287.076C.143.076.072.148 0 .256V2.73c0 .108.036.18.143.215l2.08 1.291L.396 5.42a.326.326 0 0 0-.108.25l.108 3.695c0 .072.035.18.107.215l8.034 5.308c.036 0 .072.036.107.036.036 0 .072 0 .108-.036l8.034-5.308c.072-.036.107-.143.107-.215L17 5.671c0-.036 0-.072-.036-.108ZM8.572 1.044l7.209 4.304-7.424-.18L1.29.65l7.28.394Zm7.316 4.842-1.937 1.22H9.432l-.717-1.4 7.173.18Zm-15.35-3.3V.83l7.28 4.663-.968.932L.538 2.586Zm2.224 1.937 1.614 1.04-1.65 1.112-1.65-1.04 1.686-1.112Zm5.63 9.648L.897 9.186.825 6.137l7.567 4.698v3.336Zm.287-3.802L3.228 6.998l1.685-1.112 1.865 1.148c.108.071.252.036.323-.036l1.112-1.076.825 1.614c.036.107.143.143.251.143h3.802l-4.412 2.69Zm7.747-1.183L8.93 14.17v-3.336l7.568-4.698-.072 3.049Z" fill="#BE1E2D"></path></svg>
                                            <p class="px-2 text-sm font-bold">Bộ sản phẩm bao gồm</p>
                                        </div>
                                        <div class="relative my-2 text-justify text-sm antialiased">
                                            <div class="info-content flex ">
                                                <div class="info-desc">
                                                    <p>Máy mới nguyên seal 100%, cam kết máy chính hãng 100%</p>
                                                    <p>&nbsp;</p>
                                                </div>
                                            </div>
                                            <div class="info-content flex ">
                                                <div class="info-desc">
                                                    <strong>Bộ sản phẩm:</strong>
                                                    &nbsp;Thân máy, Hộp, Cáp, Cây lấy sim, Sách hướng dẫn, Túi giấy cao cấp của MediaMarker
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex items-center">
                                            <svg width="17" height="18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.262 2.915 8.755.054a.63.63 0 0 0-.51 0l-6.507 2.86a.705.705 0 0 0-.41.65v3.478c0 4.789 2.734 9.096 6.921 10.906.16.07.341.07.502 0 4.187-1.81 6.92-6.117 6.92-10.906V3.564a.705.705 0 0 0-.409-.65Zm-.918 4.127c0 4.07-2.258 7.818-5.844 9.491-3.49-1.628-5.844-5.31-5.844-9.491V4.033L8.5 1.464l5.844 2.57v3.008Zm-6.578 2.37L10.62 6.39a.638.638 0 0 1 .94 0c.259.274.259.72 0 .994l-3.324 3.52a.638.638 0 0 1-.94 0L5.441 8.937a.733.733 0 0 1 0-.994.638.638 0 0 1 .939 0l1.386 1.468Z" fill="#BE1E2D"></path></svg>
                                            <p class="px-2 text-sm font-bold">Bảo hành</p>
                                        </div>
                                        <div class="relative my-2 text-justify text-sm antialiased">
                                            <div class="info-content flex ">
                                                <div class="info-desc">
                                                    <span>
                                                        Độc quyền tại MediaMarket: Bảo hành Hư lỗi - Đổi mới trong vòng&nbsp;
                                                        <strong>30 ngày</strong>
                                                        . Bảo hành chính hãng&nbsp; <strong>12 tháng&nbsp;</strong>
                                                    </span>
                                                    ( <a href="" class="text-[#be1e2d]">Xem chi tiết</a> )
                                                </div>

                                            </div>
                                            <div>&nbsp;</div>
                                            <div class="info-content flex ">
                                                <div class="info-desc">
                                                    <span>
                                                        Bảo hành Hư lỗi - Đổi mới trong vòng&nbsp;
                                                        <strong>12 tháng</strong>
                                                        , rơi vỡ với D.Care
                                                        ( <a href="" class="text-[#be1e2d]">Xem chi tiết</a> )
                                                    </span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-info">
                    <div class="relative w-full flex-col justify-start">
                        <h1 class="name-product text-xl font-bold max-md:text-base mb-2.5">iPhone 15 Pro Max 256GB Chính Hãng (VN/A)</h1>

                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-gray-300 me-1 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">1 đánh giá</p>
                        </div>

                        <div class="price-product-mobile flex items-baseline max-md:flex-col md:hidden">
                            <p class="price-sale text-2xl font-bold text-[#be1e2d]">28.790.000 đ</p>
                            <span class="text-sm font-normal text-[#555555] line-through">38.990.000 đ</span>
                        </div>

                        <div class="list-memory my-2 grid grid-cols-4 gap-4 max-md:grid-cols-3 max-md:gap-2">
                            <a class="" title="">
                                <div>
                                    <div class="items-center cursor-pointer border relative flex justify-center rounded-lg border-[#be1e2d] hover:border-[#be1e2d] w-full h-11">
                                        <p class="font-bold text-[#be1e2d] text-center text-xs">256GB</p>
                                        <div class="checked-product"></div>
                                    </div>
                                </div>
                            </a>
                            <a class="" title="">
                                <div>
                                    <div class="items-center cursor-pointer border relative flex justify-center rounded-lg  hover:border-[#be1e2d] w-full h-11">
                                        <p class="text-center text-xs">512GB</p>

                                    </div>
                                </div>
                            </a>
                            <a class="" title="">
                                <div>
                                    <div class="items-center cursor-pointer border relative flex justify-center rounded-lg hover:border-[#be1e2d] w-full h-11">
                                        <p class="text-center text-xs">1TB</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <p class="text-[#808a94] text-sm">Chọn mày đề xem giá chi tiết:</p>
                        <div class="list-color my-2 grid grid-cols-4 gap-4 max-md:grid-cols-3 max-md:gap-2">
                            <a class="" title="">
                                <div>
                                    <div class="items-center cursor-pointer border relative flex justify-center rounded-lg border-[#be1e2d] hover:border-[#be1e2d] w-full h-9">
                                        <p class="font-bold text-[#be1e2d] text-center text-xs">Titan tự nhiên</p>
                                        <div class="checked-product"></div>
                                    </div>
                                </div>
                            </a>
                            <a class="" title="">
                                <div>
                                    <div class="items-center cursor-pointer border relative flex justify-center rounded-lg  hover:border-[#be1e2d] w-full h-9">
                                        <p class="text-center text-xs">Titan đen</p>

                                    </div>
                                </div>
                            </a>
                            <a class="" title="">
                                <div>
                                    <div class="items-center cursor-pointer border relative flex justify-center rounded-lg hover:border-[#be1e2d] w-full h-9">
                                        <p class="text-center text-xs">Titan trắng</p>
                                    </div>
                                </div>
                            </a>
                            <a class="" title="">
                                <div>
                                    <div class="items-center cursor-pointer border relative flex justify-center rounded-lg hover:border-[#be1e2d] w-full h-9">
                                        <p class="text-center text-xs">Titan xanh</p>
                                    </div>
                                </div>
                            </a>
                            <style>
                                .checked-product{
                                    background-image: url("https://didongviet.vn/_next/static/media/checked.ddacf926.png");
                                    height: 21px;
                                    position: absolute;
                                    right: 0;
                                    top: 0;
                                    width: 21px;
                                }
                            </style>
                        </div>
                        <div>
                            <p class="text-base max-md:hidden">Giá bán</p>
                            <div class="flex items-baseline max-md:flex-col max-md:hidden">
                                <p class="price-sale text-4xl font-bold text-[#be1e2d]">28.790.000 đ</p>
                                <span class="pl-2 text-sm font-normal text-black line-through max-md:pl-0">38.990.000 đ</span>
                            </div>
                        </div>
                        <div class="border mt-3 flex w-full flex-col rounded border-[#ffdfe1]">
                            <div class="flex items-center justify-start bg-[#ffdfe1] p-2">
                                <p class="mx-2 text-base font-bold text-[#be1e2d]">Khuyến mãi</p>
                            </div>
                            <div class="flex w-full flex-col items-start justify-start bg-white p-2">
                                <ol class="box-gift relative space-y-4 list-decimal list-inside max-md:leading-6 antialiased">
                                    <li>
                                        <span class="inline-block text-sm text-[10pt]"><strong>Ưu đãi độc quyền:</strong></span>
                                        <ul class="ps-5 mt-2 space-y-1 list-disc list-inside">
                                            <li>
                                                <span style="font-size: 10pt">
                                                    <strong>Thu cũ đổi mới</strong>
                                                    : Tặng thêm đến
                                                    <span class="text-[#e03e2d]"><strong>2.000.000đ</strong></span>
                                                    ( <a href="" class="text-[#2d9cbd]">Chi tiết</a> )
                                                </span>
                                            </li>
                                            <li>
                                                <span style="font-size: 10pt">
                                                    Giảm thêm
                                                    <span class="text-[#e03e2d]"><strong>100.000đ</strong></span>
                                                    khi chuyển khoản
                                                </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="inline-block text-sm text-[10pt]"><strong>TRẢ GÓP: Chưa Bao Giờ "Lời" Như Bây Giờ</strong> ( <a href="" class="text-[#2d9cbd]">Chi tiết</a> )</span>
                                        <ul class="ps-5 mt-2 space-y-1 list-disc list-inside">
                                            <li>
                                                <span style="font-size: 10pt">
                                                    KHÔNG trả trước
                                                </span>
                                            </li>
                                            <li>
                                                <span style="font-size: 10pt">
                                                    Phụ phí & phí chuyển đổi
                                                    <span class="text-[#e03e2d]"><strong>0đ</strong></span>
                                                </span>
                                            </li>
                                            <li>
                                                <span style="font-size: 10pt">
                                                    Lãi suất
                                                    <span class="text-[#e03e2d]"><strong>0%</strong></span>
                                                </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="inline-block text-sm text-[10pt]"><strong>Ưu đãi khác:</strong></span>
                                        <ul class="ps-5 mt-2 space-y-1 list-disc list-inside">
                                            <li>
                                                <span style="font-size: 10pt">
                                                    Giảm thêm
                                                    <span class="text-[#e03e2d]"><strong>100.000đ</strong></span>
                                                    khi mua
                                                    <span class="text-[#2d9cdb]"><strong>Apple Watch</strong></span>
                                                </span>
                                            </li>
                                            <li><span style="font-size: 10pt">
                                                    Giảm thêm
                                                    <span class="text-[#e03e2d]"><strong>100.000đ</strong></span>
                                                    khi mua
                                                    <span class="text-[#2d9cdb]"><strong>AirPods</strong></span>
                                                </span></li>
                                            <li>
                                                <span style="font-size: 10pt">
                                                    Giảm thêm
                                                    <span class="text-[#e03e2d]"><strong>10%</strong></span>
                                                    khi mua
                                                    <span class="text-[#2d9cdb]"><strong>Kính cường lực</strong></span>
                                                    -Bảo hành <span class="text-[#e03e2d]"><strong>90 ngày</strong></span>
                                                </span>
                                            </li>
                                            <li>
                                                <span style="font-size: 10pt">
                                                    Giảm thêm
                                                    <span class="text-[#e03e2d]"><strong>10%</strong></span>
                                                    khi mua
                                                    <span class="text-[#2d9cdb]"><strong>Ốp lưng</strong></span>
                                                    -Bảo hành <span class="text-[#e03e2d]"><strong>90 ngày</strong></span>
                                                </span>
                                            </li>
                                            <li>
                                                <span style="font-size: 10pt">
                                                    Giảm thêm
                                                    <span class="text-[#e03e2d]"><strong>5%</strong></span>
                                                    khi mua
                                                    <span class="text-[#2d9cdb]"><strong>Bộ combo cáp sạc</strong></span>
                                                    -Bảo hành <span class="text-[#e03e2d]"><strong>90 ngày</strong></span>
                                                </span>
                                            </li>
                                            <li>
                                                <span style="font-size: 10pt">
                                                    Giảm thêm
                                                    <span class="text-[#e03e2d]"><strong>5%</strong></span>
                                                    khi mua
                                                    <span class="text-[#2d9cdb]"><strong>Pin dự phòng</strong></span>
                                                </span>
                                            </li>
                                        </ul>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 my-4 gap-4">
                            <a href="">
                                <button type="button" class="w-full flex flex-col justify-center items-center text-white bg-gradient-to-b from-[#fd475a] via-red-500 to-[#bf1e2d] hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                    <p class="text-center text-xl font-bold">Đặt ngay</p>
                                    <p class="text-center text-sm text-white">Giao tận nơi hoặc nhận tại cửa hàng</p>
                                </button>
                            </a>
                            <a href="">
                                <button type="button" class="w-full flex flex-col justify-center items-center text-[#333] hover:text-white bg-white hover:bg-[#FF9119] border-2 border-[#FF9119] focus:ring-4 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center shadow-lg dark:hover:bg-[#FF9119]/80 dark:focus:ring-[#FF9119]/40 me-2 mb-2">
                                    <p class="text-center text-xl font-bold"><i class="fa-solid fa-cart-plus"></i></p>
                                    <p class="text-center text-sm">Thêm vào giỏ hàng</p>
                                </button>
                            </a>
                        </div>
                        <p class="text-center text-sm text-black">Gọi đặt mua <span class="font-bold text-[#be1e2d]"><a href="">1900 323 322</a> </span>(7:30 - 22:00)</p>
                        <div class="my-2 md:hidden">
                            <div class="w-full rounded bg-pink-100 p-2">
                                <div>
                                    <div class="flex items-center">
                                        <svg width="17" height="15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.964 5.563v-.036c-.036-.035-.036-.071-.072-.071L8.787.542C8.75.506 8.715.506 8.679.506L.287.076C.143.076.072.148 0 .256V2.73c0 .108.036.18.143.215l2.08 1.291L.396 5.42a.326.326 0 0 0-.108.25l.108 3.695c0 .072.035.18.107.215l8.034 5.308c.036 0 .072.036.107.036.036 0 .072 0 .108-.036l8.034-5.308c.072-.036.107-.143.107-.215L17 5.671c0-.036 0-.072-.036-.108ZM8.572 1.044l7.209 4.304-7.424-.18L1.29.65l7.28.394Zm7.316 4.842-1.937 1.22H9.432l-.717-1.4 7.173.18Zm-15.35-3.3V.83l7.28 4.663-.968.932L.538 2.586Zm2.224 1.937 1.614 1.04-1.65 1.112-1.65-1.04 1.686-1.112Zm5.63 9.648L.897 9.186.825 6.137l7.567 4.698v3.336Zm.287-3.802L3.228 6.998l1.685-1.112 1.865 1.148c.108.071.252.036.323-.036l1.112-1.076.825 1.614c.036.107.143.143.251.143h3.802l-4.412 2.69Zm7.747-1.183L8.93 14.17v-3.336l7.568-4.698-.072 3.049Z" fill="#BE1E2D"></path></svg>
                                        <p class="px-2 text-sm font-bold">Bộ sản phẩm bao gồm</p>
                                    </div>
                                    <div class="relative my-2 text-justify text-sm antialiased">
                                        <div class="info-content flex ">
                                            <div class="info-desc">
                                                <p>Máy mới nguyên seal 100%, cam kết máy chính hãng 100%</p>
                                                <p>&nbsp;</p>
                                            </div>
                                        </div>
                                        <div class="info-content flex ">
                                            <div class="info-desc">
                                                <strong>Bộ sản phẩm:</strong>
                                                &nbsp;Thân máy, Hộp, Cáp, Cây lấy sim, Sách hướng dẫn, Túi giấy cao cấp của MediaMarker
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-center">
                                        <svg width="17" height="18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.262 2.915 8.755.054a.63.63 0 0 0-.51 0l-6.507 2.86a.705.705 0 0 0-.41.65v3.478c0 4.789 2.734 9.096 6.921 10.906.16.07.341.07.502 0 4.187-1.81 6.92-6.117 6.92-10.906V3.564a.705.705 0 0 0-.409-.65Zm-.918 4.127c0 4.07-2.258 7.818-5.844 9.491-3.49-1.628-5.844-5.31-5.844-9.491V4.033L8.5 1.464l5.844 2.57v3.008Zm-6.578 2.37L10.62 6.39a.638.638 0 0 1 .94 0c.259.274.259.72 0 .994l-3.324 3.52a.638.638 0 0 1-.94 0L5.441 8.937a.733.733 0 0 1 0-.994.638.638 0 0 1 .939 0l1.386 1.468Z" fill="#BE1E2D"></path></svg>
                                        <p class="px-2 text-sm font-bold">Bảo hành</p>
                                    </div>
                                    <div class="relative my-2 text-justify text-sm antialiased">
                                        <div class="info-content flex ">
                                            <div class="info-desc">
                                                    <span>
                                                        Độc quyền tại MediaMarket: Bảo hành Hư lỗi - Đổi mới trong vòng&nbsp;
                                                        <strong>30 ngày</strong>
                                                        . Bảo hành chính hãng&nbsp; <strong>12 tháng&nbsp;</strong>
                                                    </span>
                                                ( <a href="" class="text-[#be1e2d]">Xem chi tiết</a> )
                                            </div>

                                        </div>
                                        <div>&nbsp;</div>
                                        <div class="info-content flex ">
                                            <div class="info-desc">
                                                    <span>
                                                        Bảo hành Hư lỗi - Đổi mới trong vòng&nbsp;
                                                        <strong>12 tháng</strong>
                                                        , rơi vỡ với D.Care
                                                        ( <a href="" class="text-[#be1e2d]">Xem chi tiết</a> )
                                                    </span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border mt-3 flex w-full flex-col overflow-hidden rounded-lg border-[#3caea4]">
                            <div class="flex items-center justify-start bg-[#3caea4] p-2">
                                <p class="mx-2 text-sm font-bold text-white">Ưu đãi dịch vụ</p>
                            </div>
                            <div class="flex w-full flex-col items-start justify-start bg-white p-2">
                                <div class="flex items-center py-2">
                                    <img src="https://didongviet.vn/svg/statics/xe.svg" alt="Miễn phí Giao hàng siêu tốc" style="width: 20px; height: 20px; object-fit: contain;">
                                    <p class="pl-2 text-left text-sm">
                                        Miễn phí Giao hàng siêu tốc trong
                                        <span class="font-bold">1 giờ </span>
                                        <a target="_blank" href="" class="text-[#2980b0]">(Xem chi tiết)</a>
                                    </p>
                                </div>
                                <div class="flex items-center py-2">
                                    <img src="https://didongviet.vn/svg/statics/giftxanh.svg" alt="" style="width: 20px; height: 20px; object-fit: contain;">
                                    <p class="pl-2 text-left text-sm">
                                        Giảm thêm tới <span class="font-bold">1.5%</span> cho thành viên của Di Động Việt.
                                        <a href="" target="_blank" class="text-[#2980b0]">(Xem chi tiết)</a>
                                    </p>
                                </div>
                                <div class="flex items-center py-2">
                                    <img src="https://didongviet.vn/svg/statics/dcare.svg" alt="" style="width: 20px; height: 20px; object-fit: contain;">
                                    <p class="pl-2 text-left text-sm">Hư lỗi đổi mới trong <strong>12 tháng</strong> chỉ từ <strong>2K/ ngày</strong>
                                        <a href="" target="_blank" class="text-[#2980b0]">(Xem chi tiết)</a>
                                    </p>
                                </div>
                                <div class="flex items-center py-2">
                                    <img src="https://didongviet.vn/images/pc/VIB.png" alt="Ngân hàng VIB" style="width: 20px; height: 20px; object-fit: contain;">
                                    <p class="pl-2 text-left text-sm">Giảm thêm <span class="font-bold">500.000đ</span> mở thẻ qua VIB
                                        <a target="_blank" href="" class="text-[#2980b0]">(Xem chi tiết)</a>
                                    </p>
                                </div>
                                <div class="flex items-center py-2">
                                    <img src="https://didongviet.vn/images/uudai/hplt.png" alt="" style="width: 20px;">
                                    <p class="pl-2 text-left text-sm">Giảm <span class="font-bold">5%</span> đơn hàng thanh toán Home Paylater
                                        <a target="_blank" href="" class="text-[#2980b0]">(Xem chi tiết)</a>
                                    </p>
                                </div>
                                <div class="flex items-center py-2">
                                    <img src="https://didongviet.vn/images/icon/EVKey.png" alt="" style="width: 20px; height: 20px; object-fit: contain;">
                                    <p class="pl-2 text-left text-sm">Tặng Bảo hành PIN 3 năm khi mua kèm BHMR&nbsp;
                                        <a target="_blank" href="" class="text-[#2980b0]">(Xem chi tiết)</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Bài viết và thông số về sản phẩm--}}
            <div class="my-2 grid grid-cols-3 max-md:grid-cols-1 gap-4">
                <div class="post-product col-span-2 max-md:col-span-1">
                    <div class="my-2 rounded-lg bg-white p-3">
                        <div>
                            <div class="content-post flex-col w-full relative bg-white p-2" style="height: 800px; overflow: hidden">
                                <div class="relative text-lg text-justify">
                                    Block Post
                                </div>
                                <button class="more-content w-full h-16 flex items-center justify-center absolute z-50 bottom-0 left-0">
                                    <p class="text-[#be1e2d] text-center font-bold text-base">Xem thêm</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="my-2 rounded-lg bg-white p-3">
                        <div>
                            <div class="flex-col relative" style="height: 800px; overflow: hidden">
                                <div class="mb-3 flex justify-start items-center max-md:pt-2 text-[#be1e2d]">
                                    <i class="fa-solid fa-gear" style="height: 21px; width: 21px"></i>
                                    <h2 class="text-xl font-bold mx-2">Thông số kỹ thuật</h2>
                                </div>
                                <div class="flex flex-col justify-start items-start p-2">
                                    <div class="flex justify-between items-start odd:bg-gray-100 even:bg-white p-2 w-full">
                                        <div class="w-1/2">
                                            <p class="text-left">Kích thước màn hình</p>
                                        </div>
                                        <div class="w-1/2">
                                            <p class="text-left">6.7 inches</p>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-start odd:bg-gray-100 even:bg-white p-2 w-full">
                                        <div class="w-1/2">
                                            <p class="text-left">Công nghệ màn hình</p>
                                        </div>
                                        <div class="w-1/2">
                                            <p class="text-left">Super Retina XDR OLED</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="more-content w-full h-16 flex items-center justify-center absolute z-50 bottom-0 left-0">
                                    <p class="text-[#be1e2d] text-center font-bold text-base">Xem thêm</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Sản phẩm liên quan--}}
            <div>
                <div class="flex-col justify-between items-center my-2 py-4 px-3 md:bg-white rounded-lg max-md:my-1 max-md:py-3 max-md:rounded-2xl">
                    <div class="header-box px-4 mb-5">
                        <div class="header bg-[#d70018]  inline-block h-7 overflow-hidden after:border-t-[30px] after:border-t-[#be1e2d] after:border-l-[30px] after:border-l-[#d70018] after:ml-[40px]">
                            <h2 class="title text-white py-1 pr-14 pl-9 ml-14 bg-[#be1e2d] text-[14px] uppercase font-bold">
                                <a href="">Sản phẩm liên quan</a>
                            </h2>
                        </div>
                    </div>
                    <div class="list-products xl:grid xl:grid-cols-5 xl:gap-4 xl:mt-4 max-xl:flex max-xl:overflow-x-auto max-xl:space-x-2  max-xl:overflow-y-hidden max-xl:mt-2 max-xl:hide-scroll-bar no-scrollbar max-xl:pb-2">
                        @for($i = 0; $i<5; $i++)
                            <div class="product-item col-span-1">
                                <div class="card-item bg-white flex pt-2.5 px-2.5 pb-3.5 border-2 h-full flex-col items-center justify-start rounded border-[#f0f0f0] hover:border-white hover:drop-shadow-xl max-md:border-0 cursor-pointer">
                                    <div class="discourd-item pb-2 h-8 flex w-full items-center justify-start">
                                        <p class="border-2 m-1 items-center whitespace-nowrap rounded border-[#be1e2d] bg-[#be1e2d] px-2 py-1 text-xs text-white max-md:text-[10px]">Giảm 26%</p>
                                        <p class="border-2 m-1 items-center whitespace-nowrap rounded border-[#be1e2d] bg-white px-2 py-1 text-xs text-[#be1e2d] max-md:text-[10px]">Trả góp 0%</p>
                                    </div>
                                    <div class="thumbnail-item relative w-full">
                                        <div class="w-full h-[250px] max-md:h-auto relative flex items-center justify-center">
                                            <div class="img-product transition duration-200 ease-in-out hover:scale-105 md:h-[200px] md:w-[200px]">
                                                <img src="https://cdn-v2.didongviet.vn/files/products/2024/3/16/1/1713264914921_20215292_6208434_02.jpg" width="600" height="600">
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="name-item w-full px-2 py-2.5 text-left text-sm max-md:text-[13px] font-bold text-black">iPhone 15 Pro Max 256GB Chính hãng (VN/A)</h3>
                                    <div class="price-item flex w-full items-center justify-start px-2 py-2.5">
                                        <div class="w-full flex-col items-start justify-start">
                                            <p class="price-sale text-left text-[16px] font-bold text-[#be1e2d]">28.790.000 đ</p>
                                            <del class="price float-left text-left text-sm text-[#666666]">38.990.000 đ</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
     </div>

@endsection

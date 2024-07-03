@extends('Layouts.homePage')
@section('content')
    <div class="container mx-auto xl:w-[80%]">
        <div class="box-news">
            <div class="box-news-container w-full rounded-md p-2.5 my-1.5 lg:my-2.5 max-md:bg-[#f2f2f2]" style="box-shadow: 0 0 3px 0 #dee2e6">
                <h1 class="title font-semibold mb-3 text-4xl uppercase">{{ $content_post->title }}</h1>
                <div class="my-2">
                    <div class="flex justify-between items-center max-lg:text-xs">
                        <span class="flex gap-1 items-center text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="16" width="16"><path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                            <p>{{ $content_post->created_at->format('d-m-Y H:i') }}</p>
                        </span>
                        <span class="flex gap-1 items-center text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" height="16" width="16"><path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/></svg>
                            <p>{{ number_format($content_post->views) }} lượt xem</p>
                        </span>
                    </div>
                </div>
                <div class="preview my-2.5">
                    <img src="{{ asset($content_post->preview_image) }}">
                </div>
                <div class="content">
                    {!! $content_post->content !!}
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto xl:w-[80%]">
        <div class="flex-col justify-between items-center my-2 py-4 px-3 md:bg-white rounded-lg max-md:my-1 max-md:py-3 max-md:rounded-2xl">
            <div class="header-box px-4 mb-5">
                <div class="header bg-[#009981]  inline-block h-7 overflow-hidden after:border-t-[30px] after:border-t-[#00483d] after:border-l-[30px] after:border-l-[#009981] after:ml-[40px]">
                    <h2 class="title text-white py-1 pr-14 pl-9 ml-14 bg-[#00483d] text-[14px] uppercase font-bold">
                        <a href="">Bài viết liên quan</a>
                    </h2>
                </div>
            </div>
            <div class="list-products xl:grid xl:grid-cols-4 xl:gap-4 xl:mt-4 md:flex max-xl:overflow-x-auto max-xl:space-x-2  max-xl:overflow-y-hidden max-xl:mt-2 max-xl:hide-scroll-bar no-scrollbar max-xl:pb-2">
                @foreach($related_posts as $item_related)
                    <div class="product-item col-span-1 max-md:mt-2">
                        <div class="card-item bg-white flex pt-2.5 px-2.5 pb-3.5 border-2 h-full flex-col items-center justify-start rounded border-[#f0f0f0] hover:border-white hover:drop-shadow-xl max-md:border-0 cursor-pointer">
                            <div class="thumbnail-item relative w-full">
                                <div class="w-full h-[135px] max-md:h-auto relative flex items-center justify-center">
                                    <div class="img-product transition duration-200 ease-in-out hover:scale-105 md:h-full md:w-full">
                                        <img src="{{ asset($item_related->preview_image) }}" width="600" height="600">
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('user.post_detail', [$item_related->slug]) }}">
                                <h3 class="name-item w-full px-2 py-2.5 text-left text-sm max-md:text-[13px] font-bold text-black">{{ $item_related->title }}</h3>
                            </a>
                            <div class="price-item flex w-full items-center justify-between px-2 py-2.5">
                                <div class="flex max-xl:flex-col gap-2.5 items-center text-xs">
                                    <span class="flex gap-1 items-center text-gray-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="16" width="16"><path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                                        <p>{{ $item_related->created_at->format('d-m-Y H:i') }}</p>
                                    </span>
                                    <span class="flex gap-1 items-center text-gray-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" height="16" width="16"><path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/></svg>
                                        <p>{{ number_format($item_related->views) }} lượt xem</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

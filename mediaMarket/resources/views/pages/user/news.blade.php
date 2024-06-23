@extends('Layouts.homePage')
@section('content')
    <div class="container mx-auto xl:w-[80%]">
        <div class="box-news">
            <div class="box-news-container w-full py-2.5 rounded-md bg-white my-1.5 lg:my-2.5 max-md:bg-[#f2f2f2]" style="box-shadow: 0 0 3px 0 #dee2e6">
                <div class="header-box px-4 mb-5">
                    <div class="header bg-[#d70018]  inline-block h-7 overflow-hidden after:border-t-[30px] after:border-t-[#be1e2d] after:border-l-[30px] after:border-l-[#d70018] after:ml-[40px]">
                        <h2 class="title text-white py-1 pr-14 pl-9 ml-14 bg-[#be1e2d] text-[14px] uppercase font-bold">
                            <a href="">Tin nổi bật</a>
                        </h2>
                    </div>
                </div>
                @if(!empty($hot_news))
                <div class="list-news w-full grid grid-cols-1 lg:grid-cols-2 gap-3 mb-5 px-4">
                    @php $first_post = $hot_news->first(); @endphp
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
                            @foreach($hot_news->slice(1) as $post)
                                <div class="news-item md:flex float-left ml-[1.2%] w-full relative lg:border-b lg:border-b-[#ebebeb] py-3.5 mb-0 items-center">
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
                @else
                    <div class="w-full flex justify-center items-center">
                        <h3 class="font-bold text-lg uppercase">Chưa có bài viết nào!</h3>
                    </div>
                @endif
            </div>
        </div>

        <div class="box-news">
            <div class="box-news-container w-full py-2.5 rounded-md bg-white my-1.5 lg:my-2.5 max-md:bg-[#f2f2f2]" style="box-shadow: 0 0 3px 0 #dee2e6">
                <div class="header-box px-4 mb-5">
                    <div class="header bg-[#d70018]  inline-block h-7 overflow-hidden after:border-t-[30px] after:border-t-[#be1e2d] after:border-l-[30px] after:border-l-[#d70018] after:ml-[40px]">
                        <h2 class="title text-white py-1 pr-14 pl-9 ml-14 bg-[#be1e2d] text-[14px] uppercase font-bold">
                            <a href="">Tin tức hàng ngày</a>
                        </h2>
                    </div>
                </div>
                <div class="list-news w-full grid grid-cols-1 gap-3 mb-5 px-4">
                    <div class="normal-news col-span-1 w-full">
                        @foreach($all_news as $item_news)
                        <div class="news-item md:flex float-left ml-[1.2%] w-full relative lg:border-b lg:border-b-[#ebebeb] py-3.5 mb-0 items-center">
                            <div class="img-news w-full md:w-[30%] h-full float-left bg-cover bg-center">
                                <a href="{{ route('user.post_detail', [$item_news->slug]) }}" class="relative inline-block">
                                    <img class="rounded-lg" src="{{ asset($item_news->preview_image) }}" alt="{{ $item_news->title }}">
                                </a>
                            </div>
                            <div class="title-news-item lg:flex lg:flex-col lg:gap-3 w-[60%] max-md:w-full float-left pl-2.5">
                                <a href="{{ route('user.post_detail', [$item_news->slug]) }}" class="text-xl font-bold max-lg:text-sm xl:font-medium overflow-hidden text-[#333]">{{ $item_news->title }}</a>
                                <div class="description-news h-[75px] max-lg:h-[50px] overflow-hidden">
                                    <span class="inline-block max-lg:text-xs">
                                        {!! $item_news->description !!}
                                    </span>
                                </div>
                                <div class="flex gap-2.5 items-center max-lg:text-xs">
                                        <span class="flex gap-1 items-center text-gray-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="16" width="16"><path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                                            <p>{{ $item_news->created_at->format('d-m-Y H:i') }}</p>
                                        </span>
                                    <span class="flex gap-1 items-center text-gray-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" height="16" width="16"><path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/></svg>
                                            <p>{{ number_format($item_news->views) }} lượt xem</p>
                                        </span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="d-flex justify-content-center">{{$all_news->links('vendor.pagination.tailwind')}}</div>
            </div>
        </div>
    </div>

@endsection

@extends('Layouts.homePage')
@section('content')
    <div class="container mx-auto xl:w-[80%] min-h-full">
        <div class="box-news">
            <div class="box-news-container text-center w-full rounded-md p-2.5 my-1.5 lg:my-2.5 max-md:bg-[#f2f2f2]" style="box-shadow: 0 0 3px 0 #dee2e6">
                <h3 class="text-4xl font-bold my-5">Cảm ơn quý khách đã sử dụng dịch vụ của cửa hàng!</h3>
                <span class="block my-3">Đơn hàng của quý khách sẽ được giao trong thời gian sớm nhất, xin vui lòng chờ đợi.</span>
                <span class="block my-3">Nếu có thắc mắc xin vui lòng liên hệ qua hotline: 1900 323 322.</span>
                <div class="w-full flex justify-center my-4">
                    <img src="{{ asset('storage/products/thanks.png') }}">
                </div>
                <div class="w-full flex justify-center my-4">
                    <a href="{{ route('user.index') }}">
                        <button type="button" class="flex gap-2 py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 hover:text-white focus:outline-none bg-white rounded-lg border border-[#0a6e5f] hover:bg-[#0a6e5f] focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" height="20" width="20"><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
                            Về trang chủ
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('Layouts.homePage')
@section('content')
    <div class="slider-container mt-2.5 mb-5 lg:my-2.5">
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

    <div class="w-full mb-8">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 dark:bg-gray-800 dark:border-gray-700 py-4">
            <div class="flex justify-center items-center mb-4">
                <h1 class="text-center font-bold text-lg">Vui lòng đăng nhập/đăng ký trước khi đặt hàng!</h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8 border-r border-dashed">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Đăng nhập tài khoản
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('user.login') }}" method="POST">
                        @csrf
                        <div>
                            <label for="login_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email:</label>
                            <input type="email" name="login_email" id="login_email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-0 focus:border-0 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white {{ $errors->has('email') ? 'border border-red-500 placeholder-red-700' : '' }}" placeholder="name@company.com" required="">
                            @if ($errors->has('email'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500 "><span class="font-medium">{{ $errors->first('email') }}</span></p>
                            @endif
                        </div>
                        <div>
                            <label for="login_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mật khẩu:</label>
                            <input type="password" name="login_password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-0 focus:border-0 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white {{ $errors->has('password') ? 'border border-red-500 placeholder-red-700' : '' }}" required="">
                            @if ($errors->has('password'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500 "><span class="font-medium">{{ $errors->first('password') }}</span></p>
                            @endif
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                                </div>
                            </div>
                            <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Quên mật khẩu?</a>
                        </div>
                        <button type="submit" class="w-full text-white bg-[#0a6e5f] font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Đăng nhập</button>
                        <div class="mt-1.5">
                            <a href="">
                                <button type="button" class="text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="42" height="42" viewBox="0 0 48 48">
                                        <path fill="#3f51b5" d="M24 4A20 20 0 1 0 24 44A20 20 0 1 0 24 4Z"></path><path fill="#fff" d="M29.368,24H26v12h-5V24h-3v-4h3v-2.41c0.002-3.508,1.459-5.59,5.592-5.59H30v4h-2.287 C26.104,16,26,16.6,26,17.723V20h4L29.368,24z"></path>
                                    </svg>
                                </button>
                            </a>
                            <a href="{{ route('auth.google') }}">
                                <button type="button" class="text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 48 48">
                                        <path fill="#fbc02d" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#e53935" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4caf50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1565c0" d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                                    </svg>
                                </button>
                            </a>
                        </div>

                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Bạn chưa có tai khoản? <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Đăng ký</a>
                        </p>
                    </form>
                </div>
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Đăng ký tài khoản
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('user.register') }}" method="POST">
                        @csrf
                        <div>
                            <label for="register_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Họ tên:</label>
                            <input type="text" name="register_name" id="register_name" class="{{ $errors->has('register_name') ? ' border border-red-500 placeholder-red-700' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nguyễn Văn A">
                            @if ($errors->has('register_name'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('register_name') }}</p>
                            @endif
                        </div>
                        <div>
                            <label for="register_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email:</label>
                            <input type="text" name="register_email" id="register_email" class="{{ $errors->has('register_email') ? ' border border-red-500 placeholder-red-700' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com">
                            @if ($errors->has('register_email'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('register_email') }}</p>
                            @endif
                        </div>
                        <div>
                            <label for="register_phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Số điện thoại:</label>
                            <input type="text" name="register_phone" id="register_phone" class="{{ $errors->has('register_phone') ? ' border border-red-500 placeholder-red-700' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="093*******">
                            @if ($errors->has('register_phone'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('register_phone') }}</p>
                            @endif
                        </div>
                        <div>
                            <label for="register_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mật khẩu:</label>
                            <input type="password" name="register_password" id="register_password" placeholder="••••••••" class="{{ $errors->has('register_password') ? ' border border-red-500 placeholder-red-700' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @if ($errors->has('register_password'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('register_password') }}</p>
                            @endif
                        </div>
                        <div>
                            <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nhâp lại mật khẩu:</label>
                            <input type="password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="{{ $errors->has('confirm-password') ? ' border border-red-500 placeholder-red-700' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @if ($errors->has('confirm-password'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('confirm-password') }}</p>
                            @endif
                        </div>
                        <div>

                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-light text-gray-500 dark:text-gray-300">Tôi chấp nhận, đồng ý với những <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Điều kiện và Điều khoản</a></label>
                            </div>
                        </div>
                        <button type="submit" class="w-full text-white bg-[#0a6e5f] font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Đăng ký</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Bạn đã có tài khoản? <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Đăng nhập</a>
                        </p>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="fixed top-[160px] right-[26px] z-50">
        @include('pages.user.common.alert')
    </div>
    @include('pages.user.common.javascript')
@endsection

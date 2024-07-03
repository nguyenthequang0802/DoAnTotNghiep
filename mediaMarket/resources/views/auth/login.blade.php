@extends('layouts.authenPage')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Sign in to your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('admin.login') }}" method="POST">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="email" name="email" id="email"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('email') ? ' border border-red-500 placeholder-red-700' : '' }}" value="{{ old('email') }}" placeholder="name@company.com" required="">
                            @if ($errors->has('email'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500 "><span class="font-medium">{{ $errors->first('email') }}</span></p>
                            @endif
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('password') ? ' border border-red-500 placeholder-red-700' : '' }}" required="">
                            @if ($errors->has('password'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500 "><span class="font-medium">{{ $errors->first('password') }}</span></p>
                            @endif
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" {{ old('remember') ? 'checked' : '' }}>
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                                </div>
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot password?</a>
                            @endif
                        </div>
                        <button type="submit" class="w-full text-white bg-[#0a6e5f] focus:ring-4 focus:outline-none focus:ring-[#be1e2b] font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign in</button>
{{--                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">--}}
{{--                            Don’t have an account yet? <a href="{{ route('admin.register.form') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>--}}
{{--                        </p>--}}
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

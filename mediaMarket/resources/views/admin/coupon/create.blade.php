@extends('Layouts.adminPage')
@section('content')
    <section class="dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto">
            <a href="{{ route('admin.coupon.index') }}" style="color: #3b82f6">
                <span class="font-normal">< <p class="inline underline">Quay Lại</p></span>
            </a>
            <h2 class="my-4 text-xl font-bold text-gray-900 dark:text-white">Thêm mới nhãn hiệu</h2>
            <form action="{{ route('admin.coupon.store') }}" method="POST">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tên phiếu mua hàng</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tên phiếu hàng" required="">
                    </div>
                    <div></div>
                    <div class="w-full">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ghi chú phiếu mua hàng</label>
{{--                        <input type="text"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ghi chú" required>--}}
                        <textarea name="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                    </div>
                    <div></div>
                    <div class="w-full">
                        <label for="code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mã phiếu mua hàng</label>
                        <input type="text" name="code" id="code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Mã phiếu hàng" required>
                    </div>
                    <div></div>
                    <div class="w-full">
                        <label for="value" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giá trị phiếu mua hàng</label>
                        <input type="text" name="value" id="value" class="price_format bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ví dụ: 10.000" required="">
                    </div>
                    <div></div>
                    <div class="w-full">
                        <label for="limit_quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Số lượng giới hạn</label>
                        <input type="number" name="limit_quantity" id="limit_quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Số lượng giới hạn" required="">
                    </div>
                    <div></div>
                    <div class="flex items-center">
                        <div class="relative">
                            <input name="start" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ngày bắt đầu ">
                        </div>
                        <span class="mx-4 text-gray-500">to</span>
                        <div class="relative">
                            <input name="end" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ngày kết thúc">
                        </div>
                    </div>
                </div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Thêm mới
                </button>
            </form>
        </div>
    </section>
@endsection

@extends('Layouts.adminPage')
@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto">
            <a href="{{ route('admin.brand.index') }}" style="color: #3b82f6">
                <span class="font-normal">< <p class="inline underline">Quay Lại</p></span>
            </a>
            <h2 class="my-4 text-xl font-bold text-gray-900 dark:text-white">Thêm mới nhãn hiệu</h2>
            <form action="{{ route('admin.brand.store') }}" method="POST">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tên nhãn hiệu</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tên nhãn hiệu" required="">
                    </div>
                    <div></div>
                    <div class="w-full">
                        <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SLUG</label>
                        <input type="text" name="slug" id="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Slug">
                    </div>
                    <div></div>
                    <div class="w-full">
                        <label for="country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nơi xuất xứ</label>
                        <input type="text" name="country" id="country" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nơi xuất xứ" required="">
                    </div>
                    <div></div>
                    <div class="w-full">
                        <label for="image_label" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Chọn icon</label>
                        <div class="flex w-full relative">
                            <input type="text" id="image_label" class="bg-gray-50 w-full border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-gray-300 rounded-lg block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="icon"
                                   aria-label="Image" aria-describedby="button-image">
                            <div class="input-group-append absolute right-0">
                                <button type="button" id="button-image" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5">Chọn tệp</button>
                            </div>
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

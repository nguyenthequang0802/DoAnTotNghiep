@extends('Layouts.adminPage')
@section('content')
    <section class="dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto">
            <a href="{{ route('admin.category.index', $model_type) }}" style="color: #3b82f6">
                <span class="font-normal">< <p class="inline underline">Quay Lại</p></span>
            </a>
            @if($model_type == 'post')
                <h2 class="m-4 text-xl font-bold text-gray-900 dark:text-white">Thêm mới danh mục bài viết</h2>
            @elseif($model_type == 'product')
                <h2 class="m-4 text-xl font-bold text-gray-900 dark:text-white">Thêm mới danh mục sản phẩm</h2>
            @endif
            <form action="{{ route('admin.category.store', $model_type) }}" method="POST">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tên danh mục</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 {{ $errors->has('name') ? ' border border-red-500 placeholder-red-700' : '' }}" placeholder="Tên danh mục">
                        @if ($errors->has('name'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="w-full">
                        <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SLUG</label>
                        <input type="text" name="slug" id="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Slug">
                    </div>
                    <div class="w-full">
                        <label for="model_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Model</label>
                        <input type="text" name="model_type" id="model_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $model_type }}" readonly required="">
                    </div>
                    <div class="w-full">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mô tả ngắn</label>
                        <input type="text" name="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 {{ $errors->has('description') ? ' border border-red-500 placeholder-red-700' : '' }}" placeholder="Mô tả ngắn">
                        @if ($errors->has('description'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('description') }}</p>
                        @endif
                    </div>
                    <div>
                        <label for="parent_cate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Danh mục cha</label>
                        <select id="parent_cate" name="parent_cate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Chọn danh mục cha</option>
                            @include('admin.category.category_option', ['categories'=>$categories, 'level'=>0])
                        </select>
                    </div>
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
                    <div></div>
                    <div class="w-full">
                        <label for="image_label" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Trạng thái:</label>
                        <div class="w-full flex flex-wrap">
                            <div class="flex items-center me-4">
                                <input id="red-radio" type="radio" value="0" name="status" checked class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="red-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ẩn </label>
                            </div>
                            <div class="flex items-center me-4">
                                <input id="green-radio" type="radio" value="1" name="status" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="green-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hiển thị</label>
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

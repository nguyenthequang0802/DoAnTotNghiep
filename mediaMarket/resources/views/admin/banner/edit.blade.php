@extends('Layouts.adminPage')
@section('content')
    <section class="dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto">
            <a href="{{ route('admin.banner.index') }}" style="color: #3b82f6">
                <span class="font-normal">< <p class="inline underline">Quay Lại</p></span>
            </a>
            <h2 class="my-4 text-xl font-bold text-gray-900 dark:text-white">Sửa thông tin banner</h2>
            <form action="{{ route('admin.banner.update', $item->id) }}" method="POST">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tên banner</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 {{ $errors->has('name') ? ' border border-red-500 placeholder-red-700' : '' }}" value="{{ $item->name }}">
                        @if ($errors->has('name'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div></div>
                    <div class="w-full">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mô tả</label>
                        <input type="text" name="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 {{ $errors->has('description') ? ' border border-red-500 placeholder-red-700' : '' }}" value="{{ $item->description }}">
                        @if ($errors->has('description'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('description') }}</p>
                        @endif
                    </div>
                    <div></div>
                    <div class="w-full">
                        <label for="image_label" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Chọn ảnh</label>
                        <div class="flex w-full relative {{ $errors->has('path') ? ' border border-red-500 placeholder-red-700' : '' }}">
                            <input type="text" id="image_label" class="bg-gray-50 w-full border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-gray-300 rounded-lg block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="path"
                                   aria-label="Image" aria-describedby="button-image" value="{{ $item->path }}">
                            <div class="input-group-append absolute right-0">
                                <button type="button" id="button-image" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5">Chọn tệp</button>
                            </div>
                        </div>
                        @if ($errors->has('path'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('path') }}</p>
                        @endif
                    </div>
                </div>
                <div></div>
                <div class="w-full">
                    <label for="image_label" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Trạng thái:</label>
                    <div class="w-full flex flex-wrap">
                        <div class="flex items-center me-4">
                            <input id="red-radio" type="radio" value="0" name="status" {{ $item->status == 0 ? 'checked' : '' }} class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="red-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ẩn </label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="green-radio" type="radio" value="1" name="status" {{ $item->status == 1 ? 'checked' : '' }} class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="green-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hiển thị</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Cập nhật
                </button>
            </form>
        </div>
    </section>
@endsection

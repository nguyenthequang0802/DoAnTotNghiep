@extends('Layouts.adminPage')
@section('content')
    <section class="dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto">
            <a href="{{ route('admin.post.index') }}" style="color: #3b82f6">
                <span class="font-normal">< <p class="inline underline">Quay Lại</p></span>
            </a>
            <h2 class="my-4 text-xl font-bold text-gray-900 dark:text-white">Thêm mới bài viết mới</h2>
            <form action="{{ route('admin.post.store') }}" method="POST">
                @csrf
                <div class="w-full p-4 text-left bg-white border border-gray-200 rounded-lg shadow sm:p-3 dark:bg-gray-800 dark:border-gray-700 mb-4">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <div class="col-span-1">
                            <div class="mb-6">
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Danh mục bài viết <p class="inline-block text-red-400 text-sm">*</p>:</label>
                                <select id="category" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Chọn danh mục bài viết</option>
                                    @include('admin.post.category_option', ['categories'=>$categories, 'level'=>0])
                                </select>
                            </div>
                            <div class="mb-6">
                                <label for="product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bài viết của sản phẩm:</label>
                                <select id="product" name="product" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Chọn sản phẩm</option>
                                    @foreach($products as $item_product)
                                        <option value="{{ $item_product->id }}">{{ $item_product->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex w-full relative">
                                <label for="image_label" class="inline-block text-sm font-medium text-gray-900 dark:text-white">Ảnh Preview:</label>
                                <input type="text" id="image_label" class="bg-gray-50 w-full border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-gray-300 rounded-lg block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="icon"
                                       aria-label="Image" aria-describedby="button-image">
                                <div class="input-group-append absolute right-0">
                                    <button type="button" id="button-image" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5">Chọn tệp</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full p-4 text-left bg-white border border-gray-200 rounded-lg shadow sm:p-3 dark:bg-gray-800 dark:border-gray-700 mb-4">
                    <div class="w-full">
                        <div class="">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                <div class="">
                                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tiêu đề <p class="inline-block text-red-400 text-sm">*</p>:</label>
                                    <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                </div>
                                <div class="">
                                    <label for="seo_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SEO Title:</label>
                                    <input type="text" id="seo_title" name="seo_title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                </div>
                                <div class="">
                                    <label for="slug_post" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SLUG bài viết:</label>
                                    <input type="text" id="slug_post" name="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                                </div>
                                <div class="">
                                    <label for="seo_key" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SEO Keywords:</label>
                                    <input type="text" id="seo_key" name="seo_keywords" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                </div>
                                <div class="">
                                    <label for="post_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mô tả ngắn</label>
                                    <textarea id="post_description" name="description" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
                                </div>
                                <div class="">
                                    <label for="seo_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SEO Description</label>
                                    <textarea id="seo_description" name="seo_description" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full p-4 text-left bg-white border border-gray-200 rounded-lg shadow sm:p-3 dark:bg-gray-800 dark:border-gray-700 mb-4">
                    <div class="w-full">
                        <div class="">
                            <div class="">
                                <label for="content" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Nội dung bài viết</label>
                                <textarea id="content" name="content" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
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

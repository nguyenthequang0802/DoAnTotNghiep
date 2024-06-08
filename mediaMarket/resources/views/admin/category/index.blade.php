@extends('Layouts.adminPage')
@section('content')
    <section class="py-3 sm:py-5">
        <div class="px-4">
            <!-- Start coding here -->
            <div class="bg-white min-h-[275px] dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                            </div>
                        </form>
                    </div>
                    <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <a href="{{ route('admin.category.add', $model_type) }}">
                            <button type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                </svg>
                                Thêm mới
                            </button>
                        </a>
                    </div>
                </div>
                @if($model_type == 'post')
                    <h2 class="m-4 text-xl font-bold text-gray-900 dark:text-white">Bảng Danh mục bài viết</h2>
                @elseif($model_type == 'product')
                    <h2 class="m-4 text-xl font-bold text-gray-900 dark:text-white">Bảng Danh mục sản phẩm</h2>
                @endif
                <div class="overflow-x-auto p-2.5">
                    @if(count($categories) === 0)
                        <div class="w-full flex flex-col justify-center items-center">
                            <h1 class="font-bold text-xl block">Chưa có nội dung</h1>
                            <img src="https://web.nvnstatic.net/tp/T0207/img/tmp/empty_cart.png?v=3">
                        </div>
                    @else
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mb-3">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">#</th>
                                <th scope="col" class="px-4 py-3">Tên danh mục</th>
                                <th scope="col" class="px-4 py-3">Icon</th>
                                <th scope="col" class="px-4 py-3">Mô tả</th>
                                <th scope="col" class="px-4 py-3">Trạng thái</th>
                                <th scope="col" class="px-4 py-3">Model type</th>
                                <th scope="col" class="px-4 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="accordion-collapse" data-accordion="collapse">
                            @include('admin.category.row_table', ['categories'=>$categories, 'level'=> 0])
                        </tbody>
                    </table>
                    @endif
                </div>
                <div class="d-flex justify-content-center">{{$categories->links('vendor.pagination.tailwind')}}</div>
            </div>
        </div>
    </section>
    <div class=" fixed top-[115px] right-[26px]">
        @include('admin.common.alert')
    </div>
    @include('admin.common.javascript')
@endsection

@extends('Layouts.adminPage')
@section('content')
    <section class="py-3 sm:py-5">
        <div class="px-4">
            <!-- Start coding here -->
            <div class="bg-white min-h-[275px] dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="grid grid-cols-2 lg:grid-cols-4 items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="col-span-1 max-lg:col-span-2">
                        @if($model_type == 'post')
                            <h2 class="m-4 text-xl font-bold text-gray-900 dark:text-white">Quản lý danh mục bài viết</h2>
                        @elseif($model_type == 'product')
                            <h2 class="m-4 text-xl font-bold text-gray-900 dark:text-white">Quản lý danh mục sản phẩm</h2>
                        @endif
                    </div>
                    <div class="col-span-3 max-lg:col-span-2 flex justify-end gap-2.5">
                        <div class="w-2/3">
                            <form class="flex items-center form_search" method="POST">
                                @csrf
                                <label for="simple-search" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input type="text" id="simple-search" name="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                                </div>
                            </form>
                        </div>
                        <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                            <a href="{{ route('admin.category.add', $model_type) }}">
                                <button type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                    </svg>
                                    Thêm mới
                                </button>
                            </a>
                        </div>
                    </div>

                </div>
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
                        <tbody class="results-search">
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
    <script>
        $('.form_search').on('input', function (e){
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.category.search', [$model_type]) }}',
                data: $('.form_search').serialize(),
                success: function(response){
                    console.log(response)
                    let html = '';
                    let urlEdit = `{{ route('admin.category.edit', [ $model_type,':id']) }}`;
                    let urlDel = `{{ route('admin.category.destroy', [ $model_type,':id']) }}`;
                    for (let i = 0; i < response.length; i++){
                         let routeEdit = urlEdit.replace(':id', response[i].id);
                        let routeDel = urlDel.replace(':id', response[i].id);
                        if(response[i].status == 0){
                            cate_status = '<td class="px-4 py-3 font-bold text-sm text-red-700">Ẩn</td>'
                        } else if(response[i].status == 1){
                            cate_status = '<td class="px-4 py-3 font-bold text-sm text-green-500">Hiển thị</td>'
                        }
                        html += `
                            <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">${ i+1 }</th>
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">${ response[i].name }</th>
                            <td class="px-4 py-3">
                                <img src="${ response[i].icon_path }" class="w-16 md:w-32 max-w-full max-h-full" alt="${ response[i].name }">
                            </td>
                            <td class="px-4 py-3">${ response[i].description }</td>
                            ${ cate_status }
                            <td class="px-4 py-3">${ response[i].model_type }</td>
                            <td class="px-4 py-3 flex items-center justify-end">
                            <a href="${ routeEdit }" class="flex text-md py-2 px-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                <button>
                                    <p class="text-[#F7BE38]"><i class="fa-solid fa-pen-to-square"></i></p>
                                </button>
                            </a>
                            <a href="${ routeDel }" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="action-delete text-md flex py-2 px-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                <button>
                                    <p class="text-red-700"><i class="fa-regular fa-trash-can"></i></p>
                                </button>
                            </a>
                        </td>
                    </tr>`
                    }
                    if( response.length === 0){
                        html = `<tr class="text-red-400 font-bold text-2xl text-center"><td>Không có kêt quả tìm kiếm!</td></tr>`;
                    }
                    $('.results-search').html(html);
                },
            })
        })
    </script>
@endsection

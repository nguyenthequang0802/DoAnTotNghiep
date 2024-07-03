@extends('Layouts.adminPage')
@section('content')
    <section class="py-3 sm:py-5">
        <div class="px-4">
            <!-- Start coding here -->
            <div class="bg-white min-h-[275px] dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="grid grid-cols-2 lg:grid-cols-4  items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="max-lg:col-span-2 col-span-1">
                        <h2 class="m-4 text-xl font-bold text-gray-900 dark:text-white">Quản lý sản phẩm</h2>
                    </div>
                    <div class="col-span-3 max-lg:col-span-2 flex justify-end items-center gap-2.5">
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
                        <div class="flex md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                            <a href="{{ route('admin.product.add') }}">
                                <button type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                    </svg>
                                    Thêm mới
                                </button>
                            </a>
                        </div>
                        <div>
                            <form action="{{ route('admin.product.export_csv') }}" method="POST">
                                @csrf
                                <button type="submit" name="export_csv" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Export</button>
                            </form>
                        </div>
                    </div>

                </div>
{{--                <div class="flex justify-end p-2.5">--}}
{{--                </div>--}}
                <div class="overflow-x-auto p-2.5">
                    @if(count($products) === 0)
                        <div class="w-full flex flex-col justify-center items-center">
                            <h1 class="font-bold text-xl block">Chưa có sản phẩm</h1>
                            <img src="https://web.nvnstatic.net/tp/T0207/img/tmp/empty_cart.png?v=3">
                        </div>
                    @else
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">#</th>
                                <th scope="col" class="px-4 py-3">Tên sản phẩm</th>
                                <th scope="col" class="px-4 py-3">Ảnh</th>
                                <th scope="col" class="px-4 py-3">Nhà sản xuất</th>
                                <th scope="col" class="px-4 py-3">Màu</th>
                                <th scope="col" class="px-4 py-3">Số lượng</th>
                                <th scope="col" class="px-4 py-3">Trạng thái</th>
                                <th scope="col" class="px-4 py-3">Khuyến mãi</th>
                                <th scope="col" class="px-4 py-3">Giá niêm yết</th>
                                <th scope="col" class="px-4 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="results-search">
                            @foreach($products as $item)
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $loop->index+1 }}</th>
                                    <td class="px-4 py-3">{{ $item->name }}</td>
                                    <td class="px-4 py-3">
                                        @foreach($item->images as $key => $image)
                                            @if($key == 0)
                                                <img src="{{ asset($image->path_image) }}" class="w-16 md:w-32 max-w-full max-h-full" alt="{{ $item->name }}">
                                                @break
                                            @endif
                                        @endforeach
                                    </td>
                                    <td class="px-4 py-3">{{ $item->brand->name }}</td>
                                    <td class="px-4 py-3">{{ $item->color }}</td>
                                    <td class="px-4 py-3">{{ $item->quantity }}</td>
                                    <td class="px-4 py-3">{{ $item->status }}</td>
                                    <td class="px-4 py-3">{{ $item->promotion }}</td>
                                    <td class="px-4 py-3"><strong>{{ number_format($item->price, 0, ',', '.') }} đ</strong></td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <a href="{{ route('admin.product.upload.index', $item->id) }}" class="flex text-md py-2 px-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <button>
                                                <p class="text-green-400"><i class="fa-regular fa-images"></i></p>
                                            </button>
                                        </a>
                                        <a href="{{ route('admin.product.edit', $item->id) }}" class="flex text-md py-2 px-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <button>
                                                <p class="text-[#F7BE38]"><i class="fa-solid fa-pen-to-square"></i></p>
                                            </button>
                                        </a>
                                        <a href="{{ route('admin.product.destroy', $item->id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="action-delete text-md flex py-2 px-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                            <button>
                                                <p class="text-red-700"><i class="fa-regular fa-trash-can"></i></p>
                                            </button>
                                        </a>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
                <div class="d-flex justify-content-center">{{$products->links('vendor.pagination.tailwind')}}</div>
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
                url: '{{ route('admin.product.search') }}',
                data: $('.form_search').serialize(),
                success: function(response){
                    console.log(response)
                    let html = '';
                    let urlUploadImage = `{{ route('admin.product.upload.index', ':id') }}`;
                    let urlEdit = `{{ route('admin.product.edit', ':id') }}`;
                    let urlDel = `{{ route('admin.product.destroy', ':id') }}`;
                    for (let i = 0; i < response.length; i++){
                        let formattedPrice = parseFloat(response[i].price).toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
                        let previewImage = response[i].preview_image ? '{{ asset(':path') }}'.replace(':path', response[i].preview_image) : '';
                        let routeUploadImage = urlUploadImage.replace(':id', response[i].id);
                        let routeEdit = urlEdit.replace(':id', response[i].id);
                        let routeDel = urlDel.replace(':id', response[i].id);
                        html += `
                            <tr class="border-b dark:border-gray-700">
                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">${ i+1 }</th>
                                <td class="px-4 py-3">${ response[i].name }</td>
                                <td class="px-4 py-3">
                                    <img src="${ previewImage }" class="w-16 md:w-32 max-w-full max-h-full" alt="${ response[i].name }">
                                </td>
                                <td class="px-4 py-3">${ response[i].brand_name }</td>
                                <td class="px-4 py-3">${ response[i].color }</td>
                                <td class="px-4 py-3">${ response[i].quantity }</td>
                                <td class="px-4 py-3">${ response[i].status }</td>
                                <td class="px-4 py-3">${ response[i].promotion }</td>
                                <td class="px-4 py-3"><strong>${ formattedPrice }</strong></td>
                                <td class="px-4 py-3 flex items-center justify-end">
                                    <a href="${ routeUploadImage }" class="flex text-md py-2 px-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        <button>
                                            <p class="text-green-400"><i class="fa-regular fa-images"></i></p>
                                        </button>
                                    </a>
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
                            </tr>
                        `
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

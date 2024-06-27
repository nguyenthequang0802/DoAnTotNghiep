@extends('Layouts.adminPage')
@section('content')
    <section class="py-3 sm:py-5">
        <div class="px-4">
            <!-- Start coding here -->
            <div class="bg-white min-h-[275px] dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2">
                        <form class="flex items-center form_search">
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
                        <a href="{{ route('admin.coupon.add') }}">
                            <button type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                </svg>
                                Thêm mới
                            </button>
                        </a>
                    </div>
                </div>
                <h2 class="m-4 text-xl font-bold text-gray-900 dark:text-white text-center">Bảng phiếu mua hàng</h2>
                <div class="overflow-x-auto p-2.5">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">Tên phiếu mua hàng</th>
                                <th scope="col" class="px-4 py-3">Mã phiếu</th>
                                <th scope="col" class="px-4 py-3">Giá trị phiếu</th>
                                <th scope="col" class="px-4 py-3">Số lượng phiếu</th>
                                <th scope="col" class="px-4 py-3">Ngày bắt đầu</th>
                                <th scope="col" class="px-4 py-3">Ngày kết thúc</th>
                                <th scope="col" class="px-4 py-3">Gửi mã</th>
                                <th scope="col" class="px-4 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="results-search">
                        @foreach($coupons as $item)
                            <tr class="border-b dark:border-gray-700">
                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $item->name }}</th>
                                <td class="px-4 py-3">{{ $item->code }}</td>
                                <td class="px-4 py-3">{{ number_format($item->value, 0, ',', '.') }}</td>
                                <td class="px-4 py-3">{{ $item->limit_quantity }}</td>
                                <td class="px-4 py-3">{{ $item->start_date }}</td>
                                <td class="px-4 py-3">{{ $item->end_date }}</td>
                                <td class="px-4 py-3">
                                    <a href="{{ route('admin.coupon.send_coupon', $item->id) }}" class="flex text-md py-2 px-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        <button>
                                            <p class="text-blue-600"><i class="fa-solid fa-paper-plane"></i></p>
                                        </button>
                                    </a>
                                </td>
                                <td class="px-4 py-3 flex items-center justify-end">
                                    <a href="{{ route('admin.coupon.edit', $item->id) }}" class="flex text-md py-2 px-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        <button>
                                            <p class="text-[#F7BE38]"><i class="fa-solid fa-pen-to-square"></i></p>
                                        </button>
                                    </a>
                                    <a href="{{ route('admin.coupon.destroy', $item->id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="action-delete text-md flex py-2 px-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                        <button>
                                            <p class="text-red-7002"><i class="fa-regular fa-trash-can"></i></p>
                                        </button>
                                    </a>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center">{{$coupons->links('vendor.pagination.tailwind')}}</div>
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
                url: '{{ route('admin.coupon.search') }}',
                data: $('.form_search').serialize(),
                success: function(response){
                    console.log(response)
                    let html = '';
                    let urlEdit = `{{ route('admin.coupon.edit', ':id') }}`;
                    let urlDel = `{{ route('admin.coupon.destroy', ':id') }}`;
                    for (let i = 0; i < response.length; i++){
                        let couponValue = parseFloat(response[i].value).toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
                        urlEdit = urlEdit.replace(':id', response[i].id);
                        urlDel = urlDel.replace(':id', response[i].id);
                        html += `
                            <tr class="border-b dark:border-gray-700">
                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">${ response[i].name }</th>
                                <td class="px-4 py-3">${ response[i].code }</td>
                                <td class="px-4 py-3">${ couponValue }</td>
                                <td class="px-4 py-3">${ response[i].limit_quantity }</td>
                                <td class="px-4 py-3">${ response[i].start_date }</td>
                                <td class="px-4 py-3">${ response[i].end_date }</td>
                                <td class="px-4 py-3 flex items-center justify-end">
                                    <a href="${ urlEdit }" class="flex text-md py-2 px-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        <button>
                                            <p class="text-[#F7BE38]"><i class="fa-solid fa-pen-to-square"></i></p>
                                        </button>
                                    </a>
                                    <a href="${ urlDel }" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="action-delete text-md flex py-2 px-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                        <button>
                                            <p class="text-red-7002"><i class="fa-regular fa-trash-can"></i></p>
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

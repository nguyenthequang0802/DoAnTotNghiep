@extends('Layouts.adminPage')
@section('content')
    <section class="dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto">
            <a href="{{ route('admin.product.index') }}" style="color: #3b82f6">
                <span class="font-normal">< <p class="inline underline">Quay Lại</p></span>
            </a>
            <h2 class="my-4 text-xl font-bold text-gray-900 dark:text-white">Chỉnh sửa thông tin sản phẩm</h2>
            <form action="{{ route('admin.product.update', $item->id) }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-3">
                    <div class="w-full p-4 text-left bg-white border border-gray-200 rounded-lg shadow sm:p-3 dark:bg-gray-800 dark:border-gray-700 mb-4">
                        <div class="min-h-16 flex justify-between items-center border-b border-b-gray-300">
                            <div>
                                <h4 class="text-xl">Thông tin sản phẩm</h4>
                            </div>
                        </div>
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mt-3">
                            <div class="sm:col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tên sản phẩm</label>
                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 {{ $errors->has('name') ? ' border border-red-500 placeholder-red-700' : '' }}" value="{{ $item->name }}">
                                @if ($errors->has('name'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="w-full">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mô tả ngắn</label>
                                <input type="text" name="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 {{ $errors->has('description') ? ' border border-red-500 placeholder-red-700' : '' }}" value="{{ $item->description }}">
                                @if ($errors->has('description'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('description') }}</p>
                                @endif
                            </div>
                            <div class="w-full">
                                <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SLUG</label>
                                <input type="text" name="slug" id="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $item->slug }}">
                            </div>
                            <div>
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nhà sản xuât</label>
                                <select id="brand" name="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option selected="">Chọn nhà sản xuất</option>
                                    @foreach($brands as $brand)
                                        @if($brand->id === $item->brand_id)
                                            <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
                                        @else
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full">
                                <label for="color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Màu sản phẩm</label>
                                <input type="text" name="color" id="color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 {{ $errors->has('color') ? ' border border-red-500 placeholder-red-700' : '' }}" value="{{ $item->color }}" >
                                @if ($errors->has('color'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('color') }}</p>
                                @endif
                            </div>
                            <div class="w-full">
                                <label for="qty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Số lượng</label>
                                <input type="number" name="qty" id="qty" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 {{ $errors->has('qty') ? ' border border-red-500 placeholder-red-700' : '' }}" value="{{ $item->quantity }}">
                                @if ($errors->has('qty'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('qty') }}</p>
                                @endif
                            </div>
                            <div class="w-full">
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giá niêm yết</label>
                                <input type="text" name="price" id="price" class="price_format bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 {{ $errors->has('price') ? ' border border-red-500 placeholder-red-700' : '' }}" value="{{ $item->price }}">
                                @if ($errors->has('price'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('price') }}</p>
                                @endif
                            </div>
                            <div class="w-full">
                                <label for="promotion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SALE OFF</label>
                                <input type="number" name="promotion" id="promotion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 {{ $errors->has('promtion') ? ' border border-red-500 placeholder-red-700' : '' }}" value="{{ $item->promotion }}">
                                @if ($errors->has('promotion'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('promotion') }}</p>
                                @endif
                            </div>
                            <div>
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Danh mục sản phẩm</label>
                                <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option>Chọn danh sản phẩm</option>
                                    @include('admin.product.category_selected', ['categories'=>$categories, 'level'=>0, 'item'=>$item])
                                </select>
                                @if ($errors->has('category'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('categgory') }}</p>
                                @endif
                            </div>
                            <div>
                                <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Trạng thái sản phẩm</h3>
                                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input id="horizontal-list-radio-license" {{ $item->status == 'conhang' ? 'checked' : '' }} type="radio" value="conhang" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Còn hàng</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input id="horizontal-list-radio-id" type="radio" {{ $item->status == 'hethang' ? 'checked' : '' }} value="hethang" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="horizontal-list-radio-id" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hết hàng</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input id="horizontal-list-radio-military" type="radio" {{ $item->status == 'ngungban' ? 'checked' : '' }} value="ngungban" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="horizontal-list-radio-military" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ngừng bán</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="w-full p-4 text-left bg-white border border-gray-200 rounded-lg shadow sm:p-3 dark:bg-gray-800 dark:border-gray-700 mb-4">
                        <div class="w-full">
                            <div class="min-h-16 flex justify-between items-center border-b border-b-gray-300">
                                <div>
                                    <h4 class="text-xl">Thông số sản phẩm</h4>
                                </div>
                            </div>
                            <div class="mt-4">
                                @if ($errors->has('info_product'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('info_product') }}</p>
                                @endif
                                <div class="">
                                    <textarea id="edit_table" name="info_product" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">{!! $item->info_product !!}</textarea>
                                </div>

                            </div>
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

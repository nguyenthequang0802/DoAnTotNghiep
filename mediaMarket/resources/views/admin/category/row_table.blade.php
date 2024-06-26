@foreach($categories as $item)
    <tr class="border-b dark:border-gray-700 category-parent-{{$item->parent_id}}">
        @if($level == 0)
            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $loop->index+1 }}</th>
        @else
            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white"></th>
        @endif
        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ str_repeat('---- ', $level).$item->name }}</th>
        <td class="px-4 py-3">
            <img src="{{ asset($item->icon_path) }}" class="w-16 md:w-32 max-w-full max-h-full" alt="{{ $item->name }}">
        </td>
        <td class="px-4 py-3">{{ $item->description }}</td>
        @if($item->status == 0)
            <td class="px-4 py-3 font-bold text-sm text-red-700">Ẩn</td>
        @elseif($item->status == 1)
            <td class="px-4 py-3 font-bold text-sm text-green-500">Hiển thị</td>
        @endif
        <td class="px-4 py-3">{{ $item->model_type }}</td>
        <td class="px-4 py-3 flex items-center justify-end">
            <a href="{{ route('admin.category.edit', [$model_type, $item->id]) }}" class="flex text-md py-2 px-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                <button>
                    <p class="text-[#F7BE38]"><i class="fa-solid fa-pen-to-square"></i></p>
                </button>
            </a>
            <a href="{{ route('admin.category.destroy', [$model_type, $item->id]) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="action-delete text-md flex py-2 px-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                <button>
                    <p class="text-red-700"><i class="fa-regular fa-trash-can"></i></p>
                </button>
            </a>
        </td>
    </tr>
    @if($item->subCategory)
        @include('admin.category.row_table', ['categories'=>$item->subCategory, 'level'=>$level+1])
    @endif
@endforeach

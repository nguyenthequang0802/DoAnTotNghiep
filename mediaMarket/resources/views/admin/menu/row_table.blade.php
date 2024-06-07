@foreach($menus as $menu)
    <tr class="border-b dark:border-gray-700">
        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ str_repeat('---- ', $level).$menu->name }}</th>
        <td class="px-4 py-3">
            <img src="{{ $menu->icon_path }}" class="w-16 md:w-32 max-w-full max-h-full" alt="{{ $menu->name }}">
        </td>
        <td class="px-4 py-3">{{ $menu->url }}</td>
        <td class="px-4 py-3 flex items-center justify-end">
            <button id="dropdown-button-menu-{{ $menu->id }}" data-dropdown-toggle="dropdown-menu-{{ $menu->id }}" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                </svg>
            </button>
            <div id="dropdown-menu-{{ $menu->id }}" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button-menu-{{ $menu->id }}">
                    <li>
                        <a href="{{ route('admin.menu.edit', $menu->id) }}" class="flex text-md py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                            <p class="text-[#F7BE38] mr-2"><i class="fa-solid fa-pen-to-square"></i></p>
                            Sửa
                        </a>
                    </li>
                </ul>
                <div class="py-1">
                    <a href="{{ route('admin.menu.destroy', $menu->id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="action-delete text-md flex py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                        <p class="text-red-700 mr-2"><i class="fa-regular fa-trash-can"></i></p>
                        Xóa
                    </a>
                </div>
            </div>
        </td>
    </tr>
    @if($menu->childs)
        @include('admin.menu.row_table', ['menus'=>$menu->childs, 'level'=>$level+1])
    @endif
@endforeach

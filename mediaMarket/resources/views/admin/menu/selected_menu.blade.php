@foreach($menus as $menu)
    <option value="{{$menu->id}}" {{ $menu->id === $item->parent_id ? 'selected' : '' }}>{{str_repeat('---- ', $level).$menu->name}}</option>
    @if($menu->childs)
        @include('admin.menu.selected_menu', ['menus'=>$menu->childs, 'level'=>$level+1, 'item'=>$item])
    @endif
@endforeach

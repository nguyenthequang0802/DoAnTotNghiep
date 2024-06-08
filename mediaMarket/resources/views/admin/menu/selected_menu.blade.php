@foreach($menus as $menu)
    @if($menu->id === $item->parent_id)
        <option value="{{$menu->id}}" selected>{{str_repeat('---- ', $level).$menu->name}}</option>
    @else
        <option value="{{$menu->id}}">{{str_repeat('---- ', $level).$menu->name}}</option>
    @endif
    @if($menu->childs)
        @include('admin.menu.selected_menu', ['menus'=>$menu->childs, 'level'=>$level+1, 'item'=>$item])
    @endif
@endforeach

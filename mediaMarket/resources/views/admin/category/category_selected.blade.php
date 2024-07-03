@foreach($categories as $category)
    @if($category->id === $item->parent_id)
        <option value="{{$category->id}}" selected>{{str_repeat('----', $level).$category->name}}</option>
    @else
        <option value="{{$category->id}}">{{str_repeat('----', $level).$category->name}}</option>

    @endif
    @if($category->subCategory)
        @include('admin.category.category_selected', ['categories'=>$category->subCategory, 'level'=>$level+1, 'item'=>$item])
    @endif
@endforeach


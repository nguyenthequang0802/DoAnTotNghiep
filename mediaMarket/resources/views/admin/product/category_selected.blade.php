@foreach($categories as $category)
    @if($category->id === $item->category_id)
        <option value="{{$category->id}}" selected>{{str_repeat('- ', $level).$category->name}}</option>
    @else
        <option value="{{$category->id}}">{{str_repeat('- ', $level).$category->name}}</option>

    @endif
    @if($category->subCategory)
        @include('admin.product.category_selected', ['categories'=>$category->subCategory, 'level'=>$level+1])
    @endif
@endforeach


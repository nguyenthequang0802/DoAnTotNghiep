@foreach($categories as $category)
    <option value="{{$category->id}}">{{str_repeat('----', $level).$category->name}}</option>
    @if($category->subCategory)
        @include('admin.category.category_option', ['categories'=>$category->subCategory, 'level'=>$level+1])
    @endif
@endforeach


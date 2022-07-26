@foreach($categories as $category)
<li><a href="{{route('products-by-category',['category'=>$category->id])}}">{{$category->name}}</a>
    @if($category->has('children')->get())
    <ul>
        @include('products.recursive', ['categories' => $category->children()->get()])
    </ul>
    @endif
</li>
@endforeach
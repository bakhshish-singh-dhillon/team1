@extends('layouts/admin/app')

@section('content')
<div class="d-flex justify-content-between mb-2 my-3">
    <div class="title black-text">{{ $title }} ({{ $products->total() }})</div>

    <div class="d-flex">
        <form method="get" action="{{ route('admin-get-products', []) }}">
            <div class="btn-group mx-2">
                <input class="form-control search-bar" type="search" name="search" placeholder="Search by id, title or price" value="{{ app('request')->input('search') }}" data-toggle="tooltip" data-placement="bottom" title="Search" />
                <button class="btn btn-success"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <a class="btn" href="/admin/products/create" role="button"><i class="fa-solid fa-plus mx-1" data-toggle="tooltip" data-placement="bottom" title="Create"></i>Create</a>
    </div>
</div>
<div class="card">
    <div class="card-body">

        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light ">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th class="w100">Actions</th>
                </tr>
            </thead>
            <tbody class="">
                @if (count($products) == 0)
                <tr colspan="4">No results found!</tr>
                @endif
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }} $</td>
                    <td>{{ $product->quantity }}</td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-secondary mx-2" href="{{ route('product-edit', ['product' => $product->id]) }}"><i class="fa-solid fa-pencil" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a>
                            <form method="post" action="{{ route('product-delete', ['product' => $product->id]) }}">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $product->id }}" />
                                <button class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="return confirm('Are you sure you want to delete this product?')"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination justify-content-center py-2">

            {!! $products->links('pagination::bootstrap-5') !!}

        </div>
    </div>
</div>
@endsection
@extends('layouts/admin/app')

@section('content')


<div class="d-flex justify-content-between mb-2 my-3">
    <div class="title black-text">{{$title}} ({{ $orders->total() }})</div>

    <div class="d-flex">
        <form method="get" action="/admin/orders/">
            <div class="btn-group mx-2">
                @csrf
                <input class="form-control search-bar" type="search" name="search" placeholder="Search by id, status, subtotal or address" value="{{ app('request')->input('search') }}" />
                <button class="btn btn-success"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <a class="btn btn-primary" href="/admin/orders/create" role="button"><i class="fa-solid fa-plus mx-1"></i>Create</a>
    </div>
</div>
<div class="card">
    <div class="card-body">

        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light ">
                <tr>
                    <th>#</th>
                    <th>Status</th>
                    <th>Subtotal</th>
                    <th>Billing Address</th>
                    <th>Shipping Address</th>
                </tr>
            </thead>
            <tbody class="">
                @if(count($orders)==0)
                <tr>
                    <td colspan="5" class="text-center">No results found!</td>
                </tr>
                @else
                @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->order_status }}</td>
                    <td>{{ $order->subtotal }}</td>
                    <td>{{ $order->billing_address }}</td>
                    <td>{{ $order->shipping_address }}</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-secondary mx-2" href="{{ route('order-edit', ['order' => $order->id]) }}">Edit</a>
                            <form method="post" action="{{ route('order-delete', ['order' => $order->id]) }}">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $order->id }}" />
                                <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>

        <div class="pagination justify-content-center py-2">

            {!! $orders->links('pagination::bootstrap-5') !!}

        </div>
    </div>
</div>
</div>
@endsection
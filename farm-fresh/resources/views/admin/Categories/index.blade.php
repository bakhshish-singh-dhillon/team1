@extends('layouts/admin/app')

@section('content')
<div class="mx-auto container ">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h1 class="h1">Show Categories</h1>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Create</button>
                        <div>
                            <form method="get" action="/admin/products/">
                                <div class="btn-group">
                                    @csrf
                                    <input class="form-control w-96" type="search" name="search" placeholder="Search by id, name, range or location" value="{{ app('request')->input('search') }}" />
                                    <button class="btn btn-success">Search</button>
                                </div>
                            </form>

                        </div>
                    </div>

                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light ">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Parent</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($categories as $cat)
                            <tr>
                                <td>{{ $cat->id }}</td>
                                <td>{{ $cat->name }}</td>
                                <td>{{ null == $cat->parent ? "NA" : $cat->parent->name}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-secondary mx-2" href="{{ route('product-edit', ['product' => $cat->id]) }}">Edit</a>
                                        <form method="post" action="{{ route('product-delete', ['product' => $cat->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $cat->id }}" />
                                            <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Send message</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pagination content-center">

                        {!! $categories->links('pagination::bootstrap-5') !!}

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
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
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoryModal" data-bs-whatever="Create">Create Category</button>
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
                                        <!-- Button trigger modal -->

                                        <button type="button" class="btn btn-primary" id="edit_category" data-bs-toggle="modal" data-bs-target="#categoryModal" data-bs-whatever="Edit" data-bs-id="{{$cat->id}}" data-bs-name="{{$cat->name}}" data-bs-parent="{{null == $cat->parent ? null : $cat->parent->id}}">Edit</button>

                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Button trigger modal -->
                    <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="categoryModalLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="category_form" action="/admin/categories" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="category-name" class="col-form-label">Category Name:
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="category-name" name="category-name">
                                        </div>
                                        <div class="form-outline mb-4 ">
                                            <label class="form-label" for="category_search">Parent Category:
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select name="category_id" id="category_id" class="form-control js-example-basic-single">
                                                <option value="">select parent</option>
                                                @foreach ($parentCategories as $index => $name)
                                                <option value="{{ $name->id }}">
                                                    {{ $name->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                            <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" id="submit_btn" class="btn btn-primary">Create</button>
                                    </form>
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
@extends('layouts/admin/app')

@section('content')
<div class="d-flex justify-content-between mb-2 my-3">
    <div class="title black-text">{{ $title }} ({{ $categories->total() }})</div>

    <div class="d-flex justify-content-between mb-2">
        <!-- Button trigger modal -->
        <div>
            <form method="get" action="/admin/categories/search">
                <div class="btn-group mx-2">
                    @csrf
                    <input class="form-control search-bar" type="search" name="search" placeholder="Search by name or id" value="{{ app('request')->input('search') }}" data-toggle="tooltip" data-placement="bottom" title="Search" />
                    <button class="btn btn-success"><i class="fas fa-search"></i></button>
                </div>
            </form>

        </div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoryModal" data-bs-whatever="Create"><i class="fa-solid fa-plus mx-1" data-toggle="tooltip" data-placement="bottom" title="Create"></i>Create</button>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <table class="table align-middle mb-0 bg-white w-100">
            <thead class="bg-light ">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Parent</th>
                    <th class="w100">Actions</th>
                </tr>
            </thead>
            <tbody class="">
                @if (count($categories) == 0)
                <tr colspan="4">No results found!</tr>
                @endif
                @foreach ($categories as $cat)
                <tr>
                    <td>{{ $cat->id }}</td>
                    <td>{{ $cat->name }}</td>
                    <td>{{ null == $cat->parent ? 'NA' : $cat->parent->name }}</td>
                    <td>
                        <div class="d-flex">
                            <!-- Button trigger modal -->

                            <button type="button" class="btn btn-primary mx-2" id="edit_category" data-bs-toggle="modal" data-bs-target="#categoryModal" data-bs-whatever="Edit" data-bs-id="{{ $cat->id }}" data-bs-name="{{ $cat->name }}" data-bs-parent="{{ null == $cat->parent ? null : $cat->parent->id }}"><i class="fa-solid fa-pencil" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></button>

                            <form method="post" action="{{ route('cat-delete', ['category' => $cat->id]) }}">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $cat->id }}" />
                                <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')"><i class="fa-solid fa-trash-can" data-toggle="tooltip" data-placement="bottom" title="Delete"></i></button>
                            </form>

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
                    <div class="modal-header blue-bg">
                        <h5 class="modal-title" id="categoryModalLabel"></h5>
                        <button type="button" class="no-style white-text" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                    <div class="modal-body">
                        <form id="category_form" action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="category-name" class="col-form-label">Category Name:
                                    <span class="text-danger" id="required">*</span>
                                </label>
                                <input type="text" class="form-control" id="category-name" name="category-name" placeholder="Category name">
                                @error('category-name')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="category_search">Parent Category:
                                </label>
                                <select name="category_id" id="category_id" class="form-control ">
                                    <option value="">Select parent</option>
                                    @foreach ($parentCategories as $index => $name)
                                    <option value="{{ $name->id }}">
                                        {{ ucfirst($name->name) }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="btn-toolbar justify-content-between">
                                <button type="submit" id="submit_btn" class="btn btn-primary">Create</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="pagination justify-content-center py-2">

            {!! $categories->links('pagination::bootstrap-5') !!}

        </div>
    </div>
</div>
@endsection
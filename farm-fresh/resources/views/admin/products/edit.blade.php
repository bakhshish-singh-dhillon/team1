@extends('layouts/admin/app')

@section('content')
    <div class="mx-auto container">
        <div class="card">
            <div class="card-header">
                <h4 class="h4">Edit product</h4>
            </div>
            <div class="card-body">
                <div class="mx-auto container" style="width: 500px;">
                    <form action="{{ route('product-update', ['product' => $product->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $product->id }}" />
                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Name: <span class="text-danger">*</span></label>
                            <input name="name" type="text" id="name" class="form-control"
                                value="{{ old('name', $product->name) }}" />
                            @error('name')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-outline mb-4">
                            @if ($product->image)
                                <img src="/storage/images/{{ $product->image }}" alt="{{ $product->title }}" /><br />
                            @endif
                            <label class="form-label" for="image">Image: <span class="text-danger">*</span></label>
                            <input name="image" type="file" id="image" class="form-control" />
                            @error('image')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="range">product Range Name: <span class="text-danger">*</span></label>
                            <input name="range" type="text" id="range" class="form-control" value="{{ old('range', $product->range) }}" />
                            @error('range')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="location">Location: <span class="text-danger">*</span></label>
                            <input name="location" type="text" id="location" class="form-control" value="{{ old('location', $product->location) }}" />
                            @error('location')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="height">Height: <span class="text-danger">*</span></label>
                            <input name="height" type="text" id="height" class="form-control" value="{{ old('height', $product->height) }}" />
                            @error('height')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="description">Description: <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description', $product->description) }}</textarea>
                            @error('description')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <a class="btn btn-warning" href="/admin/products" role="button">Back</a>
                        <button class="btn btn-primary">Update</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

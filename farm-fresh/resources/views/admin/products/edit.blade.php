@extends('layouts/admin/app')

@section('content')

<div class="title black-text py-3">Products</div>
<div class="">
    <div class="card">
        <div class="card-header">
            <h4 class="h4">Edit Product ({{ old('name', $product->name) }})</h4>
        </div>
        <div class="card-body">
            <div class="mx-auto container">
                <form action="{{ route('product-update', ['product' => $product->id]) }}" method="POST" id="product_crud_form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" name="id" value="{{ $product->id }}" />
                            <div class="form-outline mb-4">
                                <label class="form-label" for="sku">Sku: <span class="text-danger">*</span></label>
                                <input name="sku" type="text" id="sku" class="form-control" value="{{ old('sku', $product->sku) }}" />
                                @error('sku')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="name">Name: <span class="text-danger">*</span> </label>
                                <input name="name" type="text" id="name" class="form-control" value="{{ old('name', $product->name) }}" />
                                @error('name')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="price">Price: <span class="text-danger">*</span></label>
                                <input name="price" type="text" id="price" class="form-control" value="{{ old('price', $product->price) }}" />
                                @error('price')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="measure_unit">Measure Unit: <span class="text-danger">*</span></label>
                                <input name="measure_unit" type="text" id="measure_unit" class="form-control" value="{{ old('measure_unit', $product->measure_unit) }}" />
                                @error('measure_unit')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            {{-- @dd($errors) --}}
                            <div class="form-outline mb-4 ">
                                <label class="form-label" for="category_search">Category:
                                    <span class="text-danger">*</span>
                                </label>
                                {{-- @dd($product->categories()->get()->pluck('id')->toArray()) --}}
                                <select name="category_id[]" class="form-control js-example-basic-single" multiple id="category_search">
                                    <option value="">Please select a category</option>
                                    @foreach ($categories as $index => $name)
                                    <option value="{{ $index }}" @if (in_array( $index, old( 'category_id' , $product->categories()->get()->pluck('id')->toArray()))) selected @endif>
                                        {{ $name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>



                        <div class="col-md-6">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="quantity">Quantity in Stock: <span class="text-danger">*</span></label>
                                <input name="quantity" type="text" id="quantity" class="form-control" value="{{ old('quantity', $product->quantity) }}" />
                                @error('quantity')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="description">Description: <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description', $product->description) }}</textarea>
                                @error('description')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div id="multi-image">
                                <multi-image images="{{ $images }}" images_path="{{ $images_path }}"></multi-image>
                                @error('image_upload.*')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="additional-fields">
                        <div class="">
                            <h2>Additional Details <a class="btn btn-success add-more"><i class="fa-solid fa-plus"></i></a>
                            </h2>
                        </div>
                        {{-- @dd($errors) --}}
                        @if (old('key', $product_metas))
                        {{-- @dd($errors) --}}
                        @foreach (old('key') ?? $product_metas as $key => $value)

                        <div class="row">
                            <div class="col-md-5">
                                <label class="form-label" for="key[]">Atrribute Name: <span class="text-danger">*</span></label>
                                <input name="key[]" type="text" id="key" class="form-control" value="{{ old('key')[$key] ?? $key }}" />
                                @error("key.$key")
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-5">
                                <label class="form-label" for="value[]">Value: <span class="text-danger">*</span></label>
                                <input name="value[]" type="text" id="value" class="form-control" value="{{ old('value')[$key] ?? $value }}" />
                                @error("value.$key")
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-2">
                                <br>
                                <a class="btn btn-danger remove-attribute" id="remove"><i class="fa-solid fa-minus"></i></a>
                            </div>
                        </div>
                        <!-- <a class="btn btn-danger remove-attribute">Remove</a> -->
                        @endforeach
                        @endif
                    </div>
                    <a class="btn btn-danger" href="/admin/products" role="button">Back</a>
                    <button class="btn btn-primary">Publish</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
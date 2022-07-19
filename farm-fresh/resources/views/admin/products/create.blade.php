@extends('layouts/admin/app')

@section('content')
    <div class="mx-auto container">
        <div class="card">
            <div class="card-header">
                <h4 class="h4">Create a new product</h4>
            </div>
            <div class="card-body">
                <div class="mx-auto container" style="width: 500px;">
                    <form action="/admin/products" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-outline mb-4">
                            <label class="form-label" for="sku">Sku: <span class="text-danger">*</span></label>
                            <input name="sku" type="text" id="sku" class="form-control"
                                value="{{ old('sku') }}" />
                            @error('sku')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Name: <span class="text-danger">*</span> </label>
                            <input name="name" type="text" id="name" class="form-control"
                                value="{{ old('name') }}" />
                            @error('name')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="image">Image: <span class="text-danger">*</span></label>
                            <input name="image" type="file" id="image" class="form-control" />
                            @error('image')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="description">Description: <span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="measure_unit">Measure Unit: <span
                                    class="text-danger">*</span></label>
                            <input name="measure_unit" type="text" id="measure_unit" class="form-control"
                                value="{{ old('measure_unit') }}" />
                            @error('measure_unit')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="quantity">Quantity in Stock: <span
                                    class="text-danger">*</span></label>
                            <input name="quantity" type="text" id="quantity" class="form-control"
                                value="{{ old('quantity') }}" />
                            @error('quantity')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="price">Price: <span class="text-danger">*</span></label>
                            <input name="price" type="text" id="price" class="form-control"
                                value="{{ old('price') }}" />
                            @error('price')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="additional-fields">
                            <div class="form-outline mb-4">
                                <h2>Additional Details</h2>
                            </div>
                            {{-- @dd($errors) --}}
                            @if (old('key'))
                                {{-- @dd($errors) --}}
                                @foreach (old('key') as $index => $key)
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="key[]">Key: <span
                                                class="text-danger">*</span></label>
                                        <input name="key[]" type="text" id="key" class="form-control"
                                            value="{{ old('key')[$index] }}" />
                                        @error("key.$index")
                                            <span class="text-danger"> {{ $message }}</span>
                                        @enderror

                                        <label class="form-label" for="value[]">Value: <span
                                                class="text-danger">*</span></label>
                                        <input name="value[]" type="text" id="value" class="form-control"
                                            value="{{ old('value')[$index] }}" />
                                        @error("value.$index")
                                            <span class="text-danger"> {{ $message }}</span>
                                        @enderror

                                        <a class="btn btn-danger remove-attribute">Remove</a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="col-md-2">
                            <div class="form-group change">
                                <label for="">&nbsp;</label><br />
                                <a class="btn btn-success add-more">+ Add attribute</a>
                            </div>
                        </div>
                        <a class="btn btn-warning" href="/admin/products" role="button">Back</a>
                        <button class="btn btn-primary">Publish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

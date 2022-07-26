@extends('layouts/app')

@section('content')
<div class="mx-auto container">
    <div class="card">
        <div class="card-header">
            <h4 class="h4">Write a review</h4>
        </div>
        <div class="card-body">
            <div class="mx-auto container" style="width: 500px;">
                <form action="/products/show" method="POST" enctype="multipart/form-data" id="add_review_form">
                    @csrf

                    <div class="form-outline mb-4">
                        <label class="form-label" for="description">Review:</label>
                        <textarea class="form-control" name="review" id="review" cols="30" rows="10"></textarea>
                        @error('review')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>

                    <button class="btn btn-primary">Publish</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
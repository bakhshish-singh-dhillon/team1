@extends('layouts.app')

@section('content')
<div class="max-container border border-white">
    <div class="row">
        <div class="col-sm-4 border border-dark">
            <div class="header_image">
                <!-- <img src="" alt="product_image"> -->
            </div>
        </div>
        <div class="col-sm-8 border border-dark">
            {{$product->name}}
        </div>
    </div>
</div>

</div>
@endsection
@extends('layouts.app')

@section('content')

<div id="detail">
    <div class="max-container py-4">
        <div class="row">
            <div class="col-md-6">
                <img src="{{$images_path.$prod->images()->first()->url}}" alt="{{$prod->images()->first()->url}}">
            </div>
            <div class="col-md-6">
                <div class="title product-title">{{$prod->name}}</div>

                <table class="detail-table">
                    <tr>
                        <th>Price:</th>
                        <td>$ {{$prod->price}} / {{$prod->measure_unit}}</td>
                    </tr>
                    <tr>
                        <th>Availability:</th>
                        <td>In Stock</td>
                    </tr>
                    <tr>
                        <th>Rating:</th>
                        <td>4.5 out of 5</td>
                    </tr>
                    <tr>
                        <th>Description:</th>
                        <td>{{$prod->description}}</td>
                    </tr>
                    <tr>
                        <th>Quantity:</th>
                        <td>
                            <select name="quantity" id="quantity">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                            <a href="" class="btn">Add to Cart</a>
                        </td>
                    </tr>
                </table>

            </div>
        </div>
        <hr>
        <div id="featured">

            <div class="row">
                <div class="title py-3 text-center">Customer Reviews</div>
                <div class="col-md-3">
                    <p>4.3 out of 5</p>
                </div>
                <div class="col-md-9">
                    <div>
                        <!-- <p class="sub-title">Sargam Sanghani</p>
                        <p>4 out of 5</p>
                        <p></p> -->
                    </div>
                </div>
            </div>
        </div>
        <hr>

        @include('includes.featureProd-loop')

    </div>
</div>
@endsection
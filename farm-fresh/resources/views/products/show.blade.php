@extends('layouts.app')

@section('content')

<div id="detail">
    <div class="max-container py-4">
        <div class="row">
            <div class="col-md-6">
                <img src="images/placeholder.png" alt="Pepper">
            </div>
            <div class="col-md-6">
                <div class="title product-title">Pepper</div>

                <table class="detail-table">
                    <tr>
                        <th>Price:</th>
                        <td>$ 5 /lb</td>
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
                        <td>Suspendisse potenti. Pellentesque a ultricies ex, vitae feugiat urna. Donec non nunc quis risus porta sodales ut eu ligula. Aliquam commodo, mauris nec aliquet mollis, ante nisl suscipit augue, ullamcorper ultricies lorem lorem et lacus. Donec arcu tortor, laoreet eu sapien vel, fringilla blandit ligula. Maecenas et gravida erat. Etiam rhoncus eros eget ex faucibus, at euismod orci efficitur. Suspendisse potenti.</td>
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
        <div id="featured">
            <div class="title text-center py-3">Featured Products</div>

            <div class="row py-4">
                @foreach($products as $prod)
                <div class="col-md-3 px-4">
                    <div class="card product-item">

                        <img class="card-img-top" src="images/products/{{$prod->images()->first()->url}}" alt="{{$prod->images()->first()->url}}">
                        <div class="card-body">
                            <h5 class="card-title green-text text-bold">{{$prod->name}}</h5>
                            <p class="card-text">$ {{$prod->price}} / {{$prod->measure_unit}}</p>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')

<div id="detail">
    <div class="max-container py-4">
        <div class="row">
            <div class="col-md-6">
                {{-- <ul id="product-gallery">
                    <li>
                        <img src="{{ $images_path . $product->images()->first()->url }}" alt="{{ $product->name }}"> </li>

                </ul> --}}
                <div id="product-gallery">
                    {{-- <ul class="slides">
                                @foreach ($product->images as $image)
                                    <li data-thumb="{{ $images_path . $image->url }}" alt="{{ $product->name }}">
                    <img src="{{ $images_path . $image->url }}" alt="{{ $product->name }}" />
                    </li>
                    @endforeach
                    </ul> --}}

                    <div id="gallery">
                        <ul class="slides">
                            @foreach ($product->images as $image)
                            <li>
                                <img src="{{ $images_path . $image->url }}" alt="{{ $product->name }}" />
                            </li>
                            @endforeach
                        </ul>

                    </div>
                    <div id="gallery-slides" class="flexslider">
                        <ul class="slides">
                            @foreach ($product->images as $image)
                            <li>
                                <img src="{{ $images_path . $image->url }}" alt="{{ $product->name }}" />
                            </li>
                            @endforeach
                        </ul>

                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="title product-title">{{ $product->name }}</div>

                <table class="detail-table">
                    <tr>
                        <th>Price:</th>
                        <td>$ {{$product->price}} / {{$product->measure_unit}}</td>
                    </tr>
                    <tr>
                        <th>Availability:</th>
                        @if((int)$product->quantity == 0)
                        <td><i class="fa-solid fa-circle-xmark mx-2 text-danger"></i>
                            Out of Stock</td>
                        @else
                        <td><i class="fa-solid fa-circle-check mx-2 text-success"></i>
                            In Stock</td>
                        @endif
                    </tr>
                    <tr>
                        <th>Rating:</th>
                        <td>{{$avgRating}} out of 5</td>
                    </tr>
                    <tr>
                        <th>Quantity:</th>
                        <td id="quantity" class="d-flex user-select-none">
                            <form class="d-flex" action="{{ route('add-to-cart', ['product' => $product->id]) }}" method="get">
                                @csrf
                                <div>
                                    <i id="plus" class="fa-solid fa-plus m-0 p-2"></i>
                                    <input type="text" name="quantity" class="qty" maxlength="12" value="1" class="input-text qty" disabled="disabled" />
                                    <i id="minus" class="fa-solid fa-minus m-0 p-2"></i>
                                </div>
                                @if((int)$product->quantity == 0)
                                <button type="submit" class="btn" disabled>Add to Cart </button>
                                @else
                                <button type="submit" class="btn">Add to Cart </button>
                                @endif

                            </form>

                        </td>
                    </tr>
                </table>

            </div>
            <hr>
            <div>
                <div class="tab">
                    <button class="tablinks active" onclick="changeTab(event, 'Description')">Description</button>
                    <button class="tablinks" onclick="changeTab(event, 'Additional Info')">Additional Info</button>
                </div>

                <!-- Tab content -->
                <div id="Description" style="display: block;" class="tabcontent">

                    <p>{{$product->description}}</p>
                </div>

                <div id="Additional Info" class="tabcontent">
                    <div class="col-md-4 text-start">
                        @if(sizeof($product->product_metas) == 0)
                        <p class="text-left">No additional information provided!</p>
                        @else

                        <table id="metaTable" class="detail-table">

                            <tbody>

                                @foreach ($product->product_metas as $meta)
                                <tr>
                                    <td class="font-weight-bold">{{$meta->name}}:</td>

                                    <td>{{$meta->value}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>

                <hr>
            </div>
            <div id="reviews">

                <div class="row">
                    <div class="title py-3 text-center">Customer Reviews</div>
                    <div class="col-md-3">

                        @if(count($product->reviews()->get()) == 0)
                        <p>{{$avgRating}} out of 5
                            <small>({{count($product->reviews()->get())}} ratings)</small>
                        </p>

                        @else
                        <p>{{$avgRating}} out of 5
                            <small>({{count($product->reviews()->get())}} ratings)</small>
                        </p>
                        <div>
                            <div>
                                <div>
                                    @if($perFives >= 0 )
                                    <p class="m-0 mt-1"><small>5 star ({{$perFives ?? 0}}%)</small></p>
                                    <div class="outer-box">

                                        <div class="bar-5" style="width: {{$perFives ?? 0}}%;"></div>
                                    </div>
                                    @endif
                                </div>
                                <div>
                                    @if($perFours >= 0)
                                    <p class="m-0 mt-1"><small>4 star ({{$perFours ?? 0}}%)</small></p>
                                    <div class="outer-box">

                                        <div class="bar-5" style="width: {{$perFours ?? 0}}%;"></div>
                                    </div>
                                    @endif
                                </div>
                                <div>
                                    @if($perThrees >= 0)
                                    <p class="m-0 mt-1"><small>3 star ({{$perThrees ?? 0}}%)</small></p>
                                    <div class="outer-box">

                                        <div class="bar-5" style="width: {{$perThrees ?? 0}}%;"></div>
                                    </div>
                                    @endif
                                </div>
                                <div>
                                    @if($perTwos >= 0)
                                    <p class="m-0 mt-1"><small>2 star ({{$perTwos ?? 0}}%)</small></p>
                                    <div class="outer-box">

                                        <div class="bar-5" style="width: {{$perTwos ?? 0}}%;"></div>
                                    </div>
                                    @endif
                                </div>
                                <div>
                                    @if($perOnes >= 0)
                                    <p class="m-0 mt-1"><small>1 star ({{$perOnes ?? 0}}%)</small></p>
                                    <div class="outer-box">

                                        <div class="bar-5" style="width: {{$perOnes ?? 0}}%;"></div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-md-9">

                        @if(count($product->reviews()->get()) == 0)
                        <p>We found 0 matching reviews</p>
                        <p>Be the first!</p>

                        @else
                        @foreach ($reviews as $review)
                        <div>
                            <div class="review-title">{{ $review->user->first_name }} {{ $review->user->last_name }}
                            </div>
                            <div><small>Posted on 17th July, 2022</small></div>
                            <p class="my-2">{{ $review->rating }} out of 5</p>

                            <p>{{ $review->review }}</p>

                        </div>

                        @endforeach

                        @endif


                        <div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="h4">Write a review</h4>
                                </div>
                                <div class="card-body">
                                    <div class="">
                                        <form action="{{route('store-product-review', ['product'=>$product->id])}}" method="POST" id="add_review_form">
                                            @csrf

                                            <table class="w-100">
                                                <tr>
                                                    <td class="px-2 w-25"><label for="sel1">Rate the product:</label></td>
                                                    <td class="py-2"><select name="rating" class="form-control" id="sel1">
                                                            <option value="">Select star rating</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                        @error('rating')
                                                        <span class="text-danger"> {{ $message }}</span>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-2"> <label for="description">Review:</label>
                                                    </td>
                                                    <td><textarea class="form-control" name="review" id="review" rows="2"></textarea>
                                                        @error('review')
                                                        <span class="text-danger"> {{ $message }}</span>
                                                        @enderror
                                                    </td>
                                                </tr>
                                            </table>

                                            <button class="btn">Publish</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="pagination content-center justify-content-center">

                            {!! $reviews->links() !!}

                        </div>
                    </div>
                </div>
                <hr>
            </div>

            @include('includes.featureProd-loop')
        </div>
    </div>
</div>
@endsection

@section('custom-js')

<script>
    function changeTab(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
@endsection
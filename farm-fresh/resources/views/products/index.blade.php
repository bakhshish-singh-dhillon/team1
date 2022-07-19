@extends('layouts.app')

@section('content')


<div id="products">
    <div class="max-container py-4">
        <div class="row">
            <div class="col-md-3 left-part">
                <div class="title">Categories</div>

                <div class="category-list">
                    <ul class="p-0">
                        <li>
                            <a href="" class="my-2"><strong>All Products</strong></a>
                        </li>
                        <li><a href=""><strong>Fruits</strong></a>
                            <ul class="">
                                <li><a href="">Tropical</a></li>
                                <li><a href="">Berries</a></li>
                            </ul>
                        </li>
                        <li><a href="" class="my-2"><strong>Veggies</strong></a></li>
                        <li><a href="" class="my-2"><strong>Dairy Products</strong></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="title">All Products (4)
                    <div class="float-right"><input type="text" placeholder="Search"></div>
                </div>
                <div class="row">
                    <div class="col-md-4 my-2">
                        <div class="card">
                            <img class="card-img-top" src="images/placeholder.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Apple</h5>
                                <p class="card-text">$ 5 / lb</p>
                                <p class="ellipsis-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card">
                            <img class="card-img-top" src="images/placeholder.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Apple</h5>
                                <p class="card-text">$ 5 / lb</p>
                                <p class="ellipsis-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card">
                            <img class="card-img-top" src="images/placeholder.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Apple</h5>
                                <p class="card-text">$ 5 / lb</p>
                                <p class="ellipsis-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card">
                            <img class="card-img-top" src="images/placeholder.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Apple</h5>
                                <p class="card-text">$ 5 / lb</p>
                                <p class="ellipsis-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<div id="featured">
    <div class="title text-center py-3">Featured Products</div>

    <div class="row py-4" id="featured-slider">
        @foreach($products as $prod)
        <div class="col-md-3 px-4">

            <div class="card product-item shadow">

                <img class="card-img-top" src="{{$images_path.$prod->images()->first()->url}}" alt="{{$prod->name}}">
                <div class="card-body">
                    <h5 class="card-title green-text text-bold">{{$prod->name}}</h5>
                    <p class="card-text">$ {{$prod->price}} / {{$prod->measure_unit}}</p>
                </div>
                <a href="/products/show/{{$prod->id}}" class="btn hanging-btn product-item">View</a>

            </div>
        </div>

        @endforeach
    </div>
</div>
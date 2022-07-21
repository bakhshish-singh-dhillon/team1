@foreach($products as $prod)
<div class="col-md-3 px-4">
    <div class="card product-item">

        <img class="card-img-top" src="{{$images_path.$prod->images()->first()->url}}" alt="{{$prod->images()->first()->url}}">
        <div class="card-body">
            <h5 class="card-title green-text text-bold">{{$prod->name}}</h5>
            <p class="card-text">$ {{$prod->price}} / {{$prod->measure_unit}}</p>
        </div>
    </div>
</div>
@endforeach
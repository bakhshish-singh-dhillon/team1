@extends('layouts.app')

@section('content')
<div class="max-container border border-white">
    <div class="row">
        <div class="col-sm-4 border border-dark">
            <div class="product_image">
                <img src="https://via.placeholder.com/300.png/09f/fff" alt="product_image">
            </div>
        </div>
        <div class="col-sm-8 border border-dark">
            <div class="product-item product-detail-section">
                <h2 class="product-title"><a>&nbsp;</a></h2>
                <p class="item-text page-des"></p>
                <div class="prices product_price">
                    <label>Price:</label>
                    <span class="price" id="QProductPrice"></span>
                    <span class="compare-price" id="QComparePrice"></span>
                </div>
                <div class="clearfix"></div>

                <div class="product-infor">
                    <p class="product-inventory"><label>Availability:</label><span></span></p>
                </div>



                <div class="details clearfix">

                    <form action="/cart/add" method="post" class="variants">
                        <select name='id' style="display:none"></select>
                        <div class="qty-section quantity-box">
                            <label>Quantity:</label>
                            <div class="dec button quickqtyminus">-</div>
                            <input type="number" name="quantity" id="Qty" value="1" class="quantity">
                            <div class="inc button quickqtyplus">+</div>
                            <div class="actions">
                                <button type="button" class="add-to-cart-btn btn">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </form>

                </div>


            </div>
        </div>
    </div>
</div>

</div>
@endsection
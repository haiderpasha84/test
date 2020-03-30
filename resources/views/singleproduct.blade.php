@extends('hf')
@section('single')
@section('title', 'Product')

<!--================Single Product Area =================-->

<div class="container" style="margin-top:120px;">
    <div class="row">
        <!-- Image -->
        <div class="col-12 col-lg-6">
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <a href="" data-toggle="modal" data-target="#productModal">
                        <!-- <img class="img-fluid" src="{{asset('images/products/'.$product->slug.'.jpg')}}" /> -->
                        <img class="img-fluid" src="{{asset('storage/'. $product->image)}}" id="currentImage" />
                        <!-- <p class="text-center">Zoom</p> -->
                    </a>
                </div>

            </div>
            <div class="product-section-images" style="display:grid;grid-template-columns: repeat(6, 1fr);grid-gap: 20px;margin-top:10px;">
            <div class="product-section-thumbnail" style="display:flex;border: 1px solid lightgray; min-height:66px;cursor:pointer;">
            @if ( $product->images )
                @foreach(json_decode( $product->images, true) as $image)
                            <img src="{{asset('storage/'. $image)}}" atl="product" style="height:100px;width:100px;">
                @endforeach
            @endif
            </div>
            </div>
        </div>

        <!-- Add to cart -->
        <div class="col-12 col-lg-6 add_to_cart_block">
            <div class="card bg-light mb-3">
            <h2 style="text-align:center;">{{$product->name}}</h2>
                <div class="card-body">
                    <p class="price"  style="text-align:center;font-weight: 700;font-size:24px"><span>$</span>{{$product->price}}</p>
                    
                    <form >
                        <!-- <div class="form-group">
                            <label for="colors">Color</label>
                            <select class="custom-select" id="colors">
                                <option selected>Select</option>
                                <option value="1">Blue</option>
                                <option value="2">Red</option>
                                <option value="3">Green</option>
                            </select>
                        </div> -->
                        
                    </form>

                    <div class="product_rassurance">
                        <ul class="list-inline">
                            <li class="list-inline-item" style="align-content:left;"><i class="fa fa-truck fa-2x"></i><br/>Fast delivery</li>
                            <li class="list-inline-item"style="align-content: center;"><i class="fa fa-credit-card fa-2x"></i><br/>Secure payment</li>
                            <li class="list-inline-item"style="align-content: right;"><i class="fa fa-phone fa-2x"></i><br/>+33 1 22 54 65 60</li>

                        </ul>
                    </div>
                    <div class="reviews_product p-3 mb-2 ">
                        3 reviews
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        (4/5)
                        <a class="pull-right" href="#reviews">View all reviews</a>
                    </div>
                    <div class="datasheet p-3 mb-2  text-white"style="background-color:#343A40">
                        <a href="" class="text-white"><form action="{{route('cart.store')}}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <input type="hidden" name="name" value="{{$product->name}}">
                        <input type="hidden" name="price" value="{{$product->price}}">
                        <button type="submit" class="btn  btn-block text-uppercase"id="button-s" style="color:white;"><i class="fa fa-shopping-cart" style="color:white;"></i> Add to cart</button>
                        </form></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Description -->
        <div class="col-12">
            <div class="card border-light mb-3">
                <div class="card-header  text-white text-uppercase"style="background-color:#343A40"><i class="fa fa-align-justify"></i> Description</div>
                <div class="card-body">
                    <p class="card-text">
                       {!! $product->description !!}
                    </p>
                   
                </div>
            </div>
        </div>

        <!-- Reviews -->
        <div class="col-12" id="reviews">
            <div class="card border-light mb-3">
                <div class="card-header text-white text-uppercase"style="background-color:#343A40"><i class="fa fa-comment"></i> Reviews</div>
                <div class="card-body">
                    <div class="review">
                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                        <meta itemprop="datePublished" content="01-01-2016">January 01, 2018

                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        by Paul Smith
                        <p class="blockquote">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        </p>
                        <hr>
                    </div>
                    <div class="review">
                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                        <meta itemprop="datePublished" content="01-01-2016">January 01, 2018

                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        by Paul Smith
                        <p class="blockquote">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        </p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

	<!-- single product end -->


    <script>

(function(){

                const currentImage = document.querySelector('#currentImage');
                const images = document.querySelectorAll('.product-section-thumbnail');

                images.forEach((element)=> element.addEventListener('click', thumbnailClick));

                function thumbnailClick(e){
                    currentImage.src = this.querySelector('img').src;
                    
                    
                }
})();
</script>


@endsection

<!-- @section('extra-js')

<script>

                    (function(){

                                    const currentImage = document.querySelector('#currentImage');
                                    const images = document.querySelectorAll('.product-section-thumbnail');

                                    images.forEach((element)=> element.addEcentListener('click', thumbnailClick));

                                    function thumbnailClick(e){
                                        currentImage.src = this.querySelector('img').src;
                                    }
                    })();
</script>
@endsection -->
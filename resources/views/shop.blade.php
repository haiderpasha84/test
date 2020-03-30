
@extends('hf')
@section('category')

@section('title', 'Shop')


<!-- Page Content -->
<div class="container" style="margin-top:120px;">

<div class="row">

  <div class="col-lg-3">

    <h1 class="my-4">EliteSportz</h1>
    <div class="list-group">
    @foreach ($categories as $category)
   <button class="{{request()->category == $category->slug ? 'active' : ''}}" id="button" > <a  href="{{route('shop.index' , ['category' => $category->slug ])}}" class="list-group-item" style="">{{$category->name}}</a></button>
    @endforeach

    </div>

  </div>
  <!-- /.col-lg-3 -->
  

  <div class="col-lg-9">

<!-- headhing and filter -->
  <div>

  <h1 class="my-4" style="text-align: center;">{{$categoryName}}</h1>
  <div class="mb-4"style="text-align:center;">
                <h6 class="text-uppercase"></h6>
                <!-- Solid divider -->
                <hr class="solid">
            </div>

  <div style="text-align: right;">
        <strong >Price:</strong>
        <a href="{{route('shop.index', ['category'=> request()->category, 'sort' => 'low_high'])}}" style="display:inline; color:black;"> Low to High</a><span> | </span>
        <a href="{{route('shop.index', ['category'=> request()->category, 'sort' => 'high_low'])}}" style="display:inline;color:black;"> High to Low</a>
  </div>

  </div>
  <!-- heading and filter end -->



    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="row">
    @foreach ($products as $product)
      <div class="col-lg-4 col-md-6 mb-4">
      
        <div class="card h-100">
        
          <a href="{{route('shop.show', $product->slug)}}"><img class="card-img-top" src="{{asset('storage/'. $product->image)}}" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="{{route('shop.show', $product->slug)}}">{{$product->name}}</a>
            </h4>
            <h5><span>$</span>{{$product->price}}</h5>
            <p class="card-text">{!! $product->description !!}</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
          
        </div>
      </div>

      @endforeach


    </div>
    <!-- /.row -->

    <!-- {{ $products->links() }} -->
    {{ $products->appends(request()->input())->links() }}
  </div>

  <!-- /.col-lg-9 -->
            

</div>
<!-- /.row -->

</div>
<!-- /.container -->



<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


@endsection

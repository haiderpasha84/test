@extends('hf')
@section('landing')

@section('title', 'UK')
          

<!-- slider start -->
<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/slide4.jpg" alt="batsman" style="width:100% ;height:550px;padding-left:0px;padding-right:-10px;">
      <div class="carousel-caption">
      <button type="button" class="btn btn-dark" id="button-s" style="border: 1px solid red;"><a href="{{url('shop')}}" style="text-decoration:none;color:white;">Shop now </a></button>
        <p style="color:white; font-size:14px;">Buy now!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="/images/slide3.jpg" alt="ground" style="width:100% ;height:550px;">
      <div class="carousel-caption">
      <button type="button" class="btn btn-dark"id="button-s"style="border: 1px solid red;"><a href="{{url('shop')}}" style="text-decoration:none;color:white;">Shop now</a></button>
        <p style="color:white; font-size:14px;">Buy now!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="/images/slide2.jpg" alt="Ball" style="width:100% ;height:550px;">
      <div class="carousel-caption">
      <button type="button" class="btn btn-dark" id="button-s"style="border: 1px solid red;"><a href="{{url('shop')}}" style="text-decoration:none;color:white;">Shop now</a></button>
        <p style="color:white; font-size:14px;">Buy now!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!-- slider end -->
<br>
<br><br><br>
<!-- example -->
<!-- template -->
<div class="container ">
<div class="row" style="padding-left:12px;">
    <div class="col"style="margin-top:10px;" >
    <div class="card" style="width: 22rem;background-color:#343A40;">
  <img class="card-img-top" src="images/ca.jpg" alt="Card image cap"style="height:250px;">
  <div class="card-body">
    <h5 class="card-title"style="color:white">Bats</h5>
    <p class="card-text"style="color:white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <!-- <a href="#" class="btn btn-primary">Details</a> -->
   <center> <button type="button" class="btn btn-dark" id="button-s" style="border: 1px solid red;">Details</button></center>
    
  </div>
</div>
    </div>
    <div class="col" style="margin-top:10px;">
    <div class="card" style="width: 22rem;background-color:#343A40">
  <img class="card-img-top" src="images/ball.jpg" alt="Card image cap"style="height:250px;">
  <div class="card-body">
    <h5 class="card-title"style="color:white">Cricket Balls</h5>
    <p class="card-text"style="color:white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <!-- <a href="#" class="btn btn-primary">Details</a> -->
    <center><button type="button" class="btn btn-dark" id="button-s" style="border: 1px solid red;">Details</button></center>
  </div>
</div>
    </div>
    <div class="col" style="margin-top:10px;">
    <div class="card" style="width: 22rem;background-color:#343A40">
  <img class="card-img-top" src="images/kit.jpg" alt="Card image cap"style="height:250px;">
  <div class="card-body">
    <h5 class="card-title"style="color:white">Cricket Kits</h5>
    <p class="card-text"style="color:white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <!-- <a href="#" class="btn btn-primary">Details</a> -->
    <center><button type="button" class="btn btn-dark" id="button-s" style="border: 1px solid red;">Details</button></center>
  </div>
</div>
    </div>
  </div>
</div>





<!-- latest bat start -->
<div class="container-fluid lc" style="margin-top:15px;">
<div class="container text-white text-center " >
<img src="images/latest.jpg"  alt="" style="height:500px;width:100%;border: 1px solid red; border-radius:25px 25px 25px 25px" >

 <h1 style="color:black; font-size:50px;padding-top:-25px;font-family:Sans-serif"><b>Our Latest Updates</b></h1>
 
 
 <p style="color:black; font-size:22px;font-family:Sans-serif">We have many companies top quality bats and kits we have many happy clients.</p>
</div>
</div>
<!-- end latest bat -->

















<!-- 
<div>



<div class="container" >
@foreach($products as $product)
<div class="row" style="padding-left:12px;">
          <div class="col"style="margin-top:10px;" >
          <div class="card" style="width: 22rem;background-color:#343A40;">
   <a href="{{route('shop.show', $product->slug)}}"  >   <img class="card-img-top" src="{{asset('storage/'. $product->image)}}" alt="Card image cap"style="height:300px;"></a>
        <div class="card-body">
        <a href="{{route('shop.show', $product->slug)}}" >      <h5 class="card-title"style="color:white">{{$product->name}}</h5></a>
          <p class="card-text"style="color:white">{{$product->price}}</p> -->
          <!-- <a href="#" class="btn btn-primary">Details</a> -->
        <!-- <center> <button type="button" class="btn btn-dark" id="button-s" style="border: 1px solid red;">Details</button></center>
    
  </div>
  </div>
  @endforeach
  </div> -->


























<div class="mb-4"style="text-align:center;">
                <h6 class="text-uppercase"></h6>
                <!-- Solid divider -->
                <hr class="solid">
            </div>

<!-- brands start -->
<div class="container">
  <h2 style="color:black; font-size:45px;font-family:Sans-serif">Brands We Offer</h2>
   <section class="customer-logos slider" style="margin-bottom:15px;">
      <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
      <div class="slide"><img src="http://www.webcoderskull.com/img/logo.png"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
   </section>
   

</div>
<div class="mb-4"style="text-align:center;">
                <h6 class="text-uppercase"></h6>
                <!-- Solid divider -->
                <hr class="solid">
            </div>

<!-- brands end -->
<!-- icon box start -->
<h2 style="color:black; font-size:45px;padding-top:-25px;font-family:Sans-serif;text-align:center;">Why You Sould Buy From Us!</h2>
<!-- icon boxes start -->
<div class="container">
<div class="col-md-4">
			<div class="box">							
				<div class="box-icon">
          <div class="image"><i class="fas fa-balance-scale" ></i></div>
          
					<div class="info">
						<h3 class="title" style="margin-top:10px;font-family:Sans-serif">Quality</h3>
						<p style="font-family:Sans-serif">
            We are endorsed by some of the best brands in the market, so you can safely trust the quality and standard of our products.
						</p>
						<div class="more">
							<a href="#" title="Title Link" style="font-family:Sans-serif">
								Read More <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
        </div>

        <div class="col-md-4">
			<div class="box">							
				<div class="box-icon">
					<div class="image"><i class="fa fa-cash" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title" style="margin-top:10px;font-family:Sans-serif">Secure Payment Method</h3>
						<p style="font-family:Sans-serif">
            EliteSportz is protected by a strong SSL encryption, and we take all the possible measures to secure the confidential details of our shoppers.
						</p>
						<div class="more">
							<a href="#" title="Title Link"style="font-family:Sans-serif">
								Read More <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
        </div>

        <div class="col-md-4">
			<div class="box">							
				<div class="box-icon">
					<div class="image"><i class="fa fa-smile-o" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title"style="margin-top:10px;font-family:Sans-serif">Competitive Prices</h3>
						<p style="font-family:Sans-serif">
            We believe in winning customers and going out of our way to help them find the best product at the most reasonable price in the market.
						</p>
						<div class="more">
							<a href="#" title="Title Link"style="font-family:Sans-serif">
								Read More <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
        </div>
        


</div>
<!-- icon box end -->

<!-- icon boxes end -->

<!-- got questions start -->
<h1 id="ques">Got Questions? We listen!</h1>
<center>
<button type="button" class="btn btn-dark" id="button"style="border: 1px solid red;margin-top:10px;margin-bottom:25px;"><a href="{{url('contact')}}"style="text-decoration:none;color:white;">Contact Us</a></button>
</center>
<!-- got questions end -->





@endsection

@extends('hf')
@section('cart')
@section('title', 'Cart')

<div class="row" style="margin-top:120px;">
    <div class="container">
    <div>
            @if (session()->has('success_message'))
            <div class="alert alert-success">
            {{ session()->get('success_message')}}
            </div>
            @endif

            @if(count($errors) > 0)
            <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
            </div>
            @endif

@if (Cart::count()>0)
            <p style="margin-left:12px;">{{Cart::count()}}item(s) are in your cart </p>
    </div>
    </div>
    </div>



<div class="container mb-4">
    <div class="row">
    <div class="container">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Image </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                            <th scope="col">Save For Later</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                <!-- Example split danger button -->

 
              
                   

                    @foreach (Cart::content() as $item)
                        <tr>
                            <td><a href="{{route('shop.show', $item->model->slug)}}"><img src="{{asset('storage/'. $item->model->image)}}"style="height:70px;width:70px;" /> </a></td>
                            <td><a href="{{route('shop.show', $item->model->slug)}}">{{$item->model->name}} </a></td>
                            <td>In stock</td>
                            <td>  <div class="form-group">
   
    <select class="form-control quantity" id="exampleFormControlSelect1" data-id="{{$item->rowId}}">
    @for($i = 1; $i < 16 ; $i++)
    <option {{ $item->qty == $i ? 'selected' : ''}}>{{$i}}</option>

    @endfor
  
    </select>
  </div>
 </td>
                            <td class="text-right"><span>$</span>{{$item->model->price}}</td>
                            
                            <td></td>
                            <td><p>   <form action="{{route('cart.switchToSaveForLater', $item->rowId)}}" method="POST">
                            </p>
                               {{csrf_field()}}
                                   
                                   <button type="submit" class="cart-options btn btn-sm btn-danger" style="margin-top:-20px;">Save For Later</button>   
                            </form>
                            </td>







                            <!-- <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td> -->
                            <td class="text-right">     <form action="{{route('cart.destroy', $item->rowId)}}" method="POST">
                               {{csrf_field()}}
                                   {{method_field('DELETE')}}  
                                   <button type="submit" class="cart-options btn btn-sm btn-danger"><i class="fa fa-trash"></i</button>   
                            </form> </tr>
                    @endforeach
                    
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right">{{Cart::subtotal()}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Tax (13%)</td>
                            <td class="text-right">{{Cart::tax()}}</td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>{{Cart::total()}}</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                <a href="{{route('shop.index')}}"style="text-decoration: none;">    <button class="btn btn-lg btn-block btn-success text-uppercase" id="button-s">Continue Shopping At Our Shop</button></a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                  <a href="{{route('checkout.index')}}" style="text-decoration: none;margin-top:15px;">  <button class="btn btn-lg btn-block btn-success text-uppercase">Proceed To Checkout</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

@else

<h3>No items in cart!</h3>
<br>
<br>
<a href="{{route('shop.index')}}" class="btn" id="button-s"> Continue Shopping</a>
<br>
<br>
@endif






<br><br><br><br><br>
<div>

            @if (Cart::instance('saveForLater')->count()>0)
            <h3 >{{Cart::instance('saveForLater')->count()}}item(s) saved for later </h3>


            <table class="table table-striped">
                    <thead>
                        <tr style="margin-left:5px;">
                            <th scope="col">Image </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center quantity">Quantity</th>
                            <th scope="col" class="text-right"style="margin-left:5px;">Price</th>
                            <th> </th>
                            <th scope="col"style="margin-left:10px;">Move to cart</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    @foreach (Cart::instance('saveForLater')->content() as $item)
                        <tr>
                            <td><a href="{{route('shop.show', $item->model->slug)}}"><img src="{{asset('images/products/'.$item->model->slug.'.jpg')}}"style="height:70px;width:70px;" /> </a></td>
                            <td><a href="{{route('shop.show', $item->model->slug)}}">{{$item->model->name}} </a></td>
                            <td>In stock</td>
                            <td>  <input class="form-control quantity" type="text"/> 
                                    </td>
                            <td class="text-right"style="margin-left:5px;">{{$item->model->price}}</td>
                            
                            <td></td>
                            <td><p style="margin-left:10px;">   <form action="{{route('saveForLater.switchToCart', $item->rowId)}}" method="POST">
                            </p>
                               {{csrf_field()}}
                                   
                                   <button type="submit" class="cart-options btn btn-sm btn-danger" style="margin-top:-20px;">Move to cart</button>   
                            </form>
                            </td>
                            <!-- <input class="form-control quantity" type="text"/> -->







                            <!-- <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td> -->
                            <td class="text-right" style="margin-left:5px;">     <form action="{{route('saveForLater.destroy', $item->rowId)}}" method="POST">
                               {{csrf_field()}}
                                   {{method_field('DELETE')}}  
                                   <button type="submit" class="cart-options btn btn-sm btn-danger"><i class="fa fa-trash"></i</button>   
                            </form> </tr>
                    @endforeach
                    
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right">{{Cart::subtotal()}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Tax (13%)</td>
                            <td class="text-right">{{Cart::tax()}}</td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>{{Cart::total()}}</strong></td>
                        </tr>
                    </tbody>
                </table>


            @else
                <h3>You have no items saved for later.</h3>

        
            @endif

        <br><br><br><br>
        </div>
            



@endsection


@section('extra-js')
        <script src="{{asset('js/app.js')}}"></script>
        <script>
                (function(){

                        const classname= document.querySelectorAll('.quantity')

                        Array.from(classname).forEach(function(element){
                                element.addEventListener('change', function(){
                                    const id = element.getAttribute('data-id')
                                    axios.patch(`/cart/${id}  `, {
                                       quantity : this.value
                                    })
                                    .then(function (response) {
                                        // console.log(response);
                                        window.location.href = '{{ route('cart.index') }}'
                                    })
                                    .catch(function (error) {
                                        console.log(error);
                                        window.location.href = '{{ route('cart.index') }}'
                                    });
                                })
                        })
                
                })();
        </script>
@endsection
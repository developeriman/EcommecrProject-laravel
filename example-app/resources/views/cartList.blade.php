@extends('master')

@section('content')
<div class="container custom-product">
 <div class="col-sm-10"> </div> 
     <div class="trending-wrapper">
         <h4> Results for Products</h4>
         <a class="btn btn-success" href="/orderNow">Order Now</a><br><br>
            @foreach($products as $item)
            <div class="searched-item row  cart-list-divider">
               <div class="col-sm-3">
                    <a href="/detail/{{$item->id}}"> 
            <img src="{{$item->gallery}}" alt="" class="tranding-image">
            </a> 
            <div class=""> 
                <h2>{{$item->name}}</h2>
                <h5>{{$item->description}}</h5>
             </div>
            
               </div>
                 <div class="col-sm-3">
              <a class="btn btn-warning" href="/removecart/{{$item->cart_id}}"> Remove to Cart</a>
               </div>
         </div>
      @endforeach

  </div>
</div>

@endsection
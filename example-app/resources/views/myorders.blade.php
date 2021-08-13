@extends('master')

@section('content')
<div class="container custom-product">
 <div class="col-sm-10"> </div> 
     <div class="trending-wrapper">
         <h4> My orders </h4>
         <a class="btn btn-success" href="/orderNow">Order Now</a><br><br>
            @foreach($orders as $item)
            <div class="searched-item row  cart-list-divider">
               <div class="col-sm-"3>
                    <a href="/detail/{{$item->id}}"> 
            <img src="{{$item->gallery}}" alt="" class="tranding-image">
            </a> 
            <div class="col-sm-4"> 
                <h2>Name:{{$item->name}}</h2>
                <h5>Delivery Status:{{$item->description}}</h5>
                <h5>Payment_status :{{$item->payment_status}}</h5>
                <h5>Payment_method :{{$item->payment_method}}</h5>
                <h5>Address :{{$item->address}}</h5>

             </div>
            
               </div>
                
         </div>
      @endforeach

  </div>
</div>

@endsection
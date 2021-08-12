@extends('master')

@section('content')
<div class="container custom-product">
 <div class="col-sm-4">
     <a href="#">Fiter </a>
 </div>
 <div class="col-sm-4"> </div>
     <div class="trending-wrapper">
      <h4> Result for Product</h4>
            @foreach($products as $item)
            <div class="searched-item">
                <a href="/detail/{{$item['id']}}"> 
            <img src="{{$item['gallery']}}" alt="" class="tranding-image" id="imagess">
            <div class=""> 
                <h2>{{$item['name']}}</h2>
                <h5>{{$item['description']}}</h5>
             </div>
             </a>
         </div>
      @endforeach

  </div>
</div>

@endsection
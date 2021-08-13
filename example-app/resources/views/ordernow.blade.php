@extends('master')

@section('content')
<div class="container custom-product">
 <div class="col-sm-10"> </div> 
     <table class="table">
    <tbody>
      <tr>
        <td>Amount </td>
        <td>${{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 10</td>
      </tr>
        <tr>
        <td>Total Amount</td>
        <td>{{$total+10}}</td>
      </tr>
    </tbody>
  </table>
  <form action="/orderplace"method="POST">
  @csrf
    <div class="form-group">
      <textarea name="address" class="form-control" placeholder="Enter email"> </textarea>
    </div>
    <div class="form-group"> 
      <label for="">Payment method</label><br><br>
      <input type="radio" value="cash" name="payment"><span>Online Payment </span><br><br>
      <input type="radio" value="cash" name="payment"><span>Online Payment </span><br><br>
      <input type="radio" value="cash" name="payment"><span>Online Payment </span>
    </div>
    <button type="submit" class="btn btn-default">Order Now </button>
  </form>
  </div>
</div>



@endsection
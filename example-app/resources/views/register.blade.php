@extends('master')

@section('content')
<div class="container custom-login">
    <div class="row">
            <div class="col-sm-4 col-sm-offset-4"> 
                 <form action="/register" method="post">
                     @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control"aria-describedby="name" placeholder="Enter name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            
            <button type="submit" class="btn btn-primary">Registration</button><br><br> <a href="/login"> I have an account </a>
            </form>
        </div>
    </div>
</div>

@endsection
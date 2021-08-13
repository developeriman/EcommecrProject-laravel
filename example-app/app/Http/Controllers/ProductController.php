<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 
use App\Models\Cart;
use App\Models\Order; 
use Session;  
use Illuminate\Support\Facades\DB; 

class ProductController extends Controller
{
    public function index(){
        $data =Product::all(); 

        return view('product',['products'=>$data]);  
    }
    public function detail($id){
            $data= Product::find($id);
            return view('detail',['products'=>$data]); 
    }
    
    public function search(Request $request){

        $data =Product::where('name','like','%'.$request->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }
    public function AddToCart(Request $request)
    {
        if ($request->session()->has('user')) {
           $cart =new Cart; 
           $cart->user_id=$request->session()->get('user')['id']; 
           $cart->product_id=$request->product_id;
           $cart->save(); 
            return redirect('/');
        } 
        else{
            return redirect('/login');
        }
    }
    static public function cartItem()
    {
       //   return Cart::where('user_id',2)->count();
        // $userId =Cart::table('user')['id'];
        // return $userId; 
     $userId =Session::get('user')['id'];
     return Cart::where('user_id',$userId)->count();
    }
    public function logout(){
        Session::forget('user');
        return redirect('/login'); 
    }
    public function cartList(){
        $userId =Session::get('user')['id'];
        $products =DB::table('cart')->join('products','cart.product_id','=','products.id')->where('cart.user_id',$userId)->select('products.*','cart.id as cart_id')->get();
        return view('cartList',['products'=>$products]); 

    }
    public function removecart($id){
        Cart::destroy($id); 
        return redirect('/cartList');       
    }
    public function ordernow(){
         $userId =Session::get('user')['id'];
        $total =DB::table('cart')->join('products','cart.product_id','=','products.id')->where('cart.user_id',$userId)->select('products.*','cart.id as cart_id')->sum('products.price');
        return view('ordernow',['total'=>$total]); 
    }
    public function orderplace(Request $request){
        $userId =Session::get('user')['id'];
       $allCart =Cart::where('user_id','=',$userId)->get(); 
        foreach($allCart as $cart){
            $order =new Order; 
            $order->product_id=$cart['product_id'];
            $order->user_id =$cart['user_id'];
            $order->status='pending'; 
            $order->payment_method =$request->payment; 
            $order->payment_status ='pending'; 
            $order->address=$request->address; 
            $order->save(); 
            Cart::where('user_id','=',$userId)->delete();
        }
    return redirect('/');
    }
    public function MyOrders(){
         $userId =Session::get('user')['id'];
        $orders= DB::table('orders')->join('products','orders.product_id','=','products.id')->where('orders.user_id',$userId)->get(); 
        return view('myorders',['orders'=>$orders]);
    }
}

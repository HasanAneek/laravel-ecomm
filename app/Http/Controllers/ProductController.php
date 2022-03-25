<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    public function index(){
        $data = Product::all();

        return view('products.show',[
            'products' => $data
        ]);
    }

    public function store($id){
        $data = Product::find($id);
        return view('products.details',[
            'product' => $data
        ]);
    }

    function addcart(Request $req){
        if($req->session()->has('user')) {
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartItem(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
    function cartlist(){
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')
            ->join('products','cart.product_id', '=','products.id')
            ->where('cart.user_id',$userId)
            ->select('products.*','cart.id as cart_id')
            ->get();

        return view('products.cartlist',[
           'products' => $products
        ]);
 }
 function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');
 }
function ordernow(){
        $userId = Session::get('user')['id'];
        $total  = DB::table('cart')
            ->join('products','cart.product_id', '=','products.id')
            ->where('cart.user_id',$userId)
            ->sum('products.price');

        return view('products.ordernow',[
           'total' => $total
        ]);
}
 function orderaction(Request $request){
        $userId = Session::get('user')['id'];
        $allcart = Cart::where('user_id',$userId)->get();
        foreach ($allcart as $cart){
        $order = new Order();
        $order->product_id = $cart['product_id'];
        $order->user_id = $cart['user_id'];
        $order->status = 'Pending';
        $order->payment_method = $request->payment;
        $order->payment_status = 'Pending';
        $order->address = $request->address;
        $order->save();
        Cart::where('user_id',$userId)->delete();
     }
        $request->input();
        return redirect('/')->with('success','Successfully Order Done!');
 }
 function myorders(){
        $userId = Session::get('user')['id'];
        $orders = DB::table('orders')
            ->join('products','orders.product_id','=','products.id')
            ->where('orders.user_id',$userId)
            ->get();

        return view('products.myorders',[
           'orders' => $orders
        ]);
 }

}

<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
Use Alert;
class ProductController extends Controller
{
    function index()
    {
        // $data= Product::orderBy('id','DESC')->skip('1')->take('6')->get();
        $data= Product::orderBy('id','DESC')->paginate(4);
        // dd($data);
        return view('product',['products'=>$data]);

    }

    function detail($id)
    {
        $data =Product::find($id);
        // dd($data);
        return view('detail',['product'=>$data]);
    }

    function search(Request $req)
    {
        $data = Product::where('nama','like','%'.$req->input('query').'%')->get();
        if($data=="nama")
        {
            return "data yang anda cari tidak ada";
        }
        else
        {
            return view('search',['products'=>$data]);
        }
    }

    function addToCart(Request $req)
    {
       if ($req->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart-> save();
            return redirect('/') ;
        }
        else
        {
            return redirect('/login');
        }
    }
    // static function cartItem()
    // {
    //     $userId=Session::get('user',['id']);
    //     return Cart::where ('user_id',$userId)->count();
    // }
    static function CartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    function cartList()
    {
        $userId=Session::get('user')['id'];
        $products =DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where ('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function orderNow()
    {
        $userId=Session::get('user')['id'];
        $total= $products =DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where ('cart.user_id',$userId)
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
    }

    function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];
        $allCart= Cart::where ('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order= new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart ['user_id'];
            $order->status="menunggu konfirmasi";
            $order->pemabayaran=$req->payment;
            $order->status_pembayaran="menunggu konfirmasi";
            $order->alamat=$req->address;
            $order->save();
            Cart::where ('user_id',$userId)->delete();

        }
        $req->input();
        return redirect('/');
    }

    function myOrders()
    {
        $userId=Session::get('user')['id'];
        $order= $products =DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where ('orders.user_id',$userId)
        ->get();

        return view('myorders',['order'=>$order]);
    }

    function celana(){
        $data= Product::all();
        // dd($data);
        return view('celana',['celana'=>$data]);
    }

    function kaos(){
        $data= Product::all();
        return view('kaos',['kaos'=>$data]);
    }

    function jaket(){
        $data= Product::where('kategori','logo')->get();
        return view('jaket',['jaket'=>$data]);
    }
}

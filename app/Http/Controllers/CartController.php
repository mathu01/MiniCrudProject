<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add($id){
        $article = Articles::findOrFail($id);
        $cart = session()->get('cart',[]);
        $cart[$id] = $article;
        session()->put('cart',$cart);
        return redirect('/cart');
    }
    public function index(){
        $cart = session('cart',[]);
        return view('Cart.index',compact('cart'));
    }
}

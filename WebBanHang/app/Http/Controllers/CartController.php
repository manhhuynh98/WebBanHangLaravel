<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    //
    public function addCart($id, Request $request){
        $product = Product::where('id',$id)->first();
        if ($product != null) {
            $cart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($cart);
            $newCart->AddCart($product, $id);

            $request->session()->put('Cart', $newCart);
        }
        return view('default.pages.cartitem', compact('newCart'));
    }

    public function deleteItemCart($id, Request $request){
        $cart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($cart);
        $newCart->DeleteCart($id);
        if (count($newCart->products)) {
            $request->session()->put('Cart', $newCart);
        }else{
            $request->session()->forget('Cart');
        }

        return view('default.pages.cartitem', compact('newCart'));
    }

    public function getCart()
    {
        return view('default.pages.cart');
    }

    public function deleteListItemCart($id, Request $request){
        $cart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($cart);
        $newCart->DeleteCart($id);
        if (count($newCart->products)) {
            $request->session()->put('Cart', $newCart);
        }else{
            $request->session()->forget('Cart');
        }

        return view('default.pages.listcart');
    }

    public function updateListItemCart($id, Request $request, $quanty){
        $cart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($cart);
        $newCart->UpdateCart($id,$quanty);
        if (count($newCart->products)) {
            $request->session()->put('Cart', $newCart);
        }else{
            $request->session()->forget('Cart');
        }

        return view('default.pages.listcart');
    }

}

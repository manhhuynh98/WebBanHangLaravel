<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function addCart($id)
    {
        # code...
        $product = Product::find($id);

        $userId = auth()->user()->id;
        $a = Cart::session($userId)->add(array(
            'id' => $id, // inique row ID
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => $product,
        ));

        $cartTotalQuantity = Cart::session($userId)->getTotalQuantity();
        return view('pages.quanty_cart', compact('cartTotalQuantity'));
        // dd($a);
    }

    public function getCart(){
        $userId = auth()->user()->id; // or any string represents user identifier
        $content = Cart::session($userId)->getContent();
        return view('pages.cart',compact('content'));
    }

    public function editCartMinus($id)
    {
        $userId = auth()->user()->id; // or any string represents user identifier
        Cart::session($userId)->update($id, array(
            'quantity' => -1,
        ));
        $itemCart = Cart::session($userId)->get($id);
        return view('pages.update_cart', compact('itemCart'));
    }

    public function editCartPlus($id)
    {
        $userId = auth()->user()->id; // or any string represents user identifier
        Cart::session($userId)->update($id, array(
            'quantity' => 1,
        ));
        $itemCart = Cart::session($userId)->get($id);
        return view('pages.update_cart', compact('itemCart'));
    }

    public function editCartInput($id,$sl)
    {
        $userId = auth()->user()->id; // or any string represents user identifier
        Cart::session($userId)->update($id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $sl,
            )
        ));
        $itemCart = Cart::session($userId)->get($id);
        return view('pages.update_cart', compact('itemCart'));
    }

    public function removeItemCart($id){
        $userId = auth()->user()->id;
        Cart::session($userId)->remove($id);
        return redirect('get-cart')->with("success", "Xóa thành công");
    }

}

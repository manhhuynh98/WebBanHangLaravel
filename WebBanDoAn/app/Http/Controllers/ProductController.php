<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){
        $this->authorize('view', 'App\Product');
        $category = Category::all();
        $product = Product::all();
        return view('admin.product.list',compact('product','category'));

    }
    public function getEdit($id){
        $category = Category::all();
        $product = Product::find($id);
        return view('admin.product.edit',compact('product','category'));
    }

    public function postEdit($id){
        $category = Category::all();
        $product = Product::find($id);
        $product->name = $_POST['name'];
        $product->image = $_POST['image'];
        $product->content = $_POST['content'];
        $product->sale_price = $_POST['sprice'];
        $product->purchase_price = $_POST['pprice'];
        $product->idCategory = $_POST['idCategory'];

        // $idCategory = $_POST['idCategory'];
        // $temp = Category::find($idCategory);
        // dd($temp);
        $product->save();
        return view('admin.product.edit',compact('product','category'));
    }

    public function postAdd(){
        $category = Category::all();
        $product = new Product;
        $product->name = $_POST['name'];
        $product->image = $_POST['image'];
        $product->content = $_POST['content'];
        $product->sale_price = $_POST['sprice'];
        $product->purchase_price = $_POST['pprice'];
        $product->idCategory = $_POST['idCategory'];
        $product->save();
        return view('admin.product.add',compact('product','category'));
    }

    public function getDelete($id){
        $product = Product::find($id);
        if ($product != null) {
            $product->delete();
            return redirect('admin/product/list');
        }else{
            return redirect()->back();
        }
    }
}

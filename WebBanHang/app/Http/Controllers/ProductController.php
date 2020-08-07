<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function getList(){
        $product = Product::all();
        return view('admin.pages.product.list',['product'=>$product]);
    }

    public function getAddList(){
        return view('admin.pages.product.add');
    }

    public function postAddList(Request $request){
        $this->validate($request,[
            'name'          => 'required|unique:products,name|min:3|max:32',
            'unsigned_name' => 'required|unique:products,unsigned_name|min:3|max:32',
            'description'   => 'required',
            'title'         => 'required|min:3',
        ]);

        $product = new Product;
        $product->name = $request->name;
        $product->unsigned_name = $request->unsigned_name;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->idcategory = $request->idcategory;
        $product->status = $request->status;
        $product->sale = $request->sale;
        $product->cost = $request->cost;
        $product->image = $request->image;
        $product->save();

        return redirect('admin\product\list')->with('thongbao','thêm thành công');
    }

    public function getEditList($id){
        $product = Product::find($id);
        return view('admin.pages.product.edit',['product'=>$product]);
    }

    public function postEditList(Request $request,$id){
        $this->validate($request,[
            'name'          => 'required|min:3|max:32',
            'unsigned_name' => 'required|min:3|max:32',
            'description'   => 'required',
            'title'         => 'required|min:3',
        ]);

        $product = Product::find($id);
        $product->name = $request->name;
        $product->unsigned_name = $request->unsigned_name;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->idcategory = $request->idcategory;
        $product->status = $request->status;
        $product->sale = $request->sale;
        $product->cost = $request->cost;
        $product->save();

        return redirect('admin\product\list')->with('thongbao','sửa thành công');
    }

    public function getDelete($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('admin/product/list')->with('thongbao','Xóa thành công');
    }
}

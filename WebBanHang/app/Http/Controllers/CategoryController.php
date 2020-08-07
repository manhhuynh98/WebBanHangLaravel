<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    //

    public function getList(){
        $category = Category::all();
        return view('admin.pages.category.list');
    }

    public function getAddList(){
        return view('admin.pages.category.add');
    }

    public function postAddList(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:categories,name|min:3|max:32',
            'unsigned_name' => 'required|unique:categories,name|min:3|max:32',
        ]);

        $category = new Category;
        $category->name = $request->name;
        $category->unsigned_name = $request->unsigned_name;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $Hinh = Str::random(6)."_".$name;
            while (file_exists("upload/category/".$Hinh)) {
                $Hinh = Str::random(6)."_".$name;
            }
            $file->move('upload/category',$Hinh);
            $category->image = $Hinh;
        }else{
            $category->image = "";
        }
        $category->save();

        return redirect('admin\category\list')->with('thongbao','thêm thành công');
    }

    public function getEditList($id){
        $category = Category::find($id);
        return view('admin.pages.category.edit',['category'=>$category]);
    }

    public function postEditList(Request $request,$id){
        $this->validate($request,[
            'name' => 'required|min:3|max:32',
            'unsigned_name' => 'required|min:3|max:32',
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->unsigned_name = $request->unsigned_name;
        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $name = $file->getClientOriginalName();
        //     $Hinh = Str::random(6)."_".$name;
        //     while (file_exists("upload/category/".$Hinh)) {
        //         $Hinh = Str::random(6)."_".$name;
        //     }
        //     $file->move('upload/category',$Hinh);
        //     $category->image = $Hinh;
        // }else{
        //     $category->image = "";
        // }
        $category->image = $request->image;
        $category->save();

        return redirect('admin\category\list')->with('thongbao','sửa thành công');
    }

    public function getDelete($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('admin/category/list')->with('thongbao','Xóa thành công');
    }
}

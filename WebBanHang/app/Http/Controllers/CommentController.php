<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function getList(){
        $comment = Comment::all();
        return view('admin.pages.comment.list',['comment'=>$comment]);
    }

    public function getEditList($id){
        $comment = Comment::find($id);
        return view('admin.pages.comment.edit',['comment'=>$comment]);
    }

    public function postEditList(Request $request,$id){
        $this->validate($request,[
            'content' => 'min:3|max:32',
        ]);

        $comment = Comment::find($id);
        $comment->iduser = $request->iduser;
        $comment->idproduct = $request->idproduct;
        $comment->content = $request->content;
        $comment->save();
        return redirect('admin\comment\list')->with('thongbao','sửa thành công');
    }

    public function getDelete($id){
        $comment = Comment::find($id);
        $comment->delete();
        return redirect('admin/comment/list')->with('thongbao','Xóa thành công');
    }
}

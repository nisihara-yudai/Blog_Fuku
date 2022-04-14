<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    // ①(M)Blog Modelを呼び出す
    // ②(C)ControllerからBladeを渡す
    // ③(V)Bladeで表示する
    /**
     * ブログ一覧を表示する
     * 
     * @return view
     */
    public function showList(){
        $blogs = Blog::all(); //①(M)Blog Modelを呼び出す

        // dd($blogs); //ブログの中身を見る事が出来る

        return view('blog.list',['blogs' => $blogs]); //配列をviewに渡す
    }

    /**
     * ブログ詳細を表示する
     * @param int $id
     * @return view
     */
    public function showDetail($id)
    {
        $blog = Blog::find($id); //①(M)Blog Modelを呼び出す

        if (is_null($blog)) {
            \Session::flash('error_msg','データがありません。');
            return redirect(route('blogs'));
        }

        return view('blog.detail', ['blog' => $blog]); //配列をviewに渡す
    }
}

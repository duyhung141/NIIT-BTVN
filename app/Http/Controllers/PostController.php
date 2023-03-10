<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
class PostController extends Controller
{
    //
    public function show()
    {
        $datas = DB::table('post_crud')->get();
        return view('show', compact('datas'));
    }

    public function add()
    {
        return view('add');
    }

    public function doAdd(Request $request)
    {
        // $title = $request->input('title');
        // $content = $request->input('content');
        // $keyword = $request->input('keyword');

        // DB::table('post_crud')->insert([
        //     'title' => $title,
        //     'content' => $content,
        //     'keyword' => $keyword
        // ]);
        // return redirect()->route('Show');
        $post=new Post();
        $post->title=$request->title;
        $post->content=$request->content;
        $post->keyword=$request->keyword;
        $post->user_id=0;
        $post->save();
        return redirect()->route('Show');
        
    }

    public function edit(int $id)
    {
        $post=Post::find($id);
        return view('Edit',compact('post'));
    }

    public function doEdit(Request $request,int $id){
        $post=Post::find($id);
        $post->title=$request->title;
        $post->content=$request->content;
        $post->keyword=$request->keyword;
        $post->save();
        return redirect()->route('Show');
    }

    public function delete( $id){
        Post::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Xóa thành công');
    }
}

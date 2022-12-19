<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    //
    public function show(){
        $datas=DB::table('post_crud')->get();
        return view('show',compact('datas'));
    }

    public function add(){
        return view('add');
    }

    public function doAdd(Request $request){
        $title=$request->input('title');
        $content=$request->input('content');
        $keyword=$request->input('keyword');
        DB::table('post_crud')->insert([
            'title' => $title,
            'content' => $content,
            'keyword' => $keyword
        ]);
        return redirect()->route('Show');
    }

    public function edit(){

    }
}

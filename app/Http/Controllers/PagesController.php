<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function article(){
        return view('pages.article');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function list(){
        return view('pages.list');
    }

    public function post_message(Request $request){
        DB::table('contact')->insert([
            'full_name' =>$request->full_name,
            'phone'=>$request->phone,
            'message'=>$request->message,
            'status' => 0,
        ]);

        return back();
    }
}

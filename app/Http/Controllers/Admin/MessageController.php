<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



use function Ramsey\Uuid\v1;

class MessageController extends Controller
{
    public function index(){
        $messages = DB::table('contact')->latest()->paginate(3);

        return view('admin.messages.index', compact('messages'));

    } 
    
    public function show($id){
        $message = DB::table('contact')->where('id', $id)->first();

        DB::table('contact')->where('id', $id)->update(['status' => 1]);

        return view('admin.messages.show', compact('message'));
    }

    public function destroy($id){
        DB::table('contact')->where('id', $id)->delete();

        return back()->with('success', 'Successfully deleted');
    }
}

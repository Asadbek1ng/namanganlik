<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {

        $tags = Tag::paginate(3);
        return view('admin.tags.index', compact('tags'));

    }

    public function create()
    {
        $tags = Tag::all();
        return view('admin.tags.create', compact('tags'));
        
    }

    public function store(Request $request)
    {
        $requestData = $request->all();

        Tag::create($request->all());
        return redirect()->route('admin.tags.index')->with('success', 'Successfully added !');
   
    }

}

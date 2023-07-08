<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = Post::paginate(3);
        return view('admin.posts.index', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();
        return view('admin.posts.create', compact('tags'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'-'.$file->getClientOriginalName();
            $file->move(public_path('images/'.$imageName));

            $requestData['image'] = $imageName;
        }
        // return $request;
       $post = Post::create($request->except('tag_id'));
       $post->tags()->attach($request->tag_id);
        return redirect()->route('admin.posts.index')->with('success', 'Successfully added !');
   
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}

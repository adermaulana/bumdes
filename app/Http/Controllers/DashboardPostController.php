<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    public function index()
    {
        return view('dashboard.posts.index',[
            'title' => 'Dashboard Posts Berita',
            'posts' => Post::latest()->get()
        ]);
    }

    public function create()
    {
        return view('dashboard.posts.create',[
            'title' => 'Create Data',
            'categories' => Category::all()
        ]);
    }

    
    public function store(Request $request)
    {   

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'image|file',
            'body' => 'required'
        ]);

        if($request->image) {
            $file = $request->image->getClientOriginalName();
            $image = $request->image->storeAs('post-images', $file);
            $validatedData['image'] = $image;
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body),100);

        Post::create($validatedData);

        return redirect('/dashboard/posts')->with('success','New Post has been Added');
    }

    public function show(Post $post)
    {
        return view('dashboard.posts.show',[
            'posts' => $post,
            'title' => 'Post'
        ]);
    }

    public function edit(Post $post)
    {
        return view('dashboard.posts.edit',[
            'title' => 'Edit Data',
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, Post $post)
    {   
        
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file',
            'body' => 'required'
        ];


        if($request->slug != $post->slug){
            $rules['slug'] = 'required|unique:posts';
        }
        
        $validateData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $file = $request->image->getClientOriginalName();
            $validateData['image'] = $request->file('image')->storeAs('post-images',$file);
        }
        
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body),100);

        Post::where('id',$post->id)
            ->update($validateData);

        return redirect('/dashboard/posts')->with('success','Post has been Update');
    }

    public function destroy(Post $post)
    {
        if($post->image){
            Storage::delete($post->image);
        }
        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('success','Post has been Deleted');
    }
}

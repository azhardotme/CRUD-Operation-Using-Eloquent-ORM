<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    
    public function addPost()
    {
        return view('add_post');
    }


    public function createPost(Request $request)
    {

        $post = new Post();
        $post->title= $request->title;
        $post->desc = $request->desc;
        $post->save();

        return back()->with('post-created','Post has been successfully Created!');

    }
 

    public function getPost()
    {
        $posts = Post::orderBy('id','ASC')->get();
        return view('posts',compact('posts'));

    }


    public function getPostById($id)
    {
        $post = Post::where('id',$id)->first();
        return view('single_post',compact('post'));


    }

    public function postDelete($id)
    {
        Post::where('id',$id)->delete();
        return back()->with('post_deleted','Post has been successfully deleted!');
    }

    public function editPost($id)
    {
        $post = Post::find($id);
        return view('edit-post',compact('post'));
    }

    public function updatePost(Request $request)
    {
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->desc = $request->desc;
        $post->save();
        
        return back()->with('update-post','Post has been updated successfully!');
    }
}

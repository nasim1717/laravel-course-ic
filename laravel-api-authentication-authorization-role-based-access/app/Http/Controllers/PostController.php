<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function readBlog(Request $request)
    {
        return response()->json(Post::all(), 200);
    }

    public function createBlog(Request $request)
    {
        $id   = Auth::user()->id;
        $data = $request->validate(
            [
                'title'   => 'required',
                'content' => 'required',
            ]
        );

        Post::created([
            'title'   => $data['title'],
            'content' => $data['content'],
            'user_id' => $id,
        ]);

        return response()->json(['message' => 'Post created successfully'], 201);
    }

    public function deleteBlog($id)
    {
        $post = Post::find($id);
        $post->delete();

        return response()->json(['message' => 'Post deleted succesfuly']);
    }

    public function updateBlog(Request $request, $id)
    {
        $user_id = Auth::id();
        $post    = Post::find($id);
        $data    = $request->validate(
            [
                'title'   => 'required',
                'content' => 'required',
            ]
        );

        $post->update([
            'title'   => $data['title'],
            'content' => $data['content'],
            'user_id' => $user_id,
        ]);

        return response()->json(['message' => 'update successfully'], 201);
    }

}

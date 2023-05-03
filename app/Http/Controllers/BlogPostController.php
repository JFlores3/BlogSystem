<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function create()
    {
        return view('create-posts');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'body' => 'required',
    ]);

    $blogPost = new BlogPost;
    $blogPost->title = $validatedData['title'];
    $blogPost->body = $validatedData['body'];
    $blogPost->save();

    return redirect('/posts/' . $blogPost->id);
}


    public function index()
    {
        $posts = BlogPost::latest()->get();
        return view('layouts.index', compact('posts'));
    }

    public function show($id)
{
    $post = BlogPost::find($id);

    if (!$post) {
        abort(404);
    }

    return view('layouts.show', compact('post'));
}
    public function edit($id)
    {
        $blogPost = BlogPost::find($id);
        return view('layouts.edit', ['blogPost' => $blogPost]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $blogPost = BlogPost::find($id);
        $blogPost->title = $validatedData['title'];
        $blogPost->body = $validatedData['body'];
        $blogPost->save();

        return redirect('/posts/' . $blogPost->id);
    }

    public function destroy($id)
    {
        $blogPost = BlogPost::find($id);
        $blogPost->delete();

        return redirect('/posts');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public $title;
    public $body;

    public function render()
    {
        return view('livewire.create-post');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'title' => 'required|min:3|max:255',
            'body' => 'required|min:3',
        ]);

        auth()->user()->blogPosts()->create($validatedData);

        session()->flash('message', 'Post created successfully.');

        return redirect()->route('blog_posts.index');
    }
}

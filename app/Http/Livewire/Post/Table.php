<?php

namespace App\Http\Livewire\Post;

use App\Models\Course;
use App\Models\Post;
use Livewire\Component;

class Table extends Component
{
    public $form = false;
    public $method = 'create';
    public $post;

    protected $rules = [
        'post.name' => ['required'],
        'post.course_id' => ['required'],
        'post.free' => ['required'],
    ];

    public function render()
    {
        $posts = Post::latest()->paginate(10);
        return view('livewire.post.table', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        $this->post = new Post();
        $this->form = true;
        $this->method = 'create';
    }

    public function store()
    {
        $this->post->save();
        $this->redirect(route('posts.view'));
    }

    public function edit(Post $post)
    {
        $this->post = $post;
        $this->form = true;
        $this->method = 'update';
    }

    public function update(Post $post)
    {
        $post->update([
            'name' => $this->post->name,
            'course_id' => $this->post->course_id,
            'free' => $this->post->free
        ]);
        $this->redirect(route('posts.view'));
    }

    public function destroy(Post $post)
    {
        $post->delete();
        $this->redirect(route('posts.view'));
    }

    public function getCoursesProperty()
    {
        return Course::select('id', 'name')->where('id', '>', 0)->get();
    }

}

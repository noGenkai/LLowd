<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogView extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function delete($id)
    {
        Blog::find($id)->delete();

    }


    public function render()
    {
        return view('livewire.blog-view', [
            'blogs' => Blog::orderBy('id', 'asc')->paginate(5),
        ]);
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
use Carbon\Carbon;

class BlogCreate extends Component
{
    // Variable used to show Modal status
    public $showModal = false;
    public $title;
    public $date;
    public $text;
    public $liked;

    // Create listener for Add Blog Button.
    protected $listeners = ['showBlogModal'];

    /**
     * Here is a list of rules that the values must abid by. 
     * 
     */
    protected $rules = [
        'title' => 'required|max:10',
        'text' => 'required'
    ];

    /**
     * If the user does not listen to the rules, spit out these custom messages.
     * 
     */
    protected $messages = [
        'title.required' => "Type in a title.",
    ];

    /**
     * Pass all property names through the update method and valid in real time.
     * 
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    /**
     * This function display modal on DOM.
     * 
     */
    public function showBlogModal()
    {

        $this->showModal = true;
    }

    public function saveBlog()
    {
        $this->validate();

        Blog::create([
            'title' => $this->title,
            'date' => date('m-d-y'),
            'text' => $this->text,
            'liked' => $this->liked
        ]);

        $this->emit('saveAttachments');

        $this->reset();

        $this->emitTo('blog-view', 'refreshComponent');
    }

    public function render()
    {
        return view('livewire.blog-create');
    }
}

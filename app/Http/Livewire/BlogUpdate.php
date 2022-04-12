<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
use Carbon\Carbon;

class BlogUpdate extends Component
{
    // Variable used to show Modal status
    public Blog $blog;
    public $showUpdateModal = false;
    public $title;
    public $date;
    public $text;
    public $liked;
    public $selected_blog_id;
    public $selected_blog_title;
    public $selected_blog_text;

    // Create listener for Add Blog Button.
    protected function getListeners()
    {
        return [
            'showUpdateBlogModal' => 'showUpdateBlogModal', // A listener for on-click on Blog.show blade.
            'refreshBlogView' => '$refresh' // A listener for on-click on refresh blade.
        ];
    }

    /**
     * Here is a list of rules that the values must abid by. 
     * 
     */
    protected $rules = [
        'title' => 'required|max:30',
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
    public function showUpdateBlogModal($selected_blog_id)
    {
        $this->showUpdateModal = True;
        $this->selected_blog_id = $selected_blog_id;
        $this->selected_blog_title = Blog::find($this->selected_blog_id)->title;
        $this->selected_blog_text = Blog::find($this->selected_blog_id)->text;
        
    }

    public function updateBlog()
    {
        $this->validate();

        $blog = Blog::find($this->selected_blog_id);

        $blog->title = $this->title;
        $blog->text = $this->text;

        $blog->save();
        return redirect()->to('/dashboard');

        $this->emitTo('blog-view', 'refreshComponent');
    }

    // Create an update blog function and pass the $selected_blog_id;
    // Find the update method needed for this function.
    // Updating title and text.

    

    public function render()
    {
        return view('livewire.blog-update');
    }
}

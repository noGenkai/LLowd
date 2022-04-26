<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class BlogCreate extends Component
{
    //REQUIRED FOR ATTACHMENTS
    use WithFileUploads;

    // Variable used to show Modal status
    public $showModal = false;
    public $title;
    public $date;
    public $text;
    public $liked;
    public $selected_blog_id;

    // Create listener for Add Blog Button.
    protected $listeners = ['showBlogModal'];

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
    public function showBlogModal()
    {

        $this->showModal = true;
    }

    public function saveBlog()
    {
        $this->validate();
        
        $blog = new Blog();

        $blog->title = $this->title;
        $blog->date = date('m-d-y');
        $blog->text = $this->text;

        $blog->save();

        // if the project saves successfully, pull id to begin relationship

        //use blog Id to save attachment
        if ($blog->save()) {
            $user_id = auth()->user()->id;
            $blog->users()->sync($user_id);
        }

        $this->selected_blog_id = $blog->id;



        $this->emit('saveAttachments, $this->selected_blog_id');

        $this->reset();

        $this->emitTo('blog-view', 'refreshComponent');
    }

    public function render()
    {
        return view('livewire.blog-create');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\Attachment;

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
    public $photos = [];

    // Create listener for Add Blog Button.
    protected $listeners = ['showBlogModal'];

    /**
     * Here is a list of rules that the values must abid by. 
     * 
     */
    protected $rules = [
        'title' => 'required|max:30',
        'text' => 'required',
        'photos.*' => 'required|file|mimes:jpeg,png,jpg,pdf,doc,docx|max:2048', // 12MB Max
    ];

    /**
     * If the user does not listen to the rules, spit out these custom messages.
     * 
     */
    protected $messages = [
        'title.required' => "Type in a title.",
    ];

    /**
     * Pass all property names through the update method and validate in real time.
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

        // Save the new blog constructor to a variable.
        $blog = new Blog();

        // Input the captured data into the database.
        $blog->title = $this->title;
        $blog->date = date('m-d-y');
        $blog->text = $this->text;

        // Save the captured data
        $blog->save();

        /** 
         * If the project saves successfully, pull id to begin relationship
         * Use blog Id to save attachment
        */
        if ($blog->save()) {

            // If the blog is successfully saved, save the blog ID and pass blog id parameter to uploadFiles using emit. 
            $this->selected_blog_id = $blog->id;
           
            foreach ($this->photos as $photo) {
                // Write to the database
                $fileName = date("Ymd-hi").'-'.$photo->getClientOriginalName(); // Save the original name of the file along with a time stamp in a variable called fileName

                $path = $photo->storePublicly('img'); // Store to local environment.
                // $path = $photo->storeAs('attachments', strval($fileName), 's3-public'); // Save attachment on Amazon S3// Store in the "attachment" directory of the bucket with original file name.  The file name must be a string so I obtain the string value from the variable.
    
                // $photo->store('photos');
                $attachment = new Attachment();
                $attachment->blog_id = "$this->selected_blog_id";
                $attachment->user_id = auth()->user()->id;
                $attachment->file_name = $fileName;
                $attachment->file_path = $path;
                
                $attachment->save();
            }
        }

        // Reset the form fields
        $this->reset();

        // The the blog view component.
        $this->emitTo('blog-view', 'refreshComponent');
        // return redirect()->to('/dashboard');
    }

    public function cancelBlog()
    {
        // Reset any form fields that has entered data.
        $this->reset();

        // Redirect to the dashboard page route.
        return redirect()->to('/dashboard');
    }
    public function render()
    {
        return view('livewire.blog-create');
    }
}

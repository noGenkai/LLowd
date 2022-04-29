<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;

class BlogDetails extends Component
{

    // Variable to toggle view of Blog Details.
    public $showDetails = false;

    // Variable used to save id.
    public $selected_blog_id;

    // Variable used to save title.
    public $selected_blog_title;

    // Variable used to save text.
    public $selected_blog_text;

    // Variable used to save photos/attachments
    public $selected_blog_photos=[];


    protected function getListeners()
    {
        return [
            'showBlogDetails' => 'showBlogDetails', // A listener for on-click on Blog.show blade.
            'refreshBlogView' => '$refresh' // A listener for on-click on refresh blade.
        ];
    }
    
    /**
     * This function display Details on DOM.
     * 
     */
    public function showBlogDetails(Blog $blog) {
        
        // Show Blog Details
        $this->showDetails = true;

        // Show blog ID along with Header string.
        $this->selected_blog_id = $blog->id;

        // Show blog ID along with Header string.
        $this->selected_blog_title = $blog->title;

        // Show blog ID along with Header string.
        $this->selected_blog_text = $blog->text;

        /**
         * QUERY: SELECT * FROM attachments WHERE blog_id = the selected id ($this_selected_blog_id).
         * To get all properties use the get method.
         * Save the data into variable so you can use a foreach on the DOM to list your data.
         */
        $this->selected_blog_photos = $blog->attachments()->get();

    }

    public function update($selected_blog_id)
    {
        $this->emit('showUpdateBlogModal', $selected_blog_id);
    }

    public function delete($selected_blog_id)
    {
        /**
        * Find the blog with the selected blog id and delete it.
        * It will also delete any attachments that are linked to the blog.
        * The 'attachments' table has a blog_id foreign key that links to the
        * primary key on the 'blogs' table. 
        * Blogs has many attachments && Attachments belongs to one blog.
        *
        */
        Blog::find($selected_blog_id)->delete();
      
        return redirect()->to('/dashboard');
    }

    /** 
    * The render function will return the view of the corresponding blade.
    * It will also render the current user's ID admin status to determind
    * whether the users is an admin or a blogger.
    *
    */
    public function render()
    {
        return view('livewire.blog-details', [
            'isAdmin' => auth()->user()->isAdmin,
        ]);
    }
}

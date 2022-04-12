<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;

class BlogDetails extends Component
{

    // Variable used to show Details status
    public $showDetails = false;

    // Variable used to save id.
    public $selected_blog_id;

    // Variable used to save id.
    public $selected_blog_title;

    // Variable used to save id.
    public $selected_blog_text;

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

        // Show project ID along with Header string.
        $this->selected_blog_id = $blog->id;

        // Show project ID along with Header string.
        $this->selected_blog_title = $blog->title;

        // Show project ID along with Header string.
        $this->selected_blog_text = $blog->text;

    }

    public function update($selected_blog_id)
    {
        $this->emit('showUpdateBlogModal', $selected_blog_id);
    }

    public function delete($selected_blog_id)
    {
        Blog::find($selected_blog_id)->delete();
        return redirect()->to('/dashboard');
    }

    public function render()
    {
        return view('livewire.blog-details', [
            'isAdmin' => auth()->user()->isAdmin
        ]);
    }
}

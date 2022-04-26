<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $guarded = [];

    /**
     * Get the attachments for the Blog.
     * QUERY: SELECT * FROM Attachment WHERE Blog_id = the selected id.
     * Attachment Table must have a column of 'Blog_id'.
     */
    public function attachments()
    {
        return $this->hasMany(Attachment::class);
    }

    /**
     * The users that belong to Blogs.
     * The name of this method 'user' will be searched using 'user_id'
     * QUERY: SELECT * FROM Blog WHERE user_id = the selected id.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'blog_user')->withTimestamps();
    }
}

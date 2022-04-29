<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $guarded = [];  // information will pass through guarded gates.

    /**
     * Get the Blog that owns the attachment.
     * QUERY: SELECT blog_id FROM attachments 
     */
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    /**
     * Get the User that owns the attachment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class BlogHeader extends Component
{
    public function render()
    {
        return view('livewire.blog-header', [
            'isAdmin' => auth()->user()->isAdmin
        ]);
    }
}

<?php

namespace App\Livewire\Posts;

use App\Models\post;
use Livewire\Component;


class Edit extends Component
{
    public function render()
    {
        return view('livewire.posts.edit');
    }
}
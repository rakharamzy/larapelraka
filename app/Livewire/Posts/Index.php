<?php

namespace App\Livewire\Posts;

use App\models\post;
use Livewire\Component;
use Livewire\withpagination;

class Index extends Component
{
    use withPagination;
    public function render()
    {
        return view('livewire.posts.index',[
        'posts' =>post::latest()->paginate(5)
        ]);
    }
}

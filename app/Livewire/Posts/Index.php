<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\withpagination;

class Index extends Component
{
    use withPagination;
    public function destroy($id){
       
    //destroy
    Post::destroy($id);

    //flash message
    session()->flash('message','data berhasil dihapus. ');

    //redirect
    return redirect()->route('posts.index');
    }

    public function render()
    {
        return view('livewire.posts.index',[
        'posts' =>Post::latest()->paginate(5)
        ]);
    }
}

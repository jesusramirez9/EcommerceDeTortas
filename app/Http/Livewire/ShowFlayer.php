<?php

namespace App\Http\Livewire;

use App\Models\Flayer;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ShowFlayer extends Component
{
    use WithPagination;
    use WithFileUploads; 
    public $image, $identificador;

    public $open_edit =true;
    public $post;
    protected $listeners = ['render' => 'render', 'delete'];


    protected $rules = [
        'post.title' => 'required',
        'post.content' => 'required',
    ];  
  
    public function mount(){
        $this->post = new Flayer();
    }

    public function render()
    {
        $posts = Flayer::where('status', 1)->get();

        return view('livewire.show-flayer', compact('posts'));
    }


}

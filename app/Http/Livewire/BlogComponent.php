<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;

class BlogComponent extends Component
{
    public $key;
    public $blogs;
    public $limit;
    public function mount()
    {
        $this->key="all";
        $this->limit=6;
        $this->blogs=Blog::orderBy('order')->limit($this->limit)->get();    
    }

    public function filter($key)
    {
        $this->key=$key;
        if($key=='all'){
            $this->blogs=Blog::orderBy('order')->limit($this->limit)->get(); 
        }else{
            $this->blogs=Blog::where('category', $key)->limit($this->limit)->orderBy('order')->get(); 
        }
    }
    public function loadMore()
    {
        $this->limit+=4;
        if($this->key!='all'){
            $this->blogs=Blog::where('category', $this->key)->orderBy('order')->limit($this->limit)->get(); 
        }else{
            $this->blogs=Blog::orderBy('order')->limit($this->limit)->get(); 
        }
           
    }

    public function render()
    {
        return view('livewire.blog-component');
    }
}

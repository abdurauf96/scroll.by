<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Review;

class ReviewComponent extends Component
{
    public $reviews;
    public $limit;

    public function mount()
    {
      
        $this->limit=6;
        $this->reviews=Review::orderBy('order')->limit($this->limit)->get();    
    }

    public function loadMore()
    {
        $this->limit+=4;
        $this->reviews=Review::orderBy('order')->limit($this->limit)->get();    
    }
    public function render()
    {
        return view('livewire.review-component');
    }
}

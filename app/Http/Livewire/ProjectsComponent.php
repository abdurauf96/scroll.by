<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use App\Models\ProjectCategory;

class ProjectsComponent extends Component
{
    public $projects;
    public $categories;
    public $active;
   
    public function mount($active)
    {
        $this->projects=Project::orderBy('order')->get();
        $this->categories=ProjectCategory::all();
        $this->active=$active;
    }

    public function render()
    {
        return view('livewire.projects-component');
    }

    public function filter($id, $slug)
    {
        $this->active=$slug;
        $this->projects=Project::whereHas('categories', function($q) use($id){
            $q->where('project_category_id', $id);
        })
        ->orderBy('order')
        ->get();
                
    }
}

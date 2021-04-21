<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsToMany(ProjectCategory::class, 'project_projectcategory', 'project_id', 'project_category_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function project(){
        return $this->belongsToMany(Project::class,'project_type_project');
    }
}

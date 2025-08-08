<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'description',
        'cover',
        'link',
    ];

    public function typeproject(){
        return $this->belongsToMany(TypeProject::class,'project_type_project');
    }
}

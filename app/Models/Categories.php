<?php

namespace App\Models;

use App\Models\Products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Categories extends Model
{
    use HasFactory;
    use HasRecursiveRelationships;
    protected $fillable = ['title','parent_category'];

    public function products(){
        return $this->hasMany(Products::class);
    }
}

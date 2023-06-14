<?php

namespace App\Models;

use App\Models\Images;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    use HasFactory;
    protected $fillable = ['title','categories_id','description','price','slug'];

    public function images(){
        return $this->hasMany(Images::class,'products_id','id');
    }
    public function category(){
        return $this->belongsTo(Categories::class,'categories_id','id');
    }
}

?>
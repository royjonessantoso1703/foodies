<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table ="foods";
    protected $guarded = [];
    protected $dates = ['ttl'];

    public function categories(){
        return $this->belongsTo(Category::class,'id_categories','id');
    }
}

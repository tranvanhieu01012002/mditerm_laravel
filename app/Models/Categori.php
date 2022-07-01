<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vegetable;
class Categori extends Model
{
    use HasFactory;
    public function vegetables(){
        return $this->hasMany(Vegetable::class,'category_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PotionIngredient extends Model
{
    use HasFactory;

    protected $table = 'potions_ingredients';
    public $timestamps = false;

    protected $fillable = ['potion_id','ingredient_id','qty'];
}

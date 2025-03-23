<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $table = 'public.Ingredients';
    protected $primaryKey = 'ingredient_id';
    public $timestamps = false;

    protected $fillable = ['ingredient_name', 'price', 'rarity'];

    public function potions()
    {
        return $this->belongsToMany(Potion::class, 'public.Potions_Ingredients', 'ingredient_id', 'potion_id')->withPivot('qty');
    }
}

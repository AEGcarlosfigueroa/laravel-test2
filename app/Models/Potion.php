<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Potion extends Model
{
    use HasFactory;

    protected $table = 'public.Potions';
    protected $primaryKey = 'potion_id';
    public $timestamps = false;

    protected $fillable = ['magical_name', 'description', 'curative', 'magic_level_required'];

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'Potions_Ingredients', 'potion_id', 'ingredient_id')->withPivot('qty');
    }

    public function wizards()
    {
        return $this->belongsToMany(Wizard::class, 'Wizards_Potions', 'potion_id', 'wizard_id')->withPivot('date_brewed');
    }
}

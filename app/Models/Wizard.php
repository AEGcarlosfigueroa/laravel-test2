<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wizard extends Model
{
    use HasFactory;

    protected $table = 'public.Wizards';
    protected $primaryKey = 'wizard_id';
    public $timestamps = false;

    protected $fillable = ['name', 'age', 'magic_level'];

    public function potions()
    {
        return $this->belongsToMany(Potion::class, 'Wizards_Potions', 'wizard_id','potion_id')->withPivot('date_brewed');
    }
}

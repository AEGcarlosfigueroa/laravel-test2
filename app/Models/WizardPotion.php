<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory

class WizardPotion extends Model
{
    use HasFactory;

    protected $table = 'wizards_potions';
    public $timestamps = false;

    protected $fillable = ['wizard_id','potion_id','date_brewed'];
}

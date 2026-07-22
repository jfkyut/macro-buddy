<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = [
        'name',
        'brand',
        'bar_code',
        'base_amount_g',
        'calories',
        'protein_g',
        'carbs_g',
        'fat_g',
        'external_id',
    ];

    public function mealItems()
    {
        return $this->hasMany(MealItem::class);
    }
}

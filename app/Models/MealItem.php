<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealItem extends Model
{
    protected $fillable = [
        'daily_log_id',
        'food_id',
        'meal_type',
        'serving_amount_g',
        'computed_calories',
        'computed_protein',
        'computed_carbs',
        'computed_fat',
    ];

    public function dailyLog()
    {
        return $this->belongsTo(DailyLog::class);
    }

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}

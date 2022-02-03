<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vegetable;

class VegetableSort extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'distanceBetweenRows',
        'distanceBetweenBushes',
        'vegetable_id'
    ];

    public function vegetable()
    {
        return  $this->belongsTo(Vegetable::class);
    }
}

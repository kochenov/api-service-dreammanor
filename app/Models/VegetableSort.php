<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vegetable;

class VegetableSort extends Model
{
    use HasFactory;

    public function vegetable()
    {
        return  $this->hasOne(Vegetable::class, 'id', 'vegetable_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vegetable extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function sorts()
    {
        return  $this->hasMany(VegetableSort::class);
    }
}

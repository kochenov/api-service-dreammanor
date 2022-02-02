<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VegetableSort;

class VegetableCalculate extends Model
{
    use HasFactory;

    public function vegetableSorts()
    {
        return  $this->hasOne(VegetableSort::class, 'id', 'vegetable_sort_id');
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Vegetable as VegetableResource;

class VegetableSort extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {


        return [
            'id' => $this->id,
            'name' => $this->name,
            'distanceBetweenRows' => $this->distanceBetweenRows,
            'distanceBetweenBushes' => $this->distanceBetweenBushes,
            'vegetable' =>  $this->vegetable,
        ];
    }
}

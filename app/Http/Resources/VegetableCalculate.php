<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\VegetableSort as VegetableSortResource;

class VegetableCalculate extends JsonResource
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
            'bushes' => $this->bushes,
            'rows' => $this->rows,
            'exp' => $this->exp,
            'created_at' => $this->created_at,
            'vegetables' => new VegetableSortResource($this->vegetableSorts),

        ];
    }
}

<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\VegetableCalculate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\VegetableCalculate as VegetableCalculateResource;
use App\Http\Requests\VegetableCalculateStoreRequest;

class VegetableCalculateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VegetableCalculateResource::collection(VegetableCalculate::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VegetableCalculateStoreRequest $request)
    {
        $create_vegetable_calculate = VegetableCalculate::create($request->validated());
        return new VegetableCalculateResource($create_vegetable_calculate);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VegetableCalculate  $vegetableCalculate
     * @return \Illuminate\Http\Response
     */
    public function show(VegetableCalculate $vegetableCalculate)
    {
        return new VegetableCalculateResource($vegetableCalculate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VegetableCalculate  $vegetableCalculate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VegetableCalculate $vegetableCalculate)
    {
        $vegetableCalculate->update($request->validate(
            [
                'name' => 'required|max:255|unique:vegetable_calculates,name,' . $vegetableCalculate->id,
                'bushes' => 'required|numeric|min:1|max:500',
                'rows' => 'required|numeric|min:1|max:500',
                'vegetable_sort_id' => 'required|integer|numeric|min:1|exists:vegetable_sorts,id',
                'exp' => 'required|integer|numeric|min:0|max:1'
            ]
        ));
        return new VegetableCalculateResource($vegetableCalculate);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VegetableCalculate  $vegetableCalculate
     * @return \Illuminate\Http\Response
     */
    public function destroy(VegetableCalculate $vegetableCalculate)
    {
        $vegetableCalculate->delete();

        return response()->noContent();
    }
}

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
    public function update(VegetableCalculateStoreRequest $request, VegetableCalculate $vegetableCalculate)
    {
        $vegetableCalculate->update($request->validated());
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

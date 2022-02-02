<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\VegetableSort;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\VegetableSort as VegetableSortResource;
use App\Http\Requests\VegetableSortStoreRequest;

class VegetableSortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VegetableSortResource::collection(VegetableSort::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VegetableSortStoreRequest $request)
    {
        $create_vegetable_sort = VegetableSort::create($request->validated());
        return new VegetableSortResource($create_vegetable_sort);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VegetableSort  $vegetableSort
     * @return \Illuminate\Http\Response
     */
    public function show(VegetableSort $vegetableSort)
    {
        return new VegetableSortResource($vegetableSort);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VegetableSort  $vegetableSort
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VegetableSort $vegetableSort)
    {
        $vegetableSort->update($request->validate([
            'name' => 'required|max:255',
            'distanceBetweenRows' => 'required|numeric|min:1|max:500',
            'distanceBetweenBushes' => 'required|numeric|min:1|max:500',
            'vegetable_id' => 'required|integer|numeric|min:1|exists:vegetables,id'
        ]));
        return new VegetableSortResource($vegetableSort);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VegetableSort  $vegetableSort
     * @return \Illuminate\Http\Response
     */
    public function destroy(VegetableSort $vegetableSort)
    {
        $vegetableSort->delete();

        return response()->noContent();
    }
}

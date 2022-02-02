<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Vegetable;
use App\Http\Controllers\Controller;
use App\Http\Resources\Vegetable as VegetableResource;
use App\Http\Requests\VegetableStoreRequest;

class VegetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VegetableResource::collection(Vegetable::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VegetableStoreRequest $request)
    {
        $create_vegetable = Vegetable::create($request->validated());
        return new VegetableResource($create_vegetable);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vegetable  $vegetable
     * @return \Illuminate\Http\Response
     */
    public function show(Vegetable $vegetable)
    {
        return new VegetableResource($vegetable);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vegetable  $vegetable
     * @return \Illuminate\Http\Response
     */
    public function update(VegetableStoreRequest $request, Vegetable $vegetable)
    {
        $vegetable->update($request->validated());

        return new VegetableResource($vegetable);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vegetable  $vegetable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vegetable $vegetable)
    {
        $vegetable->delete();

        return response()->noContent();
    }
}

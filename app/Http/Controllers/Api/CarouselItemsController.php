<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\CarouselItems;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarouselItemsRequest;

class CarouselItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CarouselItems::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarouselItemsRequest $request)
    {
        $validated = $request->validated();


        $CarouselItem = CarouselItems::create($validated);

        return $CarouselItem;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return CarouselItems::findOrfail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarouselItemsRequest $request, string $id)
    {
        $validated = $request->validated();

        $CarouselItem = CarouselItems::findOrfail($id);

        $CarouselItem->update($validated);

        return $CarouselItem;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $CarouselItem = CarouselItems::findOrfail($id);
 
        $CarouselItem->delete();

        return $CarouselItem;
    }
}

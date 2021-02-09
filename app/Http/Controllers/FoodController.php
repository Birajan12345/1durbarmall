<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFood;
use App\Http\Requests\UpdateFood;
use App\Models\Floorinfo;
use App\Models\Food;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $foods = Food::orderBy('created_at', 'desc')->get();
        $floors = Floorinfo::where('is_published', 1)->get();

        return view('backend.food.index', compact('foods', 'floors'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $floors = Floorinfo::where('is_published', 1)->pluck('title','id');
        return view('backend.food.create', compact('floors'));
    }

    /**
     * @param StorePage $request
     * @return mixed
     */
    public function store(StoreFood $request)
    {

            $food = Food::create($request->data());
            $this->uploadRequestImage($request, $food);

        return redirect()->route('food.index')->withSuccess(trans('New Food has been created'));
    }

    /**
     * @param Page $page
     * @return \Illuminate\View\View
     */
    public function edit(Food $foods)
    {
        $floors = Floorinfo::where('is_published', 1)->pluck('title','id');
        return view('backend.food.edit', compact('foods', 'floors'));
    }

    public function update(UpdateFood $request, Food $foods)
    {
//        dd($request->all());

        DB::transaction(function () use ($request, $foods)
        {
//            dd($foods->all());

            $foods->update($request->data());

            $this->uploadRequestImage($request, $foods);
        });

        return redirect()->route('food.index')->withSuccess(trans('Food has been updated'));
    }

    public function destroy(Food $food)
    {
        $food->delete();
    }
}

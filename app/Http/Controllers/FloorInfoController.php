<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFloorinfo;
use App\Http\Requests\UpdateFloorinfo;
use App\Models\Floorinfo;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FloorInfoController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $floorinfos = Floorinfo::orderBy('created_at', 'desc')->get();

        return view('backend.floorinfo.index', compact('floorinfos'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('backend.floorinfo.create');
    }

    /**
     * @param StorePage $request
     * @return mixed
     */
    public function store(StoreFloorinfo $request)
    {
        $floorinfo = Floorinfo::create($request->data());
        $this->uploadRequestImage($request, $floorinfo);

        return redirect()->route('floorinfo.index')->withSuccess(trans('New Floorinfo has been created'));
    }

    /**
     * @param Page $page
     * @return \Illuminate\View\View
     */
    public function edit(Floorinfo $floorinfos)
    {
        return view('backend.floorinfo.edit', compact('floorinfos'));
    }

    public function update(UpdateFloorinfo $request, Floorinfo $floorinfos)
    {
//        dd($request->all());

        DB::transaction(function () use ($request, $floorinfos)
        {
//            dd($floorinfos->all());

            $floorinfos->update($request->data());

            $this->uploadRequestImage($request, $floorinfos);
        });

        return redirect()->route('floorinfo.index')->withSuccess(trans('Floorinfo has been updated'));
    }

    public function destroy(Floorinfo $floorinfo)
    {
        $floorinfo->delete();
    }
}

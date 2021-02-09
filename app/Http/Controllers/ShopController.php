<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShop;
use App\Http\Requests\UpdateShop;
use App\Models\Floorinfo;
use App\Models\Shop;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $shops = Shop::orderBy('created_at', 'desc')->get();
        $floorinfos = Floorinfo::orderBy('created_at', 'desc')->pluck('title');
        $floors = Floorinfo::where('is_published', 1)->get();

        return view('backend.shop.index', compact('shops','floorinfos', 'floors'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $floors = Floorinfo::where('is_published', 1)->pluck('title','id');
//        dd($floors);
        return view('backend.shop.create', compact('floors'));
    }

    /**
     * @param StorePage $request
     * @return mixed
     */
    public function store(StoreShop $request)
    {
            $shop = Shop::create($request->data());
            $this->uploadRequestImage($request, $shop);

        return redirect()->route('shop.index')->withSuccess(trans('New Shop has been created'));
    }

    /**
     * @param Page $page
     * @return \Illuminate\View\View
     */
    public function edit(Shop $shops)
    {
        $floors = Floorinfo::where('is_published', 1)->pluck('title','id');
        return view('backend.shop.edit', compact('shops','floors'));
    }

    public function update(UpdateShop $request, Shop $shops)
    {
//        dd($request->all());

        DB::transaction(function () use ($request, $shops)
        {
//            dd($shops->all());

            $shops->update($request->data());

            $this->uploadRequestImage($request, $shops);
        });

        return redirect()->route('shop.index')->withSuccess(trans('Shop has been updated'));
    }

    public function destroy(Shop $shop)
    {
        $shop->delete();
    }
}

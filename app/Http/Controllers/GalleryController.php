<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGallery;
use App\Http\Requests\UpdateGallery;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $gallery = Gallery::orderBy('created_at', 'desc')->get();

        return view('backend.gallery.index', compact('gallery'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('backend.gallery.create');
    }

    /**
     * @param StorePage $request
     * @return mixed
     */
    public function store(StoreGallery $request)
    {
        DB::transaction(function () use ($request)
        {
            $gallery = Gallery::create($request->data());

            $this->uploadRequestImage($request, $gallery);
        });

        return redirect()->route('gallery.index')->withSuccess(trans('New Gallery has been created'));
    }


    /**
     * @param Page $page
     * @return \Illuminate\View\View
     */
    public function edit(Gallery $gallery)
    {
        return view('backend.gallery.edit', compact('gallery'));
    }

    public function update(UpdateGallery $request, Gallery $gallery)
    {
        DB::transaction(function () use ($request, $gallery)
        {
            $gallery->update($request->data());

            $this->uploadRequestImage($request, $gallery);
        });

        return redirect()->route('gallery.index')->withSuccess(trans('Gallery has been updated'));
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
    }
}

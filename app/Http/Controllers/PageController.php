<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePage;
use App\Http\Requests\UpdatePage;
use App\Models\Page;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class PageController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $pages = Page::where('view', 'Page')->orderBy('created_at', 'desc')->get();

        return view('backend.page.index', compact('pages'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function resourceIndex()
    {
        $pages = Page::where('view', 'Resource')->get();

        return view('backend.resources.index', compact('pages'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('backend.page.create');
    }

    /**
     * @param StorePage $request
     * @return mixed
     */
    public function store(StorePage $request)
    {
        $view = substr(Route::currentRouteName(), 0 , strpos(Route::currentRouteName(), '.'));

        DB::transaction(function () use ($request)
        {
            $page = Page::create($request->pageFillData());

            $this->uploadRequestImage($request, $page);
        });

        return redirect()->route($view.'.index')->withSuccess(trans('New ' .$view. 'has been created'));
    }

    /**
     * @param Page $page
     * @return \Illuminate\View\View
     */
    public function edit(Page $page)
    {
        return view('backend.page.edit', compact('page'));
    }

    public function update(UpdatePage $request, Page $page)
    {
        DB::transaction(function () use ($request, $page)
        {
            $page->update($request->pageFillData());

            $this->uploadRequestImage($request, $page);
        });

        return redirect()->route('page.index') ->withSuccess(trans('Page has been updated'));
    }

    public function destroy(Page $page)
    {
        $page->delete();
    }

}

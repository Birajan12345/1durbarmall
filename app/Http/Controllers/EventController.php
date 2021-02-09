<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEvent;
use App\Http\Requests\UpdateEvent;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $event = Event::orderBy('created_at', 'desc')->get();

        return view('backend.event.index', compact('event'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('backend.event.create');
    }

    /**
     * @param StorePage $request
     * @return mixed
     */
    public function store(StoreEvent $request)
    {
        DB::transaction(function () use ($request)
        {
            $event = Event::create($request->data());

            $this->uploadRequestImage($request, $event);
        });

        return redirect()->route('event.index')->withSuccess(trans('New Event has been created'));
    }

    /**
     * @param Page $page
     * @return \Illuminate\View\View
     */
    public function edit(Event $event)
    {
        return view('backend.event.edit', compact('event'));
    }

    public function update(UpdateEvent $request, Event $event)
    {
        DB::transaction(function () use ($request, $event)
        {
            $event->update($request->data());

            $this->uploadRequestImage($request, $event);
        });

        return redirect()->route('event.index')->withSuccess(trans('Event has been updated'));
    }

    public function destroy(Event $event)
    {
//        dd($event);
        $event->delete();
    }
}

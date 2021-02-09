<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhoto;
use App\Http\Requests\StoreSlider;
use App\Models\Slider;
use App\Models\Team;
use App\Photo;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class SliderController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $slides = Slider::orderBy('order', 'asc')->get();

        return view('backend.slider.index', compact('slides'));
    }

    public function create()
    {
        return view('backend.slider.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'max:3072',
        ]);


        DB::transaction(function () use ($request)
        {
            $slideOrder = Slider::latest('order')->pluck('order')->first();

            $slide = new Slider();
            $slide->title = $request->input('title');
            $slide->caption = $request->input('caption');
            $slide->link_url = $request->input('link_url');
            $slide->link_caption = $request->input('link_caption');
            $slide->is_published = '1';
            $slide->order = ++$slideOrder;

            $slide->save();

            $this->uploadRequestImage($request, $slide);
        });

        return redirect()->route('slider.index')->withSuccess(trans('New Slide has been created'));
    }



    public function update(Request $request)
    {
        DB::transaction(function () use ($request)
        {
            $count = 0;
            foreach ($request->get('slide_id') as $id)
            {
                $slider = Slider::where('id', $id)->first();
                $slider->title = $request->input('title.' . $id);
                $slider->caption = $request->input('caption.' . $id);
                $slider->link_url = $request->input('link_url.' . $id);
                $slider->link_caption = $request->input('link_caption.' . $id);
                $slider->is_published = $request->input('is_published.' . $id, 0);
                $slider->order = $count++;

                $image = $request->file('image.' . $id);


                if ($image instanceOf UploadedFile && $image->isValid())
                {
                    $imageDetails = [
                        'name' => $image->getClientOriginalName(),
                        'size' => $image->getSize(),
                        'path' => $image->store(config('paths.image.Slide'), 'public')
                    ];

                    if ($slider->image)
                    {
                        $slider->image->deleteImage();
                        $slider->image->update($imageDetails);
                    } else
                    {
                        $slider->image()->create($imageDetails);
                    }
                }
                $slider->save();
            }
        });

        return back()->withSuccess(trans('messages.update_success', ['entity' => 'Slides']));
    }

    public function destroy($id)
    {
        $slide = Slider::find($id);
        $slide->delete();
    }

//    public function messages()
//    {
//        return [
//            'title.required' => 'A title is required',
//            'image.max'  => 'A message is required',
//        ];
//    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\InquiryNotifiable;
use App\Models\Floorinfo;
use App\Models\Food;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Page;
use App\Models\Service;
use App\Models\Shop;
use App\Models\Slider;
use App\Models\ViewCount;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class FrontendController extends Controller
{
    public function homepage(viewCount $viewCount, Request $request)
    {
        $about = Page::where('slug', 'about-1durbar-mall')->get();
        $slider = Slider::where('is_published', 1)->get();
        $service = Service::where('is_published', 1)
            ->limit(4)
            ->get();
        $cover = Gallery::where('view', 'Cover')->where('is_published', 1)->orderBy('id', 'DESC')->get();
        $adsupFront = Gallery::where('view', 'Ads')->where('is_published', 1)->orderBy('id', 'ASC')->get();
        $popupFront = Gallery::where('view', 'Popup')->where('is_published', 1)->orderBy('id', 'DESC')->get();

        if (!Session::has('web_count')) {
            $viewCount->create(['view_count' => 1, 'ip_address' => $request->getClientIp()]);
            Session::put('web_count', 1);
        }
        return view('frontend.home', compact('about','slider', 'service', 'cover', 'adsupFront','popupFront'));
    }

    public function aboutUs()
    {
        $about = Page::where('slug', 'about-1durbar-mall')->first();
        return view('frontend.aboutUs.about', compact('about'));
    }

    public function shopList($slug = null)
    {
        if ($slug) {
            $shop = Shop::where('slug', '=', $slug)->first();
            $shops = Shop::where('is_published', 1)
                ->limit(4)
                ->whereNotIn('id',[$shop->id])
                ->get();
            return view('frontend.shops.shops_detail', compact('shops','shop'));
        } else {
            $shops = Shop::where('is_published', 1)->get();
            return view('frontend.shops.index', compact('shops'));
        }

    }

    public function foodList($slug = null)
    {
        if ($slug) {
            $food = Food::where('slug', '=', $slug)->first();
            $foods = Food::where('is_published', 1)
                ->limit(4)
                ->whereNotIn('id',[$food->id])
                ->get();
            return view('frontend.food.food_detail', compact('foods','food'));
        } else {
            $foods = Food::where('is_published', 1)->get();
            return view('frontend.food.index', compact('foods'));
        }

    }

    public function floorInfo()
    {
        $floors = Floorinfo::where('is_published', 1)->get();
        $shops = Shop::where('is_published', 1)->get();
        $foods = Food::where('is_published', 1)->get();
        return view('frontend.floorInfo.floor-info', compact('floors','shops', 'foods'));
    }

    public function parking()
    {
        return view('frontend.parking.parking');
    }

    public function getAllData($type = null)

    {
        $query = Viewcount::get();
        return DataTables::of($query)
            ->addIndexColumn()
            ->editColumn('created_at',function(Viewcount $viewCount){
                return Carbon::parse($viewCount->created_at)->format('d M Y');
            })
            ->make(true);
    }

    public function viewReport()
    {
        return view('frontend.view_report.view_report');
    }

    public function inquiry(Request $request)
    {
//        dd($request);

//        $this->validate($request, [
//            'title' => 'required|unique|max:255',
//            'body' => 'required',
//        ]);

        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $mailParam = [
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ];

        Mail::to('birajanr@gmail.com')->send(new InquiryNotifiable($mailParam));
        return redirect()->back();

    }


    public function contact()
    {
        return view('frontend.contact.contact');
    }

    public function page($slug = null)
    {
        if ($slug) {
            $page = Page::where('slug', '=', $slug)->where('is_published', 1)->first();
            if ($page) {
                    return view('frontend.default', compact('page'));
            } else {
                return view('frontend.errors.404');
            }

        }
    }
}

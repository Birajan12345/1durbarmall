@extends('frontend.layouts.app')
@section('content')

    <!-- Breadcrumbs-->
    <section
            class="section-height-800 breadcrumb-modern parallax-container context-dark bg-gray-darkest d-none d-lg-block"
            data-parallax-img="{{asset('assets/images/backgrounds/background-01-1920-900.jpg')}}">
        <div class="parallax-content">
            <div class="bg-overlay-darker">
                <div class="container-wide section-34 section-md-60 section-lg-top-130 section-lg-bottom-155">
                    <div class="d-none d-lg-block">
                        <div class="h1 breadcrumbs-custom-title">Food</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-34 bg-selago">
        <div class="container">
            <ul class="list-inline list-inline-12 list-inline-icon breadcrumbs-list">
                <li><a href="{{route('homepage')}}">Home</a></li>
                <li class="active">Food</li>
            </ul>
        </div>
    </section>
    <div class="page-content section-60 section-md-120">
        <!-- Food-->
        <section>
            <div class="container-wide">
                <h3>Restaurants & Cafes</h3>
                <div class="row justify-content-sm-center offset-top-50 offset-xl-top-85">
                    <div class="col-xxl-10 offset-xxl-1">
                        <div class="isotope-wrap isotope-wrap-vertical-border-left isotope-offset-30">
                            <div class="row">
                                <!-- Isotope Filters-->
                                <div class="col-xl-3 col-xxl-2">
                                    <div>
                                        <div class="isotope-filters isotope-filters-vertical">
                                            <ul class="list-inline list-inline-sm d-lg-block inset-md-left-15 inset-md-right-15">
                                                <li class="d-block d-sm-inline-block d-lg-none">
                                                    <p>Choose your category:</p>
                                                </li>
                                                <li class="section-relative offset-top-20 offset-sm-top-0 d-block d-sm-inline-block d-lg-block">
                                                    <button class="isotope-filters-toggle btn btn-primary-outline"
                                                            data-custom-toggle="isotope-1"
                                                            data-custom-toggle-disable-on-blur="true">Filter<span
                                                                class="caret"></span></button>
                                                    <ul class="list-sm-inline isotope-filters-list d-lg-block"
                                                        id="isotope-1">
                                                        <li><a class="active" data-isotope-filter="*"
                                                               data-isotope-group="gallery" href="#">All Restaurants
                                                                <span class="d-none d-lg-inline-block">and Cafes</span></a>
                                                        </li>
                                                        {{--<li><a data-isotope-filter="Asian Cuisine"--}}
                                                        {{--data-isotope-group="gallery" href="#">Asian Cuisine</a>--}}
                                                        {{--</li>--}}
                                                        {{--<li><a data-isotope-filter="Italian Food"--}}
                                                        {{--data-isotope-group="gallery" href="#">Italian Food</a>--}}
                                                        {{--</li>--}}
                                                        {{--<li><a data-isotope-filter="Mexican Food"--}}
                                                        {{--data-isotope-group="gallery" href="#">Mexican Food</a>--}}
                                                        {{--</li>--}}
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Isotope Content-->
                                <div class="col-xl-9 col-xxl-10 offset-top-90 offset-xl-top-65">
                                    <div class="isotope" data-isotope-layout="fitRows" data-isotope-group="gallery">
                                        <div class="row" data-lightgallery="group" data-lg-thumbnail="false">
                                            @foreach($foods as $food)
                                                <div class="col-12 col-md-6 isotope-item" data-filter="{{$food->type}}">
                                                    <!-- Product-->
                                                    <div class="product product-horizontal thumbnail-robben">
                                                        {{--<a class="thumbnail-rayen" data-lightgallery="item"--}}
                                                        {{--href="{{asset('assets/images/gallery/portfolio-16-1170x778_original.jpg')}}">--}}
                                                        {{--<figure>--}}
                                                        {{--<img src="{{asset('assets/images/products/product-09-295x260.jpg')}}"--}}
                                                        {{--width="295" height="260" alt="">--}}
                                                        {{--<figcaption>--}}
                                                        {{--<span--}}
                                                        {{--class="icon icon-normal icon-lg mdi mdi-plus">--}}
                                                        {{--</span>--}}
                                                        {{--</figcaption>--}}
                                                        {{--</figure>--}}
                                                        {{--</a>--}}
                                                        <div class="product-body bg-selago">
                                                            <a>
                                                                @if(!empty($food->image->path))
                                                                    <img class="img-responsive center-block img-semi-transparent-inverse"
                                                                         src="{{$food->image->path}}"
                                                                          alt="">
                                                                @endif
                                                            </a>
                                                            <div class="product-btn-wrap offset-top-20">
                                                                <a class="btn btn-xs btn-bermuda"
                                                                   href="{{route('food.list',$food->slug)}}">
                                                                    learn more
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            {{--<div class="col-12 col-md-6 isotope-item" data-filter="Mexican Food">--}}
                                                {{--<!-- Product-->--}}
                                                {{--<div class="product product-horizontal thumbnail-robben">--}}
                                                    {{--<a class="thumbnail-rayen" data-lightgallery="item"--}}
                                                    {{--href="{{asset('assets/images/gallery/portfolio-01-1170x842_original.jpg')}}">--}}
                                                    {{--<figure><img class="img-responsive center-block"--}}
                                                    {{--src="{{asset('assets/images/products/product-10-295x260.jpg')}}"--}}
                                                    {{--width="295" height="260" alt="">--}}
                                                    {{--<figcaption><span--}}
                                                    {{--class="icon icon-normal icon-lg mdi mdi-plus"></span>--}}
                                                    {{--</figcaption>--}}
                                                    {{--</figure>--}}
                                                    {{--</a>--}}
                                                    {{--<div class="product-body bg-selago"><a--}}
                                                                {{--href="restaurant-single.html"><img--}}
                                                                    {{--class="img-responsive center-block img-semi-transparent-inverse"--}}
                                                                    {{--src="{{asset('assets/images/products/product-logo-10-81x109.png')}}"--}}
                                                                    {{--width="81"--}}
                                                                    {{--height="109" alt=""></a>--}}
                                                        {{--<div class="product-btn-wrap offset-top-20"><a--}}
                                                                    {{--class="btn btn-xs btn-bermuda"--}}
                                                                    {{--href="restaurant-single.html">learn more</a></div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-12 col-md-6 isotope-item" data-filter="Italian Food">--}}
                                                {{--<!-- Product-->--}}
                                                {{--<div class="product product-horizontal thumbnail-robben">--}}
                                                    {{--<a class="thumbnail-rayen" data-lightgallery="item"--}}
                                                    {{--href="{{asset('assest/images/gallery/portfolio-05-1170x781_original.jpg')}}">--}}
                                                    {{--<figure><img class="img-responsive center-block"--}}
                                                    {{--src="{{asset('assets/images/products/product-11-295x260.jpg')}}"--}}
                                                    {{--width="295" height="260" alt="">--}}
                                                    {{--<figcaption><span--}}
                                                    {{--class="icon icon-normal icon-lg mdi mdi-plus"></span>--}}
                                                    {{--</figcaption>--}}
                                                    {{--</figure>--}}
                                                    {{--</a>--}}
                                                    {{--<div class="product-body bg-selago"><a--}}
                                                                {{--href="restaurant-single.html"><img--}}
                                                                    {{--class="img-responsive center-block img-semi-transparent-inverse"--}}
                                                                    {{--src="{{asset('assets/images/products/product-logo-11-160x104.png')}}"--}}
                                                                    {{--width="160" height="104" alt=""></a>--}}
                                                        {{--<div class="product-btn-wrap offset-top-20"><a--}}
                                                                    {{--class="btn btn-xs btn-bermuda"--}}
                                                                    {{--href="restaurant-single.html">learn more</a></div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-12 col-md-6 isotope-item" data-filter="Asian Cuisine">--}}
                                                {{--<!-- Product-->--}}
                                                {{--<div class="product product-horizontal thumbnail-robben">--}}
                                                    {{--<a class="thumbnail-rayen" data-lightgallery="item"--}}
                                                    {{--href="images/gallery/portfolio-13-1170x783_original.jpg">--}}
                                                    {{--<figure><img class="img-responsive center-block"--}}
                                                    {{--src="{{asset('assets/images/products/product-12-295x260.jpg')}}"--}}
                                                    {{--width="295" height="260" alt="">--}}
                                                    {{--<figcaption><span--}}
                                                    {{--class="icon icon-normal icon-lg mdi mdi-plus"></span>--}}
                                                    {{--</figcaption>--}}
                                                    {{--</figure>--}}
                                                    {{--</a>--}}
                                                    {{--<div class="product-body bg-selago"><a--}}
                                                                {{--href="restaurant-single.html"><img--}}
                                                                    {{--class="img-responsive center-block img-semi-transparent-inverse"--}}
                                                                    {{--src="{{asset('assets/images/products/product-logo-12-144x110.png')}}"--}}
                                                                    {{--width="144" height="110" alt=""></a>--}}
                                                        {{--<div class="product-btn-wrap offset-top-20"><a--}}
                                                                    {{--class="btn btn-xs btn-bermuda"--}}
                                                                    {{--href="restaurant-single.html">learn more</a></div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-12 col-md-6 isotope-item" data-filter="Asian Cuisine">--}}
                                                {{--<!-- Product-->--}}
                                                {{--<div class="product product-horizontal thumbnail-robben">--}}
                                                    {{--<a class="thumbnail-rayen" data-lightgallery="item"--}}
                                                    {{--href="images/gallery/portfolio-15-1170x780_original.jpg">--}}
                                                    {{--<figure><img class="img-responsive center-block"--}}
                                                    {{--src="{{asset('assets/images/products/product-13-295x260.jpg')}}"--}}
                                                    {{--width="295" height="260" alt="">--}}
                                                    {{--<figcaption><span--}}
                                                    {{--class="icon icon-normal icon-lg mdi mdi-plus"></span>--}}
                                                    {{--</figcaption>--}}
                                                    {{--</figure>--}}
                                                    {{--</a>--}}
                                                    {{--<div class="product-body bg-selago"><a--}}
                                                                {{--href="restaurant-single.html"><img--}}
                                                                    {{--class="img-responsive center-block img-semi-transparent-inverse"--}}
                                                                    {{--src="{{asset('assets/images/products/product-logo-13-103x119.png')}}"--}}
                                                                    {{--width="103" height="119" alt=""></a>--}}
                                                        {{--<div class="product-btn-wrap offset-top-20"><a--}}
                                                                    {{--class="btn btn-xs btn-bermuda"--}}
                                                                    {{--href="restaurant-single.html">learn more</a></div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-12 col-md-6 isotope-item" data-filter="Asian Cuisine">--}}
                                                {{--<!-- Product-->--}}
                                                {{--<div class="product product-horizontal thumbnail-robben">--}}
                                                    {{--<a class="thumbnail-rayen" data-lightgallery="item"--}}
                                                    {{--href="images/gallery/portfolio-14-884x800_original.jpg">--}}
                                                    {{--<figure><img class="img-responsive center-block"--}}
                                                    {{--src="{{asset('assets/images/products/product-14-295x260.jpg')}}"--}}
                                                    {{--width="295" height="260" alt="">--}}
                                                    {{--<figcaption><span--}}
                                                    {{--class="icon icon-normal icon-lg mdi mdi-plus"></span>--}}
                                                    {{--</figcaption>--}}
                                                    {{--</figure>--}}
                                                    {{--</a>--}}
                                                    {{--<div class="product-body bg-selago"><a--}}
                                                                {{--href="restaurant-single.html"><img--}}
                                                                    {{--class="img-responsive center-block img-semi-transparent-inverse"--}}
                                                                    {{--src="{{asset('assets/images/products/product-logo-14-110x111.png')}}"--}}
                                                                    {{--width="110" height="111" alt=""></a>--}}
                                                        {{--<div class="product-btn-wrap offset-top-20"><a--}}
                                                                    {{--class="btn btn-xs btn-bermuda"--}}
                                                                    {{--href="restaurant-single.html">learn more</a></div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

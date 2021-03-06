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
                        <div class="h1 breadcrumbs-custom-title">Shops</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-34 bg-selago">
        <div class="container">
            <ul class="list-inline list-inline-12 list-inline-icon breadcrumbs-list">
                <li><a href="{{route('homepage')}}">Home</a></li>
                <li class="active">Shops</li>
            </ul>
        </div>
    </section>
    <div class="page-content section-60 section-md-120">
        <!-- Shops-->
        <section>
            <div class="container-wide">
                <div class="row justify-content-sm-center">
                    <div class="col-xxl-10">
                        <div class="isotope-wrap">
                            <div class="row">
                                <!-- Isotope Filters-->
                                <div class="col-xl-12 z-index-10">
                                    <div class="isotope-filters isotope-filters-horizontal">
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
                                                           data-isotope-group="gallery" href="#">All Shops</a></li>
                                                    <li><a data-isotope-filter="Clothes" data-isotope-group="gallery"
                                                           href="#">Clothes</a></li>
                                                    <li><a data-isotope-filter="Jewelry" data-isotope-group="gallery"
                                                           href="#">Jewelry</a></li>
                                                    <li><a data-isotope-filter="Gifts" data-isotope-group="gallery"
                                                           href="#">Gifts</a></li>
                                                    <li><a data-isotope-filter="Accessories"
                                                           data-isotope-group="gallery" href="#">Accessories</a></li>
                                                    <li><a data-isotope-filter="Shoes" data-isotope-group="gallery"
                                                           href="#">Shoes</a></li>
                                                    <li><a data-isotope-filter="Other" data-isotope-group="gallery"
                                                           href="#">Other</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Isotope Content-->
                                <div class="col-xl-12 offset-top-60">
                                    <div class="isotope isotope-modern" data-isotope-layout="fitRows"
                                         data-isotope-group="gallery">
                                        <div class="row row-40" data-photo-swipe-gallery="gallery">
                                            @foreach($shops as $shop)
                                                <div class="col-12 col-md-6 col-lg-4 col-xl-3 isotope-item"
                                                     data-filter="{{$shop->type}}">
                                                    <!-- Product-->
                                                    <div class="product thumbnail-robben thumbnail-robben-width-none">
{{--                                                        <a href="{{route('shop',$shops->slug )}}">--}}
                                                            {{--<span class="thumbnail-robben-img-wrap"><img--}}
                                                            {{--class="img-responsive center-block"--}}
                                                            {{--src="{{asset('assets/images/products/product-01-360x270.jpg')}}" width="360"--}}
                                                            {{--height="270" alt="">--}}
                                                            {{--</span>--}}
{{--                                                        </a>--}}
                                                        <div class="product-body inset-left-10 inset-right-10 offset-top-30">
                                                            <a href="{{route('shop.list',$shop->slug)}}">
                                                                @if(!empty($shop->image->path))
                                                                    <img class="img-semi-transparent-inverse"
                                                                         src="{{asset($shop->image->path)}}"
                                                                         alt="">
                                                                @endif
                                                            </a>
                                                            @if(!empty($shop->meta_description))
                                                                <div class="offset-top-20">
                                                                    <p>{{$shop->meta_description}}</p>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
{{--                                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 isotope-item"--}}
{{--                                                 data-filter="Gifts">--}}
{{--                                                <!-- Product-->--}}
{{--                                                <div class="product thumbnail-robben thumbnail-robben-width-none"><a--}}
{{--                                                        href="shop-single.html">--}}
{{--                                                        --}}{{--<span class="thumbnail-robben-img-wrap"><img--}}
{{--                                                        --}}{{--class="img-responsive center-block"--}}
{{--                                                        --}}{{--src="{{asset('assets/images/products/product-02-360x270.jpg')}}" width="360"--}}
{{--                                                        --}}{{--height="270" alt="">--}}
{{--                                                        --}}{{--</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div--}}
{{--                                                        class="product-body inset-left-10 inset-right-10 offset-top-30">--}}
{{--                                                        <a href="shop-single.html"><img--}}
{{--                                                                class="img-semi-transparent-inverse"--}}
{{--                                                                src="{{asset('assets/images/products/product-logo-02-160x100.png')}}"--}}
{{--                                                                width="160" height="100" alt=""></a>--}}
{{--                                                        <div class="offset-top-20">--}}
{{--                                                            <p>Andrew Jones Studio is a jewelry store located at Audrey--}}
{{--                                                                Mall, in San Diego.</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 isotope-item"--}}
{{--                                                 data-filter="Jewelry">--}}
{{--                                                <!-- Product-->--}}
{{--                                                <div class="product thumbnail-robben thumbnail-robben-width-none"><a--}}
{{--                                                        href="shop-single.html">--}}
{{--                                                        --}}{{--<span class="thumbnail-robben-img-wrap"><img--}}
{{--                                                        --}}{{--class="img-responsive center-block"--}}
{{--                                                        --}}{{--src="{{asset('assets/images/products/product-03-360x270.jpg')}}" width="360"--}}
{{--                                                        --}}{{--height="270" alt="">--}}
{{--                                                        --}}{{--</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div--}}
{{--                                                        class="product-body inset-left-10 inset-right-10 offset-top-30">--}}
{{--                                                        <a href="shop-single.html"><img--}}
{{--                                                                class="img-semi-transparent-inverse"--}}
{{--                                                                src="{{asset('assets/images/products/product-03-360x270.jpg')}}"--}}
{{--                                                                width="132" height="100" alt=""></a>--}}
{{--                                                        <div class="offset-top-20">--}}
{{--                                                            <p>Sam Records offers a wide variety of affordable music CDs--}}
{{--                                                                available at our mall.</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 isotope-item"--}}
{{--                                                 data-filter="Clothes">--}}
{{--                                                <!-- Product-->--}}
{{--                                                <div class="product thumbnail-robben thumbnail-robben-width-none"><a--}}
{{--                                                        href="shop-single.html">--}}
{{--                                                        --}}{{--<span class="thumbnail-robben-img-wrap"><img--}}
{{--                                                        --}}{{--class="img-responsive center-block"--}}
{{--                                                        --}}{{--src="{{asset('assets/images/products/product-04-360x270.jpg')}}" width="360"--}}
{{--                                                        --}}{{--height="270" alt="">--}}
{{--                                                        --}}{{--</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div--}}
{{--                                                        class="product-body inset-left-10 inset-right-10 offset-top-30">--}}
{{--                                                        <a href="shop-single.html"><img--}}
{{--                                                                class="img-semi-transparent-inverse"--}}
{{--                                                                src="{{asset('assets/images/products/product-logo-04-111x100.png')}}"--}}
{{--                                                                width="111" height="100" alt=""></a>--}}
{{--                                                        <div class="offset-top-20">--}}
{{--                                                            <p>Authentic creates clothes for the modern women who like--}}
{{--                                                                to look stylish.</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 isotope-item"--}}
{{--                                                 data-filter="Clothes">--}}
{{--                                                <!-- Product-->--}}
{{--                                                <div class="product thumbnail-robben thumbnail-robben-width-none"><a--}}
{{--                                                        href="shop-single.html">--}}
{{--                                                        --}}{{--<span class="thumbnail-robben-img-wrap"><img--}}
{{--                                                        --}}{{--class="img-responsive center-block"--}}
{{--                                                        --}}{{--src="{{asset('assets/images/products/product-05-360x270.jpg')}}" width="360"--}}
{{--                                                        --}}{{--height="270" alt="">--}}
{{--                                                        --}}{{--</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div--}}
{{--                                                        class="product-body inset-left-10 inset-right-10 offset-top-30">--}}
{{--                                                        <a href="shop-single.html"><img--}}
{{--                                                                class="img-semi-transparent-inverse"--}}
{{--                                                                src="{{asset('assets/images/products/product-logo-05-120x100.png')}}"--}}
{{--                                                                width="120" height="100" alt=""></a>--}}
{{--                                                        <div class="offset-top-20">--}}
{{--                                                            <p>Bellerose had embellished beautiful journey of over 10--}}
{{--                                                                years in the personalized gifts industry.</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 isotope-item"--}}
{{--                                                 data-filter="Accessories">--}}
{{--                                                <!-- Product-->--}}
{{--                                                <div class="product thumbnail-robben thumbnail-robben-width-none"><a--}}
{{--                                                        href="shop-single.html">--}}
{{--                                                        --}}{{--<span class="thumbnail-robben-img-wrap"><img--}}
{{--                                                        --}}{{--class="img-responsive center-block"--}}
{{--                                                        --}}{{--src="{{asset('assets/images/products/product-06-360x270.jpg')}}" width="360"--}}
{{--                                                        --}}{{--height="270" alt="">--}}
{{--                                                        --}}{{--</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div--}}
{{--                                                        class="product-body inset-left-10 inset-right-10 offset-top-30">--}}
{{--                                                        <a href="shop-single.html"><img--}}
{{--                                                                class="img-semi-transparent-inverse"--}}
{{--                                                                src="{{asset('assets/images/products/product-logo-06-103x100.png')}}"--}}
{{--                                                                width="103" height="100" alt=""></a>--}}
{{--                                                        <div class="offset-top-20">--}}
{{--                                                            <p>Colombo has slowly grown to five retail furniture stores--}}
{{--                                                                including Audrey Mall.</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 isotope-item"--}}
{{--                                                 data-filter="Grocery">--}}
{{--                                                <!-- Product-->--}}
{{--                                                <div class="product thumbnail-robben thumbnail-robben-width-none"><a--}}
{{--                                                        href="shop-single.html">--}}
{{--                                                        --}}{{--<span class="thumbnail-robben-img-wrap"><img--}}
{{--                                                        --}}{{--class="img-responsive center-block"--}}
{{--                                                        --}}{{--src="{{asset('assets/images/products/product-07-360x270.jpg')}}" width="360"--}}
{{--                                                        --}}{{--height="270" alt="">--}}
{{--                                                        --}}{{--</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div--}}
{{--                                                        class="product-body inset-left-10 inset-right-10 offset-top-30">--}}
{{--                                                        <a href="shop-single.html"><img--}}
{{--                                                                class="img-semi-transparent-inverse"--}}
{{--                                                                src="{{asset('assets/images/products/product-logo-07-158x100.png')}}"--}}
{{--                                                                width="158" height="100" alt=""></a>--}}
{{--                                                        <div class="offset-top-20">--}}
{{--                                                            <p>Wilsons is the leading premium lingerie brand in--}}
{{--                                                                California.</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 isotope-item"--}}
{{--                                                 data-filter="Other">--}}
{{--                                                <!-- Product-->--}}
{{--                                                <div class="product thumbnail-robben thumbnail-robben-width-none"><a--}}
{{--                                                        href="shop-single.html">--}}
{{--                                                        --}}{{--<span class="thumbnail-robben-img-wrap"><img--}}
{{--                                                        --}}{{--class="img-responsive center-block"--}}
{{--                                                        --}}{{--src="{{asset('assets/images/products/product-08-360x270.jpg')}}" width="360"--}}
{{--                                                        --}}{{--height="270" alt="">--}}
{{--                                                        --}}{{--</span>--}}
{{--                                                    </a>--}}
{{--                                                    <div--}}
{{--                                                        class="product-body inset-left-10 inset-right-10 offset-top-30">--}}
{{--                                                        <a href="shop-single.html"><img--}}
{{--                                                                class="img-semi-transparent-inverse"--}}
{{--                                                                src="{{asset('assets/images/products/product-logo-08-134x100.png')}}"--}}
{{--                                                                width="134" height="100" alt=""></a>--}}
{{--                                                        <div class="offset-top-20">--}}
{{--                                                            <p>Over the past 20+ years, Lakewoods has provided--}}
{{--                                                                skateboarders with top-notch apparel.</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
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

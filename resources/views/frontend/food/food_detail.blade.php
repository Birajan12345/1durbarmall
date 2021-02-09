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
                        <div class="h1 breadcrumbs-custom-title">
                            @if(!empty($food->title))
                                {{$food->title}}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-34 bg-selago">
        <div class="container">
            <ul class="list-inline list-inline-12 list-inline-icon breadcrumbs-list">
                <li><a href="{{route('homepage')}}">Home</a></li>
                <li><a href="{{url('/food')}}">Food</a></li>
                <li class="active">
                    @if(!empty($food->title))
                        {{$food->title}}
                    @endif
                </li>
            </ul>
        </div>
    </section>
    <div class="page-content">
        <!-- Restaurant Page-->
        <section class="section-90 section-lg-0 text-left">
            <div class="container-wide container-wide-custom">
                <div class="row justify-content-sm-center">
                    <div class="col-md-4 col-lg-4 col-xl-4 col-xxl-4 section-lg-90">
                        <a href="#">
                            @if(!empty($food->image->path))
                                <img class="img-responsive img-semi-transparent-inverse center-block"
                                     src="{{asset($food->image->path)}}" alt="">
                            @endif
                        </a>
                        <div class="row justify-content-sm-center">
                            <div class="col-xl-5 padding-0">
                                <!-- List-->
                                <ul class="list list-15 text-left p">
                                    <li>
                                        <span class="icon icon-sm mdi mdi-map-marker text-bermuda text-middle"></span>
                                        <span class="text-middle inset-left-5">
                                            @if(!empty($food->floor->title))
                                                {{$food->floor->title}}
                                            @endif
                                        </span>
                                    </li>
                                    <li>
                                        <a class="text-gray-light" href="tel:{{$food->phone}}">
                                            <span class="icon icon-sm mdi mdi-phone text-bermuda text-middle"></span>
                                            <span class="text-middle inset-left-5">
                                                @if(!empty($food->phone))
                                                    {{$food->phone}}
                                                @endif
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xl-7 offset-top-10 offset-xl-top-0 padding-0">
                                <!-- List-->
                                <ul class="list list-15 text-left p">
                                    <li>
                                        <a class="text-gray-light" href="mailto:{{$food->email}}">
                                            <span class="icon icon-sm mdi mdi-email-outline text-bermuda text-middle"></span>
                                            <span class="text-middle inset-left-5">
                                                @if(!empty($food->email))
                                                    {{$food->email}}
                                                @endif
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-gray-light" href="https://{{$food->link}}" target="_blank">
                                            <span class="icon icon-sm mdi mdi-web text-bermuda text-middle"></span>
                                            <span class="text-middle inset-left-5">
                                                @if(!empty($food->link))
                                                    {{$food->link}}
                                                @endif
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <!-- For News and Events -->
                    {{--                            <div class="inset-lg-left-30">--}}
                    {{--                                <aside class="text-left inset-xxl-right-50">--}}
                    {{--                                    <div class="offset-top-60 offset-lg-top-90">--}}
                    {{--                                        <hr class="divider hr-left-0 bg-bermuda">--}}
                    {{--                                        <h5 class="offset-top-15">Categories</h5>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="offset-top-30">--}}
                    {{--                                        <div class="inset-sm-left-8">--}}
                    {{--                                            <!-- List Marked-->--}}
                    {{--                                            <ul class="list list-marked list-marked-icon">--}}
                    {{--                                                <li><a class="text-primary" href="#">News <span--}}
                    {{--                                                                class="text-gray-lighter">(25)</span></a>--}}
                    {{--                                                </li>--}}
                    {{--                                                <li><a class="text-primary" href="#">Shops <span--}}
                    {{--                                                                class="text-gray-lighter">(17)</span></a>--}}
                    {{--                                                </li>--}}
                    {{--                                                <li><a class="text-primary" href="#">Restaurants & Cafes <span--}}
                    {{--                                                                class="text-gray-lighter">(13)</span></a></li>--}}
                    {{--                                                <li><a class="text-primary" href="#">Entertainment <span--}}
                    {{--                                                                class="text-gray-lighter">(21)</span></a></li>--}}
                    {{--                                                <li><a class="text-primary" href="#">Events <span--}}
                    {{--                                                                class="text-gray-lighter">(29)</span></a>--}}
                    {{--                                                </li>--}}
                    {{--                                            </ul>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                    <!-- Recent Posts-->--}}
                    {{--                                    <div class="offset-top-60 offset-lg-top-90">--}}
                    {{--                                        <hr class="divider hr-left-0 bg-bermuda">--}}
                    {{--                                        <h5 class="offset-top-15">Recent Posts</h5>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="offset-top-30">--}}
                    {{--                                        <!-- Unit-->--}}
                    {{--                                        <div class="unit flex-row">--}}
                    {{--                                            <div class="unit-left">--}}
                    {{--                                                <img class="img-responsive img-responsive-full center-block"--}}
                    {{--                                                     src="{{asset('assets/images/blog/post-04-80x80.jpg')}}" width="80"--}}
                    {{--                                                     height="80" alt="">--}}
                    {{--                                            </div>--}}
                    {{--                                            <div class="unit-body">--}}
                    {{--                                                <h6><a href="blog-post.html">Top 3 Reasons to Visit Fashion Day at Any--}}
                    {{--                                                        Season</a></h6>--}}
                    {{--                                                <div class="offset-top-10">--}}
                    {{--                                                    <!-- List Inline-->--}}
                    {{--                                                    <ul class="list-inline list-inline-dashed list-inline-12 text-gray font-italic p">--}}
                    {{--                                                        <li>2 days ago</li>--}}
                    {{--                                                        <li><a class="text-bermuda" href="#">Articles</a></li>--}}
                    {{--                                                    </ul>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="offset-top-30">--}}
                    {{--                                        <!-- Unit-->--}}
                    {{--                                        <div class="unit flex-row">--}}
                    {{--                                            <div class="unit-left">--}}
                    {{--                                                <img class="img-responsive img-responsive-full center-block"--}}
                    {{--                                                     src="{{asset('assets/images/blog/post-05-80x80.jpg')}}" width="80"--}}
                    {{--                                                     height="80" alt="">--}}
                    {{--                                            </div>--}}
                    {{--                                            <div class="unit-body">--}}
                    {{--                                                <h6><a href="blog-post.html">Perfect Clothes to Wear When It’s Hot</a>--}}
                    {{--                                                </h6>--}}
                    {{--                                                <div class="offset-top-10">--}}
                    {{--                                                    <!-- List Inline-->--}}
                    {{--                                                    <ul class="list-inline list-inline-dashed list-inline-12 text-gray font-italic p">--}}
                    {{--                                                        <li>2 days ago</li>--}}
                    {{--                                                        <li><a class="text-bermuda" href="#">Articles</a></li>--}}
                    {{--                                                    </ul>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="offset-top-30">--}}
                    {{--                                        <!-- Unit-->--}}
                    {{--                                        <div class="unit flex-row">--}}
                    {{--                                            <div class="unit-left">--}}
                    {{--                                                <img class="img-responsive img-responsive-full center-block"--}}
                    {{--                                                     src="{{asset('assets/images/blog/post-06-80x80.jpg')}}" width="80"--}}
                    {{--                                                     height="80" alt="">--}}
                    {{--                                            </div>--}}
                    {{--                                            <div class="unit-body">--}}
                    {{--                                                <h6><a href="blog-post.html">Planning Your Weekend? Visit Fashion--}}
                    {{--                                                        Day!</a></h6>--}}
                    {{--                                                <div class="offset-top-10">--}}
                    {{--                                                    <!-- List Inline-->--}}
                    {{--                                                    <ul class="list-inline list-inline-dashed list-inline-12 text-gray font-italic p">--}}
                    {{--                                                        <li>2 days ago</li>--}}
                    {{--                                                        <li><a class="text-bermuda" href="#">Articles</a></li>--}}
                    {{--                                                    </ul>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </aside>--}}
                    {{--                            </div>--}}


                    <div class="col-md-8 col-lg-8 col-xl-8 col-xxl-8 offset-xxl-1 offset-top-40 offset-xl-top-0 section-lg-90">
                        <div class="inset-lg-right-35 inset-xxl-right-70">
                            @if(!empty($food->content))
                                {!! $food->content !!}
                            @endif
                        </div>
                    {{--                        <div class="offset-top-25"><a class="btn btn-width-175 btn-primary" href="entertainment.html">learn--}}
                    {{--                                more</a></div>--}}

                    <!-- Gallery-->
                        {{--                        <section>--}}
                        {{--                            <div class="row no-gutters justify-content-sm-center" data-lightgallery="group"--}}
                        {{--                                 data-lg-thumbnail="false">--}}
                        {{--                                <div class="col-md-6">--}}
                        {{--                                    <!-- Thumbnail Rayen-->--}}
                        {{--                                    <a class="thumbnail-rayen" data-lightgallery="item"--}}
                        {{--                                       href="{{asset('assets/images/gallery/portfolio-01-1170x842_original.jpg')}}">--}}
                        {{--                                        <figure>--}}
                        {{--                                            <img width="960" height="640"--}}
                        {{--                                                 src="{{asset('assets/images/gallery/portfolio-01-960x640.jpg')}}"--}}
                        {{--                                                 alt="">--}}
                        {{--                                            <figcaption>--}}
                        {{--                                                <span class="icon icon-normal icon-lg mdi mdi-plus"></span>--}}
                        {{--                                            </figcaption>--}}
                        {{--                                        </figure>--}}
                        {{--                                    </a>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="col-md-6 offset-top-0">--}}
                        {{--                                    <!-- Thumbnail Rayen-->--}}
                        {{--                                    <a class="thumbnail-rayen" data-lightgallery="item"--}}
                        {{--                                       href="{{asset('assets/images/gallery/portfolio-28-635x800_original.jpg')}}">--}}
                        {{--                                        <figure>--}}
                        {{--                                            <img width="960" height="320"--}}
                        {{--                                                 src="{{asset('assets/images/gallery/portfolio-28-960x320.jpg')}}"--}}
                        {{--                                                 alt="">--}}
                        {{--                                            <figcaption>--}}
                        {{--                                                <span class="icon icon-normal icon-lg mdi mdi-plus"></span>--}}
                        {{--                                            </figcaption>--}}
                        {{--                                        </figure>--}}
                        {{--                                    </a>--}}
                        {{--                                    <div class="row no-gutters justify-content-sm-center offset-top-0">--}}
                        {{--                                        <div class="col-md-6">--}}
                        {{--                                            <!-- Thumbnail Rayen-->--}}
                        {{--                                            <a class="thumbnail-rayen" data-lightgallery="item"--}}
                        {{--                                               href="{{asset('assets/images/gallery/portfolio-29-1170x800_original.jpg')}}">--}}
                        {{--                                                <figure>--}}
                        {{--                                                    <img width="480" height="320"--}}
                        {{--                                                         src="{{asset('assets/images/gallery/portfolio-29-480x320.jpg')}}"--}}
                        {{--                                                         alt="">--}}
                        {{--                                                    <figcaption>--}}
                        {{--                                                        <span class="icon icon-normal icon-lg mdi mdi-plus"></span>--}}
                        {{--                                                    </figcaption>--}}
                        {{--                                                </figure>--}}
                        {{--                                            </a>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="col-md-6 offset-top-0">--}}
                        {{--                                            <!-- Thumbnail Rayen-->--}}
                        {{--                                            <a class="thumbnail-rayen" data-lightgallery="item"--}}
                        {{--                                               href="{{asset('assets/images/gallery/portfolio-30-1170x800_original.jpg')}}">--}}
                        {{--                                                <figure>--}}
                        {{--                                                    <img width="480" height="320"--}}
                        {{--                                                         src="{{asset('assets/images/gallery/portfolio-30-480x320.jpg')}}"--}}
                        {{--                                                         alt="">--}}
                        {{--                                                    <figcaption>--}}
                        {{--                                                        <span class="icon icon-normal icon-lg mdi mdi-plus"></span>--}}
                        {{--                                                    </figcaption>--}}
                        {{--                                                </figure>--}}
                        {{--                                            </a>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </section>--}}
                    </div>
                </div>
            </div>
        </section>

        <!-- Other Shops-->
        <section class="section-90 section-md-top-120 section-md-bottom-90">
            <div class="container-wide">
                <hr class="divider bg-bermuda">
                <div class="offset-top-20">
                    <h3>Other Restaurant</h3>
                </div>
                <div class="row justify-content-sm-center offset-top-35 offset-lg-top-60">
                    @if(!empty($foods))
                        @foreach($foods as $data)
                            <div class="col-md-6 col-lg-5 col-xl-3">
                                <!-- Product-->
                                <div class="product thumbnail-robben">
{{--                                    <a href="shop-single.html">--}}
{{--                                        <span class="thumbnail-robben-img-wrap d-inline-block"><img--}}
{{--                                        class="img-responsive center-block img-responsive-full"--}}
{{--                                        src="{{asset('assets/images/products/product-10-295x260.jpg')}}" width="248"--}}
{{--                                        height="270" style="width: 248px"--}}
{{--                                        alt="">--}}
{{--                                        </span>--}}
{{--                                    </a>--}}
                                    <div class="product-body inset-left-10 inset-right-10 offset-top-35">
                                        <a href="{{route('food.list',$data->slug)}}">
                                            <img class="img-semi-transparent-inverse"
                                                 src="{{asset($data->image->path)}}"
                                                 width="225" height="225"
                                                 alt="">
                                        </a>
                                        <div class="offset-top-20 inset-xxl-left-35 inset-xxl-right-35">
                                           <b>{{$data->meta_description}}</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
    </div>

@endsection

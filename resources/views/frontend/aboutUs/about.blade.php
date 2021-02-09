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
                            @if(!empty($about->title))
                                {{$about->title}}
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
                <li class="active">
                    @if(!empty($about->title))
                        <a href="{{route('about-us')}}">{{$about->title}}</a>
                    @endif
                </li>
                {{--<li class="active">Food</li>--}}
            </ul>
        </div>
    </section>
    <div class="page-content">
        <!-- Food-->

        <section class="section-80 section-md-120">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-md-10 col-lg-6 order-lg-1">
                        @if(!empty($about->url))
                            <iframe class="embed-responsive-item" width="100%" height="315"
                                    src="{{$about->url}}"
                                    allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                        @endif
                    </div>
                    <div class="col-md-10 col-lg-6 text-left offset-top-40 offset-lg-top-0">
                        <hr class="divider hr-left-0 bg-bermuda">
                        <div class="offset-top-20">
                            @if(!empty($about->title))
                                <h3>{{$about->title}}</h3>
                            @endif
                        </div>
                        <div class="offset-top-15 offset-md-top-40 inset-lg-right-35 inset-xl-right-60">
                            @if(!empty($about->meta_description))
                                <p class="h5-variant-2">{{$about->meta_description}}</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 text-justify offset-top-40 offset-lg-top-20">
                    @if(!empty($about->content))
                        <p class="offset-top-15">{!! ($about->content) !!}</p>
                    @endif
                </div>
            </div>
        </section>

{{--        <section class="section-90 section-md-120 bg-selago">--}}
{{--            <div class="inset-lg-left-35 inset-xxl-left-125 inset-lg-right-35 inset-xxl-right-125">--}}
{{--                <div class="container container-wide-custom">--}}
{{--                    <div class="row justify-content-sm-center align-items-sm-center justify-content-xxl-between">--}}
{{--                        <div class="col-md-10 col-xl-5 col-xxl-4 text-left">--}}
{{--                            <hr class="divider hr-lg-left-0 bg-bermuda">--}}
{{--                            <div class="offset-top-20">--}}
{{--                                <h3 class="text-center text-lg-left">A Few Words <br class="d-none d-xxl-inline-block">--}}
{{--                                    About 1Durbar Mall</h3>--}}
{{--                                <div class="offset-top-30">--}}
{{--                                    <p>1Durbar Mall is a four-story vertical shopping and entertainment center located--}}
{{--                                        in the heart of K-town in Nepal. Shop at the City Target on the second level and--}}
{{--                                        visit a 16-screen AMC Theater with the largest IMAX in North America.</p>--}}
{{--                                </div>--}}
{{--                                --}}{{--<div class="offset-top-30 text-center text-lg-left"><a class="btn btn-width-175 btn-primary" href="entertainment.html">learn more</a></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-10 col-xl-7 col-xxl-8 offset-top-60 offset-xl-top-0">--}}
{{--                            <div--}}
{{--                                class="row justify-content-sm-center justify-content-md-start justify-content-lg-center inset-xxl-left-70 row-60">--}}
{{--                                <div class="col-md-6 col-lg-4"><span--}}
{{--                                        class="icon icon-lg icon-circle icon-white shadow-drop mdi mdi-wifi text-primary"></span>--}}
{{--                                    <div class="offset-top-25 offset-md-top-35 inset-xxl-left-15 inset-xxl-right-15">--}}
{{--                                        <h6>Free Wi-Fi</h6>--}}
{{--                                        <hr class="divider divider-xs bg-bermuda offset-top-15">--}}
{{--                                        <p class="offset-top-15 offset-md-top-25">We have a network accessible for free--}}
{{--                                            across the entire common mall area.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 col-lg-4"><span--}}
{{--                                        class="icon icon-lg icon-circle icon-white shadow-drop mdi mdi-wallet-giftcard text-primary"></span>--}}
{{--                                    <div class="offset-top-25 offset-md-top-35 inset-xxl-left-15 inset-xxl-right-15">--}}
{{--                                        <h6>Mall Gift Cards</h6>--}}
{{--                                        <hr class="divider divider-xs bg-bermuda offset-top-15">--}}
{{--                                        <p class="offset-top-15 offset-md-top-25">The best gift solution is available at--}}
{{--                                            your favorite shopping mall.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 col-lg-4"><span--}}
{{--                                        class="icon icon-lg icon-circle icon-white shadow-drop mdi mdi-wallet-travel text-primary"></span>--}}
{{--                                    <div class="offset-top-25 offset-md-top-35 inset-xxl-left-15 inset-xxl-right-15">--}}
{{--                                        <h6>Lost and Found</h6>--}}
{{--                                        <hr class="divider divider-xs bg-bermuda offset-top-15">--}}
{{--                                        <p class="offset-top-15 offset-md-top-25">Did you lose an item while visiting--}}
{{--                                            the mall? Call now <a class="text-nowrap text-gray-light" href="tel:#">1-800-1234-456</a>--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="offset-top-15 offset-md-top-40 inset-lg-right-35 inset-xl-right-60">--}}
{{--                            <p>--}}
{{--                                1Durbar Mall welcomes every resident and guest of our city to visit--}}
{{--                                the biggest shopping mall in the area.--}}
{{--                            </p>--}}
{{--                            <p>--}}
{{--                                1Durbar Mall is a four-story vertical shopping and entertainment--}}
{{--                                center located in the heart of downtown San Diego in the thriving Yerba Buena--}}
{{--                                Neighborhood.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
    </div>

@endsection

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
                        <div class="h1 breadcrumbs-custom-title">Parking</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-34 bg-selago">
        <div class="container">
            <ul class="list-inline list-inline-12 list-inline-icon breadcrumbs-list">
                <li><a href="{{route('homepage')}}">Home</a></li>
                <li><a href="entertainment.html">Services</a></li>
                <li class="active">Parking</li>
            </ul>
        </div>
    </section>
    <div class="page-content">
        <!-- Parking-->
        <section class="section-80 section-md-0">
            <div class="container-wide container-wide-custom">
                <div class="row justify-content-sm-center justify-content-md-start">
                    <div class="col-sm-10 col-md-6 section-image-aside section-image-aside-right text-left">
                        <div class="section-image-aside-img d-none d-md-block"
                             style="background-image: url({{asset('assets/images/pages/parking-01-960x498.jpg')}}); background-position: center center;">
{{--                            <img--}}
{{--                                style="width: 70%; height:auto;display: block;margin-left: auto; margin-right: auto"--}}
{{--                                src="{{asset('assets/images/pages/parking-01-960x498.jpg')}}"--}}
{{--                                alt="">--}}
                        </div>
                        <div
                            class="section-image-aside-body section-sm-60 section-lg-120 inset-md-left-10 inset-md-right-10 inset-xl-left-45 inset-xl-right-75 inset-xxl-left-85 inset-xxl-right-140">
                            <hr class="divider bg-bermuda hr-left-0">
                            <div class="offset-top-20">
                                <h3>Parking at Audrey Mall</h3>
                            </div>
                            <div class="offset-top-30">
                                <p>We currently offer parking at our North and South Garages for extended visits and
                                    short term outdoor parking. If you would like more information about parking rates,
                                    please call the Parking office at <a class="text-nowrap text-gray-light"
                                                                         href="tel:#">1-800-3214-657</a>.</p>
{{--                                <div class="group offset-top-30"><a class="btn btn-width-200 btn-primary"--}}
{{--                                                                    href="parking.html">view Driving directions</a><a--}}
{{--                                        class="btn btn-width-200 btn-primary-outline" href="gift-cards.html">view--}}
{{--                                        pricing</a></div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-top-120 section-bottom-60 section-lg-bottom-120 section-lg-top-180 bg-selago">
            <div class="container-wide container-wide-custom">
                <div class="row justify-content-sm-center">
                    <div class="col-sm-10 col-md-6 col-xl-6">
                        <!-- Icon Box-->
                        <div class="icon-box bg-default"><span
                                class="icon icon-md icon-circle icon-outline bg-bermuda shadow-drop text-white"><img
                                    src="{{asset('assets/images/icons/icon-01-53x28.png')}}" width="53" height="28" alt=""></span>
                            <div class="offset-top-30 inset-xl-left-35 inset-xl-right-35">
                                <h5>2000+ Parking Spaces</h5>
                                <hr class="divider divider-xs bg-bermuda offset-top-15">
                                <p class="offset-top-25 text-gray-light">Audrey Mall parking has a lot of space
                                    available for our clients’ cars.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-6 col-xl-6 offset-top-90 offset-xl-top-0">
                        <!-- Icon Box-->
                        <div class="icon-box bg-default"><span
                                class="icon icon-md icon-circle icon-outline bg-bermuda shadow-drop mdi mdi-cash-multiple text-white"></span>
                            <div class="offset-top-35 inset-xl-left-35 inset-xl-right-35">
                                <h5>Any Payment Methods</h5>
                                <hr class="divider divider-xs bg-bermuda offset-top-15">
                                <p class="offset-top-25 text-gray-light">We accept cash and credit cards, including
                                    MasterCard, Visa, and AmEx.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <!-- Google Map-->
            <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45."
                 data-styles="[{&quot;featureType&quot;:&quot;landscape.natural&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#e0efef&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;hue&quot;:&quot;#1900ff&quot;},{&quot;color&quot;:&quot;#c0e8e8&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;lightness&quot;:100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit.line&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:700}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#7dcdcd&quot;}]}]">
                <div class="google-map"></div>
                <ul class="google-map-markers">
                    <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45."
                        data-description="9870 St Vincent Place, Glasgow" data-icon="images/gmap_marker.png"
                        data-icon-active="images/gmap_marker_active.png"></li>
                    <li data-location="University of Strathclyde, Richmond Street, Glasgow, UK"
                        data-description="University of Strathclyde, Richmond Street" data-icon="images/gmap_marker.png"
                        data-icon-active="images/gmap_marker_active.png"></li>
                    <li data-location="genting casino near Glasgow, UK" data-description="genting casino near Glasgow"
                        data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
                </ul>
            </div>
        </section>
    </div>

@endsection

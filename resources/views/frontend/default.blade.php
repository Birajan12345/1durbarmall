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
                            @if(!empty($page->title))
                                <h3>{{$page->title}}</h3>
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
                    @if(!empty($page->title))
                        @if(!empty($page->title))
                            {{$page->title}}
                        @endif
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
{{--                        @if(!empty($page->url))--}}
{{--                            <iframe class="embed-responsive-item" width="100%" height="315"--}}
{{--                                    src="{{$page->url}}"--}}
{{--                                    allow="autoplay; encrypted-media" allowfullscreen=""></iframe>--}}
{{--                        @endif--}}
                            @if(!empty($page->image->path))
                                <img class="img-responsive img-semi-transparent-inverse center-block"
                                     src="{{asset($page->image->path)}}" alt="">
                            @endif
                    </div>
                    <div class="col-md-10 col-lg-6 text-left offset-top-40 offset-lg-top-0">
                        <hr class="divider hr-left-0 bg-bermuda">
                        <div class="offset-top-20">
                            @if(!empty($page->title))
                                <h3>{{$page->title}}</h3>
                            @endif
                        </div>
                        <div class="offset-top-15 offset-md-top-40 inset-lg-right-35 inset-xl-right-60">
                            @if(!empty($page->meta_description))
                                <p class="h5-variant-2">{{$page->meta_description}}</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 text-justify offset-top-40 offset-lg-top-20">
                    @if(!empty($page->content))
                        <p class="offset-top-15">{!! ($page->content) !!}</p>
                    @endif
                </div>
            </div>
        </section>
    </div>

@endsection

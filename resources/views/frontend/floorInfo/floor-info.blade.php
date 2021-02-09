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
                        <div class="h1 breadcrumbs-custom-title">Floor Info</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-34 bg-selago">
        <div class="container">
            <ul class="list-inline list-inline-12 list-inline-icon breadcrumbs-list">
                <li><a href="index.html">Home</a></li>
                <li class="active">Floor Info</li>
            </ul>
        </div>
    </section>

    <div class="page-content section-60 section-md-120">
        <!-- Tabs & Accordions-->
        <section>
            <div class="container container-wide container-wide-custom">
                <div class="row justify-content-sm-center">
                    <div class="col-sm-10 col-lg-6">
                        <h4>Floor No.</h4>
                    </div>
                </div>
            </div>
            <div class="container offset-top-90 offset-xl-top-127">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <!-- Bootstrap tabs-->
                        <div class="tabs-custom tabs-horizontal tabs-corporate text-left" id="tabs-1">
                            <!-- Nav tabs-->
                            @if($floors)
                                <ul class="nav nav-tabs">
                                    @php
                                        $count = 0;
                                    @endphp
                                    @foreach($floors as $floor)
                                        <li class="nav-item @if($count == 0) active @endif" role="presentation">
                                            @if(!empty($floor->title))
                                                <a class="nav-link @if($count == 0) active @endif" href="#tabs-1-{{$floor->slug}}"
                                                   data-toggle="tab">
                                                    {{$floor->title}}
                                                </a>
                                            @endif
                                        </li>
                                        @php
                                        $count++;
                                        @endphp
                                    @endforeach
                                    {{--                                    <li class="nav-item active" role="presentation"><a class="nav-link active" href="#tabs-1-{{$floor->id}}"--}}
                                    {{--                                                                                data-toggle="tab">Basement Floor</a></li>--}}
                                    {{--                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2"--}}
                                    {{--                                                                                data-toggle="tab">Ground Floor</a></li>--}}
                                    {{--                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3"--}}
                                    {{--                                                                                data-toggle="tab">First Floor</a></li>--}}
                                    {{--                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-4"--}}
                                    {{--                                                                                data-toggle="tab">Second Floor</a></li>--}}
                                    {{--                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-5"--}}
                                    {{--                                                                                data-toggle="tab">Third Floor</a></li>--}}
                                    {{--                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-6"--}}
                                    {{--                                                                                data-toggle="tab">Fourth Floor</a></li>--}}
                                    {{--<li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-7"--}}
                                    {{--data-toggle="tab">Fifth Floor</a></li>--}}
                                    {{--<li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-8"--}}
                                    {{--data-toggle="tab">Sixth Floor</a></li>--}}
                                    {{--@endforeach--}}
                                </ul>
                            @endif
                        <!-- Tab panes-->
                            <div class="tab-content container-wide container-wide-custom">
                                @php
                                    $count = 0;
                                @endphp
                            @foreach($floors as $floor)
                                    <div class="tab-pane fade show @if($count == 0 ) active @endif" id="tabs-1-{{$floor->slug}}">
                                        <div class="row justify-content-sm-center">
                                            <div class="col-md-4 col-lg-4 col-xl-4 col-xxl-4 section-lg-90">
                                                <div class="">
                                                    <hr class="divider hr-left-0 bg-bermuda">
                                                    <h5 class="offset-top-15">Shops List</h5>
                                                </div>
                                                <div class="row justify-content-sm-center shops-list">
                                                    <!-- Categories-->
                                                    <div class="inset-lg-left-30">
                                                        <aside class="text-left inset-xxl-right-50">
                                                            <!-- Recent Posts-->
                                                            <div class="offset-top-30">
                                                                <!-- Unit-->
                                                                @foreach($shops as $shop)
                                                                    @if($shop->floor_info_id == $floor->id)
                                                                    <div class="unit flex-row">
                                                                        <div class="unit-left">
                                                                            @if(!empty($shop->image->path))
                                                                                <img class="img-responsive img-responsive-full center-block"
                                                                                     src="{{asset($shop->image->path)}}"
                                                                                     width="80"
                                                                                     height="80" style="width: 128px"
                                                                                     alt="">
                                                                            @endif
                                                                        </div>
                                                                        <div class="unit-body">
                                                                                <h6>
                                                                                    <a href="{{url('shops',$shop->slug)}}">{{$shop->title ?? 'N/A'}}</a>
                                                                                </h6>
                                                                            <div class="offset-top-10">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endif
                                                                @endforeach

                                                                @foreach($foods as $food)
                                                                    @if($food->floor_info_id == $floor->id)
                                                                        <div class="unit flex-row">
                                                                            <div class="unit-left">
                                                                                @if(!empty($food->image->path))
                                                                                    <img class="img-responsive img-responsive-full center-block"
                                                                                         src="{{asset($food->image->path)}}"
                                                                                         width="80"
                                                                                         height="80" style="width: 128px"
                                                                                         alt="">
                                                                                @endif
                                                                            </div>
                                                                            <div class="unit-body">
                                                                                {{--                                                                            @if(!empty($shop->title))--}}
                                                                                <h6>
                                                                                    <a href="{{url('food',$food->slug)}}">{{$food->title ?? 'N/A'}}</a>
                                                                                </h6>
                                                                                {{--                                                                            @endif--}}
                                                                                <div class="offset-top-10">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @endforeach

                                                            </div>
                                                        </aside>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-8 col-xl-8 col-xxl-8 offset-xxl-1 offset-top-40 offset-xl-top-0 section-lg-90">
                                                <div class="inset-lg-right-35 inset-xxl-right-70">
                                                    @if(!empty($floor->image->path))
                                                        <img class="floor-info"
                                                             src="{{asset($floor->image->path)}}"
                                                             alt="">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @php
                                    $count++;
                                @endphp
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

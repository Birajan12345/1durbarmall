@extends('frontend.layouts.app')
@section('content')

    <!-- Swiper-->
    <div class="swiper-container swiper-slider swiper-slider-variant-2" data-height="" data-min-height="300px"
         data-simulate-touch="false" data-autoplay="4200">
        <div class="swiper-wrapper">
            @foreach($slider as $slide)
                @if(!empty($slide->image->path))
                    <div class="swiper-slide" data-slide-bg="{{asset($slide->image->path)}}">
                        <div class="swiper-slide-caption">
                            <div class="container">
                                <div class="row justify-content-sm-center justify-content-xl-start text-xl-left">
                                    <div class="col-md-10 col-xl-8">
                                        @if(!empty($slide->title))
                                            <div class="text-big-84 font-italic font-monospace text-spacing-inverse-20 text-white">
                                                {{$slide->title}}
                                            </div>
                                        @endif
{{--                                        <div class="d-none d-xl-inline-block offset-top-25 offset-sm-top-30">--}}

{{--                                        </div>--}}
                                        @if(!empty($slide->caption))
                                            <div class="d-inline-block text-top offset-top-10 offset-sm-top-15 inset-left-10">
                                                <hr class="divider divider-mod divider-58 bg-default">
                                                <h4 class="text-white">{{$slide->caption}}</h4>
                                            </div>
                                        @endif
                                        @if(!empty($slide->link_caption))
                                            <div class="d-inline-block text-top inset-left-10">
                                                <h2>{{$slide->link_caption}}</h2>
                                            </div>
                                        @endif
                                        {{--                                        <div class="offset-top-15 offset-md-top-65">--}}
                                        {{--                                            <a class="btn btn-width-165 btn-bermuda"--}}
                                        {{--                                               href="#">shop now--}}
                                        {{--                                            </a>--}}
                                        {{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination d-lg-none"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button swiper-button-prev preview__img d-none d-lg-block">
            <div class="wrap"><span class="swiper-button__arrow"><span class="icon mdi mdi-chevron-left"></span></span>
                <div class="preview">
                    <div class="preview__img"></div>
                </div>
            </div>
        </div>
        <div class="swiper-button swiper-button-next preview__img d-none d-lg-block">
            <div class="wrap"><span class="swiper-button__arrow"><span class="icon mdi mdi-chevron-right"></span></span>
                <div class="preview">
                    <div class="preview__img"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
        <!-- About Audrey Mall-->
        @foreach($about as $abouts)
            <section class="section-80 section-md-120">
                <div class="container">
                    <div class="row justify-content-sm-center">
                        <div class="col-md-10 col-lg-6 order-lg-1">
                            @if(!empty($abouts->image->path))
                                <img class="img-responsive center-block"
                                     src="{{$abouts->image->path}}"
                                     width="570" height="333" alt="">
                            @endif
                        </div>
                        <div class="col-md-10 col-lg-6 text-left offset-top-40 offset-lg-top-0">
                            <hr class="divider hr-left-0 bg-bermuda">
                            <div class="offset-top-20">
                                @if(!empty($abouts->title))
                                    <h3>{{$abouts->title}}</h3>
                                @endif
                            </div>
                            <div class="offset-top-15 offset-md-top-40 inset-lg-right-35 inset-xl-right-60">
                                @if(!empty($abouts->meta_description))
                                    <p class="h5-variant-2">{{$abouts->meta_description}}</p>
                                @endif
                                <a class="btn btn-width-175 btn-bermuda offset-top-20"
                                   href="{{route('about-us')}}">learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach

    <!-- Our Services Catalog-->
        <section class="section-80 section-md-120 bg-catskill-white">
            <div class="container">
                <hr class="divider bg-bermuda">
                <div class="row justify-content-center offset-top-20">
                    <div class="col-md-10 col-xl-6">
                        <h3>Our Services Catalog</h3>
                        <p class="offset-top-20">1Durbar Mall offers dozens of shopping possibilities to everyone! We
                            can make your shopping not just interesting; at our mall you’ll find lots of interesting
                            things to do.</p>
                    </div>
                    <div class="col-12">
                        <div
                            class="row no-gutters justify-content-sm-center offset-top-35 offset-lg-top-65 text-left post-service-bordered">
                            @foreach($service as $services)
                                <div class="col-sm-6 col-md-5 col-lg-3">

                                    <!-- Post Service-->
                                    <a class="post-classic post-service">
                                        <span class="post-service-img-wrap">
                                            @if(!empty($services->image->path))
                                                <img class="img-responsive center-block"
                                                     src="{{$services->image->path}}"
                                                     width="293" height="190" alt=""
                                                     style="width: 100%;">
                                            @endif
                                        </span>
                                        <!-- Box-->
                                        <span class="post-service-caption d-block">
                                            @if(!empty($services->title))
                                                <span class="h6 d-block">{{$services->title}}</span>
                                            @endif
                                            @if(!empty($services->meta_description))
                                                <span
                                                    class="offset-top-5 d-block">{{$services->meta_description}}</span>
                                            @endif
                                        </span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--- For Events -->
        {{--        <section class="section-80 section-md-120">--}}
        {{--            <div class="inset-lg-left-35 inset-xxl-left-125 inset-lg-right-35 inset-xxl-right-125">--}}
        {{--                <div class="container-wide container-wide-custom">--}}
        {{--                    <hr class="divider bg-bermuda">--}}
        {{--                    <div class="offset-top-20">--}}
        {{--                        <h3>Events</h3>--}}
        {{--                    </div>--}}
        {{--                    <div--}}
        {{--                        class="row justify-content-center justify-content-xl-start text-left offset-top-35 offset-md-top-60 row-50">--}}
        {{--                        <div class="col-lg-6">--}}
        {{--                            <div--}}
        {{--                                class="row justify-content-sm-center justify-content-xl-start row-30 text-center text-md-left">--}}
        {{--                                <div class="col-md-5 col-lg-10 col-xl-5 d-flex justify-content-center"><img--}}
        {{--                                        class="img-cover img-responsive" src="images/blog/post-13-320x442.jpg"--}}
        {{--                                        width="320" height="442" alt=""></div>--}}
        {{--                                <div class="col-md-6 col-lg-10 col-xl-6">--}}
        {{--                                    <ul class="list-inline list-inline-20">--}}
        {{--                                        <li><span--}}
        {{--                                                class="icon icon-normal icon-sm mdi mdi-calendar text-bermuda text-middle"></span><span--}}
        {{--                                                class="text-middle inset-left-10">June, 29</span></li>--}}
        {{--                                        <li><span--}}
        {{--                                                class="icon icon-normal icon-sm mdi mdi-clock text-bermuda text-middle"></span><span--}}
        {{--                                                class="text-middle inset-left-10">6:00pm</span></li>--}}
        {{--                                    </ul>--}}
        {{--                                    <div class="offset-top-25">--}}
        {{--                                        <h5><a href="event-single.html">The KidsLand Summer Day</a></h5>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="offset-top-25">--}}
        {{--                                        <p>The KidsLand SummerDay will begin on Saturday, July 4, with a special--}}
        {{--                                            celebration and will run until Sunday, September 4. <span--}}
        {{--                                                class="d-lg-none d-xl-inline">Children can take part in a variety of themed activities and broadcast live events from the KidsLand Radio Station and TV Studio located at Audrey Mall.</span>--}}
        {{--                                        </p>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="offset-top-20">--}}
        {{--                                        <div class="h5-variant-2 font-weight-bold font-italic text-gray">Free Entry--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="offset-top-25"><a class="btn btn-width-175 btn-primary-outline"--}}
        {{--                                                                  href="event-single.html">learn more</a></div>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <div class="col-lg-6">--}}
        {{--                            <div--}}
        {{--                                class="row justify-content-sm-center justify-content-xl-start row-30 text-center text-md-left">--}}
        {{--                                <div class="col-md-5 col-lg-10 col-xl-5 d-flex justify-content-center"><img--}}
        {{--                                        class="img-cover img-responsive" src="images/blog/post-14-320x442.jpg"--}}
        {{--                                        width="320" height="442" alt=""></div>--}}
        {{--                                <div class="col-md-6 col-lg-10 col-xl-6">--}}
        {{--                                    <ul class="list-inline list-inline-20">--}}
        {{--                                        <li><span--}}
        {{--                                                class="icon icon-normal icon-sm mdi mdi-calendar text-bermuda text-middle"></span><span--}}
        {{--                                                class="text-middle inset-left-10">August, 29</span></li>--}}
        {{--                                        <li><span--}}
        {{--                                                class="icon icon-normal icon-sm mdi mdi-clock text-bermuda text-middle"></span><span--}}
        {{--                                                class="text-middle inset-left-10">6:00pm</span></li>--}}
        {{--                                    </ul>--}}
        {{--                                    <div class="offset-top-25">--}}
        {{--                                        <h5><a href="event-single.html">Audrey Cafe Evening</a></h5>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="offset-top-25">--}}
        {{--                                        <p>Relax and unwind throughout the Summer while sipping on a specially created--}}
        {{--                                            Audrey 100 Champagne cocktail <span class="d-lg-none d-xl-inline">or a glass of Audrey 100 Punch, designed to help you cool down after a long day of shopping. A traditional English afternoon tea is also offered, alongside a delicious array of macaroons.</span>--}}
        {{--                                        </p>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="offset-top-20">--}}
        {{--                                        <div class="h5-variant-2 font-weight-bold font-italic text-gray">Free Entry--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="offset-top-25"><a class="btn btn-width-175 btn-primary-outline"--}}
        {{--                                                                  href="event-single.html">learn more</a></div>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <a class="btn btn-width-200 btn-bermuda offset-top-35 offset-md-top-65" href="events.html">view all--}}
        {{--                        events</a>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </section>--}}
    <!-- End Events -->

        <!--- For News -->
        {{--        &lt;!&ndash; Latest News&ndash;&gt;--}}
        {{--        <section class="section-80 section-md-120 bg-selago">--}}
        {{--            <div class="container-wide container-wide-custom">--}}
        {{--                <hr class="divider bg-bermuda">--}}
        {{--                <div class="offset-top-20">--}}
        {{--                    <h3>Latest News</h3>--}}
        {{--                </div>--}}
        {{--                <div class="row justify-content-sm-center offset-top-40 offset-lg-top-60 text-left">--}}
        {{--                    <div class="col-sm-10 col-md-6 col-xl-3">--}}
        {{--                        --}}{{--                        &lt;!&ndash; Post Box&ndash;&gt;--}}
        {{--                        <div class="post-box">--}}
        {{--                            <div class="post-box-img-wrap"><a class="thumbnail-robben" href="blog-post.html"><span--}}
        {{--                                        class="thumbnail-robben-img-wrap"><img class="img-responsive center-block"--}}
        {{--                                                                               src="images/blog/post-01-420x300.jpg"--}}
        {{--                                                                               width="420" height="300"--}}
        {{--                                                                               alt=""></span></a><a--}}
        {{--                                    class="label-custom-wrap d-inline-block" href="#"><span--}}
        {{--                                        class="label-custom label-bermuda">Article</span></a></div>--}}
        {{--                            <div class="post-box-caption bg-default"><span--}}
        {{--                                    class="icon icon-normal icon-sm mdi mdi-calendar text-bermuda d-inline-block text-middle"></span>--}}
        {{--                                <div class="d-inline-block text-middle">--}}
        {{--                                    <p class="font-italic">2 days ago</p>--}}
        {{--                                </div>--}}
        {{--                                <h5 class="offset-top-20"><a href="blog-post.html">Top 3 Reasons to Visit Audrey Mall at--}}
        {{--                                        Any Season</a></h5>--}}
        {{--                                <p class="offset-top-20">Regardless of what season it is now, there are always plenty of--}}
        {{--                                    reasons to visit our mall. In this...</p>--}}
        {{--                            </div>--}}
        {{--                            <a class="btn btn-block btn-rect btn-icon btn-icon-right btn-bermuda text-left"--}}
        {{--                               href="blog-post.html"><span class="icon mdi mdi-arrow-right"></span>Read more</a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <div class="col-sm-10 col-md-6 col-xl-3 offset-top-30 offset-md-top-0">--}}
        {{--                        --}}{{--                        &lt;!&ndash; Post Box&ndash;&gt;--}}
        {{--                        <div class="post-box">--}}
        {{--                            <div class="post-box-img-wrap"><a class="thumbnail-robben" href="blog-post.html"><span--}}
        {{--                                        class="thumbnail-robben-img-wrap"><img class="img-responsive center-block"--}}
        {{--                                                                               src="images/blog/post-02-420x300.jpg"--}}
        {{--                                                                               width="420" height="300"--}}
        {{--                                                                               alt=""></span></a><a--}}
        {{--                                    class="label-custom-wrap d-inline-block" href="#"><span--}}
        {{--                                        class="label-custom label-bermuda">Article</span></a></div>--}}
        {{--                            <div class="post-box-caption bg-default"><span--}}
        {{--                                    class="icon icon-normal icon-sm mdi mdi-calendar text-bermuda d-inline-block text-middle"></span>--}}
        {{--                                <div class="d-inline-block text-middle">--}}
        {{--                                    <p class="font-italic">2 days ago</p>--}}
        {{--                                </div>--}}
        {{--                                <h5 class="offset-top-20"><a href="blog-post.html">Perfect Clothes to Wear When It’s--}}
        {{--                                        Hot</a></h5>--}}
        {{--                                <p class="offset-top-20">In the middle of a heatwave, your corporate uniform — the usual--}}
        {{--                                    blazers, slacks, and button-downs — is...</p>--}}
        {{--                            </div>--}}
        {{--                            <a class="btn btn-block btn-rect btn-icon btn-icon-right btn-bermuda text-left"--}}
        {{--                               href="blog-post.html"><span class="icon mdi mdi-arrow-right"></span>Read more</a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <div class="col-sm-10 col-md-6 col-xl-3 offset-top-30 offset-xl-top-0">--}}
        {{--                        --}}{{--                        &lt;!&ndash; Post Box&ndash;&gt;--}}
        {{--                        <div class="post-box">--}}
        {{--                            <div class="post-box-img-wrap"><a class="thumbnail-robben" href="blog-post.html"><span--}}
        {{--                                        class="thumbnail-robben-img-wrap"><img class="img-responsive center-block"--}}
        {{--                                                                               src="images/blog/post-03-420x300.jpg"--}}
        {{--                                                                               width="420" height="300"--}}
        {{--                                                                               alt=""></span></a><a--}}
        {{--                                    class="label-custom-wrap d-inline-block" href="#"><span--}}
        {{--                                        class="label-custom label-bermuda">Article</span></a></div>--}}
        {{--                            <div class="post-box-caption bg-default"><span--}}
        {{--                                    class="icon icon-normal icon-sm mdi mdi-calendar text-bermuda d-inline-block text-middle"></span>--}}
        {{--                                <div class="d-inline-block text-middle">--}}
        {{--                                    <p class="font-italic">2 days ago</p>--}}
        {{--                                </div>--}}
        {{--                                <h5 class="offset-top-20"><a href="blog-post.html">Planning Your Weekend? Visit Audrey--}}
        {{--                                        Mall!</a></h5>--}}
        {{--                                <p class="offset-top-20">Audrey Mall often evokes memories of endless shopping,--}}
        {{--                                    thrilling rides or concerts. But we...</p>--}}
        {{--                            </div>--}}
        {{--                            <a class="btn btn-block btn-rect btn-icon btn-icon-right btn-bermuda text-left"--}}
        {{--                               href="blog-post.html"><span class="icon mdi mdi-arrow-right"></span>Read more</a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <div class="col-sm-10 col-md-6 col-xl-3 offset-top-30 offset-xl-top-0">--}}
        {{--                        --}}{{--                        &lt;!&ndash; Post Box&ndash;&gt;--}}
        {{--                        <div class="post-box">--}}
        {{--                            <div class="post-box-img-wrap">--}}
        {{--                                <div class="embed-responsive embed-responsive-2">--}}
        {{--                                    <iframe class="embed-responsive-item" width="560" height="315"--}}
        {{--                                            src="https://www.youtube.com/embed/E8trgeZTKJc"--}}
        {{--                                            allow="autoplay; encrypted-media" allowfullscreen=""></iframe>--}}
        {{--                                </div>--}}
        {{--                                <a class="label-custom-wrap d-inline-block" href="#"><span--}}
        {{--                                        class="label-custom label-bermuda">Video</span></a>--}}
        {{--                            </div>--}}
        {{--                            <div class="post-box-caption bg-default"><span--}}
        {{--                                    class="icon icon-normal icon-sm mdi mdi-calendar text-bermuda d-inline-block text-middle"></span>--}}
        {{--                                <div class="d-inline-block text-middle">--}}
        {{--                                    <p class="font-italic">2 days ago</p>--}}
        {{--                                </div>--}}
        {{--                                <h5 class="offset-top-20"><a href="blog-post.html">How to Keep Your Holiday Glow: a--}}
        {{--                                        Cheat’s Guide to Post-Holiday Beauty</a></h5>--}}
        {{--                                <p class="offset-top-20">Summer is heaven-sent for low-key beauty, giving us an--}}
        {{--                                    opportunity to dial down our makeup...</p>--}}
        {{--                            </div>--}}
        {{--                            <a class="btn btn-block btn-rect btn-icon btn-icon-right btn-bermuda text-left"--}}
        {{--                               href="blog-post.html"><span class="icon mdi mdi-arrow-right"></span>Read more</a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <a class="btn btn-width-200 btn-primary offset-top-40 offset-lg-top-60" href="blog-classic.html">view--}}
        {{--                    all news</a>--}}
        {{--            </div>--}}
        {{--        </section>--}}
    <!--- End News -->

        <div class="page-content section-60 section-md-120">
            <!-- Gallery Grid-->
            <section>
                <div class="container-wide">
                    <div class="isotope-wrap isotope-offset-30">
                        <div class="row">
                            <!-- Isotope Filters-->
                            <div class="col-xl-12">
                                <div>
                                    <div class="isotope-filters isotope-filters-horizontal isotope-filters-gallery">
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
                                                           data-isotope-group="gallery" href="#">All</a></li>
                                                    <li><a data-isotope-filter="Clothing" data-isotope-group="gallery"
                                                           href="#">Clothing</a></li>
                                                    <li><a data-isotope-filter="Food" data-isotope-group="gallery"
                                                           href="#">Food</a></li>
                                                    <li><a data-isotope-filter="Other" data-isotope-group="gallery"
                                                           href="#">Other</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Isotope Content-->
                            <div class="col-xl-12 offset-top-120">
                                <div class="isotope" data-isotope-layout="fitRows" data-isotope-group="gallery">
                                    <div class="row" data-lightgallery="group">
                                        @foreach($cover as $covers)
                                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 isotope-item"
                                                 data-filter="{{$covers->type}}">
                                                <!-- Thumbnail Rayen-->
                                                <a class="thumbnail-rayen" data-lightgallery="item" href="{{$covers->image->path}}">
                                                    <figure>
                                                        <img width="420" height="280"
                                                             src="{{$covers->image->path}}"
                                                             alt="">
                                                        <figcaption>
                                                            <span
                                                                class="icon icon-normal icon-lg mdi text-white">{{$covers->name}}</span>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Partners-->

        <section class="section-top-70 section-bottom-80 bg-selago">
            <div class="container-wide container-wide-custom">
                <!-- Owl Carousel-->
                <div class="owl-carousel owl-inset-20 owl-dots-offset-top-35 owl-carousel-fullheight" data-items="2"
                     data-md-items="3" data-xxl-items="6" data-stage-padding="15" data-loop="false" data-margin="30"
                     data-mouse-drag="false" data-dots="true">
                    @foreach($adsupFront as $ads)
                        <a class="box-xl box-flex box-fullheight box-hovered bg-default" title="{{$ads->name}}"
                           href="#">
                            @if(!empty($ads->image->path))
                                <img class="img-responsive center-block"
                                     src="{{$ads->image->path}}" width="197"
                                     height="197" alt="">
                            @endif
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <section>
            <div class="rd-google-map-wrap">
                <div class="section-60 section-lg-0 inset-left-15 inset-right-15 inset-lg-left-0 inset-lg-right-0">
                    <div class="box-lg box-contacts bg-default text-left center-block shadow-drop">
                        <hr class="divider hr-left-0 bg-bermuda">
                        <div class="offset-top-15">
                            <h5>Contact Information</h5>
                            <address class="contact-info offset-top-35 p">
                                <div class="unit flex-row unit-spacing-xs">
                                    <div class="unit-left"><span
                                            class="icon icon-normal icon-sm icon-sm-variant-2 mdi mdi-map-marker text-primary"></span>
                                    </div>
                                    <div class="unit-body"><p class="text-dove-gray">{{setting('address')}}</p></div>
                                </div>
                                <div class="unit flex-row unit-spacing-xs offset-top-20">
                                    <div class="unit-left"><span
                                            class="icon icon-normal icon-sm icon-sm-variant-2 mdi mdi-calendar-clock text-primary"></span>
                                    </div>
                                    <div class="unit-body">
                                        <p class="text-dove-gray">{{setting('time')}}</p>
                                    </div>
                                </div>
                                <div class="unit flex-row unit-spacing-xs offset-top-20">
                                    <div class="unit-left">
                                        <div
                                            class="icon icon-normal icon-sm icon-sm-variant-2 mdi mdi-phone text-primary"></div>
                                    </div>
                                    <div class="unit-body"><a class="text-dove-gray"
                                                              href="tel:#">{{setting('phone')}}</a>
                                    </div>
                                </div>
                                <div class="unit flex-row unit-spacing-xs offset-top-20">
                                    <div class="unit-left">
                                        <div
                                            class="icon icon-normal icon-sm icon-sm-variant-2 mdi mdi-email-outline text-primary"></div>
                                    </div>
                                    <div class="unit-body"><a class="text-dove-gray"
                                                              href="mailto:#">{{setting('email')}}</a></div>
                                </div>
                            </address>
                        </div>
                    </div>
                </div>
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3498.179931189816!2d85.31802212768372!3d27.712665226092003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6365f3d5b85d917e!2s1%20Durbar%20Mall!5e0!3m2!1sen!2snp!4v1599760323904!5m2!1sen!2snp"
                        width="100%" height="460" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                    {{--class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45."--}}
                    {{--data-styles="[{&quot;featureType&quot;:&quot;landscape.natural&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#e0efef&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;hue&quot;:&quot;#1900ff&quot;},{&quot;color&quot;:&quot;#c0e8e8&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;lightness&quot;:100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit.line&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:700}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#7dcdcd&quot;}]}]">--}}
                    {{--<div class="google-map">--}}
                    {{----}}
                    {{--</div>--}}
                    {{--<ul class="google-map-markers">--}}
                    {{--<li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45."--}}
                    {{--data-description="9870 St Vincent Place, Glasgow" data-icon="images/gmap_marker.png"--}}
                    {{--data-icon-active="images/gmap_marker_active.png"></li>--}}
                    {{--</ul>--}}
                </div>
            </div>
        </section>
    </div>


@endsection


@push('scripts')
    <script type="text/javascript">
    $(window).on('load', function () {
    $('#myModal').modal('show');
    });
    // $(document).ready(function(){
    //     $("#myModal").modal('show');
    //     setTimeout(function(){
    //         $("#myModal").modal('hide');
    //     },5000);
    // });
    </script>


    <script type="text/javascript">

        {
            // swal({
            //     confirmButtonText: 'Next &rarr;',
            //     showCancelButton: true,
            //     animation: true,
            //     allowOutsideClick: false,
            //     allowEscapeKey: false,
            //     progressSteps: [
            //         57,
            //         56,
            //         53,
            //         50,
            //         44,
            //     ]
            // })

            var steps = [
                    @foreach ($popupFront as $key=>$eachPopup)
                {{--    "<div class='modal fade myModal' id='myModal-{{$key}}' role='dialog'>"+--}}
                {{--"<div class='modal-dialog'>"+--}}
                {{--<!-- Modal content-->--}}
                {{--"<div class='modal-content'>"+--}}
                {{--"<div class='modal-header' style='background-image: linear-gradient(to right, #3498db, #000c06);'>"+--}}
                {{--            "<button type='button' class='close' data-dismiss='modal'>&times;</button>"+--}}
                {{--            "<h4 class='modal-title'>{{$eachPopup->name}}</h4>"+--}}
                {{--            "</div>"+--}}
                {{--            "<div class='modal-body' >"+--}}
                {{--        @if(isset($eachPopup->image->path))--}}
                {{--            "<img src='{{asset($eachPopup->image->path)}}' alt='' style='width:100%;'>"+--}}
                {{--            @endif--}}
                {{--        "<p>{{$eachPopup->meta_description}}</p>"+--}}
                {{--            "</div>"+--}}
                {{--            "<div>"+--}}
                {{--            "</div>"+--}}
                {{--            "</div>"+--}}
                {
                    @if(!empty($eachPopup->image->path))
                    html: "<img src='{{ asset($eachPopup->image->path)}}'>"
                    @endif
                },
                @endforeach

            ];


            swal.queue(steps).then(function (result) {
                swal.resetDefaults()
                // swal({
                //     title: 'Thank You',
                //     confirmButtonText: 'Please visit our web page!'
                // })
            }, function () {
                swal.resetDefaults()
            })

        }


        new Vue({
            el: '#app',
            data: {
                principal: 0,
                rate: 0,
                loan: 0,
                newRate: 0,
                up: 0,
                down: 0
            },
            computed: {
                result: function () {
                    const p = this;
                    Vue.config.productionTip = false;
                    p.newRate = p.rate / 12 / 100;
                    p.up = Math.pow((1 + p.newRate), p.loan);
                    p.down = p.up - 1;
                    return parseFloat(p.principal * p.newRate * p.up / p.down).toFixed(2);
                }
            }
        });
        $(window).load(function () {
            $('#myModal').modal('show');
        });

    </script>


@endpush
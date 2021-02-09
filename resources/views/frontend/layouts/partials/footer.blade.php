<!-- Page Footer-->
<footer class="page-footer bg-shark section-80 section-lg-120">
    <div class="container-wide container-wide-custom">
        <div class="row justify-content-sm-center justify-content-sm-between text-left">
            <div class="col-md-6 col-lg-3 col-xxl-2 offset-xxl-1 order-lg-3">
                <hr class="divider hr-left-0 bg-bermuda">
                <div class="offset-top-15">
                    <h5 class="text-white">Tags</h5>
                </div>
                <div class="offset-top-30">
                    <div class="group group-sm"><a class="btn btn-tag btn-bermuda-outline-v2"
                                                   href="{{route('shop.list')}}">Shops</a>
                        {{--<a class="btn btn-tag btn-bermuda-outline-v2" href="#">Entertainment</a>--}}
                        <a class="btn btn-tag btn-bermuda-outline-v2" href="{{route('food.list')}}">Foods</a>
                        <a class="btn btn-tag btn-bermuda-outline-v2" href="{{route('about-us')}}">About Us</a>
                        <a class="btn btn-tag btn-bermuda-outline-v2" href="{{route('food.list')}}">Cafe</a>
                        <a class="btn btn-tag btn-bermuda-outline-v2" href="{{route('floor-info')}}">Floors</a>
                    </div>
                </div>
                <hr class="divider hr-left-0 bg-bermuda offset-top-65 offset-md-top-90">
                <div class="offset-top-15">
                    <h5 class="text-white">Flickr Feed</h5>
                    <div class="group-sm flickr widget-flickrfeed offset-top-30" data-lightgallery="group"
                         data-lg-thumbnail="false" data-flickr-tags="tm61211">
                        @foreach(cover() as $data)
                            <a class="flickr-item" data-lightgallery="item" href="{{$data->image->path}}" data-image_c="{{$data->image->path}}"
                               data-type="flickr-item">
                                <figure class="thumbnail-rayen thumbnail-rayen-primary">
                                    <img width="82" height="82" data-title="alt"
                                         src="{{asset($data->image->path)}}" alt="" data-image_q="{{$data->image->path}}">
                                    <figcaption>
                                        <span class="icon icon-normal icon-sm icon-sm-variant-2 mdi mdi-plus"></span>
                                    </figcaption>
                                </figure>
                            </a>
                        @endforeach
{{--                        <a class="flickr-item" data-lightgallery="item" href="" data-image_c="href"--}}
{{--                           data-type="flickr-item">--}}
{{--                            <figure class="thumbnail-rayen thumbnail-rayen-primary">--}}
{{--                                <img width="82" height="82" data-title="alt"--}}
{{--                                     src="{{asset('assets/images/_blank.png')}}" alt="" data-image_q="src">--}}
{{--                                <figcaption>--}}
{{--                                    <span class="icon icon-normal icon-sm icon-sm-variant-2 mdi mdi-plus"></span>--}}
{{--                                </figcaption>--}}
{{--                            </figure>--}}
{{--                        </a>--}}
{{--                        <a class="flickr-item" data-lightgallery="item" href="" data-image_c="href"--}}
{{--                           data-type="flickr-item">--}}
{{--                            <figure class="thumbnail-rayen thumbnail-rayen-primary">--}}
{{--                                <img width="82" height="82" data-title="alt"--}}
{{--                                     src="{{asset('assets/images/_blank.png')}}" alt="" data-image_q="src">--}}
{{--                                <figcaption>--}}
{{--                                    <span class="icon icon-normal icon-sm icon-sm-variant-2 mdi mdi-plus"></span>--}}
{{--                                </figcaption>--}}
{{--                            </figure>--}}
{{--                        </a>--}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2 offset-xxl-1 offset-top-60 offset-md-top-0 order-lg-4">
                <hr class="divider hr-left-0 bg-bermuda">
                <div class="offset-top-15">
                    <h5 class="text-white">Links</h5>
                </div>
                <!-- List Marked-->
                <ul class="list list-white list-marked list-marked-white text-left offset-top-25 inset-left-5">
                    <li><a class="link-accent" href="{{route('shop.list')}}">Shops</a></li>
                    <li><a class="link-accent" href="{{route('food.list')}}">Food</a></li>
                    <li><a class="link-accent" href="{{route('about-us')}}">About Us</a></li>
                    <li><a class="link-accent" href="{{route('floor-info')}}">Floors Info</a></li>
                    {{--<li><a class="link-accent" href="#">Services</a></li>--}}
                    {{--<li><a class="link-accent" href="events.html">Events</a></li>--}}
                    {{--<li><a class="link-accent" href="sales.html">Sales</a></li>--}}
                </ul>

                {{--                <div class="col-lg-2 col-sm-2 mb-2 mb-lg-0">--}}
                {{--                    <ul class="list_none text-center text-md-right">--}}
                {{--                        <li><p>Total Views : {{viewCount()}}</p></li>--}}
                {{--                    </ul>--}}
                {{--                </div>--}}

            </div>
            <div class="col-xxl-1 order-lg-5"></div>
            <div
                    class="col-md-6 col-lg-3 col-xxl-2 offset-xxl-1 offset-top-60 offset-sm-top-30 offset-lg-top-0 order-lg-2">
                <hr class="divider hr-left-0 bg-bermuda">
                <div class="offset-top-15">
                    <h5 class="text-white">Contact Information</h5>
                    <!-- Contact Info-->
                    <address class="contact-info offset-top-35 p">
                        <!-- Unit-->
                        <div class="unit flex-row unit-spacing-xs">
                            <div class="unit-left"><span
                                        class="icon icon-sm icon-sm-variant-2 icon-normal mdi mdi-map-marker text-bermuda"></span>
                            </div>
                            <div class="unit-body">
                                <p class="text-gray-lighter">{{setting('address')}}</p>
                            </div>
                        </div>
                        <!-- Unit-->
                        <div class="unit flex-row unit-spacing-xs offset-top-20">
                            <div class="unit-left"><span
                                        class="icon icon-sm icon-sm-variant-2 icon-normal mdi mdi-calendar-clock text-bermuda"></span>
                            </div>
                            <div class="unit-body">
                                <p class="text-gray-lighter">{{setting('time')}}</p>
                            </div>
                        </div>
                        <!-- Unit-->
                        <div class="unit flex-row unit-spacing-xs offset-top-20">
                            <div class="unit-left"><span
                                        class="icon icon-sm icon-sm-variant-2 icon-normal mdi mdi-phone text-bermuda"></span>
                            </div>
                            <div class="unit-body">
                                <p class="text-gray-lighter"><a class="text-gray-lighter"
                                                                href="tel:#">{{setting('phone')}}</a>
                                {{--                                    <a class="text-gray-lighter d-block" href="tel:#">1-800-9514-654</a></p>--}}
                            </div>
                        </div>
                        <!-- Unit-->
                        <div class="unit flex-row unit-spacing-xs offset-top-25">
                            <div class="unit-left"><span
                                        class="icon icon-sm icon-sm-variant-2 icon-normal mdi mdi-email-outline text-bermuda"></span>
                            </div>
                            <div class="unit-body">
                                <p class="text-gray-lighter"><a class="text-gray-lighter"
                                                                href="mailto:#">{{setting('email')}}</a>
                                </p>
                            </div>
                        </div>
                    </address>
                    <ul class="list-white list-inline list-inline-2 list-primary offset-top-30">
                        <li>
                            <a class="icon icon-sm icon-circle fa fa-facebook text-gray-lighter"
                               href="{{setting('facebook')}}" target="_blank"></a>
                        </li>
                        <li>
                            <a class="icon icon-sm icon-circle fa fa-twitter text-gray-lighter"
                               href="{{setting('twitter')}}" target="_blank"></a>
                        </li>
                        <li>
                            <a class="icon icon-sm icon-circle fa fa-youtube text-gray-lighter"
                               href="{{setting('youtube')}}" target="_blank"></a>
                        </li>
                        <li>
                            <a class="icon icon-sm icon-circle fa fa-instagram text-gray-lighter"
                               href="{{setting('instagram')}}" target="_blank"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div
                    class="col-md-6 col-lg-4 col-xxl-2 offset-xxl-1 offset-top-60 offset-md-top-30 offset-lg-top-0 order-lg-1">
                <!--Brand--><a class="brand" href="{{route('homepage')}}"><img class="brand-logo-dark"
                                                                               src="{{asset('assets/images/logo-202x56.png')}}"
                                                                               alt="" width="101"
                                                                               height="28"/><img
                            class="brand-logo-light"
                            src="{{asset('assets/images/1durbarmall/logo/logo1.png')}}"
                            alt="" width="101"
                            height="28"/></a>
                @foreach(footer() as $footer)
                    @if(!empty($footer->meta_description))
                        <p class="text-gray-lighter text-left offset-top-20 offset-xl-top-50">
                            {{--                        {{str_limit($footer->meta_description, 47, '&raquo;') }}--}}
                            {{$footer->meta_description}}
                        </p>
                    @endif
                @endforeach
                <div class="offset-top-20 offset-xl-top-50">
                    <p class="rights"><span>&copy;&nbsp;</span>
                        <span class="copyright-year"></span><span>&nbsp;</span><span>1Durbar Mall All Rights Reserved.</span><br><span>&nbsp;Designed and developed by</span><a
                                class="text-gray-light" href="https://accessworld.net/"> AWT</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

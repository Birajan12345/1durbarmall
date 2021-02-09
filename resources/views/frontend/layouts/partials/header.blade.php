<!-- Page Header-->
<header class="page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap" style="height: 0px">
        <nav class="rd-navbar rd-navbar-boxed" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
             data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed"
             data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
             data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static"
             data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
             data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="107px"
             data-xl-stick-up-offset="107px" data-xxl-stick-up-offset="107px">

            <div class="rd-navbar-top-panel-wrap">
                <div class="rd-navbar-top-panel">
                    <div class="left-side">
                        <!-- Contact Info-->
                        <address class="contact-info text-left">
                            <div class="d-inline-block"><a
                                    class="unit align-items-xl-center flex-row unit-spacing-xxs" href="#"><span
                                        class="unit-left"><span
                                            class="icon icon-sm icon-primary icon-circle mdi mdi-map-marker text-bermuda"></span></span><span
                                        class="unit-body"><span class="text-gray-lighter">{{setting('address')}}</span></span></a>
                            </div>
                            <div class="d-inline-block">
                                <div class="unit align-items-center flex-row unit-spacing-xxs">
                                    <div class="unit-left">
                                        <div class="icon icon-sm icon-primary icon-circle mdi mdi-calendar-clock text-bermuda"></div>
                                    </div>
                                    <div class="unit-body">
                                        <div class="text-gray-lighter">{{setting('time')}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-inline-block"><a class="unit align-items-center flex-row unit-spacing-xxs"
                                                           href="tel:#"><span class="unit-left"><span
                                            class="icon icon-sm icon-primary icon-circle mdi mdi-phone text-bermuda"></span></span><span
                                        class="unit-body"><span
                                            class="text-gray-lighter">{{setting('phone')}}</span></span></a></div>
                        </address>
                    </div>
                    <div class="right-side">
                        <ul class="list-inline list-inline-2 list-primary">
                            <li>
                                <a class="icon icon-xs icon-circle fa fa-facebook text-gray-lighter" href="{{setting('facebook')}}" target="_blank"></a>
                            </li>
                            <li>
                                <a class="icon icon-xs icon-circle fa fa-twitter text-gray-lighter" href="{{setting('twitter')}}" target="_blank"></a>
                            </li>
                            <li>
                                <a class="icon icon-xs icon-circle fa fa-youtube text-gray-lighter" href="{{setting('youtube')}}" target="_blank"></a>
                            </li>
                            <li>
                                <a class="icon icon-xs icon-circle fa fa-instagram text-gray-lighter" href="{{setting('instagram')}}" target="_blank"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="rd-navbar-inner">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle-->
                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span>
                    </button>
                    <div class="rd-navbar-header">
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand text-lg-center">
                            <!--Brand--><a class="brand" href="{{route('homepage')}}"><img class="brand-logo-dark"
                                                                                src="{{asset('assets/images/1durbarmall/logo/logo2.jpg')}}" alt=""
                                                                                width="101" height="28"/><img
                                    class="brand-logo-light" src="{{asset('assets/images/logo-inverse-202x56.png')}}" alt="" width="101"
                                    height="28"/></a>
                        </div>
                        <!--&lt;!&ndash; Contact Info&ndash;&gt;-->
                        <!--<address class="contact-info contact-info-collapsed text-left p">-->
                        <!--<div class="d-block">-->
                        <!--&lt;!&ndash; Unit&ndash;&gt;-->
                        <!--<div class="unit align-items-center flex-row unit-spacing-xs">-->
                        <!--<div class="unit-left">-->
                        <!--<svg class="offset-top-5" x="0px" y="0px" width="40px" height="43px"-->
                        <!--viewbox="0 0 52.001 54.001">-->
                        <!--<g>-->
                        <!--<path fill="none"-->
                        <!--d="M25.948,20.234c2.888,0,5.237-2.349,5.237-5.237S28.836,9.76,25.948,9.76s-5.237,2.349-5.237,5.237                        S23.06,20.234,25.948,20.234z"></path>-->
                        <!--<path fill="none"-->
                        <!--d="M25.994,39.458c2.129-2.567,8.307-10.377,11.904-18.62c0.872-1.823,1.306-3.721,1.306-5.672                        C39.204,7.906,33.258,2,25.949,2c-7.31,0-13.257,5.906-13.257,13.166c0,1.985,0.427,3.882,1.27,5.639                        C17.571,29.079,23.84,36.896,25.994,39.458z M25.948,7.76c3.991,0,7.237,3.247,7.237,7.237c0,3.991-3.246,7.237-7.237,7.237                        c-3.99,0-7.237-3.246-7.237-7.237C18.711,11.007,21.958,7.76,25.948,7.76z"></path>-->
                        <!--<path d="M25.254,41.666C25.444,41.878,25.715,42,26,42h0.004c0.286-0.001,0.558-0.125,0.747-0.34                        c0.344-0.391,8.478-9.704,12.966-19.991c0.987-2.063,1.487-4.25,1.487-6.503C41.204,6.803,34.361,0,25.949,0                        c-8.413,0-15.257,6.803-15.257,15.166c0,2.287,0.493,4.475,1.451,6.472C16.645,31.959,24.904,41.274,25.254,41.666z M25.949,2                        c7.309,0,13.255,5.906,13.255,13.166c0,1.951-0.434,3.849-1.306,5.672c-3.597,8.243-9.775,16.053-11.904,18.62                        c-2.154-2.562-8.423-10.379-12.032-18.653c-0.843-1.757-1.27-3.654-1.27-5.639C12.692,7.906,18.639,2,25.949,2z"></path>-->
                        <!--<path d="M25.948,22.234c3.991,0,7.237-3.246,7.237-7.237c0-3.99-3.246-7.237-7.237-7.237                        c-3.99,0-7.237,3.247-7.237,7.237C18.711,18.988,21.958,22.234,25.948,22.234z M25.948,9.76c2.888,0,5.237,2.349,5.237,5.237                        s-2.349,5.237-5.237,5.237s-5.237-2.349-5.237-5.237S23.06,9.76,25.948,9.76z"></path>-->
                        <!--<path d="M45.968,29.748c-0.08-0.308-0.302-0.559-0.596-0.677l-5-2l-0.743,1.858l4.531,1.812l5.316,20.379                        l-10.028-5.015c-0.272-0.135-0.591-0.14-0.867-0.013L26,51.898l-12.581-5.806c-0.275-0.127-0.594-0.122-0.866,0.013L2.524,51.12                        L7.84,30.741l4.532-1.812l-0.743-1.858l-5,2c-0.295,0.118-0.516,0.369-0.597,0.677l-6,23c-0.099,0.379,0.034,0.781,0.338,1.028                        c0.306,0.248,0.727,0.292,1.078,0.118l11.569-5.785l12.564,5.799c0.266,0.123,0.573,0.123,0.838,0l12.564-5.799l11.57,5.785                        C50.695,53.965,50.848,54,51,54c0.225,0,0.448-0.076,0.63-0.224c0.305-0.247,0.437-0.649,0.338-1.028L45.968,29.748z"></path>-->
                        <!--</g>-->
                        <!--</svg>-->
                        <!--</div>-->
                        <!--<div class="unit-body"><a class="text-gray" href="contacts.html">2130 Fulton-->
                        <!--Street, San Diego, <br class="d-none d-lg-inline-block"> CA 94117-1080-->
                        <!--USA</a></div>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--<div class="d-block offset-top-15 offset-xl-top-0">-->
                        <!--&lt;!&ndash; Unit&ndash;&gt;-->
                        <!--<div class="unit align-items-center flex-row unit-spacing-xs">-->
                        <!--<div class="unit-left">-->
                        <!--<svg class="offset-top-5" x="0px" y="0px" width="40px" height="40px"-->
                        <!--viewbox="0 0 54 54">-->
                        <!--<g>-->
                        <!--<path fill="none"-->
                        <!--d="M27,24c-1.654,0-3,1.346-3,3s1.346,3,3,3s3-1.346,3-3S28.654,24,27,24z"></path>-->
                        <!--<path fill="none"-->
                        <!--d="M27,2C13.215,2,2,13.215,2,27s11.215,25,25,25s25-11.215,25-25S40.785,2,27,2z M27,32                        c-2.414,0-4.434-1.721-4.899-4H13c-0.552,0-1-0.447-1-1s0.448-1,1-1h9.101c0.399-1.956,1.943-3.5,3.899-3.899V6                        c0-0.553,0.448-1,1-1s1,0.447,1,1v16.101c2.279,0.465,4,2.485,4,4.899C32,29.757,29.757,32,27,32z"></path>-->
                        <!--<path d="M27,0C12.112,0,0,12.112,0,27s12.112,27,27,27s27-12.112,27-27S41.888,0,27,0z M27,52                        C13.215,52,2,40.785,2,27S13.215,2,27,2s25,11.215,25,25S40.785,52,27,52z"></path>-->
                        <!--<path d="M28,22.101V6c0-0.553-0.448-1-1-1s-1,0.447-1,1v16.101C24.044,22.5,22.5,24.044,22.101,26H13                        c-0.552,0-1,0.447-1,1s0.448,1,1,1h9.101c0.465,2.279,2.485,4,4.899,4c2.757,0,5-2.243,5-5C32,24.586,30.279,22.566,28,22.101z                        M27,30c-1.654,0-3-1.346-3-3s1.346-3,3-3s3,1.346,3,3S28.654,30,27,30z"></path>-->
                        <!--</g>-->
                        <!--</svg>-->
                        <!--</div>-->
                        <!--<div class="unit-body">-->
                        <!--<p class="text-gray">Monday–Sunday: <br class="d-none d-lg-inline-block">-->
                        <!--9:00am–9:00pm</p>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--</address>-->
                    </div>
                    <!-- RD Navbar Toggle-->
                    <button class="rd-navbar-toggle-search-fixed d-lg-none d-tablet"
                            data-rd-navbar-toggle=".rd-navbar-search-wrap-fixed"></button>
                    <!-- RD Navbar Toggle-->
                    <button class="rd-navbar-collapse-toggle d-lg-none d-tablet"
                            data-rd-navbar-toggle=".contact-info-collapsed"><span></span></button>
                </div>
                <div class="rd-navbar-boxed-nav bg-accent">
                    <div class="rd-navbar-nav-wrap d-inline-block">
                        <ul class="rd-navbar-nav">

                            @foreach(menus() as $menu)
                                <?php
                                $hasSub = !$menu->subMenus->isEmpty();
                                ?>

                                <li class="{{ $hasSub ? 'dropdown' : '' }}">
                                    <a href="{{ url($menu->url) }}" class="rd-nav-link"> {!! $menu->name !!}
                                        @if($hasSub)
                                            <b class="caret"></b>
                                            <i class="md md-arrow-drop-down md-lg"></i>
                                        @endif
                                    </a>
                                    @if($hasSub)
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            @foreach($menu->subMenus->sortBy('order') as $key => $sub)
                                                <?php
                                                $hasChildSub = !$sub->childsubMenus->isEmpty();
                                                ?>
                                                <li class="{{ $hasChildSub ? 'dropdown' : '' }} rd-dropdown-item">
                                                    <a href="{{url($sub->url)}}"
                                                       class="rd-dropdown-link">{!! $sub->name !!}
                                                        @if($hasChildSub)
                                                            <i class="fa fa-arrow-right"
                                                               style="float: right;margin-top: 4px;"></i>
                                                        @endif
                                                    </a>
                                                    @if($hasChildSub)
                                                        <ul class="rd-menu rd-navbar-dropdown">
                                                            @foreach($sub->childsubMenus->sortBy('order') as $key => $childsubmenu)
                                                                <li>
                                                                    <a href="{{url($childsubmenu->url)}}"
                                                                       style="text-align: center;margin-top: -5px;">
                                                                        {!! $childsubmenu->name !!}
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach

{{--                            <li class="rd-nav-item active"><a class="rd-nav-link" href="{{route('homepage')}}">Home</a>--}}
{{--                                <!--                                    <ul class="rd-menu rd-navbar-dropdown">-->--}}
{{--                                <!--                                        <li class="rd-dropdown-item active"><a class="rd-dropdown-link"-->--}}
{{--                                <!--                                                                               href="index-variant-2.html">Home Variant-->--}}
{{--                                <!--                                            2</a>-->--}}
{{--                                <!--                                        </li>-->--}}
{{--                                <!--                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link"-->--}}
{{--                                <!--                                                                        href="index-variant-3.html">Home Variant 3</a>-->--}}
{{--                                <!--                                        </li>-->--}}
{{--                                <!--                                    </ul>-->--}}
{{--                            </li>--}}
{{--                            <li class="rd-nav-item"><a class="rd-nav-link" href="#">Directory</a>--}}
{{--                                <ul class="rd-menu rd-navbar-dropdown">--}}
{{--                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link"--}}
{{--                                                                    href="{{route('shop.list')}}">Shops</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link"--}}
{{--                                                                    href="{{route('food.list')}}">Food</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link"--}}
{{--                                                                    href="#">Entertainment</a>--}}
{{--                                    </li>--}}
{{--                                    --}}{{--<li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{route('parking')}}">Parking</a>--}}
{{--                                    --}}{{--</li>--}}
{{--                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link"--}}
{{--                                                                    href="{{route('floor-info')}}">Floor Info</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <!--                                <li class="rd-nav-item"><a class="rd-nav-link" href="events.html">Events</a>-->--}}
{{--                            <!--                                    <ul class="rd-menu rd-navbar-dropdown">-->--}}
{{--                            <!--                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="events.html">All-->--}}
{{--                            <!--                                            Events</a>-->--}}
{{--                            <!--                                        </li>-->--}}
{{--                            <!--                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link"-->--}}
{{--                            <!--                                                                        href="event-single.html">Event Page</a>-->--}}
{{--                            <!--                                        </li>-->--}}
{{--                            <!--                                    </ul>-->--}}
{{--                            <!--                                </li>-->--}}
{{--                            <!--                                <li class="rd-nav-item"><a class="rd-nav-link" href="blog-classic.html">News</a>-->--}}
{{--                            <!--                                    <ul class="rd-menu rd-navbar-dropdown">-->--}}
{{--                            <!--                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="events.html">All-->--}}
{{--                            <!--                                            News</a>-->--}}
{{--                            <!--                                        </li>-->--}}
{{--                            <!--                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link"-->--}}
{{--                            <!--                                                                        href="event-single.html">News Page</a>-->--}}
{{--                            <!--                                        </li>-->--}}
{{--                            <!--                                    </ul>-->--}}
{{--                            <!--                                </li>-->--}}
{{--                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('contact')}}">Contacts</a>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                    <!--RD Navbar Search-->
                    <div class="rd-navbar-search-wrap-fixed d-inline-block">
                        <div class="rd-navbar-search-wrap">
                            <div class="rd-navbar-search">
                                <a class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search" href="#">
                                    <span></span>
                                </a>
                                <form class="rd-search rd-navbar-search-custom" action="search-results.html"
                                      data-search-live="rd-search-results-live" method="GET">
                                    <div class="form-group">
                                        <label class="form-label" for="rd-navbar-search-form-input">Search</label>
                                        <input class="rd-navbar-search-form-input form-control form-control-gray-lightest"
                                               id="rd-navbar-search-form-input" type="text" name="s"
                                               autocomplete="off">
                                        <button type="submit"><span class="icon icon-xs fa fa-search"></span>
                                        </button>
                                    </div>
                                    <div class="rd-search-results-live d-none d-xl-block"
                                         id="rd-search-results-live"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- RD Navbar Toggle-->
                    <button class="rd-navbar-toggle-search d-none d-lg-inline-block veil-tablet"
                            data-rd-navbar-toggle=".rd-navbar-search-wrap"></button>
                </div>
            </div>
        </nav>
    </div>
</header>

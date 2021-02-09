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
                        <div class="h1 breadcrumbs-custom-title">Contacts Us</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-34 bg-selago">
        <div class="container">
            <ul class="list-inline list-inline-12 list-inline-icon breadcrumbs-list">
                <li><a href="{{route('homepage')}}">Home</a></li>
                <li class="active">Contacts Us</li>
            </ul>
        </div>
    </section>
    <div class="page-content">
        <!-- Contacts-->
        <section class="section-60 section-md-120 text-left">
            <div class="container-wide">
                <div class="row justify-content-sm-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="inset-lg-right-60 inset-xxl-left-85 inset-xxl-right-120">
                            <hr class="divider hr-left-0 bg-bermuda">
                            <h3 class="offset-top-20">Get in Touch</h3>
                            <p class="offset-top-40">You can contact us any way that is convenient for you. We are
                                available 24/7 via email. You can also use a quick contact form below or visit us
                                personally. We would be happy to answer your questions.</p>
                            <!-- RD Mailform-->
                            <form class="text-left offset-top-35"
                                  method="POST" action="{{route('contact.inquiry')}}">
                                @csrf
                                <div class="row justify-content-sm-center">
                                    <div class="col-xl-6">
                                        <div class="form-group form-group-outside">
                                            <label class="form-label form-label-outside" for="first-name">
                                                First Name
                                            </label>
                                            <input class="form-control" id="first-name" type="text"
                                                   name="firstName" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 offset-top-10 offset-xl-top-0">
                                        <div class="form-group form-group-outside">
                                            <label class="form-label form-label-outside" for="last-name">
                                                Last Name
                                            </label>
                                            <input class="form-control" id="last-name" type="text"
                                                   name="lastName" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 offset-top-10">
                                        <div class="form-group form-group-outside">
                                            <label class="form-label form-label-outside" for="email">
                                                E-mail
                                            </label>
                                            <input class="form-control" id="email" type="email" name="email"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 offset-top-10">
                                        <div class="form-group form-group-outside">
                                            <label class="form-label form-label-outside" for="phone">
                                                Phone
                                            </label>
                                            <input class="form-control" id="phone" type="tel" name="phone"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 offset-top-10">
                                        <div class="form-group form-group-outside">
                                            <label class="form-label form-label-outside" for="message">
                                                Message
                                            </label>
                                            <textarea class="form-control" id="message" name="message"
                                                      required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="offset-top-20">
                                    <button type="submit" title="Submit Your Message!"
                                            class="btn btn-primary" id="submitButton" name="submit"
                                            value="Submit">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-4 offset-top-90 offset-lg-top-0">
                        <hr class="divider hr-left-0 bg-bermuda">
                        <h5 class="offset-top-15">Socials</h5>
                        <ul class="list-inline list-inline-2 list-primary offset-top-20">
                            <li class="inset-left-0"><a
                                        class="icon icon-xs icon-circle fa fa-facebook text-gray-lighter"
                                        href="{{setting('facebook')}}" target="_blank"></a></li>
                            <li><a class="icon icon-xs icon-circle fa fa-twitter text-gray-lighter"
                                   href="{{setting('twitter')}}" target="_blank"></a></li>
                            <li><a class="icon icon-xs icon-circle fa fa-youtube text-gray-lighter"
                                   href="{{setting('youtube')}}" target="_blank"></a>
                            </li>
                            <li><a class="icon icon-xs icon-circle fa fa-instagram text-gray-lighter"
                                   href="{{setting('instagram')}}" target="_blank"></a></li>
                        </ul>
                        <div class="offset-top-60 offset-lg-top-85">
                            <hr class="divider hr-left-0 bg-bermuda">
                            <h5 class="offset-top-15">Phones</h5>
                            <div class="offset-top-20">
                                <!-- Unit-->
                                <div class="unit align-items-center flex-row unit-spacing-xxs">
                                    <div class="unit-left"><span class="icon icon-sm mdi mdi-phone text-primary"></span>
                                    </div>
                                    <div class="unit-body">
                                        <div class="d-inline-block">
                                            <p><a class="text-gray-light" href="tel:#">{{setting('phone')}}</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="offset-top-60 offset-lg-top-85">
                            <hr class="divider hr-left-0 bg-bermuda">
                            <h5 class="offset-top-15">E-mail</h5>
                            <div class="offset-top-20">
                                <!-- Unit-->
                                <div class="unit align-items-center flex-row unit-spacing-xxs">
                                    <div class="unit-left"><span
                                                class="icon icon-sm mdi mdi-email-outline text-primary"></span></div>
                                    <div class="unit-body">
                                        <p><a class="text-gray-light" href="mailto:#">{{setting('email')}}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="offset-top-60 offset-lg-top-85">
                            <hr class="divider hr-left-0 bg-bermuda">
                            <h5 class="offset-top-15">Address</h5>
                            <div class="offset-top-20 p">
                                <!-- Unit-->
                                <div
                                        class="unit align-items-center align-items-lg-start align-items-xxl-center flex-row unit-spacing-xxs">
                                    <div class="unit-left"><span
                                                class="icon icon-sm mdi mdi-map-marker text-primary"></span></div>
                                    <div class="unit-body"><a class="text-gray-light"
                                                              href="contacts.html">{{setting('address')}}</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <!-- Google Map-->
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3498.179931189816!2d85.31802212768372!3d27.712665226092003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6365f3d5b85d917e!2s1%20Durbar%20Mall!5e0!3m2!1sen!2snp!4v1599760323904!5m2!1sen!2snp"
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
        </section>
    </div>

@endsection

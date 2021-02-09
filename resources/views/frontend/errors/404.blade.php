@extends('frontend.layouts.app')
@section('content')
    <!-- Page Content-->
    <div class="page-content" style="background: url({{asset('assets/images/backgrounds/background-03-1920-1080.jpg')}}) center/cover no-repeat">
        <div class="one-page bg-shark-darker bg-lg-inverse-overlay-darker">
            <div class="section-relative">
                <div class="one-page-header"></div>
                <!-- 404-->
                <section style="min-height: 480px;">
                    <div class="container-wide">
                        <div class="row justify-content-center align-items-center section-bottom-60 section-top-60 section-cover no-gutters" style="width: 100%">
                            <div class="col-sm-12 col-md-8 col-xl-4 col-xxl-3">
                                <hr class="divider bg-bermuda">
                                <h5 class="text-white offset-top-20">Page not Found</h5>
                                <p class="offset-top-20 text-gray-lighter">The page requested couldn't be found - this could be due to a spelling error in the URL or a removed page.</p>
                                <div class="offset-top-20"><a class="btn btn-xs btn-primary" href="{{route('homepage')}}">back to home page</a></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

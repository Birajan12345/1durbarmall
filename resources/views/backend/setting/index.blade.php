@extends('backend.layouts.app')

@section('title', 'Setting')

@section('content')
    <section>
        {{ Form::open(['route'=>'setting.update','class'=>'form form-validate','method'=>'PUT','files'=>true,'novalidate']) }}
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-head">
                        <header>General Settings</header>
                        <div class="tools">
                            <input type="submit" class="btn btn-primary" value="Save All">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-head">
                                {{--<ul class="nav nav-tabs pull-right" data-toggle="tabs">--}}
                                    {{--<li class="active"><a href="#first2">EN</a></li>--}}
                                    {{--<li><a href="#second2">NP</a></li>--}}
                                {{--</ul>--}}
                                <header>General</header>
                            </div>
                            <div class="card-body tab-content">
                                <div class="tab-pane active" id="first2">
                                    <div class="form-group">
                                        {{ Form::text('setting[name]', old('setting.name') ?: setting('name'), ['class'=>'form-control','required']) }}
                                        {{ Form::label('setting[name]', 'Name') }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::textarea('setting[address]', old('setting.address') ?: setting('address'), ['class'=>'form-control','rows'=>2,'required']) }}
                                        {{ Form::label('setting[address]', 'Address') }}
                                    </div>
                                </div>
                                {{--<div class="tab-pane" id="second2">--}}
                                    {{--<div class="form-group">--}}
                                        {{--{{ Form::text('setting[name_np]', old('setting.name_np') ?: setting('name_np'), ['class'=>'form-control','required']) }}--}}
                                        {{--{{ Form::label('setting[name_np]', 'Name_NP') }}--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--{{ Form::textarea('setting[address_np]', old('setting.address_np') ?: setting('address_np'), ['class'=>'form-control','rows'=>2,'required']) }}--}}
                                        {{--{{ Form::label('setting[address_np]', 'Address_NP') }}--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                    {{--<div class="col-sm-12">--}}
                    {{--<div class="row">--}}
                    {{--<div class="col-sm-12">--}}
                    {{--<div class="card">--}}
                    {{--<div class="card-head">--}}
                    {{--<header>Logo</header>--}}
                    {{--</div>--}}
                    {{--<div class="card-body">--}}
                    {{--<label class="text-default-light">Featured Image(Optiional)</label>--}}
                    {{--@if(isset($news) && $news->image)--}}
                    {{--<input type="file" name="setting[image]" class="dropify"--}}
                    {{--data-default-file="{{ asset($news->image->path)}}"/>--}}
                    {{--@else--}}
                    {{--<input type="file" name="setting[image]" class="dropify"/>--}}
                    {{--@endif--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-head">
                                {{--<ul class="nav nav-tabs pull-right" data-toggle="tabs">--}}
                                    {{--<li class="active"><a href="#first3">EN</a></li>--}}
                                    {{--<li><a href="#second3">NP</a></li>--}}
                                {{--</ul>--}}
                                <header>Contacts</header>
                            </div>
                            <div class="card-body tab-content">
                                <div class="tab-pane active" id="first3">
                                    <div class="form-group">
                                        {{ Form::text('setting[phone]', old('setting.phone') ?: setting('phone'), ['class'=>'form-control','required']) }}
                                        {{ Form::label('setting[phone]', 'Phone') }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::text('setting[email]', old('setting.email') ?: setting('email'), ['class'=>'form-control','required']) }}
                                        {{ Form::label('setting[email]', 'email') }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::text('setting[time]', old('setting.time') ?: setting('time'), ['class'=>'form-control','required']) }}
                                        {{ Form::label('setting[time]', 'Time') }}
                                    </div>
                                </div>
                                {{--<div class="tab-pane" id="second3">--}}
                                    {{--<div class="form-group">--}}
                                        {{--{{ Form::text('setting[phone_np]', old('setting.phone_np') ?: setting('phone_np'), ['class'=>'form-control','required']) }}--}}
                                        {{--{{ Form::label('setting[phone_np]', 'Phone_NP') }}--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--{{ Form::text('setting[all branch phone_np]', old('setting.all branch phone_np') ?: setting('all branch phone_np'), ['class'=>'form-control','required']) }}--}}
                                        {{--{{ Form::label('setting[all branch phone_np]', 'All Branch Phone_np') }}--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--{{ Form::text('setting[email_np]', old('setting.email_np') ?: setting('email_np'), ['class'=>'form-control']) }}--}}
                                        {{--{{ Form::label('setting[email_np]', 'email_NP') }}--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--{{ Form::text('setting[alert message_np]', old('setting.alert message_np') ?: setting('alert message_np'), ['class'=>'form-control','required']) }}--}}
                                        {{--{{ Form::label('setting[alert message_np]', 'Alert Message_NP') }}--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-head">
                                <header>Social Links</header>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    {{ Form::textarea('setting[facebook]', old('setting.facebook') ?: setting('facebook'), ['class'=>'form-control','rows'=>2,'required']) }}
                                    {{ Form::label('setting[facebook]', 'Facebook') }}
                                </div>
                                <div class="form-group">
                                    {{ Form::textarea('setting[twitter]', old('setting.twitter') ?: setting('twitter'), ['class'=>'form-control','rows'=>2,'required']) }}
                                    {{ Form::label('setting[twitter]', 'Twitter') }}
                                </div>
                                <div class="form-group">
                                    {{ Form::textarea('setting[youtube]', old('setting.youtube') ?: setting('youtube'), ['class'=>'form-control','rows'=>2,'required']) }}
                                    {{ Form::label('setting[youtube]', 'Youtube') }}
                                </div>
                                <div class="form-group">
                                    {{ Form::textarea('setting[instagram]', old('setting.instagram') ?: setting('instagram'), ['class'=>'form-control','rows'=>2,'required']) }}
                                    {{ Form::label('setting[instagram]', 'Instagram') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </section>
@stop

@push('styles')
    <link href="{{ asset('css/libs/dropify/dropify.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('js/libs/dropify/dropify.min.js') }}"></script>
@endpush
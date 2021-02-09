@extends('backend.layouts.app')

@section('title', 'Floorinfos')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::model($floorinfos, ['route' =>['floorinfo.update', $floorinfos->slug],'class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            {{ method_field('PUT') }}
            @include('backend.floorinfo.partials.form', ['header' => 'Edit Floorinfo <span class="text-primary">('.Str::limit($floorinfos->title, 47).')</span>'])
            {{ Form::close() }}
        </div>
    </section>
@stop

@push('styles')
<link href="{{ asset('backend/css/libs/dropify/dropify.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('backend/js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/dropify/dropify.min.js') }}"></script>
@endpush

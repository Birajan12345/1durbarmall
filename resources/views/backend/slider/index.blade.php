@extends('backend.layouts.app')

@section('title', 'Home Slider')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::open(['route'=>'slider.update','class'=>'form form-validate','role'=>'form','files'=>true, 'novalidate'=>'novalidate']) }}
            {{ method_field('PUT') }}
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">Home Slides</header>
                    <div class="tools">
                        <a class="btn btn-primary ink-reaction" href="{{ route('slider.create') }}">
                            <i class="md md-add"></i>
                            Add
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="panel-group" id="accordion" data-sortable="true">

                        @forelse($slides as $slide)
                            <input type="hidden" name="slide_id[]" value="{{ $slide->id }}">
                            <div class="card panel" id="{{ $slide->id }}">
                                <div class="card-head style-default collapsed" data-toggle="collapse"
                                     data-parent="#accordion" data-target="#accordion-{{ $slide->id+1 }}">
                                    <header>
                                        @if(is_null($slide->image))
                                            <i class="md md-image md-lg"></i>
                                        @else
                                            <img src="{{asset( $slide->image->path)}}" class="img-circle width-1" alt="Slider Image"/>
                                        @endif
                                        {{ $slide->title, "Image ".( $slide->id+1) }}
                                    </header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle">
                                            <i class="md md-arrow-drop-down"></i>
                                        </a>
                                    </div>
                                </div>
                                <div id="accordion-{{  $slide->id+1 }}" class="collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <img id="slide--{{ $slide->id+1 }}" src="{{asset($slide->image->path)}}" class="img-responsive" alt="slide_image" width="300" height="300">
                                                </div>
                                                <div class="form-group text-center">
                                                    <div class="checkbox checkbox-styled">
                                                        <label>
                                                            {{ Form::checkbox("is_published[$slide->id]", 1, $slide->is_published, ['class' => 'form-control']) }}
                                                            <span>Publish</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            {{ Form::file("image[$slide->id]",['class'=>'file', 'data-id'=>$slide->id, 'accept' => 'image/*', 'data-msg' => 'Invalid!']) }}
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            {{ Form::text("title[$slide->id]", $slide->title, ['class'=>'form-control input-sm']) }}
                                                            {{ Form::label('Title') }}
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            {{ Form::text("caption[$slide->id]", $slide->caption, ['class'=>'form-control input-sm']) }}
                                                            {{ Form::label('Caption') }}
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            {{ Form::text("link_url[$slide->id]", $slide->link_url, ['class'=>'form-control input-sm']) }}
                                                            {{ Form::label('Link URL') }}
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            {{ Form::text("link_caption[$slide->id]", $slide->link_caption, ['class'=>'form-control input-sm']) }}
                                                            {{ Form::label('Link Caption') }}
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button type="button" data-url="{{ route('slider.destroy', $slide->id) }}"
                                                                class="fa fa-trash btn btn-danger btn-primary btn-xs slider-delete">
                                                            Delete
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="alert alert-callout alert-warning alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <p class="text-capitalize">no slides available</p>
                            </div>
                        @endforelse
                    </div>
                </div>
                <div class="card-actionbar">
                    <div class="card-actionbar-row">
                        <a href="{{route('slider.index')}}" class="btn btn-flat btn-default ink-reaction" type="reset">
                            Cancel
                        </a>
                        <button class="btn btn-primary ink-reaction" type="submit">Save</button>
                    </div>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </section>
@stop

@push('styles')
    <style type="text/css">
        #accordion .card-head {
            cursor: n-resize;
        }
    </style>
@endpush

@push('scripts')
    <script src="{{ asset('backend/js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript">
        function readURL(input) {
            var imgId = $(input).data("id");
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    var $image = $("#slide--" + imgId);
                    if ($image.closest("form").valid()) {
                        $image.attr("src", e.target.result);
                    }
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function () {
            $(".file").change(function () {
                readURL(this);
            });
        });
    </script>
@endpush

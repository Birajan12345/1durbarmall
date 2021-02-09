<div class="row">
    <div class="col-md-12">
        @include('partials.errors')
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-head">
                <div class="tools">
                    <a class="btn btn-default btn-ink" href="{{ route('food.index') }}">
                        <i class="md md-arrow-back"></i>
                        Back
                    </a>
                </div>
                <header>{!! $header !!}</header>
                <div class="tools visible-xs">
                    <a class="btn btn-default btn-ink" onclick="history.go(-1);return false;">
                        <i class="md md-arrow-back"></i>
                        Back
                    </a>
                    <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">
                    <input type="submit" name="publish" class="btn btn-primary ink-reaction" value="Publish">
                </div>
            </div>
            <div class="card-body tab-content">
                <div class="tab-pane active">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::text('title',old('title'),['class'=>'form-control', 'required']) }}
                                {{ Form::label('title','Title*') }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::textarea('meta_description',old('meta_description'),['class'=>'form-control', 'rows'=>2]) }}
                                {{ Form::label('meta_description','Meta Description (Optional)') }}
                                <p class="help-block">For Search Engine Optimization</p>
                            </div>
                        </div>
                    </div>
                    {{--                        <div class="col-sm-12">--}}
                    {{--                            <div class="form-group">--}}
                    {{--                                {{ Form::textarea('floor_info',old('floor_info'),['class'=>'form-control', 'rows'=>2]) }}--}}
                    {{--                                {{ Form::label('floor_info','Floor Info') }}--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="text-default-light">Which floor do you want to publish this document</label>
                            {{ Form::select('floor_info_id', $floors) }}
                        </div>

                        <div class="col-sm-6">
                            <label class="text-default-light">What type of shop is this</label>
                            {{ Form::select('type',['Asian Cuisine'=>'Asian Cuisine','Italian Food'=>'Italian Food',
                                                    'Mexican Food'=>'Mexican Food',]) }}
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            {{ Form::textarea('phone',old('phone'),['class'=>'form-control', 'rows'=>2]) }}
                            {{ Form::label('phone','Phone') }}
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            {{ Form::textarea('email',old('email'),['class'=>'form-control', 'rows'=>2]) }}
                            {{ Form::label('email','Email') }}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            {{ Form::textarea('link',old('link'),['class'=>'form-control', 'rows'=>2]) }}
                            {{ Form::label('link','Link') }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::textarea('content',old('content'),['required', 'id' => 'my-ckeditor','class' => 'my-ckeditor']) }}
                                <p class="help-block">Content*</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        {{ Form::checkbox('is_featured',1, isset($foods) ? $foods->is_featured ? 'checked'  :'':'')}}
                        {{ Form::label('is_featured','Feature in Homepage') }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label class="text-default-light">Restaurant's logo image(Dimension: 225 X 225)</label>
                        @if(isset($foods) && $foods->image)
                            <input type="file" name="image" class="dropify"
                                   data-default-file="{{ asset($foods->image->path)}}"/>
                        @else
                            <input type="file" name="image" class="dropify"/>
                        @endif
                    </div>
                </div>
                <div class="card card-affix affix-4">
                    <div class="card-actionbar">
                        <div class="card-actionbar-row">
                            <button type="reset" class="btn btn-default ink-reaction">Reset</button>
                            <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">
                            <input type="submit" name="publish" class="btn btn-primary ink-reaction"
                                   value="{{ isset($foods) && $foods->is_published ? 'Save' : 'Publish' }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--@push('scripts')--}}
{{--<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>--}}
{{--<script>--}}
{{--CKEDITOR.replace('my-ckeditor');--}}
{{--CKEDITOR.replace('my-ckeditor2');--}}
{{--</script>--}}
{{--@endpush--}}
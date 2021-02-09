<div class="row">
    <div class="col-md-12">
        @include('partials.errors')
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-head">
                <div class="tools">
                    <a class="btn btn-default btn-ink" href="{{ route('event.index') }}">
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
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::textarea('content',old('content'),['required', 'id' => 'my-ckeditor','class' => 'my-ckeditor']) }}
                                <p class="help-block">Content*</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="input-group" id="demo-date">
                                    <div class="input-group-content">
                                        <input type="text" name="date" class="form-control datetime"
                                               value="{{ old('date', isset($event->date) ? $event->date : '') }}">
                                        <label>Enter Date</label>
                                    </div>
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        {{ Form::checkbox('is_featured',1, isset($event) ? $event->is_featured ? 'checked'  :'':'')}}
                        {{ Form::label('is_featured','Feature in Homepage') }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label class="text-default-light">Featured Image(Optiional)</label>
                        @if(isset($event) && $event->image)
                            <input type="file" name="image" class="dropify"
                                   data-default-file="{{ asset($event->image->path)}}"/>
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
                                   value="{{ isset($event) && $event->is_published ? 'Save' : 'Publish' }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


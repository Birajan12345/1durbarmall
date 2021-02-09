<div class="row">
    <div class="col-md-12">
    <!-- @include('partials.errors') -->
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-head">
                <div class="tools">
                    <a class="btn btn-default btn-ink" href="{{ route('gallery.index') }}">
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
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::text('name',old('name'),['class'=>'form-control', 'required']) }}
                            {{ Form::label('name','Name*') }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::text('meta_description',old('meta_description'),['class'=>'form-control']) }}
                            {{ Form::label('meta_description','meta_description*') }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label class="text-default-light">Where do you want to publish this document</label>
                        {{ Form::select('view',['Ads'=>'Ads','Popup'=>'Popup','Cover'=>'Cover']) }}
                    </div>

                    <div class="col-sm-6">
                        <label class="text-default-light">Which type do you choose for this document</label>
                        {{ Form::select('type',['Clothing'=>'Clothing','Food'=>'Food','Other'=>'Other']) }}
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <label class="text-default-light">Featured Image(Cover: 282 x 188, Ads: 197 x 197, popups: )</label>
                        @if(isset($gallery) && $gallery->image)
                            <input type="file" name="image" class="dropify"
                                   data-default-file="{{ asset($gallery->image->path)}}"/>
                        @else
                            <input type="file" name="image" class="dropify"/>
                        @endif
                    </div>
                </div>

            </div>
            <div class="card-actionbar">
                <div class="card card-affix affix-4">
                    <div class="card-actionbar">
                        <div class="card-actionbar-row">
                            <button type="reset" class="btn btn-default ink-reaction">Reset</button>
                            <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">
                            <input type="submit" name="publish" class="btn btn-primary ink-reaction" value="{{ isset($gallery) && $gallery->is_published ? 'Save' : 'Publish' }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

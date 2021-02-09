<div class="row">
    <div class="col-md-12">
        @include('partials.errors')
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-head">
                <div class="tools">
                    <a class="btn btn-default btn-ink" href="{{ route('page.index') }}">
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

                    {{--                <input class="hidden" value="{{$pages}}">--}}
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

                    {{--<div class="row">--}}
                    {{--{{ Form::checkbox('is_featured',1, isset($page) ? $page->is_featured ? 'checked'  :'':'')}}--}}
                    {{--{{ Form::label('is_featured','Feature in Homepage') }}--}}
                    {{--</div>--}}

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::text('url', old('url'), ['class' => 'form-control', 'placeholder' => '(enter your URL here..)']) }}
                                {{ Form::label('url','Video/Audio URL') }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="text-default-light">Featured Image(Dimension: 570 X 380)</label>
                            @if(isset($page) && $page->image)
                                <input type="file" name="image" class="dropify" id="input-file-events"
                                       data-default-file="{{ asset($page->image->path)}}"/>

                            @else
                                <input type="file" name="image" class="dropify"/>
                            @endif
                            <input type="hidden" name="removeimage" id="removeimage" value=""/>
                        </div>
                    </div>
                    <div class="card card-affix affix-4">
                        <input name="view" type="hidden">
                        <div class="card-actionbar">
                            <div class="card-actionbar-row">
                                <button type="reset" class="btn btn-default ink-reaction">Reset</button>
                                <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">
                                <input type="submit" name="publish" class="btn btn-primary ink-reaction" value="Publish">
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

@push('scripts')
    {{--<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>--}}
    {{--<script>--}}
    {{--CKEDITOR.replace( 'my-ckeditor', {--}}
    {{--height: 300,// Configure your file manager integration. This example uses CKFinder 3 for PHP.--}}
    {{--filebrowserBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html',--}}
    {{--filebrowserImageBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html?type=Images',--}}
    {{--filebrowserUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files',--}}
    {{--filebrowserImageUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Images'--}}
    {{--} );--}}

    {{--CKEDITOR.replace( 'my-ckeditor2', {--}}
    {{--height: 300,// Configure your file manager integration. This example uses CKFinder 3 for PHP.--}}
    {{--filebrowserBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html',--}}
    {{--filebrowserImageBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html?type=Images',--}}
    {{--filebrowserUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files',--}}
    {{--filebrowserImageUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Images'--}}
    {{--} );--}}
    {{--</script>--}}

    <script>
        $(document).ready(function(){
            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element){
                // return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element){
                $('input[name=removeimage]').val(1);
            });
        });
    </script>


@endpush

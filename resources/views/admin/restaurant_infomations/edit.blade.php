@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.restaurant-infomation.title')</h3>
    
    {!! Form::model($restaurant_infomation, ['method' => 'PUT', 'route' => ['admin.restaurant_infomations.update', $restaurant_infomation->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('restaurant_name', trans('quickadmin.restaurant-infomation.fields.restaurant-name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('restaurant_name', old('restaurant_name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('restaurant_name'))
                        <p class="help-block">
                            {{ $errors->first('restaurant_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('restaurant_description', trans('quickadmin.restaurant-infomation.fields.restaurant-description').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('restaurant_description', old('restaurant_description'), ['class' => 'form-control editor', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('restaurant_description'))
                        <p class="help-block">
                            {{ $errors->first('restaurant_description') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
    <script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
    <script>
        $('.editor').each(function () {
                  CKEDITOR.replace($(this).attr('id'),{
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
            });
        });
    </script>

@stop
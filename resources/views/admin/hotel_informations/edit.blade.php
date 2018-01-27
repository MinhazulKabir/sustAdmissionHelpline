@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.hotel-information.title')</h3>
    
    {!! Form::model($hotel_information, ['method' => 'PUT', 'route' => ['admin.hotel_informations.update', $hotel_information->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('hotel_name', trans('quickadmin.hotel-information.fields.hotel-name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('hotel_name', old('hotel_name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('hotel_name'))
                        <p class="help-block">
                            {{ $errors->first('hotel_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('hotel_description', trans('quickadmin.hotel-information.fields.hotel-description').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('hotel_description', old('hotel_description'), ['class' => 'form-control editor', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('hotel_description'))
                        <p class="help-block">
                            {{ $errors->first('hotel_description') }}
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
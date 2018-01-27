@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.transportation.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.transportations.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cost', trans('quickadmin.transportation.fields.cost').'', ['class' => 'control-label']) !!}
                    {!! Form::text('cost', old('cost'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cost'))
                        <p class="help-block">
                            {{ $errors->first('cost') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('source', trans('quickadmin.transportation.fields.source').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('source', old('source'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('source'))
                        <p class="help-block">
                            {{ $errors->first('source') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('middle_point', trans('quickadmin.transportation.fields.middle-point').'', ['class' => 'control-label']) !!}
                    {!! Form::text('middle_point', old('middle_point'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('middle_point'))
                        <p class="help-block">
                            {{ $errors->first('middle_point') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('destination', trans('quickadmin.transportation.fields.destination').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('destination', old('destination'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('destination'))
                        <p class="help-block">
                            {{ $errors->first('destination') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop


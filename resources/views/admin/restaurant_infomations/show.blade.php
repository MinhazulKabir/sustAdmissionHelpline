@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.restaurant-infomation.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.restaurant-infomation.fields.restaurant-name')</th>
                            <td field-key='restaurant_name'>{{ $restaurant_infomation->restaurant_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.restaurant-infomation.fields.restaurant-description')</th>
                            <td field-key='restaurant_description'>{!! $restaurant_infomation->restaurant_description !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.restaurant_infomations.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop

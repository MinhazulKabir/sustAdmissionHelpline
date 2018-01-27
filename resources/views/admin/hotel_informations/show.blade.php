@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.hotel-information.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.hotel-information.fields.hotel-name')</th>
                            <td field-key='hotel_name'>{{ $hotel_information->hotel_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.hotel-information.fields.hotel-description')</th>
                            <td field-key='hotel_description'>{!! $hotel_information->hotel_description !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.hotel_informations.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop

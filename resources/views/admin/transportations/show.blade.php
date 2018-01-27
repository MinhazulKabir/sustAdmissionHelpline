@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.transportation.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.transportation.fields.cost')</th>
                            <td field-key='cost'>{{ $transportation->cost }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.transportation.fields.source')</th>
                            <td field-key='source'>{{ $transportation->source }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.transportation.fields.middle-point')</th>
                            <td field-key='middle_point'>{{ $transportation->middle_point }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.transportation.fields.destination')</th>
                            <td field-key='destination'>{{ $transportation->destination }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.transportations.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop

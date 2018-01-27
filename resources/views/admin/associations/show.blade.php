@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.association.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.association.fields.association-name')</th>
                            <td field-key='association_name'>{{ $association->association_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.association.fields.association-short-description')</th>
                            <td field-key='association_short_description'>{!! $association->association_short_description !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.associations.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop

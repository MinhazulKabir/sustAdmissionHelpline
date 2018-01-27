@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.emergency-information.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.emergency-information.fields.emergency-info-admission')</th>
                            <td field-key='emergency_info_admission'>{!! $emergency_information->emergency_info_admission !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.emergency_informations.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop

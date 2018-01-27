@extends('layouts.home')
@section('main')
    <div class="col-lg-12 bg association">
        <div class="text-right">
            {{Form::open(['route'=>'association.index', 'method'=>'GET', 'class'=>'class_name' ])}}
            {{Form::text('search_association')}}
            {{Form::submit('Search')}}
            {{Form::close()}}
        </div>
		<div style="background:#eee;border:1px solid #ccc;padding:5px 10px; text-align:center"><span style="font-size:25px "><span style="font-family:trebuchet\ ms,helvetica,sans-serif ">All Associations:</span></span></div>
        @foreach($association as $associationInfo)
            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h4 class="mark">{{ $associationInfo->association_name }}</h4>
                        <p>{!!  $associationInfo->association_short_description !!}</p>
                    </div>

                </div>
            </div>
        @endforeach
        <div class="text-center">
            {{$association->render()}}
        </div>
    </div>

@endsection
@extends('layouts.home')
@section('main')
    <div class="col-lg-12 hotel">
        <div class="text-right">
            {{Form::open(['route'=>'hotelInfo.index', 'method'=>'GET', 'class'=>'class_name' ])}}
            {{Form::text('search_hotel')}}
            {{Form::submit('Search')}}
            {{Form::close()}}
        </div>		
		<div style="background:#eee;border:1px solid #ccc;padding:5px 10px; text-align:center"><span style="font-size:25px "><span style="font-family:trebuchet\ ms,helvetica,sans-serif ">Hotel Informations:</span></span></div>
        
        @foreach($hotelinfo as $hotel)
            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h4 class="mark">{{ $hotel->hotel_name }}</h4>
                        <p>{!!  $hotel->hotel_description !!}</p>
                    </div>

                </div>
            </div>
        @endforeach
        <div class="text-center">
            {{$hotelinfo->render()}}
        </div>
    </div>

@endsection
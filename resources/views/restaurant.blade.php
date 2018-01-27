@extends('layouts.home')
@section('main')
	<div class="col-lg-12 restaurant">
        <div class="text-right">
            {{Form::open(['route'=>'restaurantInfo.index', 'method'=>'GET', 'class'=>'class_name' ])}}
            {{Form::text('search_restaurant')}}
            {{Form::submit('Search')}}
            {{Form::close()}}
        </div>
		<div style="background:#eee;border:1px solid #ccc;padding:5px 10px; text-align:center"><span style="font-size:25px "><span style="font-family:trebuchet\ ms,helvetica,sans-serif ">Restaurant Informations:</span></span></div>        
        @foreach($restaurantInfo as $restaurant)
            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h4 class="mark">{{ $restaurant->restaurant_name }}</h4>
                        <p>{!!  $restaurant->restaurant_description !!}</p>
                    </div>

                </div>
            </div>
        @endforeach
        <div class="text-center">
            {{$restaurantInfo->render()}}
        </div>
    </div>

@endsection
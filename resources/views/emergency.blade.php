@extends('layouts.home')
@section('main')
    <div class="col-lg-12 emergency">
		<div style="background:#eee;border:1px solid #ccc;padding:5px 10px; text-align:center"><span style="font-size:25px "><span style="font-family:trebuchet\ ms,helvetica,sans-serif ">Emergency Informations:</span></span></div>        
        @foreach($emergency as $urgent)
            {!!  $urgent->emergency_info_admission !!}
        @endforeach
    </div>

@endsection
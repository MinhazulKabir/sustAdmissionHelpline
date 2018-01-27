<?php

namespace App\Http\Controllers;

use App\HotelInformation;
use Illuminate\Http\Request;

class HotelInfoController extends Controller
{
    public function index(Request $request)
    {
        $hotelinfo =HotelInformation::orderBy('id', 'asc');
        $search_hotel=$request->input('search_hotel');
        if(!empty($search_hotel))
        {
            $hotelinfo->where('hotel_name','LIKE','%'.$search_hotel.'%');
        }
        $hotelinfo=$hotelinfo->paginate(12);

        return view('hotel', compact('hotelinfo'));
    }
}

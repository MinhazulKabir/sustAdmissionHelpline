<?php

namespace App\Http\Controllers;

use App\RestaurantInfomation;
use Illuminate\Http\Request;

class RestaurantInfoController extends Controller
{
	 public function index(Request $request)
    {
		$restaurantInfo =RestaurantInfomation::orderBy('id', 'asc');
        $search_restaurant=$request->input('search_restaurant');
        if(!empty($search_restaurant))
        {
            $restaurantInfo->where('restaurant_name','LIKE','%'.$search_restaurant.'%');
        }
        $restaurantInfo=$restaurantInfo->paginate(12);

        return view('restaurant', compact('restaurantInfo'));
    }
}

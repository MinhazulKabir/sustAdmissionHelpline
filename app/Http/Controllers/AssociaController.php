<?php

namespace App\Http\Controllers;

use App\Association;
use Illuminate\Http\Request;

class AssociaController extends Controller
{
    public function index(Request $request)
    {
        $association =Association::orderBy('id', 'asc');
        $search_association=$request->input('search_association');
        if(!empty($search_association))
        {
            $association->where('association_name','LIKE','%'.$search_association.'%');
        }
        $association=$association->paginate(12);

        return view('associations', compact('association'));
    }
}

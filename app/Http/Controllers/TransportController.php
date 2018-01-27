<?php

namespace App\Http\Controllers;

use App\Transportation;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function index(Request $request)
    {
        $transport =Transportation::orderBy('id', 'asc')->get();

        return view('transportations', compact('transport'));
    }
}

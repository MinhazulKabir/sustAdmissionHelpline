<?php

namespace App\Http\Controllers;

use App\EmergencyInformation;
use Illuminate\Http\Request;

class EmergencyInfoController extends Controller
{
    public function index(Request $request)
    {
        $emergency =EmergencyInformation::orderBy('id', 'asc')->get();

        return view('emergency', compact('emergency'));
    }
}

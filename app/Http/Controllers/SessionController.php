<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    // Save nationality to session
    public function saveNationality(Request $request)
    {
        $nationality = $request->input('nationality');
        Session::put('nationality', $nationality);
        return response()->json(['success' => true]);
    }

    // Save visaType to session
    public function saveVisaType(Request $request)
    {
        $visaType = $request->input('visaType');
        Session::put('visaType', $visaType);
        return response()->json(['success' => true]);
    }
}

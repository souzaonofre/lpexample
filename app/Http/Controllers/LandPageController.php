<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandPageController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->session()->has('visitante')) {
            $visitante = $request->session()->pull('visitante');
        } else {
            $visitante = null;
        }
        //
        return view('landpage.index', ['visitante' => $visitante]);
    }
    //

}

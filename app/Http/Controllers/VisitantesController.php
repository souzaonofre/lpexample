<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;

class VisitantesController extends Controller
{
    //
    //
    public function index()
    {
        //
    }
    //
    public function store(Request $request)
    {
        $validator = $this->makeValidator($request);
        //
        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        } else {

        }
        //
    }

    //
    public function show()
    {
        //
    }



}

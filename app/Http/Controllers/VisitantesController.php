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


    //
    //
    protected function makeValidator($request) {
       //
       $messages = [
            'required' => 'O campo está vazio, favor digitar os dados necessários!',
            'email' => 'Favor digitar um email válido!',
            'unique' => 'Informação duplicada, este valor digitado já existe no sistema!',
            'date' => 'Data invalida!',
        ];
        //
        $rules = [
            'nome' => 'required|unique:visitantes.nome|min:5|max:200',
            'email' => 'required|email|unique:visitantes.email',
            'celular' => 'required|alpha_num|min:9|max:18',
            'data_nascimento' => 'required|date',
            'cep' => 'required|min:8|max:11'
        ];
        //
        return Validator::make($request->all(), $rules, $messages);
        //
    }

}

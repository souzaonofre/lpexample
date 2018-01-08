<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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

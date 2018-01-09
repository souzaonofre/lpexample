<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

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
        //

        $validator = $this->makeValidator($request);
        //
        if ($validator->fails()) {
            //
            if ($request->visitante) $request->session()->put('visitante', $request->visitante);
            //
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
            //
        } else {
            //
            $request->session()->forget('visitante');
            $request->session()->flush();
            //
            $visitante = Visitante::create($request->all());
            //
            if ($visitante) {
                return redirect('/')->with('success', 'Dados enviados com sucesso!');
            } else {
                return redirect('/')->with('fail', 'Falha de sistema, favor tentar novamente!');
            }
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
            //
            'nome.required' => 'O campo "Nome" está vazio, favor preencher!',
            'email.required' => 'O campo "Email" está vazio, favor preencher!',
            'celular.required' => 'O campo "Celular" está vazio, favor preencher!',
            'data_nascimento.required' => 'O campo "Data Nasc." está vazio, favor preencher!',
            'cep.required' => 'O campo "CEP" está vazio, favor preencher!',
            'endereco.required' => 'O campo "Endereço" está vazio, favor preencher!',
            'bairro.required' => 'O campo "Bairro" está vazio, favor preencher!',
            'cidade.required' => 'O campo "Cidade" está vazio, favor preencher!',
            'uf.required' => 'O campo "Sigla Estado" está vazio, favor preencher!',
            //
            'nome.unique' => 'Informação duplicada, este "Nome" já existe no sistema!',
            'email.unique' => 'Informação duplicada, este "Email" já existe no sistema!',
            //
            'email' => 'Favor digitar um email válido!',
            'date' => 'Data invalida no campo "Data Nascimento"!',
        ];
        //
        $rules = [
            'nome' => 'required|unique:visitantes|min:5|max:200',
            'email' => 'required|email|unique:visitantes',
            'celular' => 'required|alpha_num|min:9|max:18',
            'data_nascimento' => 'required|date',
            'cep' => 'required|min:8|max:11',
            'endereco' => 'required|min:5|max:200',
            'bairro' => 'required|min:5|max:80',
            'cidade' => 'required|min:5|max:80',
            'uf' => 'required|min:2|max:2'
        ];
        //
        return Validator::make($request->all(), $rules, $messages);
        //
    }


}

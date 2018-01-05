<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    //
    protected $table = 'visitantes';
    public $timestamps = true;
    //
    // Date casting & convert
    protected $dates = ['data_nascimento'];
    //
    // Fields can be mass assignable.
    protected $fillable = [
        'nome',
        'email',
        'celular',
        'data_nascimento',
        'cep',
        'endereco',
        'bairro',
        'cidade',
        'uf'
    ];
    //

}

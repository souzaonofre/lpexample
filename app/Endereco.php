<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    //
    protected $table = 'enderecos';
    public $timestamps = true;
    //
    // Fields can be mass assignable.
    protected $fillable = [
        'cep',
        'endereco',
        'bairro',
        'cidade',
        'uf'
    ];
    //

}

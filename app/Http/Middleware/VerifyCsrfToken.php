<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [ 'posto' , 'mostrartodos', 'mostrar_id', 'criar_registro' , 'deletar_registro', 'atualizar_registro'
    //  
  
        //
    ];
   /* protected $except = [ 'posto_id'];*/
}

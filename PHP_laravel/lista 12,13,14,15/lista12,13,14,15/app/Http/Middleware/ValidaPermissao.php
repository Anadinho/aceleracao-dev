<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidaPermissao
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //verificando sessao
    
        if(!session()->has('usuario')):
            return redirect()->route('documentos.listar')->with('error', "Sessao nao existente/ não tem permisao");
        endif;

        return $next($request);
    }
}

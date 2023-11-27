<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $roles): Response
    {

        
        try{// Vérifie si l'utilisateur est connecté
             // vérifie les rôles
             $userRole = explode(',', auth()->user()->role);
             foreach($roles as $role){
                if(in_array($role, $userRole)){
                    return $next($request);
                }
             }
        }catch(\Throwable $e){ // Sinon redirige vers une pages avec erreurs
            Log::debug($e);
            return redirect()->route('users.index')->withErrors(['Vous n\'avez pas accès à cette page']);
        }
        


        
    }
}

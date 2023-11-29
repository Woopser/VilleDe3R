<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        
        if (Session::get('matricule') == Null)
        {
            return redirect()->route('users.index')->withErrors(['Accès interdit']);
        }
        // Vérifier si l'utilisateur courant a un des rôles autorisés
        foreach ($roles as $role) // pour chaque role rentrer dedans le middleware il va
        {
            Log::debug("dedans le foreach");
            if ($role == Session::get('role')); // regarder si l'employe est un de ceux ci
            {
                return $next($request); // si oui il retourne la request qu'il doit faire
            }
        }
            // Sinon, rediriger vers une page d'erreur
           return redirect()->route('users.index')->withErrors(['Vous n\'avez pas l\'accès a cette page']);
        
    }
}

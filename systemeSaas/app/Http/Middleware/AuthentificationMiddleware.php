<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthentificationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth('administrateur')->check()) {

            //recuperer l'administrateur connecter
            $administrateur = auth('administrateur')->user();
    
            // Envoyer les informations de un administrateur au contrôleur via la demande
            $request->attributes->add(['authenticated_administrateur' => $administrateur]);

            return $next($request);

        }else {
                
            // Redirection vers la route connexion
            return redirect()->route('connexion');
        }
    }
}

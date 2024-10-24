<?php

namespace App\Http\Controllers\GestionController\BasiqueController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PageConnexionController extends Controller
{
    //
    
    public function index(): RedirectResponse|View
    {   
        return view('basiques.connexion');
    }
}

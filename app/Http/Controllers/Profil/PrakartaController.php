<?php

namespace App\Http\Controllers\Profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrakartaController extends Controller
{
     public function index()
    {
        return view('pages.profil.prakarta.index');
    }
}

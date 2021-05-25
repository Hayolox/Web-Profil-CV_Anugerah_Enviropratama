<?php

namespace App\Http\Controllers\Profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
     public function index()
    {
        return view('pages.profil.proyek.index');
    }
}

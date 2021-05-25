<?php

namespace App\Http\Controllers\Profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        return view('pages.profil.struktur.index');
    }
}

<?php

namespace App\Http\Controllers\Profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Ukl_UplController extends Controller
{
    public function index()
    {
        return view('pages.PengalamanKerja.ukl_upl.index');
    }
}

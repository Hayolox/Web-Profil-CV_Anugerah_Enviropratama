<?php

namespace App\Http\Controllers\Profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PertambanganEmasController extends Controller
{
    public function index()
    {
        return view('pages.PengalamanKerja.PertambanganEmas.index');
    }
}

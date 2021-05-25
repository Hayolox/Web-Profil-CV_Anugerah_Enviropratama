<?php

namespace App\Http\Controllers\Profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DelhController extends Controller
{
     public function index()
    {
        return view('pages.PengalamanKerja.delh.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class SingleBeritaController extends Controller
{
     public function index($slug)
    {
        $new = News::where('slug', $slug)->firstOrFail();
        return view('pages.single_berita', compact('new'));
    }
}

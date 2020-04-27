<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MataPelajaran;

class ElementController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        $mata_pelajaran = MataPelajaran::all();
         return view('layouts/elements/index', ['mata_pelajaran' => $mata_pelajaran]);
    }
}

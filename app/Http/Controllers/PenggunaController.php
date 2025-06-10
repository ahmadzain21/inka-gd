<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index() {
        return view('admin.pages.pengguna.index');
    }

    public function create() {
        return view('admin.pages.pengguna.create');
    }
}

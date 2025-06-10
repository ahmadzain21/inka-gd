<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    public function index(Request $request) {
        return view('admin.pages.pengaturan.index', [
            'user' => $request->user(),
        ]);
    }
}

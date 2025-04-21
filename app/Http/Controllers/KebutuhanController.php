<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class KebutuhanController extends Controller
{
    function index() {
        return view('admin.pages.kebutuhan.index');
    }

    function create() {
        return view('admin.pages.kebutuhan.create');
    }

    function updateBixie() {
        $materials = Material::paginate(10);

        //dd($materials);

        return view('admin.pages.kebutuhan.create', compact(['materials']));
    }

    function updateKatalor() {
        return view('admin.pages.kebutuhan.create');
    }

    function update(Request $request) {
        $request->validate([
            'jumlah' => 'required'
        ]);

        $material = Material::findOrFail($request->id);
    }
}

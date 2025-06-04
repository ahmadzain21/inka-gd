<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use App\Models\History;
use Illuminate\Support\Facades\Auth;

class KedatanganController extends Controller
{
    function index() {
        return view('admin.pages.kedatangan.index');
    }

    function create($vendor) {
        $materials = Material::all();

        return view('admin.pages.kedatangan.update', compact(['vendor', 'materials']));
    }

    function update(Request $request) {
        $request->validate([
            'jumlah' => 'required'
        ]);

        $material = Material::findOrFail($request->id);

        if($request->vendor == 'bixie') {
            $material->kedatangan_bixie += $request->jumlah;
        } else {
            $material->kedatangan_katalor += $request->jumlah;
        }

        //dd($material);

        $material->save();

        History::create([
            'action' => Auth::user()->name.' mengupdate data pada material ' . $material->edt_material_komponen . ' dengan kode ' . $material->kode_material . ' pada ' .now()
        ]);

        return response()->json(['message' => 'Berhasil menambahkan jumlah pada material' . $material->nama_material]);
    }
}

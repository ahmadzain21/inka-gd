<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use App\Models\History;
use App\Models\MaterialItem;
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
            'jumlah' => 'required',
            'heat_number' => 'required'
        ]);

        $material = Material::findOrFail($request->id);
        $materialItem = new MaterialItem();

        if($request->vendor == 'bixie') {
            $material->kedatangan_bixie += $request->jumlah;
        } else {
            $material->kedatangan_katalor += $request->jumlah;
        }

        $materialItem->vendor = $request->vendor;
        $materialItem->jumlah = $request->jumlah;
        $materialItem->heat_number = $request->heat_number;
        $materialItem->material_id = $request->id;

        //dd($material);
        $materialItem->save();
        $material->save();

        History::create([
            'action' => Auth::user()->name.' menambahkan barang pada material ' . $material->edt_material_komponen . ' dengan kode ' . $material->kode_material . ' pada ' .now(),
            'user_id' => Auth::user()->id,
            'tanggal' => now()->format('Y-m-d')
        ]);

        return response()->json(['message' => 'Berhasil menambahkan jumlah pada material ' . $material->nama_material]);
    }
}

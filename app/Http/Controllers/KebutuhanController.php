<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KebutuhanController extends Controller
{
    function index(Request $request) {
        $query = Material::query();
        $dataName = ['1_qty_kebutuhan_1', '2_qty_kebutuhan_90','3_qty_kebutuhan_90','4_qty_kebutuhan_100','5_qty_kebutuhan_100','6_qty_kebutuhan_100','7_qty_kebutuhan_100','8_qty_kebutuhan_90','9_qty_kebutuhan_100','10_qty_kebutuhan_100','11_qty_kebutuhan_100','12_qty_kebutuhan_100','13_qty_kebutuhan_55'];

        if ($request->has('search') && $request->search != '') {
            $query->where('nama_material', 'like', '%' . $request->search . '%')
                  ->orWhere('kode_material', 'like', '%' . $request->search . '%');
        }
    
        $datas = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.pages.kebutuhan.index', compact(['datas', 'dataName']));
    }

    function create($vendor) {
        $materials = Material::all();

        return view('admin.pages.kedatangan.create', compact(['vendor', 'materials']));
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

        //dd($materia);

        $material->save();

        History::create([
            'action' => Auth::user()->name.' mengupdate data pada material ' . $material->edt_material_komponen . ' dengan kode ' . $material->kode_material . ' pada ' .now()
        ]);

        return redirect()->route('kedatangan.index');
    }
}

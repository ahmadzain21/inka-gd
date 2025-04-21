<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    function search(Request $request) {
        if ($request->ajax()) {
            $materials = Material::where('kode_material', 'LIKE', '%'.$request->search.'%')->get();
        
            return response()->json(['output' => $materials]);
        }

        $search = $request->q;

    $materials = Material::where('kode_material', 'like', "%$search%")
        ->get();

    return response()->json($materials);
    }

    function detail($id) {
        $material = Material::findOrFail($id);

        return response()->json([
            'material' => $material
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\KebutuhanStoreRequest;
use Illuminate\Http\Request;
use App\Http\Requests\MaterialStoreRequest;
use App\Http\Requests\MaterialUpdateRequest;
use App\Models\Kebutuhan;
use App\Models\Material;

class MaterialController extends Controller
{

    public function index(Request $request) {

        $query = Material::query();

    // Cek apakah ada input pencarian
    if ($request->has('search') && $request->search != '') {
        $query->where('nama_material', 'like', '%' . $request->search . '%')
              ->orWhere('kode_material', 'like', '%' . $request->search . '%')
              ->orWhere('edt_material_komponen', 'like', '%' . $request->search . '%');
    }

    $datas = $query->orderBy('created_at', 'desc')->paginate(10);

    return view('admin.pages.material.index', [
        'datas' => $datas,
        'search' => $request->search,
    ]);
    }

    public function create()
    {
        $edt_material_list = Material::select('edt_material_komponen')->distinct()->get();
        $keterangan_list = Material::select('keterangan')->distinct()->get();
        //dd($edt_material_list);
        return view('admin.pages.material.create', ['edt_material_list' => $edt_material_list, 'keterangan_list' => $keterangan_list]);
    }

    public function store(Request $request, MaterialStoreRequest $materialRequest, KebutuhanStoreRequest $kebutuhanRequest) {

        $materialData = $materialRequest->validated();
        $kebutuhanData = $kebutuhanRequest->validated();

        
        if ($request->image) {
            $materialData['image'] = $request->file('image')->store('material-image');
        }
        
        //dd($materialData, $kebutuhanData, $request);

        Kebutuhan::create($kebutuhanData);

        $materialData['kebutuhan_id'] = Kebutuhan::latest()->first()->id;

        Material::create($materialData);

        return redirect()->route('materialgd.index')->with('success','Berhasil menambahkan data material');

    }

    public function show(string $id) {
        $data = Material::find($id);

        $qtyTotal = $data->kedatangan_bixie + $data->kedatangan_katalor + $data->kedatangan_madiun;
        $dataName = ['1_qty_kebutuhan_1', '2_qty_kebutuhan_90','3_qty_kebutuhan_90','4_qty_kebutuhan_100','5_qty_kebutuhan_100','6_qty_kebutuhan_100','7_qty_kebutuhan_100','8_qty_kebutuhan_90','9_qty_kebutuhan_100','10_qty_kebutuhan_100','11_qty_kebutuhan_100','12_qty_kebutuhan_100','13_qty_kebutuhan_55'];
        $dataValueA = [0]; 
        $dataValueB = [];

        for($i = 1; $i < count($dataName); $i++) {
            $qtyTotal -= $data->kebutuhan->{$dataName[$i]};
            if ($qtyTotal >= 0) {
                array_push($dataValueA, 0);
            } else {
                array_push($dataValueA, $qtyTotal);
            }
        }

        for($i = 0; $i < count($dataName); $i++) {
            array_push($dataValueB, $data->kebutuhan->{$dataName[$i]});
        }

        return view('admin.pages.material.show', ['data' => $data, 'dataName' => $dataName, 'dataValueA' => $dataValueA, 'dataValueB' => $dataValueB]);
    }

    public function edit(string $id) {
        $material = Material::find($id);
        $edt_material_list = Material::select('edt_material_komponen')->distinct()->get();
        $keterangan_list = Material::select('keterangan')->distinct()->get();

        return view('admin.pages.material.edit', ['material' => $material, 'keterangan_list' => $keterangan_list, 'edt_material_list' => $edt_material_list]);
    }

    public function update(Request $request, MaterialUpdateRequest $materialRequest, KebutuhanStoreRequest $kebutuhanRequest, string $id) {
        $material = Material::find($id);
        $kebutuhan = Kebutuhan::find($material->kebutuhan_id);

        if ($request->kode_material !== $material->kode_material) {
            return back()->withErrors(['kode_material' => 'Kode material tidak boleh diubah.']);
        }

        $materialData = $materialRequest->validated();
        $kebutuhanData = $kebutuhanRequest->validated();

        $material->update($materialData);
        $kebutuhan->update($kebutuhanData);

        //dd($materialData);
        return redirect()->route('materialgd.index')->with('success','Berhasil memperbarui data material');
    }
}

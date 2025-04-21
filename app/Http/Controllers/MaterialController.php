<?php

namespace App\Http\Controllers;

use App\Http\Requests\KebutuhanStoreRequest;
use Illuminate\Http\Request;
use App\Http\Requests\MaterialStoreRequest;
use App\Models\Kebutuhan;
use App\Models\Material;

class MaterialController extends Controller
{

    public function index() {

        $datas = Material::paginate(10);

        return view('admin.pages.material.index', ['datas' => $datas]);
    }

    public function create()
    {
        return view('admin.pages.material.create');
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

        return redirect()->route('material.index');

    }

    public function show(string $id) {
        $data = Material::find($id);
        //dd($data->kebutuhan->{'1_qty_kebutuhan_1'});

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

        //dd($dataValue);

        return view('admin.pages.material.show', ['data' => $data, 'dataName' => $dataName, 'dataValueA' => $dataValueA, 'dataValueB' => $dataValueB]);
    }

    public function edit(string $id) {

    }

    public function update(Request $request, string $id) {

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Material;
use App\Models\Kebutuhan;
use Illuminate\Support\Facades\Http;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::get('https://sheetdb.io/api/v1/tn09rl43aqvo5'); // ganti dengan URL-mu
        $materials = $response->json();

        foreach ($materials as $item) {

            $kebutuhan = Kebutuhan::where('kode_material', $item['KODE MATERIAL'])->first();

            Material::create([
                'edt_material_komponen' => $item['EDT_MATERIAL KOMPONEN'],  
                'kode_material' => $item['KODE MATERIAL'],
                'kode_material_stock' => $item['KODE MATERIAL STOCK'],
                'no_part' => $item['NO PART'],
                'nama_material' => $item['MATERIAL/KOMPONEN'],
                'spesifikasi' => $item['SPESIFIKASI'],
                'dimensi' => $item['DIMENSI'],
                'keterangan' => $item['KETERANGAN '],
                'kedatangan_bixie' => $item['KEDATANGAN BIXIE'],
                'kedatangan_madiun' => $item['KEDATANGAN MADIUN'],
                'kedatangan_katalor' => $item['KEDATANGAN KATALOR'],
                'stock' => $item['STOCK '],
                'qty/ts' => is_numeric($item['QTY/TS']) ? $item['QTY/TS'] : 0,
                'kebutuhan_id' => $kebutuhan->id,  
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kebutuhan;
use Illuminate\Support\Facades\Http;

class KebutuhanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::get('https://sheetdb.io/api/v1/tn09rl43aqvo5'); // ganti dengan URL-mu
        $materials = $response->json();

        foreach ($materials as $item) {
            Kebutuhan::create([
                '1_qty_kebutuhan_1' => is_numeric($item['1 QTY KEBUTUHAN_1']) ? $item['1 QTY KEBUTUHAN_1'] : 0,
                '2_qty_kebutuhan_90' => $item['2 QTY KEBUTUHAN_90'],
                '3_qty_kebutuhan_90' => $item['3 QTY KEBUTUHAN_90'],
                '4_qty_kebutuhan_100' => $item['4 QTY KEBUTUHAN_100'],
                '5_qty_kebutuhan_100' => $item['5 QTY KEBUTUHAN_100'],
                '6_qty_kebutuhan_100' => $item['6 QTY KEBUTUHAN_100'],
                '7_qty_kebutuhan_100' => $item['7 QTY KEBUTUHAN_100'],
                '8_qty_kebutuhan_90' => $item['8 QTY KEBUTUHAN_90'],
                '9_qty_kebutuhan_100' => $item['9 QTY KEBUTUHAN_100'],
                '10_qty_kebutuhan_100' => $item['10 QTY KEBUTUHAN_100'],
                '11_qty_kebutuhan_100' => $item['11 QTY KEBUTUHAN_100'],
                '12_qty_kebutuhan_100' => $item['12 QTY KEBUTUHAN_100'],
                '13_qty_kebutuhan_55' => $item['13 QTY KEBUTUHAN_55'],
                'kode_material' => $item['KODE MATERIAL']
            ]);
        }
    }
}

@extends('admin.master')

@section('content')

<div class="p-6">
    <div class="pb-3 border-b-2 border-solid border-red-500 font-semibold text-xl mb-4 ">
        <h2>Tambah Material Piece Part</h2>
    </div>
    <div class="bg-white shadow-md rounded p-5">
        <form action="{{ route('material.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="flex flex-wrap gap-4 mb-[50px]">
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium" for="image">Upload Gambar</label>
                    <input class="border-solid border border-slate-300 rounded outline-none flex-[70%] max-w-[70%] py-2 px-3 text-sm" type="file" name="image">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium" for="kategori">Kategori</label>
                    <input class="border-solid border border-slate-300 rounded outline-none flex-[70%] max-w-[70%] py-2 px-3 text-sm" type="text" name="kategori">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium" for="kode_material">Kode Material</label>
                    <input class="border-solid border border-slate-300 rounded outline-none flex-[70%] max-w-[70%] py-2 px-3 text-sm" type="text" name="kode_material">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium" for="no_qr">No QR</label>
                    <input class="border-solid border border-slate-300 rounded outline-none flex-[70%] max-w-[70%] py-2 px-3 text-sm" type="text" name="no_qr">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium" for="nama_material">Nama Material</label>
                    <input class="border-solid border border-slate-300 rounded outline-none flex-[70%] max-w-[70%] py-2 px-3 text-sm" type="text" name="nama_material">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium" for="spesifikasi">Spesifikasi</label>
                    <input class="border-solid border border-slate-300 rounded outline-none flex-[70%] max-w-[70%] py-2 px-3 text-sm" type="text" name="spesifikasi">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium" for="jumlah">Jumlah</label>
                    <input class="border-solid border border-slate-300 rounded outline-none flex-[70%] max-w-[70%] py-2 px-3 text-sm" type="number" name="jumlah">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium" for="vendor">Vendor</label>
                    <input class="border-solid border border-slate-300 rounded outline-none flex-[70%] max-w-[70%] py-2 px-3 text-sm" type="text" name="vendor">
                </div>

            </div>
            <div class="flex gap-4 flex-wrap">
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="1_qty_kebutuhan_1">1 qty kebutuhan 1</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="text" name="1_qty_kebutuhan_1">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="2_qty_kebutuhan_90">2 qty kebutuhan 90</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="2_qty_kebutuhan_90">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="3_qty_kebutuhan_90">3 qty kebutuhan 90</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="3_qty_kebutuhan_90">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="4_qty_kebutuhan_100">4 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="4_qty_kebutuhan_100">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="5_qty_kebutuhan_100">5 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="5_qty_kebutuhan_100">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="6_qty_kebutuhan_100">6 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="6_qty_kebutuhan_100">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="7_qty_kebutuhan_100">7 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="7_qty_kebutuhan_100">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="8_qty_kebutuhan_90">8 qty kebutuhan 90</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="8_qty_kebutuhan_90">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="9_qty_kebutuhan_100">9 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="9_qty_kebutuhan_100">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="10_qty_kebutuhan_100">10 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="10_qty_kebutuhan_100">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="11_qty_kebutuhan_100">11 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="11_qty_kebutuhan_100">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="12_qty_kebutuhan_100">12 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="12_qty_kebutuhan_100">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="13_qty_kebutuhan_55">13 qty kebutuhan 55</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="13_qty_kebutuhan_55">
                </div>
            </div>
            <div class="flex justify-between items-center flex-row-reverse">
                <button type="submit">
                    Simpan
                </button>
                <a href="">
                    Batal
                </a>
            </div>
            
        </form>
    </div>
</div>
    
@endsection
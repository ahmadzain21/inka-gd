@extends('admin.master')

@section('page_title')
    Edit Material {{ $material->nama_material }}
@endsection

@section('content')

<div class="p-6">
    <div class="pb-3 border-b-2 border-solid border-red-500 font-semibold text-xl mb-4 ">
        <h2>Edit Material {{ $material->nama_material }}</h2>
    </div>
    <div class="bg-white shadow-md rounded p-5">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{ route('materialgd.update', $material->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="flex flex-wrap gap-4 mb-[50px]">
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium" for="edt_material_komponen">Edt Material Komponen</label>
                    <input list="edt_material_komponen_list" class="border-solid border border-slate-300 rounded outline-none flex-[70%] max-w-[70%] py-2 px-3 text-sm" type="text" name="edt_material_komponen" value="{{ $material->edt_material_komponen }}">
                    <datalist id="edt_material_komponen_list">
                        @foreach ($edt_material_list as $list)
                            <option value="{{ $list->edt_material_komponen }}"></option>
                        @endforeach
                    </datalist>
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium" for="kode_material">Kode Material</label>
                    <input class="border-solid border border-slate-300 rounded outline-none flex-[70%] max-w-[70%] py-2 px-3 text-sm" type="text" name="kode_material" value="{{ $material->kode_material }}">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium" for="kode_material_stock">Kode Material Stock</label>
                    <input class="border-solid border border-slate-300 rounded outline-none flex-[70%] max-w-[70%] py-2 px-3 text-sm" type="text" name="kode_material_stock" value="{{ $material->kode_material_stock }}">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium" for="no_part">No Part</label>
                    <input class="border-solid border border-slate-300 rounded outline-none flex-[70%] max-w-[70%] py-2 px-3 text-sm" type="text" name="no_part" value="{{ $material->no_part }}">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium" for="nama_material">Nama Material</label>
                    <input class="border-solid border border-slate-300 rounded outline-none flex-[70%] max-w-[70%] py-2 px-3 text-sm" type="text" name="nama_material" value="{{ $material->nama_material }}">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium" for="spesifikasi">Spesifikasi</label>
                    <input class="border-solid border border-slate-300 rounded outline-none flex-[70%] max-w-[70%] py-2 px-3 text-sm" type="text" name="spesifikasi" value="{{ $material->spesifikasi }}">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium" for="dimensi">Dimensi</label>
                    <input class="border-solid border border-slate-300 rounded outline-none flex-[70%] max-w-[70%] py-2 px-3 text-sm" type="text" name="dimensi" value="{{ $material->dimensi }}">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium" for="keterangan">Keterangan</label>
                    <input list="keterangan_list" class="border-solid border border-slate-300 rounded outline-none flex-[70%] max-w-[70%] py-2 px-3 text-sm" type="text" name="keterangan" value="{{ $material->keterangan }}">
                    <datalist id="keterangan_list">
                        @foreach ($keterangan_list as $list)
                            <option value="{{ $list->keterangan }}"></option>
                        @endforeach
                    </datalist>
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium" for="qty_ts">Qty/Train Set</label>
                    <input class="border-solid border border-slate-300 rounded outline-none flex-[70%] max-w-[70%] py-2 px-3 text-sm" type="number" name="qty_ts" value="{{ $material->qty_ts }}">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium" for="stock">Stock</label>
                    <input class="border-solid border border-slate-300 rounded outline-none flex-[70%] max-w-[70%] py-2 px-3 text-sm" type="number" name="stock" value="{{ $material->stock }}">
                </div>
            </div>
            <div class="flex flex-wrap gap-4 mb-[50px]">
                <div class="flex-[calc(33.333%_-_((16px_*_2)_/_3))] max-w-[calc(33.333%_-_((16px_*_2)_/_3))] inline-flex items-center flex-wrap gap-2">
                    <label class="flex-full max-w-full text-sm font-medium" for="kedatangan_katalor">Kedatangan Katalor</label>
                    <input class="border-solid border border-slate-300 rounded outline-none w-full max-w-full py-2 px-3 text-sm" type="number" min="0" name="kedatangan_katalor" value="{{ $material->kedatangan_katalor }}">
                </div>
                <div class="flex-[calc(33.333%_-_((16px_*_2)_/_3))] max-w-[calc(33.333%_-_((16px_*_2)_/_3))] inline-flex items-center flex-wrap gap-2">
                    <label class="flex-full max-w-full text-sm font-medium" for="kedatangan_katalor">Kedatangan Bixie</label>
                    <input class="border-solid border border-slate-300 rounded outline-none w-full max-w-full py-2 px-3 text-sm" type="number" min="0" name="kedatangan_bixie" value="{{ $material->kedatangan_bixie }}">
                </div>
                <div class="flex-[calc(33.333%_-_((16px_*_2)_/_3))] max-w-[calc(33.333%_-_((16px_*_2)_/_3))] inline-flex items-center flex-wrap gap-2">
                    <label class="flex-full max-w-full text-sm font-medium" for="kedatangan_katalor">Kedatangan Madiun</label>
                    <input class="border-solid border border-slate-300 rounded outline-none w-full max-w-full py-2 px-3 text-sm" type="number" min="0" name="kedatangan_madiun" value="{{ $material->kedatangan_madiun }}">
                </div>
            </div>
            <div class="flex gap-4 flex-wrap mb-[30px]">
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="1_qty_kebutuhan_1">1 qty kebutuhan 1</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="text" name="1_qty_kebutuhan_1" value="{{ $material->kebutuhan->{'1_qty_kebutuhan_1'} }}">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="2_qty_kebutuhan_90">2 qty kebutuhan 90</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="2_qty_kebutuhan_90" value="{{ $material->kebutuhan->{'2_qty_kebutuhan_90'} }}">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="3_qty_kebutuhan_90">3 qty kebutuhan 90</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="3_qty_kebutuhan_90" value="{{ $material->kebutuhan->{'3_qty_kebutuhan_90'} }}">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="4_qty_kebutuhan_100">4 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="4_qty_kebutuhan_100" value="{{ $material->kebutuhan->{'4_qty_kebutuhan_100'} }}">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="5_qty_kebutuhan_100">5 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="5_qty_kebutuhan_100" value="{{ $material->kebutuhan->{'5_qty_kebutuhan_100'} }}">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="6_qty_kebutuhan_100">6 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="6_qty_kebutuhan_100" value="{{ $material->kebutuhan->{'6_qty_kebutuhan_100'} }}">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="7_qty_kebutuhan_100">7 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="7_qty_kebutuhan_100" value="{{ $material->kebutuhan->{'7_qty_kebutuhan_100'} }}">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="8_qty_kebutuhan_90">8 qty kebutuhan 90</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="8_qty_kebutuhan_90" value="{{ $material->kebutuhan->{'8_qty_kebutuhan_90'} }}">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="9_qty_kebutuhan_100">9 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="9_qty_kebutuhan_100" value="{{ $material->kebutuhan->{'9_qty_kebutuhan_100'} }}">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="10_qty_kebutuhan_100">10 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="10_qty_kebutuhan_100" value="{{ $material->kebutuhan->{'10_qty_kebutuhan_100'} }}">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="11_qty_kebutuhan_100">11 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="11_qty_kebutuhan_100" value="{{ $material->kebutuhan->{'11_qty_kebutuhan_100'} }}">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="12_qty_kebutuhan_100">12 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="12_qty_kebutuhan_100" value="{{ $material->kebutuhan->{'12_qty_kebutuhan_100'} }}">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="13_qty_kebutuhan_55">13 qty kebutuhan 55</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="13_qty_kebutuhan_55" value="{{ $material->kebutuhan->{'13_qty_kebutuhan_55'} }}">
                </div>
            </div>
            <div class="flex justify-between items-center flex-row-reverse">
                <button type="submit" class="px-3 py-2 rounded bg-blue-500 text-white font-semibold">
                    Simpan
                </button>
                <a href="{{ route('materialgd.index') }}" class="px-3 py-2 rounded bg-red-600 text-white font-semibold">
                    Batal
                </a>
            </div>
            
        </form>
    </div>
</div>
    
@endsection
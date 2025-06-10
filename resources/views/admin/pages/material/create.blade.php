@extends('admin.master')

@section('page_title')
    Tambah Material
@endsection

@section('content')

<div class="p-6">
    <div class="pb-3 border-b-2 border-solid border-red-500 font-semibold text-xl mb-4 ">
        <h2>Tambah Material Piece Part</h2>
    </div>
    <div class="bg-white shadow-md rounded p-5">
        <form action="{{ route('materialgd.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="flex flex-wrap gap-4 mb-[50px]">
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-start max-[680px]:flex-[100%] max-[680px]:max-w-full max-[480px]:flex-wrap max-[480px]:gap-2.5">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium max-[480px]:flex-[100%] max-[480px]:max-w-full" for="edt_material_komponen">Edt Material Komponen</label>
                    <div class="flex-[70%] max-w-[70%] max-[480px]:flex-[100%] max-[480px]:max-w-full">
                        <input list="edt_material_komponen_list" class="border-solid border rounded outline-none py-2 px-3 text-sm w-full mb-1 @error('edt_material_komponen')
                            border-red-500
                            @else
                            border-slate-300
                        @enderror" type="text" name="edt_material_komponen">
                        <datalist id="edt_material_komponen_list">
                            @foreach ($edt_material_list as $list)
                                <option value="{{ $list->edt_material_komponen }}"></option>
                            @endforeach
                        </datalist>
                        @error('edt_material_komponen')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror

                    </div>
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center max-[680px]:flex-[100%] max-[680px]:max-w-full max-[480px]:flex-wrap max-[480px]:gap-2.5">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium max-[480px]:flex-[100%] max-[480px]:max-w-full" for="kode_material">Kode Material</label>
                    <div class="max-[480px]:flex-[100%] max-[480px]:max-w-full flex-[70%] max-w-[70%]">
                        <input class="border-solid border rounded outline-none py-2 px-3 text-sm w-full @error('kode_material')
                            border-red-500
                            @else
                            border-slate-300
                        @enderror mb-1" type="text" name="kode_material">
                        @error('kode_material')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center max-[680px]:flex-[100%] max-[680px]:max-w-full max-[480px]:flex-wrap max-[480px]:gap-2.5">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium max-[480px]:flex-[100%] max-[480px]:max-w-full" for="kode_material_stock">Kode Material Stock</label>
                    <div class="flex-[70%] max-w-[70%] max-[480px]:flex-[100%] max-[480px]:max-w-full">
                        <input class="border-solid border @error('kode_material_stock')
                                border-red-500
                                @else
                                border-slate-300
                            @enderror rounded outline-none py-2 px-3 text-sm w-full mb-1" type="text" name="kode_material_stock">
                            @error('kode_material_stock')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                    </div>
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center max-[680px]:flex-[100%] max-[680px]:max-w-full max-[480px]:flex-wrap max-[480px]:gap-2.5">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium max-[480px]:flex-[100%] max-[480px]:max-w-full" for="no_part">No Part</label>
                    <div class="flex-[70%] max-w-[70%] max-[480px]:flex-[100%] max-[480px]:max-w-full">
                        <input class="border-solid border @error('no_part')
                                    border-red-500
                                    @else
                                    border-slate-300
                                @enderror rounded outline-none py-2 px-3 text-sm w-full" type="text" name="no_part">
                        @error('no_part')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror

                    </div>
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center max-[680px]:flex-[100%] max-[680px]:max-w-full max-[480px]:flex-wrap max-[480px]:gap-2.5">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium max-[480px]:flex-[100%] max-[480px]:max-w-full" for="nama_material">Nama Material</label>
                    <div class="flex-[70%] max-w-[70%] max-[480px]:flex-[100%] max-[480px]:max-w-full">
                        <input class="border-solid border @error('nama_material')
                                    border-red-500
                                    @else
                                    border-slate-300
                                @enderror rounded outline-none py-2 px-3 text-sm w-full mb-1" type="text" name="nama_material">
                        @error('nama_material')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror

                    </div>
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center max-[680px]:flex-[100%] max-[680px]:max-w-full max-[480px]:flex-wrap max-[480px]:gap-2.5">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium max-[480px]:flex-[100%] max-[480px]:max-w-full" for="spesifikasi">Spesifikasi</label>
                    <div class="max-[480px]:flex-[100%] max-[480px]:max-w-full flex-[70%] max-w-[70%]">
                        <input class="border-solid border @error('spesifikasi')
                                    border-red-500
                                    @else
                                    border-slate-300
                                @enderror rounded outline-none py-2 px-3 text-sm mb-1 w-full" type="text" name="spesifikasi">
                        @error('spesifikasi')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror

                    </div>
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center max-[680px]:flex-[100%] max-[680px]:max-w-full max-[480px]:flex-wrap max-[480px]:gap-2.5">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium max-[480px]:flex-[100%] max-[480px]:max-w-full" for="dimensi">Dimensi</label>
                    <div class="max-[480px]:flex-[100%] max-[480px]:max-w-full flex-[70%] max-w-[70%]">
                        <input class="border-solid border @error('dimensi')
                                        border-red-500
                                        @else
                                        border-slate-300
                                    @enderror rounded outline-none py-2 px-3 text-sm mb-1 w-full" type="text" name="dimensi">
                        @error('dimensi')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror

                    </div>
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center max-[680px]:flex-[100%] max-[680px]:max-w-full max-[480px]:flex-wrap max-[480px]:gap-2.5">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium max-[480px]:flex-[100%] max-[480px]:max-w-full" for="keterangan">Keterangan</label>
                    <div class="flex-[70%] max-w-[70%] max-[480px]:flex-[100%] max-[480px]:max-w-full">
                        <input list="keterangan_list" class="border-solid border @error('keterangan')
                                            border-red-500
                                            @else
                                            border-slate-300
                                        @enderror rounded outline-none py-2 px-3 text-sm w-full mb-1" type="text" name="keterangan">
                        <datalist id="keterangan_list">
                            @foreach ($keterangan_list as $list)
                                <option value="{{ $list->keterangan }}"></option>
                            @endforeach
                        </datalist>
                        @error('keterangan')
                                <p class="text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                    </div>
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center max-[680px]:flex-[100%] max-[680px]:max-w-full max-[480px]:flex-wrap max-[480px]:gap-2.5">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium max-[480px]:flex-[100%] max-[480px]:max-w-full" for="qty_ts">Qty/Train Set</label>
                    <div class="flex-[70%] max-w-[70%] max-[480px]:flex-[100%] max-[480px]:max-w-full">
                        <input class="border-solid border @error('qty_ts')
                                                border-red-500
                                                @else
                                                border-slate-300
                                            @enderror rounded outline-none py-2 px-3 text-sm mb-1 w-full" type="number" name="qty_ts">
                        @error('qty_ts')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror

                    </div>
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex items-center max-[680px]:flex-[100%] max-[680px]:max-w-full max-[480px]:flex-wrap max-[480px]:gap-2.5">
                    <label class="flex-[30%] max-w-[30%] text-sm font-medium max-[480px]:flex-[100%] max-[480px]:max-w-full" for="stock">Stock</label>
                    <div class="flex-[70%] max-w-[70%] max-[480px]:flex-[100%] max-[480px]:max-w-full">
                        <input class="border-solid border @error('stock')
                                                border-red-500
                                                @else
                                                border-slate-300
                                            @enderror rounded outline-none py-2 px-3 text-sm mb-1 w-full" type="number" name="stock">
                        @error('stock')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap gap-4 mb-[50px]">
                <div class="flex-[calc(33.333%_-_((16px_*_2)_/_3))] max-w-[calc(33.333%_-_((16px_*_2)_/_3))] inline-flex items-center flex-wrap gap-2">
                    <label class="flex-full max-w-full text-sm font-medium" for="kedatangan_katalor">Kedatangan Katalor</label>
                    <input class="border-solid border @error('kedatangan_katalor')
                                                border-red-500
                                                @else
                                                border-slate-300
                                            @enderror rounded outline-none w-full max-w-full py-2 px-3 text-sm mb-1" type="number" value="0" min="0" name="kedatangan_katalor">
                    @error('kedatangan_katalor')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex-[calc(33.333%_-_((16px_*_2)_/_3))] max-w-[calc(33.333%_-_((16px_*_2)_/_3))] inline-flex items-center flex-wrap gap-2">
                    <label class="flex-full max-w-full text-sm font-medium" for="kedatangan_katalor">Kedatangan Bixie</label>
                    <input class="border-solid border @error('kedatangan_bixie')
                                                border-red-500
                                                @else
                                                border-slate-300
                                            @enderror rounded outline-none w-full max-w-full py-2 px-3 text-sm mb-1" type="number" value="0" min="0" name="kedatangan_bixie">
                    @error('kedatangan_bixie')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex-[calc(33.333%_-_((16px_*_2)_/_3))] max-w-[calc(33.333%_-_((16px_*_2)_/_3))] inline-flex items-center flex-wrap gap-2">
                    <label class="flex-full max-w-full text-sm font-medium" for="kedatangan_katalor">Kedatangan Madiun</label>
                    <input class="border-solid border @error('kedatangan_madiun')
                                                border-red-500
                                                @else
                                                border-slate-300
                                            @enderror rounded outline-none w-full max-w-full py-2 px-3 text-sm mb-1" type="number" value="0" min="0" name="kedatangan_madiun">
                    @error('kedatangan_madiun')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex gap-4 flex-wrap mb-[30px]">
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="1_qty_kebutuhan_1">1 qty kebutuhan 1</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="text" name="1_qty_kebutuhan_1" value="0">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="2_qty_kebutuhan_90">2 qty kebutuhan 90</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="2_qty_kebutuhan_90" value="0">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="3_qty_kebutuhan_90">3 qty kebutuhan 90</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="3_qty_kebutuhan_90" value="0">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="4_qty_kebutuhan_100">4 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="4_qty_kebutuhan_100" value="0">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="5_qty_kebutuhan_100">5 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="5_qty_kebutuhan_100" value="0">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="6_qty_kebutuhan_100">6 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="6_qty_kebutuhan_100" value="0">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="7_qty_kebutuhan_100">7 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="7_qty_kebutuhan_100" value="0">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="8_qty_kebutuhan_90">8 qty kebutuhan 90</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="8_qty_kebutuhan_90" value="0">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="9_qty_kebutuhan_100">9 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="9_qty_kebutuhan_100" value="0">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="10_qty_kebutuhan_100">10 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="10_qty_kebutuhan_100" value="0">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="11_qty_kebutuhan_100">11 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="11_qty_kebutuhan_100" value="0">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="12_qty_kebutuhan_100">12 qty kebutuhan 100</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="12_qty_kebutuhan_100" value="0">
                </div>
                <div class="flex-[calc(50%_-_(16px_/_2))] max-w-[calc(50%_-_(16px_/_2))] inline-flex flex-col">
                    <label class="text-sm font-medium block mb-2" for="13_qty_kebutuhan_55">13 qty kebutuhan 55</label>
                    <input class="border-solid border border-slate-300 rounded outline-none text-sm py-2 px-3" type="number" name="13_qty_kebutuhan_55" value="0">
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
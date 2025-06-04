@extends('admin.master')

@section('page_title')
    Kedatangan {{ $vendor }}
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection

@section('content')
<div class="min-h-[100vh] p-[10%] text-center max-[1000px]:px-[5%]">
    <h1 class="text-5xl font-bold mb-[7%] max-[1000px]:text-3xl">Tambah Stok {{$vendor}}</h1>
    <div class="flex gap-[30px] justify-center bg-white shadow-md rounded-md p-5 flex-col">
        <form action="">
            <div class="inline-flex flex-col gap-2.5 w-full">
                <label for="material-select" class="font-semibold block text-base">Pilih Material</label>
                <select class="js-example-basic-multiple" name="state[]" id="material-select">
                    <option selected hidden disabled>--- Pilih Material ---</option>
                    @foreach ($materials as $material)
                        <option value="{{ $material->id }}">{{ $material->kode_material . ' - ' . $material->edt_material_komponen . ' - ' . $material->nama_material }}</option>
                    @endforeach
                </select>
            </div>
            <div></div>
        </form>
        <div id="output-data" class="hidden">
            <div class="border border-solid border-slate-300 rounded mb-5 max-[640px]:text-xs">
                <div class="flex justify-between p-2 border-b border-solid border-slate-300"><b>EDT MATERIAL KOMPONEN</b><span id="detail-edt-material-komponen"></span></div>
                <div class="flex justify-between p-2 border-b border-solid border-slate-300"><b>KODE MATERIAL</b><span id="detail-kode-material"></span></div>
                <div class="flex justify-between p-2 border-b border-solid border-slate-300"><b>KODE MATERIAL STOCK</b><span id="detail-kode-material-stock"></span></div>
                <div class="flex justify-between p-2 border-b border-solid border-slate-300"><b>NO PART</b><span id="detail-no-part"></span></div>
                <div class="flex justify-between p-2 border-b border-solid border-slate-300"><b>MATERIAL/KOMPONEN</b><span id="detail-material-komponen"></span></div>
                <div class="flex justify-between p-2 border-b border-solid border-slate-300"><b>DIMENSI</b><span id="detail-dimensi"></span></div>
                <div class="flex justify-between p-2 border-b border-solid border-slate-300"><b>KETERANGAN</b><span id="detail-keterangan"></span></div>
                <div class="flex justify-between p-2 border-b border-solid border-slate-300"><b>QTY/TS</b><span id="detail-qty-ts"></span></div>
            </div>
            <form id="update-form" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <input type="hidden" name="id" id="id_material" value="">
                <input type="hidden" name="vendor" id="vendor" value="{{ $vendor }}">
                <div class="flex flex-col gap-2.5 mb-2.5">
                    <label class="font-semibold" for="jumlah">Masukkan Jumlah Barang</label>
                    <input type="number" name="jumlah" id="jumlah" class="rounded border-solid border border-slate-300">
                </div>
                <button id="submit-btn" class="bg-blue-500 text-white rounded py-2 block border-none outline-none cursor-pointer w-full hover:bg-blue-700" type="button">Submit</button>
            </form>
        </div>
        <div id="loading" class="hidden">Loading...</div>
        <a id="detail-btn" class="hidden inline-flex items-center gap-1 bg-sky-600 text-white rounded py-2 px-4 mx-auto hover:bg-red-900"><svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
            <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
          </svg> <span class="text-white font-medium">Lihat Detail Material</span></a>
        <a class="bg-red-600 text-white rounded py-2 inline-block w-[100px] mx-auto hover:bg-red-900" href="{{ route('kedatangan.index') }}">Kembali</a>
        <div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#submit-btn').on('click', function () {
        let formData = $('#update-form').serialize();

        $('#loading').removeClass('hidden');

        $.ajax({
            url: "{{ route('kedatangan.update') }}",
            method: "POST",
            data: formData,
            success: async function (response) {
                await alert(response.message); // Atau pakai SweetAlert
                $('#loading').addClass('hidden');
                $('#detail-btn').removeClass('hidden');
            },
            error: async function (xhr) {
                await alert("Terjadi kesalahan. Pastikan semua data diisi.");
                $('#loading').addClass('hidden');
            }
        });
    });

    $('.js-example-basic-multiple').select2();

    $('#material-select').on('select2:select', function(e) {
        let id = e.params.data.id;

        $('#loading').removeClass('hidden');

        $('#output-data').hasClass('hidden') ? '' : $('#output-data').addClass('hidden');


        $.ajax({
            url: `/material/${id}/detail`,
            type: 'GET',
            success: function(data) {
                $('#id_material').val(data.material.id);
                $('#detail-edt-material-komponen').text(data.material.edt_material_komponen);
                $('#detail-kode-material').text(data.material.kode_material);
                $('#detail-kode-material-stock').text(data.alamat);
                $('#detail-no-part').text(data.material.no_part);
                $('#detail-material-komponen').text(data.material.nama_material)
                $('#detail-dimensi').text(data.material.dimensi);
                $('#detail-keterangan').text(data.material.keterangan);
                $('#detail-qty-ts').text(data.material['qty/ts']);
                $('#detail-btn').attr('href',`/materialgd/${id}`);
            },
            error: function() {
                alert('Gagal mengambil detail user');
            }
        });

        setTimeout(() => {
            $('#loading').addClass('hidden');
            $('#output-data').removeClass('hidden');
        }, 2000);
    });
});
</script>
@endsection
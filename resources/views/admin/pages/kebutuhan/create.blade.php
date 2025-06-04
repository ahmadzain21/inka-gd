<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body class="bg-blue-500 p-[10%] text-center">
    <div class="">
        <h1 class="text-5xl font-bold mb-[7%] text-white">Tambah Stok {{$vendor}}</h1>
        <div class="flex gap-[30px] justify-center bg-white shadow-md rounded-md p-5 flex-col">
            <form action="">
                <div class="inline-flex flex-col gap-2.5">
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
                <div class="border border-solid border-slate-300 rounded mb-5">
                    <div class="flex justify-between p-2 border-b border-solid border-slate-300"><b>EDT MATERIAL KOMPONEN</b><span id="detail-edt-material-komponen"></span></div>
                    <div class="flex justify-between p-2 border-b border-solid border-slate-300"><b>KODE MATERIAL</b><span id="detail-kode-material"></span></div>
                    <div class="flex justify-between p-2 border-b border-solid border-slate-300"><b>KODE MATERIAL STOCK</b><span id="detail-kode-material-stock"></span></div>
                    <div class="flex justify-between p-2 border-b border-solid border-slate-300"><b>NO PART</b><span id="detail-no-part"></span></div>
                    <div class="flex justify-between p-2 border-b border-solid border-slate-300"><b>MATERIAL/KOMPONEN</b><span id="detail-material-komponen"></span></div>
                    <div class="flex justify-between p-2 border-b border-solid border-slate-300"><b>DIMENSI</b><span id="detail-dimensi"></span></div>
                    <div class="flex justify-between p-2 border-b border-solid border-slate-300"><b>KETERANGAN</b><span id="detail-keterangan"></span></div>
                    <div class="flex justify-between p-2 border-b border-solid border-slate-300"><b>QTY/TS</b><span id="detail-qty-ts"></span></div>
                </div>
                <form action="{{ route('kebutuhan.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="id" id="id_material" value="">
                    <input type="hidden" name="vendor" id="vendor" value="{{ $vendor }}">
                    <div>
                        <label for="jumlah">Masukkan Jumlah Barang</label>
                        <input type="number" name="jumlah" id="jumlah">
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
            <div id="loading" class="hidden">Loading...</div>
            <div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();

    $('#material-select').on('select2:select', function (e) {
        let id = e.params.data.id;

        $('#loading').removeClass('hidden');

        $('#output-data').hasClass('hidden') ? '' : $('#output-data').addClass('hidden');
        

        $.ajax({
            url: `/material/${id}/detail`,
            type: 'GET',
            success: function (data) {
                $('#id_material').val(data.material.id);
                $('#detail-edt-material-komponen').text(data.material.edt_material_komponen);
                $('#detail-kode-material').text(data.material.kode_material);
                $('#detail-kode-material-stock').text(data.alamat);
                $('#detail-no-part').text(data.material.no_part);
                $('#detail-material-komponen').text(data.material.nama_material)
                $('#detail-dimensi').text(data.material.dimensi);
                $('#detail-keterangan').text(data.material.keterangan);
                $('#detail-qty-ts').text(data.material['qty/ts']);
            },
            error: function () {
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
</body>
</html>
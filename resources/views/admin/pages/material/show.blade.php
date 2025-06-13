@extends('admin.master')

@section('page_title')
    Detail {{ $data->nama_material }}
@endsection

@section('content')

<div class="p-6">
    <div class="pb-3 border-b-2 border-solid border-red-500 font-semibold text-xl mb-4 ">
        <h2>Detail Material</h2>
    </div>
    <div class="flex gap-5 items-start flex-wrap mb-4">
        <div class="bg-white shadow-md rounded p-5 flex-[70%] max-w-[70%] max-[800px]:flex-[100%] max-[800px]:max-w-full">
            <div class="flex justify-between items-center pb-3 mb-3 border-b-[2px] border-solid border-slate-200 text-sm">
                <strong class="font-semibold">EDT MATERIAL KOMPONEN</strong>
                <span>{{ $data->edt_material_komponen }}</span>
            </div>
            <div class="flex justify-between items-center pb-3 mb-3 border-b-[2px] border-solid border-slate-200 text-sm">
                <strong class="font-semibold">KODE MATERIAL</strong>
                <span>{{ $data->kode_material }}</span>
            </div>
            <div class="flex justify-between items-center pb-3 mb-3 border-b-[2px] border-solid border-slate-200 text-sm">
                <strong class="font-semibold">KODE MATERIAL STOCK</strong>
                <span>{{ $data->kode_material_stock }}</span>
            </div>
            <div class="flex justify-between items-center pb-3 mb-3 border-b-[2px] border-solid border-slate-200 text-sm">
                <strong class="font-semibold">NO PART</strong>
                <span>{{ $data->no_part }}</span>
            </div>
            <div class="flex justify-between items-center pb-3 mb-3 border-b-[2px] border-solid border-slate-200 text-sm">
                <strong class="font-semibold">MATERIAL/KOMPONEN</strong>
                <span>{{ $data->nama_material }}</span>
            </div>
            <div class="flex justify-between items-center pb-3 mb-3 border-b-[2px] border-solid border-slate-200 text-sm">
                <strong class="font-semibold">DIMENSI</strong>
                <span>{{ $data->dimensi }}</span>
            </div>
            <div class="flex justify-between items-center pb-3 mb-3 border-b-[2px] border-solid border-slate-200 text-sm">
                <strong class="font-semibold">KETERANGAN</strong>
                <span>{{ $data->keterangan }}</span>
            </div>
            <div class="flex justify-between items-center pb-3 mb-3 border-b-[2px] border-solid border-slate-200 text-sm">
                <strong class="font-semibold">QTY/TS</strong>
                <span>{{ $data->{'qty/ts'} }}</span>
            </div>
            <div class="flex justify-between items-center pb-3 mb-3 border-b-[2px] border-solid border-slate-200 text-sm">
                <strong class="font-semibold">STOCK</strong>
                <span>{{ $data->stock }}</span>
            </div>
        </div>
        <div class="bg-white shadow-md rounded p-5 flex-[calc(30%_-_20px)] max-w-[calc(30%_-_20px)] flex flex-col gap-2.5 max-[800px]:flex-[100%] max-[800px]:max-w-full max-[800px]:flex-row max-[540px]:flex-wrap">
            <div class="flex flex-col justify-center gap-3 rounded px-4 py-3 bg-green-500 text-center text-white max-[800px]:flex-[calc(25%_-_((10px_*_3)_/_4))] max-[800px]:max-w-[calc(25%_-_((10px_*_3)_/_4))] max-[540px]:flex-[calc(50%_-_(10px_/_2))] max-[540px]:max-w-[calc(50%_-_(10px_/_2))]">
                <span class="text-sm font-medium">Kedatangan Bixie</span>
                <strong class="flex-[100%] max-w-full text-4xl font-bold">{{ $data->kedatangan_bixie }}</strong>
            </div>
            <div class="flex flex-col justify-center gap-3 rounded px-4 py-3 bg-blue-500 text-center text-white max-[800px]:flex-[calc(25%_-_((10px_*_3)_/_4))] max-[800px]:max-w-[calc(25%_-_((10px_*_3)_/_4))] max-[540px]:flex-[calc(50%_-_(10px_/_2))] max-[540px]:max-w-[calc(50%_-_(10px_/_2))]">
                <span class="text-sm font-medium">Kedatangan Katalor</span>
                <strong class="flex-[100%] max-w-full text-4xl font-bold">{{ $data->kedatangan_katalor }}</strong>
            </div>
            <div class="flex flex-col justify-center gap-3 rounded px-4 py-3 bg-white text-center text-white border-[5px] border-solid border-slate-400 max-[800px]:flex-[calc(25%_-_((10px_*_3)_/_4))] max-[800px]:max-w-[calc(25%_-_((10px_*_3)_/_4))] max-[540px]:flex-[calc(50%_-_(10px_/_2))] max-[540px]:max-w-[calc(50%_-_(10px_/_2))]">
                <span class="text-sm font-medium text-blue-600">Total</span>
                <strong class="flex-[100%] max-w-full text-4xl font-bold text-blue-600">{{ ($data->kedatangan_katalor + $data->kedatangan_bixie + $data->kedatangan_madiun) }}</strong>
            </div>
        </div>
    </div>
    <div class="bg-white shadow-md rounded p-5 mb-5">
        <div class="mb-5 font-semibold text-lg">
            <h3>Material Item</h3>
        </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Heat Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Vendor
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if ($materialItem->count() > 0)
                        @foreach ($materialItem as $item)
                        <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap max-[600px]:text-xs">
                                {{ $item->heat_number }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->jumlah }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->vendor }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->created_at }}
                            </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="bg-white shadow-md rounded p-5 mb-5">
        <div class="mb-5 font-semibold text-lg">
            <h3>Detail Kebutuhan Terpenuhi/Tidak Terpenuhi</h3>
        </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 mb-5">
                <thead>
                    <tr class="border border-solid border-gray-200">
                        <th scope="col" class="px-6 py-3 bg-blue-500 text-white font-semibold max-[600px]:text-xs">CAR</th>
                        <th scope="col" class="px-6 py-3 font-semibold odd:bg-gray-200 w-[100px] max-[600px]:text-xs">1 PRE SERIES</th>
                        <th scope="col" class="px-6 py-3 font-semibold odd:bg-gray-200 w-[100px] max-[600px]:text-xs">2_90 CAR</th>
                        <th scope="col" class="px-6 py-3 font-semibold odd:bg-gray-200 w-[100px] max-[600px]:text-xs">3_90 CAR</th>
                        <th scope="col" class="px-6 py-3 font-semibold odd:bg-gray-200 w-[100px] max-[600px]:text-xs">4_100 CAR</th>
                        <th scope="col" class="px-6 py-3 font-semibold odd:bg-gray-200 w-[100px] max-[600px]:text-xs">5_100 CAR</th>
                        <th scope="col" class="px-6 py-3 font-semibold odd:bg-gray-200 w-[100px] max-[600px]:text-xs">6_100 CAR</th>
                        <th scope="col" class="px-6 py-3 font-semibold odd:bg-gray-200 w-[100px] max-[600px]:text-xs">7_100 CAR</th>
                        <th scope="col" class="px-6 py-3 font-semibold odd:bg-gray-200 w-[100px] max-[600px]:text-xs">8_90 CAR</th>
                        <th scope="col" class="px-6 py-3 font-semibold odd:bg-gray-200 w-[100px] max-[600px]:text-xs">9_100 CAR</th>
                        <th scope="col" class="px-6 py-3 font-semibold odd:bg-gray-200 w-[100px] max-[600px]:text-xs">10_100 CAR</th>
                        <th scope="col" class="px-6 py-3 font-semibold odd:bg-gray-200 w-[100px] max-[600px]:text-xs">11_100 CAR</th>
                        <th scope="col" class="px-6 py-3 font-semibold odd:bg-gray-200 w-[100px] max-[600px]:text-xs">12_100 CAR</th>
                        <th scope="col" class="px-6 py-3 font-semibold odd:bg-gray-200 w-[100px] max-[600px]:text-xs">13_55 CAR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="max-[600px]:text-xs">

                        <th scope="row" class="px-6 py-3 bg-blue-500 text-white">
                            QTY
                        </th>
                        @foreach ($dataValueA as $data)
                        <td class="px-6 py-3 {{ $data < 0 ? 'bg-red-400' : 'bg-green-400' }} font-semibold text-white max-[600px]:text-xs">
                            {{ $data < 0 ? $data : 'OK' }}
                        </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="bg-white shadow-md rounded p-5 max-[680px]:hidden">
        <div class="mb-5 font-semibold text-lg">
            <h3>Grafik Kebutuhan Per Car</h3>
        </div>
        <canvas id="myChart">
            <script>
                var chartLabels = @json($dataName), chartValues = @json($dataValueB);
            </script>
        </canvas>
    </div>
</div>

@endsection
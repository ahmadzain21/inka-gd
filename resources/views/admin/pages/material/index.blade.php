@extends('admin.master')

@section('content')

<div class="p-6">
    <div class="pb-3 border-b-2 border-solid border-red-500 font-semibold text-xl mb-4 ">
        <h2>Daftar Material</h2>
    </div>
    <div class="bg-white shadow-md rounded p-5">
        

<div class="relative overflow-x-auto shadow-md mb-5 sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    EDT MATERIAL KOMPONEN
                </th>
                <th scope="col" class="px-6 py-3">
                    KODE MATERIAL
                </th>
                <th scope="col" class="px-6 py-3">
                    MATERIAL/KOMPONEN
                </th>
                <th scope="col" class="px-6 py-3">
                    SPESIFIKASI
                </th>
                <th scope="col" class="px-6 py-3">
                    DIMENSI
                </th>
                <th scope="col" class="px-6 py-3">
                    KETERANGAN
                </th>
                <th scope="col" class="px-6 py-3">
                    QTY TOTAL
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @if ($datas->count() > 0)
                @foreach ($datas as $data)
                <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $data->edt_material_komponen }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $data->kode_material }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $data->nama_material }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $data->spesifikasi }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $data->dimensi }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $data->keterangan }}
                    </td>
                    <td class="px-6 py-4">
                        {{ ($data->kedatangan_madiun + $data->kedatangan_bixie + $data->kedatangan_katalor) }}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2.5 items-center">
                            <a href="{{ route('mysqldb.show', $data->id) }}" class="py-1 px-2 rounded bg-sky-500 inline-flex gap-1 items-center"><svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                              </svg> <span class="text-white font-medium">Detail</span></a>
                            <a href="{{ route('mysqldb.edit', $data->id) }}" class="py-1 px-2 rounded bg-yellow-500 inline-flex gap-1 items-center"><svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                              </svg> <span class="text-white font-medium">Edit</span></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
{{ $datas->links() }}

    </div>
</div>
    
@endsection
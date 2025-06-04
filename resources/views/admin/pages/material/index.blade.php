@extends('admin.master')

@section('page_title')
    Daftar Material
@endsection

@section('content')

<div class="p-6">
    <div class="pb-3 border-b-2 border-solid border-red-500 font-semibold text-xl mb-4 ">
        <h2>Daftar Material</h2>
    </div>
    <div class="bg-white shadow-md rounded p-5">
        <form action="{{ route('materialgd.index') }}" method="GET" class="mb-4 float-end">
            <input class="border-slate-400 rounded border-px text-[13px] px-3 py-2" type="text" name="search" value="{{ request('search') }}" placeholder="Cari material..." class="border px-2 py-1" />
            <button type="submit" class="bg-blue-500 text-white px-3 py-2 rounded">Cari</button>
        </form>
        @if (session()->has('success'))
        <div class="bg-green-600 rounded py-2 px-3 w-full block text-white mb-2.5">
            {{ session('success') }}
        </div>
    @elseif (session()->has('errors'))
        @foreach ($errors->all() as $error)
            <div class="bg-red-500 rounded py-2 px-3 w-full block text-white mb-2.5">
                {{ $error }}
            </div>
        @endforeach
    @endif
        

<div class="relative overflow-x-auto shadow-md mb-5 sm:rounded-lg float-none w-full">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
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
            </tr>
        </thead>
        <tbody>
            @if ($datas->count() > 0)
                @foreach ($datas as $data)
                <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                    <td class="px-6 py-4">
                        <div class="flex gap-2.5 items-center">
                            <a href="{{ route('materialgd.show', $data->id) }}" class="py-1 px-2 rounded bg-sky-500 inline-flex items-center"><svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                              </svg> <span class="text-white font-medium"></span></a>
                            <a href="{{ route('materialgd.edit', $data->id) }}" class="py-1 px-2 rounded bg-yellow-500 inline-flex items-center"><svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                              </svg> <span class="text-white font-medium"></span></a>
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap max-[600px]:text-xs">
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
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>

<div class="overflow-x-auto">
    <div class="inline-block min-w-full">
        {{ $datas->appends(['search' => request('search')])->links() }}
    </div>
</div>


    </div>
</div>
    
@endsection
@extends('admin.master')

@section('page_title')
    Daftar Kebutuhan Material
@endsection

@section('content')

<div class="p-6">
    <div class="pb-3 border-b-2 border-solid border-red-500 font-semibold text-xl mb-4 ">
        <h2>Daftar Kebutuhan Material</h2>
    </div>
    <div class="bg-white shadow-md rounded p-5">
        <form action="{{ route('kebutuhan.index') }}" method="GET" class="mb-4 float-end">
            <input class="border-slate-400 rounded border-px text-[13px] px-3 py-2" type="text" name="search" value="{{ request('search') }}" placeholder="Cari material..." class="border px-2 py-1" />
            <button type="submit" class="bg-blue-500 text-white px-3 py-2 rounded">Cari</button>
        </form>

<div class="relative overflow-x-auto shadow-md mb-5 sm:rounded-lg float-none w-full">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ACTION
                </th>
                <th scope="col" class="px-6 py-3">
                    KODE MATERIAL
                </th>
                <th scope="col" class="px-6 py-3">
                    MATERIAL/KOMPONEN
                </th>
                <th scope="col" class="px-6 py-3">
                    1 PRE SERIES
                </th>
                <th scope="col" class="px-6 py-3">
                    2_90 CAR
                </th>
                <th scope="col" class="px-6 py-3">
                    3_90 CAR
                </th>
                <th scope="col" class="px-6 py-3">
                    4_100 CAR
                </th>
                <th scope="col" class="px-6 py-3">
                    5_100 CAR
                </th>
                <th scope="col" class="px-6 py-3">
                    6_100 CAR
                </th>
                <th scope="col" class="px-6 py-3">
                    7_100 CAR
                </th>
                <th scope="col" class="px-6 py-3">
                    8_100 CAR
                </th>
                <th scope="col" class="px-6 py-3">
                    9_100 CAR
                </th>
                <th scope="col" class="px-6 py-3">
                    10_100 CAR
                </th>
                <th scope="col" class="px-6 py-3">
                    11_100 CAR
                </th>
                <th scope="col" class="px-6 py-3">
                    12_100 CAR
                </th>
                <th scope="col" class="px-6 py-3">
                    13_55 CAR
                </th>
            </tr>
        </thead>
        <tbody>
            @if ($datas->count() > 0)
                @foreach ($datas as $data)
                @php
                    $qtyTotal = $data->kedatangan_bixie + $data->kedatangan_katalor + $data->kedatangan_madiun;
                @endphp

                <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                    <td class="px-6 py-4">
                        <div class="flex gap-2.5 items-center">
                            <a href="{{ route('materialgd.show', $data->id) }}" class="py-1 px-2 rounded bg-sky-500 inline-flex items-center"><svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                              </svg> <span class="text-white font-medium"></span></a>
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $data->kode_material }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $data->nama_material }}
                    </td>
                    <td class="px-6 py-4">
                        @if ($qtyTotal >= 0)
                            <span class="text-green-500 font-medium">{{ 'OK' }}</span>
                        @else
                            <span class="text-red-500 font-medium">{{ $qtyTotal }}</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @php
                            $qtyTotal -= $data->kebutuhan->{'2_qty_kebutuhan_90'}
                        @endphp
                        @if ($qtyTotal >= 0)
                            <span class="text-green-500 font-medium">{{ 'OK' }}</span>
                        @else
                            <span class="text-red-500 font-medium">{{ $qtyTotal }}</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @php
                            $qtyTotal -= $data->kebutuhan->{'3_qty_kebutuhan_90'}
                        @endphp
                        @if ($qtyTotal >= 0)
                            <span class="text-green-500 font-medium">{{ 'OK' }}</span>
                        @else
                            <span class="text-red-500 font-medium">{{ $qtyTotal }}</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @php
                            $qtyTotal -= $data->kebutuhan->{'4_qty_kebutuhan_100'}
                        @endphp
                        @if ($qtyTotal >= 0)
                            <span class="text-green-500 font-medium">{{ 'OK' }}</span>
                        @else
                            <span class="text-red-500 font-medium">{{ $qtyTotal }}</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @php
                            $qtyTotal -= $data->kebutuhan->{'5_qty_kebutuhan_100'}
                        @endphp
                        @if ($qtyTotal >= 0)
                            <span class="text-green-500 font-medium">{{ 'OK' }}</span>
                        @else
                            <span class="text-red-500 font-medium">{{ $qtyTotal }}</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @php
                            $qtyTotal -= $data->kebutuhan->{'6_qty_kebutuhan_100'}
                        @endphp
                        @if ($qtyTotal >= 0)
                            <span class="text-green-500 font-medium">{{ 'OK' }}</span>
                        @else
                            <span class="text-red-500 font-medium">{{ $qtyTotal }}</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @php
                            $qtyTotal -= $data->kebutuhan->{'7_qty_kebutuhan_100'}
                        @endphp
                        @if ($qtyTotal >= 0)
                            <span class="text-green-500 font-medium">{{ 'OK' }}</span>
                        @else
                            <span class="text-red-500 font-medium">{{ $qtyTotal }}</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @php
                            $qtyTotal -= $data->kebutuhan->{'8_qty_kebutuhan_100'}
                        @endphp
                        @if ($qtyTotal >= 0)
                            <span class="text-green-500 font-medium">{{ 'OK' }}</span>
                        @else
                            <span class="text-red-500 font-medium">{{ $qtyTotal }}</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @php
                            $qtyTotal -= $data->kebutuhan->{'9_qty_kebutuhan_100'}
                        @endphp
                        @if ($qtyTotal >= 0)
                            <span class="text-green-500 font-medium">{{ 'OK' }}</span>
                        @else
                            <span class="text-red-500 font-medium">{{ $qtyTotal }}</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @php
                            $qtyTotal -= $data->kebutuhan->{'10_qty_kebutuhan_100'}
                        @endphp
                        @if ($qtyTotal >= 0)
                            <span class="text-green-500 font-medium">{{ 'OK' }}</span>
                        @else
                            <span class="text-red-500 font-medium">{{ $qtyTotal }}</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @php
                            $qtyTotal -= $data->kebutuhan->{'11_qty_kebutuhan_100'}
                        @endphp
                        @if ($qtyTotal >= 0)
                            <span class="text-green-500 font-medium">{{ 'OK' }}</span>
                        @else
                            <span class="text-red-500 font-medium">{{ $qtyTotal }}</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @php
                            $qtyTotal -= $data->kebutuhan->{'12_qty_kebutuhan_100'}
                        @endphp
                        @if ($qtyTotal >= 0)
                            <span class="text-green-500 font-medium">{{ 'OK' }}</span>
                        @else
                            <span class="text-red-500 font-medium">{{ $qtyTotal }}</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @php
                            $qtyTotal -= $data->kebutuhan->{'13_qty_kebutuhan_55'}
                        @endphp
                        @if ($qtyTotal >= 0)
                            <span class="text-green-500 font-medium">{{ 'OK' }}</span>
                        @else
                            <span class="text-red-500 font-medium">{{ $qtyTotal }}</span>
                        @endif
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
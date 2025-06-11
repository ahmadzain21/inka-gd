@extends('admin.master')

@section('page_title')
Daftar Pengguna
@endsection

@section('content')
<div class="p-6">
    <div class="pb-3 border-b-2 border-solid border-red-500 font-semibold text-xl mb-4 ">
        <h2>Daftar Pengguna</h2>
    </div>
    <div class="bg-white shadow-md rounded p-5 overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Role
                    </th>
                </tr>
            </thead>
            <tbody>
                @if ($datas->count() > 0)
                    @foreach ($datas as $data)
                    <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap max-[600px]:text-xs">
                            {{ $data->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $data->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->role }}
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
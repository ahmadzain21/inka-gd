@extends('admin.master')

@section('page_title')
    History
@endsection

@section('content')

<div class="p-6">
    <div class="pb-3 border-b-2 border-solid border-red-500 font-semibold text-xl mb-4 ">
        <h2>History</h2>
    </div>
    <div class="bg-white shadow-md rounded p-5">
        <div class="block mb-2.5">
            <form class="flex gap-2.5" action="{{ route('history.index') }}" method="get">
                <div class="inline-flex gap-2.5">
                    <div>
                        <label class="text-xs block mb-1.5" for="start">Tanggal mulai</label>
                        <input class="text-xs rounded" type="date" name="start" id="start" value="{{ request('start') }}">
                    </div>
                    <div>
                        <label class="text-xs block mb-1.5" for="end">Tanggal akhir</label>
                        <input class="text-xs rounded" type="date" name="end" id="end" value="{{ request('end') }}">
                    </div>
                </div>
                <button class="bg-blue-500 text-white rounded px-4 self-end py-1.5 text-sm hover:bg-blue-600" type="submit">Filter</button>
            </form>
        </div>

<div class="relative overflow-x-auto shadow-md mb-5 sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Tanggal
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
                    <td class="px-6 py-4">
                        {{ $data->created_at }}
                    </td>
                    <th class="px-6 py-4 font-medium text-gray-900">
                        {{ $data->action }}
                    </th>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>

    </div>
</div>
    
@endsection
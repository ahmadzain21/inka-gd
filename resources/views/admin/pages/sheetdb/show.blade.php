@extends('admin.master')

@section('content')

<div class="p-6">
    <div class="pb-3 border-b-2 border-solid border-red-500 font-semibold text-xl mb-4 ">
        <h2>Detail Material</h2>
    </div>
    <div class="flex gap-5 items-start flex-wrap mb-4">
        <div class="bg-white shadow-md rounded p-5 flex-[70%] max-w-[70%]">
            <div class="flex justify-between items-center pb-2 mb-2 border-b-[2px] border-solid border-slate-300 text-sm">
                <strong class="font-medium">Nama Material</strong>
                <span>Namanya</span>
            </div>
        </div>
        <div class="bg-white shadow-md rounded p-5 flex-[calc(30%_-_20px)] max-w-[calc(30%_-_20px)]">
            Deskripsi material 2
        </div>
    </div>
    <div class="bg-white shadow-md rounded p-5">
        Grafik kekurangan
    </div>
</div>

@endsection
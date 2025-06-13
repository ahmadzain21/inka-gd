@extends('admin.master')

@section('page_title')
    Beranda
@endsection

@section('content')
<div class="text-center py-[10%]">
    <h1 class="text-5xl font-bold mb-[7%] max-[640px]:text-3xl">Pilih Vendor</h1>
    <div class="flex gap-[30px] justify-center">
        <a class="bg-white text-[#222] text-5xl rounded shadow-md font-bold px-6 py-4 hover:shadow-xl max-[640px]:text-3xl" href="{{ route('kedatangan.create', 'bixie') }}">Bixie</a>
        <a class="bg-white text-[#222] text-5xl rounded shadow-md font-bold px-6 py-4 hover:shadow-xl max-[640px]:text-3xl" href="{{ route('kedatangan.create', 'katalor') }}">Katalor</a>
    </div>
</div>
@endsection
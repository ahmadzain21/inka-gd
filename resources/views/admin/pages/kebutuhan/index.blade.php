<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-blue-500 p-[10%] text-center">
    <div class="text-white">
        <h1 class="text-5xl font-bold mb-[7%]">Pilih Vendor</h1>
        <div class="flex gap-[30px] justify-center">
            <a class="bg-white text-[#222] text-5xl rounded shadow-md font-bold px-6 py-4" href="{{ route('kebutuhan.bixie') }}">Bixie</a>
            <a class="bg-white text-[#222] text-5xl rounded shadow-md font-bold px-6 py-4" href="{{ route('kebutuhan.katalor') }}">Katalor</a>
        </div>
    </div>
</body>
</html>
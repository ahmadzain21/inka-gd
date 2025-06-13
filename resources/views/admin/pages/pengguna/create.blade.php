@extends('admin.master')

@section('page_title')
Tambah Pengguna
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@endsection

@section('content')
<div class="p-6">
    <div class="pb-3 border-b-2 border-solid border-red-500 font-semibold text-xl mb-4 ">
        <h2>Tambah Pengguna</h2>
    </div>
    <div class="bg-white shadow-md rounded p-5">
        <form id="user-form" method="POST">
            @csrf
            @method('POST')
    
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
    
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="nip" :value="__('NIP')" />
                <x-text-input id="nip" class="block mt-1 w-full" type="text" name="nip" :value="old('nip')" required autocomplete="nip" />
                <x-input-error :messages="$errors->get('nip')" class="mt-2" />
            </div>
    
            <!-- Role -->
            <div class="mt-4">
                <x-input-label for="role">Role</x-input-label>
                <select class="block mt-1 w-full border-gray-300 focus:border-indigo-500  focus:ring-indigo-500 rounded-md shadow-sm" name="role" id="role">
                    <option value="Admin">Admin</option>
                    <option value="Operator">Operator</option>
                </select>
            </div>
    
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
    
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
    
                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
    
            <div class="flex items-center justify-end mt-4">
                <x-primary-button type="button" id="submit-btn" class="ms-4">
                    {{ __('Tambah') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#submit-btn').on('click', function () {
        let formData = $('#user-form').serialize();
        console.log(formData);

        $('#submit-btn').text('Proses...');

        $.ajax({
            url: "{{ route('pengguna.store') }}",
            method: "POST",
            data: formData,
            success: async function (response) {
                await alert(response.message); // Atau pakai SweetAlert
                $('#submit-btn').text('Tambah');
            },
            error: async function (xhr) {
                await alert("Terjadi kesalahan. Pastikan semua data diisi.");
                $('#submit-btn').text('Tambah');
            }
        });
    });
});
</script>
@endsection
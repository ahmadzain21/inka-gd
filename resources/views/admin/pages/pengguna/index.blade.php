@extends('admin.master')

@section('page_title')
Daftar Pengguna
@endsection

@section('content')
<div class="p-6">
    <div class="pb-3 border-b-2 border-solid border-red-500 font-semibold text-xl mb-4 ">
        <h2>Daftar Pengguna</h2>
    </div>
    @if (session('status'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4" role="alert">
        <strong class="font-bold">Berhasil!</strong>
        <span class="block sm:inline">{{ session('status') }}</span>
    </div>
    @endif
    <div class="bg-white shadow-md rounded p-5 overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        NIP
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Role
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
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap max-[600px]:text-xs">
                            {{ $data->nip }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $data->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->role }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-2.5 items-center">
                                <button type="button" x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-reset-{{ $data->id }}')" class="py-1 px-2 rounded bg-yellow-500 hover:bg-yellow-600 inline-flex items-center gap-1.5"><svg class="w-5 h-5 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>lock-reset</title><path fill="#fff" d="M12.63,2C18.16,2 22.64,6.5 22.64,12C22.64,17.5 18.16,22 12.63,22C9.12,22 6.05,20.18 4.26,17.43L5.84,16.18C7.25,18.47 9.76,20 12.64,20A8,8 0 0,0 20.64,12A8,8 0 0,0 12.64,4C8.56,4 5.2,7.06 4.71,11H7.47L3.73,14.73L0,11H2.69C3.19,5.95 7.45,2 12.63,2M15.59,10.24C16.09,10.25 16.5,10.65 16.5,11.16V15.77C16.5,16.27 16.09,16.69 15.58,16.69H10.05C9.54,16.69 9.13,16.27 9.13,15.77V11.16C9.13,10.65 9.54,10.25 10.04,10.24V9.23C10.04,7.7 11.29,6.46 12.81,6.46C14.34,6.46 15.59,7.7 15.59,9.23V10.24M12.81,7.86C12.06,7.86 11.44,8.47 11.44,9.23V10.24H14.19V9.23C14.19,8.47 13.57,7.86 12.81,7.86Z" /></svg> <span class="text-white font-medium text-xs">Reset Password</span></button>
                                <x-modal name="confirm-user-reset-{{ $data->id }}" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                    <form method="post" action="{{ route('reset.password', $data->nip) }}" class="p-6">
                                        @csrf
                                        @method('post')
                            
                                        <h2 class="text-lg font-medium text-gray-900 ">
                                            {{ __('Apakah Anda yakin ingin mereset password akun ini??') }}
                                        </h2>
                            
                                        <p class="mt-1 text-sm text-gray-600">
                                            {{ __('Password akan di reset menjadi di default sesuai NIP.') }}
                                        </p>
                            
                                        <div class="mt-6 flex justify-between">
                                            <x-secondary-button x-on:click="$dispatch('close')">
                                                {{ __('Batal') }}
                                            </x-secondary-button>
                            
                                            <x-danger-button class="ms-3">
                                                {{ __('Reset Password') }}
                                            </x-danger-button>
                                        </div>
                                    </form>
                                </x-modal>
                                <button type="button" x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion-{{ $data->id }}')" class="py-1 px-2 rounded bg-red-500 hover:bg-red-600 inline-flex items-center gap-1.5"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>delete</title><path fill="#fff" d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" /></svg> <span class="text-white font-medium text-xs">Hapus Akun</span></button>
                                <x-modal name="confirm-user-deletion-{{ $data->id }}" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                    <form method="post" action="{{ route('profile.destroy', $data->nip) }}" class="p-6">
                                        @csrf
                                        @method('post')
                            
                                        <h2 class="text-lg font-medium text-gray-900 ">
                                            {{ __('Apakah Anda yakin ingin mereset password akun ini??') }}
                                        </h2>
                            
                                        <p class="mt-1 text-sm text-gray-600">
                                            {{ __('Password akan di reset menjadi di default sesuai NIP.') }}
                                        </p>
                            
                                        <div class="mt-6 flex justify-between">
                                            <x-secondary-button x-on:click="$dispatch('close')">
                                                {{ __('Batal') }}
                                            </x-secondary-button>
                            
                                            <x-danger-button class="ms-3">
                                                {{ __('Reset Password') }}
                                            </x-danger-button>
                                        </div>
                                    </form>
                                </x-modal>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
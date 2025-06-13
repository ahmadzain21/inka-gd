<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 ">
            {{ __('Reset Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 ">
            {{ __('Password anda akan di reset menjadi di default sesuai NIP anda.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Reset Password') }}</x-danger-button>

    @if (session('status'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4" role="alert">
        <strong class="font-bold">Berhasil!</strong>
        <span class="block sm:inline">{{ session('status') }}</span>
    </div>
    @endif

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('reset.password', Auth::user()->nip) }}" class="p-6">
            @csrf
            @method('post')

            <h2 class="text-lg font-medium text-gray-900 ">
                {{ __('Apakah Anda yakin ingin mereset password akun Anda??') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Password anda akan di reset menjadi di default sesuai NIP anda.') }}
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
</section>

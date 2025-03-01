@extends('structure.master')
@section('main')
    <div class="card p-4 shadow-lg">
    <div class="mb-4 text-sm text-gray-600">
        Has oblidat la contrasenya? Cap problema. Només cal que ens indiquis la teva adreça de correu electrònic i t'enviarem un enllaç per restablir la contrasenya que et permetrà triar-ne una de nova.
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="'Email'" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-content-end mt-4">
            <x-primary-button>
                Link de restabliment de contrasenya per correu electrònic
            </x-primary-button>
        </div>
    </form>
    </div>
@endsection

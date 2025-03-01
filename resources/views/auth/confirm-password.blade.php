@extends('structure.master')
@section('main')
    <div class="mb-4 text-sm text-gray-600">
        Això és una àrea segura de l'aplicació. Si us plau, confirma la teva contrasenya abans de continuar.
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="'Contrasenya'" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-content-end mt-4">
            <x-primary-button>
                Confirma
            </x-primary-button>
        </div>
    </form>
@endsection

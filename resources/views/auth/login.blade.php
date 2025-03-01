@extends('structure.master')

@section('main')
    <div class="position-absolute h-100 w-100 top-0 d-flex justify-content-center align-items-center">

        <div class="card p-5 shadow-lg w-100" style="max-width: 450px;">
            <h2 class="text-center mb-4">Iniciar sessió</h2>

            @if(session('status'))
                <div class="alert alert-success mb-4">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Contrasenya</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                           name="password" required>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="form-check mb-3">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label for="remember_me" class="form-check-label">Recorda'm</label>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    @if (Route::has('password.request'))
                        <a class="link-body-emphasis text-decoration-underline" href="{{ route('password.request') }}">
                            Has oblidat la contrasenya?
                        </a>
                    @endif

                    <button type="submit" class="btn btn-primary">
                        Iniciar sessió
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

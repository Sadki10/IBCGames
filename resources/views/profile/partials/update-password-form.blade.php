<section>
    <header class="mb-4">
        <h2 class="h5 text-dark">
            Actualitzar contrasenya
        </h2>
        <p class="text-muted">
            Assegureu-vos que el vostre compte utilitzi una contrasenya llarga i aleatòria per mantenir-vos segurs.
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-4">
        @csrf
        @method('put')

        <!-- Contrasenya actual -->
        <div class="mb-3">
            <label for="update_password_current_password" class="form-label">Contrasenya actual</label>
            <input id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password">
            @error('current_password', 'updatePassword')
            <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Nova contrasenya -->
        <div class="mb-3">
            <label for="update_password_password" class="form-label">Nova contrasenya</label>
            <input id="update_password_password" name="password" type="password" class="form-control" autocomplete="new-password">
            @error('password', 'updatePassword')
            <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Confirmació nova contrasenya -->
        <div class="mb-3">
            <label for="update_password_password_confirmation" class="form-label">Confirma la contrasenya</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password">
            @error('password_confirmation', 'updatePassword')
            <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Botó Guardar -->
        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary">Guardar</button>

            @if (session('status') === 'password-updated')
                <p class="text-success small mb-0">Guardat</p>
            @endif
        </div>
    </form>
</section>

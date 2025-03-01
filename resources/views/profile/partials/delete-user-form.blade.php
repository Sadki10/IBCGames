<section class="mb-4">
    <header>
        <h2 class="h5 text-dark">
            Eliminar compte
        </h2>
        <p class="text-muted">
            Un cop s'elimini el vostre compte, tots els seus recursos i dades s'eliminaran de forma permanent. Abans de suprimir el vostre compte, descarregueu les dades o la informació que vulgueu conservar.
        </p>
    </header>

    <!-- Botó per obrir el modal -->
    <button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#confirmUserDeletionModal">
        Eliminar compte
    </button>

    <!-- Modal de confirmació -->
    <div class="modal fade" id="confirmUserDeletionModal" tabindex="-1" aria-labelledby="confirmUserDeletionLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmUserDeletionLabel">Estàs segur que vols eliminar el teu compte?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-muted">
                        Un cop s'elimini el vostre compte, tots els seus recursos i dades s'eliminaran de forma permanent. Abans de suprimir el vostre compte, descarregueu les dades o la informació que vulgueu conservar.
                    </p>
                    <form method="post" action="{{ route('profile.destroy') }}">
                        @csrf
                        @method('delete')

                        <div class="mb-3">
                            <label for="password" class="form-label">Contrasenya</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Contrasenya">
                            @error('password', 'userDeletion')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel·lar</button>
                            <button type="submit" class="btn btn-danger">Eliminar compte</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

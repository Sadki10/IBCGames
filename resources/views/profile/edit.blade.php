@extends('structure.master')

@section('main')
    <h2 class="fw-semibold text-dark mb-4">Perfil</h2>

    <div class="row">
        <div class="col-md-8">
            <!-- Update Profile Information -->
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password -->
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete User -->
            <div class="card shadow-sm">
                <div class="card-body">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
@endsection

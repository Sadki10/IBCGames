@extends('structure.master')

@section('main')
    <div class="card shadow-lg">
        <div class="card-header bg-secondary text-white">
            <h2 class="mb-0">Benvingut {{ Auth::user()->name }}</h2>
        </div>
        <div class="card-body">
            <p class="text-success">Has iniciat sessió!</p>
        </div>
    </div>
@endsection

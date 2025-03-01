@extends('structure.master')

@section('main')
<h1 class="h2">Categories</h1>
<div class="d-flex gap-2 flex-wrap">
@foreach($categories as $category)
    <a href="{{ route('category.show', $category) }}"
    class="card d-flex flex-row gap-2 align-items-center p-3 justify-content-center category-card text-decoration-none" style="background-color: {{ 'hsla(' . (mt_rand(0, 360)) . ', 70%,  72%, 0.8)' }}">
            <i class="fa fa-{{$category->icon}}"></i>
            <div>
                {{ $category->name }}
            </div>
    </a>
@endforeach
</div>
@endsection

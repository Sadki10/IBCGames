@extends('structure.master')

@section('main')
<h1 class="h2">Categories:</h1>
<div class="d-flex gap-2 flex-wrap">
@foreach($categories as $category)
    <a href="{{ route('category.show', $category) }}"
    class="card d-flex flex-row gap-2 align-items-center p-3 justify-center category-card" style="min-width: 200px; min-height: 200px">
{{--        <div class="card d-flex flex-row gap-2 align-items-center p-3">--}}
            <i class="fa fa-{{$category->icon}}"></i>
            <div>
                {{ $category->name }}
            </div>
{{--            <div>--}}
{{--                {{ $category->id }}--}}
{{--            </div>--}}
{{--        </div>--}}
    </a>
@endforeach
</div>
@endsection

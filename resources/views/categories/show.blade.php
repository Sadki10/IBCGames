@extends('structure.master')
@section('main')
    <div class="d-flex gap-2 align-items-center">
        <i class="fa fa-{{$category->icon}}"></i>
        <h2 class="h3 m-0">{{ $category->name }}</h2>
    </div>
    <div class="games d-flex flex-column my-4">
        @if(!count($category->games))
            No hi ha jocs en aquesta categoria :(  <img src="/img/sadCat.jpg" width="500px">
        @endif
        @foreach($category->games as $game)
            <div class="card mb-3 gap-4 p-4" data-element="game">
                <div class="d-flex flex-row justify-content-between">
                    <div class="fw-bold">{{ $game->name }}</div>
                    <div>
                        @php $rating = $game->ratings()->avg('rating'); @endphp
                        @if($rating)
                            <div class="d-flex gap-2 text-warning">
                                @while($rating>0)
                                    @if($rating >0.5)
                                        <i class="fas fa-star"></i>
                                    @else
                                        <i class="fas fa-star-half"></i>
                                    @endif
                                    @php $rating--; @endphp
                                @endwhile
                            </div>
                            <div class="badge bg-secondary">{{ $game->ratings()->count() }} Valoracions</div>
                        @else
                            <div class="badge bg-secondary">Sense valoracions</div>
                        @endif
                    </div>
                </div>

                @if($game->image)
                    <img src="/img/{{ $game->image }}" alt="{{ $game->name }}" width="250px">
                @endif
                <div>{{ $game->description ?? '' }}</div>

                <div class="d-flex flex-row justify-content-between align-items-center">
                    <ul class="d-flex list-inline text-warning gap-2 {{ auth()->check() ?: 'pe-none' }}">
                        @for($i = 1; $i <= 5; $i++)
                            <li class="pointer" data-star-rating="" data-value="{{ $i }}">
                                <i class="fa fa-star-o fa-lg"></i>
                            </li>
                        @endfor

                        <li class="h6 text-secondary">
                            <span data-star-text="">0</span> / 5
                        </li>
                    </ul>
                    @guest
                        <div>
                            <a class="alert alert-danger" href="{{ route('login') }}">Inicia sessió per valorar</a>
                        </div>
                    @endguest
                    <form action="{{ route('rate') }}" method="post">
                        @csrf
                        <input type="hidden" name="gameId" value="{{ $game->id }}">
                        <input type="hidden" id="rating" name="rating" data-star-input="" min="0" max="5" value="0" class="form-control">
                        <input class="btn btn-secondary" type="submit" value="Valorar" {{ auth()->check() ?: 'disabled' }}>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <a class="btn btn-secondary" href="{{ route('index') }}">Tornar enrere</a>
@endsection
@section('scripts')
    <script src="{{ asset('js/ratingManager.js') }}" defer></script>
@endsection

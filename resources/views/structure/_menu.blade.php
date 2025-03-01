<nav class="navbar navbar-expand-md navbar-dark bg-dark px-4">
    <a class="navbar-brand" href="/">
        <img src="/img/pallasso.png" width="30" height="auto" class="align-top">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('index') }}">Inici</a>
            </li>
            <li class="nav-item">
            </li>
            <li class="nav-item dropdown dropdown-hover">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Categories
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    @foreach($categories as $category)
                        <li><a class="dropdown-item" href="{{ route('category.show', $category) }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </li>
        </ul>

        <div class="navbar-nav">
            @guest
                <div>
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </div>
                <div>
                    <a class="nav-link" href="{{ route('register') }}">Registrar-se</a>
                </div>
            @endguest
            @auth
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="userMenu" data-bs-toggle="dropdown"
                            aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="userMenu">
                        <li>
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">Perfil</a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Tancar sessió</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endauth
        </div>
    </div>
</nav>

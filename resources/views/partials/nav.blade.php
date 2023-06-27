<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a href="/"><img id="logs" class="m-1" src="/img/bgc-02.ico" alt="" width="25" height="25"></a>
        <a class="navbar-brand" href="/"> Blographic</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}"
                        href="/categories">Categories</a>
                </li>
            </ul>


            <ul class="navbar-nav ms-auto">
                @auth

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Sign out</button>
                                </form>
                        </ul>
                    </li>

                @else

                    <li class="nav-item">
                        <a href="/login" class="btn btn-outline-light py-1">Sign in</a>
                        {{-- <a href="/login" class="btn btn-outline-light{{ ($active === "login") ? 'active' : '' }}">Sign in</a> --}}
                        {{-- <a href="/login" class="btn btn-outline-light{{ ($active === "login") ? 'active' : '' }}">Sign in</a> --}}
                        {{-- <a href="/register" class="btn btn-outline-light">Sign up</a> --}}
                    </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>

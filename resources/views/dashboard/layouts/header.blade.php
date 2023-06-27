<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/"><img class="" src="/img/bgc-02.ico" alt=""
            width="25" height="25"> Blographic</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    {{-- <div class="navbar-nav" id="butt">
        <div class="nav-item text-nowrap">
            <form action="/logout" method="post">
                @csrf
                <button id="sgu" type="submit" class="nav-link px-3 border-0 bg-dark">Sign out</button>
            </form>
        </div>
    </div> --}}
    <form action="/logout" method="post">
        @csrf
        <button id="sgu" type="submit" class="nav-item px-4 border-0 text-nowrap">Sign out</button>
    </form>

    <div class="nav-item text-nowrap" id="butt">
    </div>
</header>

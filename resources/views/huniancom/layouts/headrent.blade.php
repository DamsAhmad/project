<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Hunian.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown"
                aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->name }}
                            </a>

                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li>
                                    <form action="/transaksi" method="GET">
                                        @csrf
                                        <button type="submit" class="nav-link px-4 border-0 bg-dark"></i>Riwayat<span
                                                data-feather="log-out"></span></button>
                                    </form>
                                </li>
                                <li>
                                    <form action="create" method="GET">
                                        @csrf
                                        <button type="submit" class="nav-link px-4 border-0 bg-dark"></i>Jual Rumah<span
                                                data-feather="log-out"></span></button>
                                    </form>
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="nav-link px-4 border-0 bg-dark"></i>Logout<span
                                                data-feather="log-out"></span></button>
                                    </form>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <div class="navbar-nav">
                            <div class="nav-item text-nowrap">
                                {{-- <a class="nav-link px-3" href="#">Logout</a> --}}
                                <form action="/login" method="GET">
                                    @csrf
                                    <button type="submit" class="nav-link px-3 border-0 bg-dark">
                                        </i>Login<span data-feather="log-in"></span></button>
                                </form>
                            </div>
                        </div>

                    @endauth
                </ul>
            </div>
        </div>
    </nav>

</header>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Hunian.com</a>
  @auth
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      {{-- <a class="nav-link px-3" href="#">Logout</a> --}}
      <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="nav-link px-3 border-0 bg-dark">
          </i>Logout<span data-feather="log-out"></span></button>
      </form>
    </div>
  </div>
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
  </header>

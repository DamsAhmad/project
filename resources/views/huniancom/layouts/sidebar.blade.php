<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
            <span data-feather="monitor" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/hunian/index') ? 'active' : ''}}" href="/dashboard/hunian/index">
                <span data-feather="home" class="align-text-bottom"></span>
                 Data Hunian
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/hunian/user') ? 'active' : ''}}" href="/dashboard/hunian/user">
                <span data-feather="users" class="align-text-bottom"></span>
                Data Pengguna
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/hunian/transaksi') ? 'active' : ''}}" href="/dashboard/hunian/transaksi">
            <span data-feather="dollar-sign" class="align-text-bottom"></span>
            Data Transaksi
          </a>
        </li>
    </ul>
      </ul>
    </div>
</nav>

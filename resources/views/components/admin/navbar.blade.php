<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('/dashboard')}}" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('/app')}}" class="nav-link">Apps</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('/')}}" class="nav-link">Blogs</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar " type="search" placeholder="Search..."
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <li class="nav-item">
            <a href="/logout" class="nav-link" id="logoutButton">
            <i class="nav-icon fas fa-power-off text-danger"></i>
        </a>
      </li>

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>

<form action="{{ route('logout') }}" method="post" id="logout" class="d-none">
    @csrf

</form>
<script>
    const logoutForm = document.getElementById('logout');
    const logoutButton = document.getElementById('logoutButton');
    logoutButton.addEventListener('click', (event) => {
        event.preventDefault();
        logoutForm.submit();
    })
</script>

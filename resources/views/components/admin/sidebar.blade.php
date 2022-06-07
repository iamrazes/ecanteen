<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Dashboard</span>
    </a>


    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"
                style="overflow-x: hidden;">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>

                <li class="mt-2 nav-item pt-2" style="border-top: 1px solid #4f5962;">


                @auth
                    @if (Auth::user()->role == 'admin')
                    <li class="nav-header text-uppercase">System Control</li>
                    @endif
                @endauth

                <li class="nav-header text-uppercase">Database Control</li>
                @auth
                    @if (Auth::user()->role == 'admin')
                        <li class="nav-item">
                            <a href="{{ route('users') }}"
                                class="nav-link {{ request()->routeIs('users') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Users
                                </p>
                            </a>
                        </li>
                    @endif
                @endauth
                @auth
                    @if (Auth::user()->role == 'admin')
                        <li class="nav-item">
                            {{-- <a href="{{ auth()->user()->role == 'admin' ? route('products') : route('dashboardSeller.products') }}" class="nav-link {{ request()->routeIs('products') ? 'active' : '' }}"> --}}
                            <a href="{{ route('products') }}"
                                class="nav-link {{ request()->routeIs('products') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-box"></i>
                                <p>
                                    Products
                                </p>
                            </a>
                        </li>
                    @endif
                @endauth

                @auth
                    @if (Auth::user()->role == 'seller')
                        <li class="nav-item">
                            {{-- <a href="{{ auth()->user()->role == 'admin' ? route('products') : route('dashboardSeller.products') }}" class="nav-link {{ request()->routeIs('products') ? 'active' : '' }}"> --}}
                            <a href="{{ route('dashboardSeller.products') }}"
                                class="nav-link {{ request()->routeIs('products') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-box"></i>
                                <p>
                                    Products
                                </p>
                            </a>
                        </li>
                    @endif
                @endauth


                @auth
                    @if (Auth::user()->role == 'admin')
                        <li class="nav-header text-uppercase">Content Control</li>
                        <li class="nav-item">
                            <a href="{{ route('posts') }}"
                                class="nav-link {{ request()->routeIs('posts') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-feather"></i>
                                <p>
                                    Posts
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('submissions') }}"
                                class="nav-link {{ request()->routeIs('submissions') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-envelope"></i>
                                <p>
                                    Submissions
                                </p>
                            </a>
                        </li>
                    @endif
                @endauth



                <li class="mt-2 nav-item pt-2" style="border-top: 1px solid #4f5962;">
                    <a href="{{ route('logout') }}" class="nav-link"
                        onclick="event.preventDefault();document.querySelector('#logoutForm').submit()">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

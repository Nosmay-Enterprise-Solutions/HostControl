<div class="collapse navbar-collapse" id="sidebar-menu">
    <ul class="navbar-nav pt-lg-3">
        <li class="nav-item">
            <a class="nav-link @if (Route::is('admin-dashboard')) active @endif" href="{{route('admin-dashboard')}}">
                <span
                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-dashboard" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 4h6v8h-6z"></path>
                        <path d="M4 16h6v4h-6z"></path>
                        <path d="M14 12h6v8h-6z"></path>
                        <path d="M14 4h6v4h-6z"></path>
                     </svg>
                </span>
                <span class="nav-link-title">
                    Dashboard
                </span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ request()->segment(1) == 'paymaster' ? 'show' : '' }}" href="#navbar-base" data-bs-toggle="dropdown"
                data-bs-auto-close="false" role="button" aria-expanded="false">
                <span
                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-credit-card" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 5m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z"></path>
                        <path d="M3 10l18 0"></path>
                        <path d="M7 15l.01 0"></path>
                        <path d="M11 15l2 0"></path>
                     </svg>
                </span>
                <span class="nav-link-title">
                    PayMaster
                </span>
            </a>
            <div class="dropdown-menu {{ request()->segment(1) == 'paymaster' ? 'show' : '' }}">
                <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                        <a class="dropdown-item @if (Route::is('admin-pm-app')) active @endif" href="{{route('admin-pm-app')}}">
                            Applications
                        </a>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ request()->segment(1) == 'preferences' ? 'show' : '' }}" href="#navbar-base" data-bs-toggle="dropdown"
                data-bs-auto-close="false" role="button" aria-expanded="false">
                <span
                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-adjustments-alt" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 8h4v4h-4z"></path>
                        <path d="M6 4l0 4"></path>
                        <path d="M6 12l0 8"></path>
                        <path d="M10 14h4v4h-4z"></path>
                        <path d="M12 4l0 10"></path>
                        <path d="M12 18l0 2"></path>
                        <path d="M16 5h4v4h-4z"></path>
                        <path d="M18 4l0 1"></path>
                        <path d="M18 9l0 11"></path>
                     </svg>
                </span>
                <span class="nav-link-title">
                    Preferences
                </span>
            </a>
            <div class="dropdown-menu {{ request()->segment(1) == 'preferences' ? 'show' : '' }}">
                <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                        <a class="dropdown-item @if (Route::is('admin-pr-users')) active @endif" href="{{route('admin-pr-users')}}">
                            System Users
                        </a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>

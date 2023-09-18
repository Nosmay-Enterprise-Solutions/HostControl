<div class="nav-item dropdown">
    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
        aria-label="Open user menu">
        <span class="avatar avatar-sm"
            style="background-image: url({{asset('bank/avatar/default.jpg')}})"></span>
        <div class="d-none d-xl-block ps-2">
            <div>{{ Auth::user()->fname }}</div>
            <div class="mt-1 small text-muted">Administrator</div>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <a href="{{route('admin-profile')}}" class="dropdown-item">Profile</a>
        <div class="dropdown-divider"></div>
        <a href="{{route('auth-signout')}}" class="dropdown-item">Logout</a>
    </div>
</div>

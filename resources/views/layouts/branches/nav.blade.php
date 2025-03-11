<div class="collapse navbar-collapse" id="sidebar-menu">
    <ul class="navbar-nav pt-lg-3">
        <!-- Dashboard -->
        <li class="nav-item py-1">
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
        <!-- Customers -->
        <li class="nav-item dropdown py-1">
            <a class="nav-link dropdown-toggle {{ request()->segment(1) == 'paymaster' ? 'show' : '' }}" href="#navbar-base" data-bs-toggle="dropdown"
                data-bs-auto-close="false" role="button" aria-expanded="false">
                <span
                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-pentagon"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M13.163 2.168l8.021 5.828c.694 .504 .984 1.397 .719 2.212l-3.064 9.43a1.978 1.978 0 0 1 -1.881 1.367h-9.916a1.978 1.978 0 0 1 -1.881 -1.367l-3.064 -9.43a1.978 1.978 0 0 1 .719 -2.212l8.021 -5.828a1.978 1.978 0 0 1 2.326 0z" /><path d="M12 13a3 3 0 1 0 0 -6a3 3 0 0 0 0 6z" /><path d="M6 20.703v-.703a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v.707" /></svg>
                </span>
                <span class="nav-link-title">
                    Customers
                </span>
            </a>
            <div class="dropdown-menu {{ request()->segment(1) == 'paymaster' ? 'show' : '' }}">
                <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                        <a class="dropdown-item" href="{{route('admin-customer-add')}}">
                            Add New
                        </a>
                        <a class="dropdown-item" href="{{route('admin-customer-list')}}">
                            List
                        </a>
                        <a class="dropdown-item" href="">
                            Vouchers
                        </a>
                    </div>
                </div>
            </div>
        </li>
        <!-- Leads -->
        <li class="nav-item dropdown py-1">
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
                    Leads
                </span>
            </a>
            <div class="dropdown-menu {{ request()->segment(1) == 'preferences' ? 'show' : '' }}">
                <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                        <a class="dropdown-item" href="">
                            Dashboard
                        </a>
                        <a class="dropdown-item" href="{{route('admin-lead-add')}}">
                            Add Lead
                        </a>
                        <a class="dropdown-item" href="{{route('admin-lead-list')}}">
                            List
                        </a>
                        <a class="dropdown-item" href="">
                            Quotes
                        </a>
                    </div>
                </div>
            </div>
        </li>
        <!-- Tickets -->
        <li class="nav-item dropdown py-1">
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
                    Tickets
                </span>
            </a>
            <div class="dropdown-menu {{ request()->segment(1) == 'preferences' ? 'show' : '' }}">
                <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                        <a class="dropdown-item" href="">
                            Dashboard
                        </a>

                        <a class="dropdown-item" href="">
                            Create Ticket
                        </a>
                        <a class="dropdown-item" href="">
                            List
                        </a>
                        <a class="dropdown-item" href="">
                            Archive
                        </a>
                    </div>
                </div>
            </div>
        </li>
        <!-- Finance -->
        <li class="nav-item dropdown py-1">
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
                    Finance
                </span>
            </a>
            <div class="dropdown-menu {{ request()->segment(1) == 'preferences' ? 'show' : '' }}">
                <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                        <a class="dropdown-item" href="">
                            Dashboard
                        </a>
                        <a class="dropdown-item" href="{{route('admin-transactions-list')}}">
                            Transactions
                        </a>
                        <a class="dropdown-item" href="{{route('admin-invoices-list')}}">
                            Invoices
                        </a>
                        <a class="dropdown-item" href="">
                            Credit Notes
                        </a>
                        <a class="dropdown-item" href="">
                            Payments
                        </a>
                        <a class="dropdown-item" href="">
                            Run Bills
                        </a>
                    </div>
                </div>
            </div>
        </li>
        <!-- Messages -->
        <li class="nav-item dropdown py-1">
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
                    Messages
                </span>
            </a>
            <div class="dropdown-menu {{ request()->segment(1) == 'preferences' ? 'show' : '' }}">
                <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                        <a class="dropdown-item" href="">
                            Dashboard
                        </a>
                        <a class="dropdown-item" href="">
                            SMS
                        </a>
                        <a class="dropdown-item" href="">
                            Emails
                        </a>
                    </div>
                </div>
            </div>
        </li>
        <!-- Subscriptions-->
        <li class="nav-item py-1">
            <a class="nav-link" href="{{route('admin-subscriptions-list')}}">
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
                    Subscriptions
                </span>
            </a>
        </li>
        <!-- Service Plans -->
        <li class="nav-item dropdown py-1">
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
                    Service Plans
                </span>
            </a>
            <div class="dropdown-menu {{ request()->segment(1) == 'preferences' ? 'show' : '' }}">
                <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                        <a class="dropdown-item" href="{{route('admin-recurring-services-list')}}">
                            Recurring
                        </a>
                        <a class="dropdown-item" href="{{route('admin-onetime-services-list')}}">
                            One-Time
                        </a>
                        <a class="dropdown-item" href="{{route('admin-bundled-services-list')}}">
                            Bundles
                        </a>
                    </div>
                </div>
            </div>
        </li>
        <!-- Admininstration -->
        <li class="nav-item py-1">
            <a class="nav-link @if (Route::is('admin-dashboard')) @endif" href="{{route('admin.administration')}}">
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
                    Administration
                </span>
            </a>
        </li>
        <!-- Configurations -->
        <li class="nav-item py-1">
            <a class="nav-link @if (Route::is('admin-dashboard')) @endif" href="{{route('admin-dashboard')}}">
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
                    Configurations
                </span>
            </a>
        </li>

    </ul>
</div>

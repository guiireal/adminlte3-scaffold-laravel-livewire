<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
        data-accordion="false">
        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('home') }}" wire:navigate
                       class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('page-2') }}" wire:navigate
                       class="nav-link {{ request()->routeIs('page-2') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Página 2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('page-3') }}" wire:navigate
                       class="nav-link {{ request()->routeIs('page-3') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Página 3</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>

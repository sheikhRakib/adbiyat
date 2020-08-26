<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Company Logo -->
    <a href="{{ route('frontend.home') }}" class="brand-link">
        <img src="{{ asset('/uploads/system/logo.svg') }}" alt="{{ env('APP_NAME','Adbiyat') }}" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">{{ env('APP_NAME','Adbiyat') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link {{ (request()->is('dashboard*') ? 'active' : '') }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>


                <li class="nav-item has-treeview {{ (request()->is('dealership*') ? 'menu-open' : '') }}">
                    <a href="#" class="nav-link {{ (request()->is('dealership*') ? 'active' : '') }}">
                        <i class="nav-icon fa fa-institution"></i>
                        <p>Articles<i class="right fas fa-angle-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('backend.admin.dashboard') }}" class="nav-link {{ (request()->is('dealership/criteria*') ? 'active' : '') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>article</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend.admin.dashboard') }}" class="nav-link {{ (request()->is('dealership/applications*') ? 'active' : '') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

 <div class="sidebar " data-color="green" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
            <div class="logo">
                <a href="" class="simple-text logo-normal">
                    MANAGEMENT PAGE
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item {{ Request::is('admin') ? 'active' : '' }} ">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>


                    <li class="nav-item {{ Request::is('admin/users*') ? 'active' : '' }} ">
                        <a class="nav-link" href="{{ route('admin.users') }}">
                            <i class="material-icons">person</i>
                            <p>User management</p>
                        </a>
                    </li>

                    <li class="nav-item {{ Request::is('admin/danhsachsanpham*') ? 'active' : '' }} ">
                        <a class="nav-link" href="{{ route('danhsachsanpham.index') }}">
                            <i class="material-icons">bubble_chart</i>
                            <p>Product management</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin/danhsachloai*') ? 'active' : '' }} ">
                        <a class="nav-link" href="{{ route('danhsachloai.index') }}">
                            <i class="material-icons">bubble_chart</i>
                            <p>Category management</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin/danhsachdonhang*') ? 'active' : '' }} ">
                        <a class="nav-link" href="{{ route('danhsachdonhang.index') }}">
                            <i class="material-icons">bubble_chart</i>
                            <p>Order management</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin/danhsachvanchuyen*') ? 'active' : '' }} ">
                        <a class="nav-link" href="{{ route('danhsachvanchuyen.index') }}">
                            <i class="material-icons">bubble_chart</i>
                            <p>Transportation management</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin/baocao*') ? 'active' : '' }} ">
                        <a class="nav-link" href="{{ route('admin.baocao.donhang') }}">
                            <i class="material-icons">bubble_chart</i>
                            <p>Statistics management</p>
                        </a>
                    </li>
                    <li class="nav-item">
                    <a href="{{ route('admin.logout') }}"><i class="material-icons">person</i>
                        Logout
                    </a>
                    
                    </li>
                </ul>
            </div>
        </div>
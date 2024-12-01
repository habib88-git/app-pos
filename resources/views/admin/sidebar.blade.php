<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                @if (Auth::user() == null )
                <p class="d-block" style="color: white">Guest Account</p>
                @else
                    <span class="d-block" style="color: white">{{Auth::user()->name}}</span>
                    <span style="color: white">{{Auth::user()->role}}</span>
                @endif
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @if (Auth::user()->role == "Admin")
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Starter Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.index')}}" class="nav-link">
                                <i class="fas fa-home nav-icon"></i>
                                <p>Dashboard Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('category.index')}}" class="nav-link">
                                <i class="fas fa-th-list nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('product.index')}}" class="nav-link">
                                <i class="fas fa-box-open nav-icon"></i>
                                <p>Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('customer.index')}}" class="nav-link">
                                <i class="fas fa-users nav-icon"></i>
                                <p>Customer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('user.index')}}" class="nav-link">
                                <i class="fas fa-user nav-icon"></i>
                                <p>User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('report.index')}}" class="nav-link">
                                <i class="fas fa-chart-line nav-icon"></i>
                                <p>Report</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Report Transaction
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('report.index')}}" class="nav-link">
                                <i class="fas fa-book nav-icon"></i>
                                <p>Report Transaction</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif

                @if (Auth::user()->role == "Cashier")
                <li class="nav-item">
                    <a href="{{route('cashier.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-cash-register"></i>
                        <p>Dashboard Cashier</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('transaction.index')}}" class="nav-link">
                        <i class="fas fa-shopping-cart nav-icon"></i>
                        <p>Transaction</p>
                    </a>
                </li>
                @endif

                <li class="nav-item">
                    <a href="{{route('logout')}}" class="nav-link">
                        <i class="fas fa-sign-out-alt nav-icon"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

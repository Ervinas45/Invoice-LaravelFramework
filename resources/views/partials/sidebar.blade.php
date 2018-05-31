<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu"
            data-keep-expanded="false"
            data-auto-scroll="true"
            data-slide-speed="200">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-sign-out fa-fw"></i>
                    <span class="title">Home</span>
                </a>
            </li>
            <li>
                <a href="{{ url('users') }}">
                    <i class="fa fa-sign-out fa-fw"></i>
                    <span class="title">Users</span>
                </a>
            </li>
            <li>
                <a href="{{ url('customers') }}">
                    <i class="fa fa-sign-out fa-fw"></i>
                    <span class="title">Customers</span>
                </a>
            </li>
            <li>
                <a href="{{ url('invoice') }}">
                    <i class="fa fa-sign-out fa-fw"></i>
                    <span class="title">Invoices</span>
                </a>
            </li>
            <li>
                <a href="{{ url('settings') }}">
                    <i class="fa fa-sign-out fa-fw"></i>
                    <span class="title">Settings</span>
                </a>
            </li>

            <li>
                <a href="{{ url('logout') }}">
                    <i class="fa fa-sign-out fa-fw"></i>
                    <span class="title">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>

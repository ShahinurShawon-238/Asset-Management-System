<!--
          ====================================
          ———------- LEFT SIDEBAR ------------
          =====================================
        -->
<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Application Brand -->
        <div class="app-brand">
            <a href="{{ route('admin.index') }}">
                <!--  -->
                <span class="brand-name ml-5">Dashboard</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{route('building')}}">
                        <i class="mdi mdi-home"></i>
                        <span class="nav-text">Buildings</span> <b class="caret"></b>
                    </a>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{route('floor')}}">
                        <i class="mdi mdi-cube"></i>
                        <span class="nav-text">Floors</span> <b class="caret"></b>
                    </a>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{route('shop')}}">
                        <i class="mdi mdi-store"></i>
                        <span class="nav-text">Shops</span> <b class="caret"></b>
                    </a>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{route('rent')}}">
                        <i class="mdi mdi-currency-usd"></i>
                        <span class="nav-text">Rents</span> <b class="caret"></b>
                    </a>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{route('tenant')}}">
                        <i class="mdi mdi-account"></i>
                        <span class="nav-text">Tenant</span> <b class="caret"></b>
                    </a>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{route('totalAsset')}}">
                        <i class="mdi mdi-equal"></i>
                        <span class="nav-text">Total Assets</span> <b class="caret"></b>
                    </a>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{route('additionalAsset')}}">
                        <i class="mdi mdi-plus"></i>
                        <span class="nav-text">Additional Assets</span> <b class="caret"></b>
                    </a>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{route('file')}}">
                        <i class="mdi mdi-file"></i>
                        <span class="nav-text">Files</span> <b class="caret"></b>
                    </a>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{route('todo')}}">
                        <i class="mdi mdi-gavel"></i>
                        <span class="nav-text">TODO List</span> <b class="caret"></b>
                    </a>
                </li>
            </ul>
        </div>
        <hr class="separator" />
    </div>
</aside>


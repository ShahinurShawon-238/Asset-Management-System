<header class="main-header " id="header">
    <nav class="navbar navbar-static-top navbar-expand-lg">
        <!-- Sidebar toggle button -->
        <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
        </button>
        <!-- search form -->
        <div class="search-form d-none d-lg-inline-block">
            
        </div>

        <div class="navbar-right ">
            <ul class="nav navbar-nav">
                <!-- User Account -->
                <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <img src="{{ Auth::user()->profile_photo_url }}" class="user-image" alt="{{ Auth::user()->name }}">
                        <span class="d-none d-lg-inline-block">{{ Auth::user()->name }}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <!-- User image -->
                        <li class="dropdown-header">
                            <img src="{{ Auth::user()->profile_photo_url }}" class="img-circle" alt="{{ Auth::user()->name }}" />
                            <div class="d-inline-block">
                                {{ Auth::user()->name }} <small class="pt-1">{{ Auth::user()->email }}</small>
                            </div>
                        </li>

                        <li>
                            <a href="{{ route('profile.show') }}">
                                <i class="mdi mdi-account"></i> My Profile
                            </a>
                        </li>
                        <li class="dropdown-footer">
                            <a href="{{ route('user.logout') }}"> <i class="mdi mdi-logout"></i> Log Out </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>


</header>

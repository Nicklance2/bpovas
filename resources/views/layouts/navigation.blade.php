<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                @if(Auth::check())
                                    <strong class="font-bold">{{ Auth::user()->first_name }}<b class="caret"></b></strong>
                                @endif
                            </span> <span class="text-muted text-xs block">{{ Auth::user()->company }}</span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="{{ isActiveRoute('main') }}">
                <a href="{{ url('/admin') }}"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>
            </li>
            <li class="{{ isActiveRoute('profile') }}">
                <a href="{{ url('/admin/profile') }}"><i class="fa fa-user-o"></i> <span class="nav-label">Profile</span> </a>
            </li>
            <li class="{{ isActiveRoute('settings') }}">
                <a href="{{ url('/admin/settings') }}"><i class="fa fa-gear"></i> <span class="nav-label">Settings</span> </a>
            </li>
            <li class="{{ isActiveRoute('pipeline') }}">
                <a href="{{ url('/admin/pipeline') }}"><i class="fa fa-list"></i> <span class="nav-label">Pipeline</span> </a>
            </li>
        </ul>

    </div>
</nav>

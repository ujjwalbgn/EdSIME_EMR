<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        {{--<li class="nav-item">--}}
            {{--<a href="/dashboard" class="nav-link">--}}
                {{--<i class="nav-icon fas fa-tachometer-alt blue"></i>--}}
                {{--<p>--}}
                    {{--Dashboard--}}
                    {{--<span class="right badge badge-danger">New</span>--}}
                {{--</p>--}}
            {{--</a>--}}
        {{--</li>--}}
        @can('isAdmin')
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link ">
                    <i class="nav-icon fas fa-cogs green"></i>
                    <p>
                        Management
                        <i class="right fa fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/users" class="nav-link {{ Request::segment(1) == 'users' ? 'nav-active' : '' }}" >
                            <i class="fas fa-users nav-icon tealEF"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/userProfile" class="nav-link {{ Request::segment(1) == 'userProfile' ? 'nav-active' : '' }} ">
                            <i class="nav-icon fas fa-user-alt orange"></i>
                            <p>
                                Profile
                            </p>
                        </a>
                    </li>
                </ul>
            </li>
        @endcan
        @can('isAdminAuthor')
        <li class="nav-item">
                <a href="/patient" class="nav-link {{ Request::segment(1) == 'patient' ? 'nav-active' : '' }}">
                    <i class="nav-icon fa fa-user-md indigo"></i>
                    <p>
                        Patient
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/medication" class="nav-link {{ Request::segment(1) == 'medication' ? 'nav-active' : '' }}">
                    <i class="nav-icon fas fa-briefcase-medical blue"></i>
                    <p>
                        Medication
                    </p>
                </a>
            </li>
            {{--<li class="nav-item">--}}
                {{--<a href="/developer" class="nav-link">--}}
                    {{--<i class="nav-icon fas fa-user-cog teal"></i>--}}
                    {{--<p>--}}
                        {{--Developer--}}
                    {{--</p>--}}
                {{--</a>--}}
            {{--</li>--}}
        @endcan


        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-power-off red"></i>
                <p>
                    {{ __('Logout') }}
                </p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>




  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <div class="sidebar-inner">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="">
                    <a class="active" href="{{ route('home') }}">
                        <i class="la la-dashboard"></i>
                        <span> Dashboard</span> 
                    </a>
                </li>


                @if (Auth::user()->hasrole('superadmin'))
                    <li class="submenu">
                        <a href="#">
                            <i class="la la-user-secret"></i> <span> User Controller</span> <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="{{ route('userManagement') }}">All Roles</a></li>
                            <li><a href="/users">All Users</a></li>
                        </ul>
                    </li>
                @endif

                <li class="submenu">
                    <a href="#">
                        <i class="la la-user"></i> <span>YCM</span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none;">
                        <li><a href="{{ route('all/employee/card') }}">ALL YCMs</a></li>
                        <li><a href="/ycmtasks">Ycm Tasks</a></li>


                    </ul>
                </li>

                <li class="submenu">
                    <a href="#">
                        <i class="la la-files-o"></i> <span> Salary System </span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none;">
                        <li><a href="/salary/paid">Paid YCMs</a></li>


                    </ul>
                </li>

                <li class="submenu"> <a href="#"><i class="la la-file"></i>
                    <span> Contracts  </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('contracts/all') }}"> All Contracts </a></li>
                    </ul>

                </li>


                </li>

            </ul>
        </div>
    </div>
</div>


<nav class="navbar-default navbar-side" role="navigation">
    <!-- <div id="sideNav" href=""><i class="fa fa-caret-right"></i></div> -->
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <a href="{{action('DocController@index')}}"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap"></i> Patient<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{action('DocController@newcase')}}">Write new case</a>
                    </li>
                    <li>
                        <a href="{{ action('DocController@patientdb') }}">Patient Database</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap"></i> Clinic Report<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Financial - reserve</a>
                    </li>
                    <li>
                        <a href="#">Statistics -reserve</a>
                    </li>
                </ul>
            </li>

            <!-- <li>
                <a href="{{action('StaffController@index')}}"><i class="fa fa-fw fa-file"></i> Empty Page</a>
            </li> -->
        </ul>

    </div>

</nav>
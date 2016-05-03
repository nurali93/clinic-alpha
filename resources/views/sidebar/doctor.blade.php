<nav class="navbar-default navbar-side" role="navigation">
    <!-- <div id="sideNav" href=""><i class="fa fa-caret-right"></i></div> -->
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <a href="{{action('DocController@index')}}"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="{{action('PatientController@index')}}"><i class="fa fa-pencil-square"></i> Patient</a>
            </li>
			<!-- <li>
                <a href="{{action('CaseController@create')}}"><i class="fa fa-money"></i> Write Case</a>
            </li> -->
        </ul>

    </div>

</nav>
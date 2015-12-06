<nav class="navbar-default navbar-side" role="navigation">
    <!-- <div id="sideNav" href=""><i class="fa fa-caret-right"></i></div> -->
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <a href="{{ action('StaffController@index') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="{{action('StaffController@register')}}"><i class="fa fa-pencil-square"></i> Registration</a>
            </li>
			<li>
                <a href="{{action('StaffController@panel')}}"><i class="fa fa-money"></i> Panel List</a>
            </li>
            <li>
                <a href="{{action('StaffController@dispense')}}"><i class="fa fa-qrcode"></i> Dispensary</a>
            </li>
            <li>
                <a href="{{action('InvController@index')}}"><i class="fa fa-archive"></i> Inventory</a>
            </li>
            <!-- <li>
                <a href="{{action('StaffController@index')}}"><i class="fa fa-fw fa-file"></i> Empty Page</a>
            </li> -->
        </ul>

    </div>

</nav>
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="/admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Input Parameters<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        {{ HTML::link('/admin/destinations', 'Destinations')}}
                    </li>
                    <li>
                        {{ HTML::link('/admin/inspections', 'Inspections')}}
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-car"></i> Cars<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        {{ HTML::link('/admin/products/create', 'Add Car')}}
                    </li>
                    <li>
                        {{HTML::link('/admin/products','Car List')}}
                    </li>
                    <li>
                        <a href="morris.html">Estimator</a>
                    </li>
                    <li>
                        <a href="morris.html">Photos</a>
                    </li>
                    <li>
                        <a href="morris.html">Export Stock</a>
                    </li>
                    <li>
                        <a href="morris.html">Tradecarview Sale Report</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-file"></i> Invoice<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="flot.html">New Invoice</a>
                    </li>
                    <li>
                        <a href="morris.html">List Invoices</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-cog"></i> Admin Panel<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        {{ HTML::link('/admin/customerVoices', 'New Customer Voice')}}
                    </li>
                    <li>
                        <a href="morris.html">Customer Voice List</a>
                    </li>
                    <li>
                        <a href="morris.html">Estimator Options</a>
                    </li>
                    <li>
                        <a href="morris.html">Images</a>
                    </li>
                    <li>
                        <a href="morris.html">Categories</a>
                    </li>
                    <li>
                        {{HTML::link('/admin/companies','Companies')}}
                    </li>
                    <li>
                        {{ HTML::link('/admin/models','Models') }}
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-newspaper-o"></i> Body Style<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                {{ HTML::link('/admin/bodyStyleMaster','Master') }}
                            </li>
                            <li>
                                {{ HTML::link('/admin/bodyStyleChildren','Child') }}
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="morris.html">Products Order</a>
                    </li>
                    <li>
                        <a href="morris.html">Hot Offers</a>
                    </li>
                    <li>
                        {{ HTML::link('/admin/fuelTypes','Fuel Types') }}
                    </li>
                    <li>
                        {{ HTML::link('/admin/colors','Manage Colors') }}
                    </li>
                    <li>
                        {{ HTML::link('/admin/steerings','Steering') }}
                    </li>
                    <li>
                        {{ HTML::link('/admin/transmissions','Transmissions') }}
                    </li>
                    <li>
                        {{ HTML::link('/admin/driveTypes','Drive Types') }}
                    </li>
                    <li>
                        {{ HTML::link('/admin/conditions','Conditions') }}
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-newspaper-o"></i> Newsletter<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="flot.html">Manager Subscribers</a>
                    </li>
                    <li>
                        <a href="morris.html">List Newsletters</a>
                    </li>
                    <li>
                        <a href="morris.html">Add Newsletter</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-cc-discover"></i> Banner<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        {{ HTML::link('/admin/banners', 'List Banners')}}
                    </li>
                    <li>
                        {{ HTML::link('/admin/banners/create', 'Add Banner')}}
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-triangle-top"></i> Top Ten<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="flot.html">List Top Ten</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> Sale<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="flot.html">Vehicles On Sale</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li>




        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>


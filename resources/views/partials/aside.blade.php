        <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
        <aside>
            <div id="sidebar">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">

                    <p class="centered"><a href="profile.html"><img src="{{ asset('Content/Theme/assets/img/ui-macu.jpg') }}" class="img-circle" width="60"></a></p>
                    <h5 class="centered">MACU MERP</h5>

                    <li class="mt">
                        <a class="active" href="{{ url('/') }}">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>

                    </li>



                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-cogs"></i>
                            <span>MERP_U00000</span>
                        </a>
                        <ul class="sub">
                            <li>

                                <a href="javascript:;">
                                    <i class="fa fa-cogs"></i>
                                    <span>A.新手上路</span>
                                </a>
                                <ul class="sub">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-cogs"></i>
                                            <span>J.部門建立作業</span>
                                        </a>
                                        <ul class="sub">
                                            <li>{{!! action('Create') !!}}</li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-cogs"></i>
                                            <span>K.督導建立作業</span>
                                        </a>
                                        <ul class="sub">
                                            <li>{{!! action('Create') !!}}</li>


                                        </ul>
                                    </li>
                                </ul>

                            </li>


                        </ul>
                    </li>


                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-cogs"></i>
                            <span>MERP_T00000</span>
                        </a>
                        <ul class="sub">

                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-cogs"></i>
                                    <span>C.會計帳簿查詢列印</span>
                                </a>
                                <ul class="sub">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-cogs"></i>
                                            <span>C.日記帳</span>
                                        </a>
                                        <ul class="sub">
                                            <li>{{!! action('Index') !!}}</li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-cogs"></i>
                                            <span>F.勞健保薪資</span>
                                        </a>
                                        <ul class="sub">
                                            <li>{{!! action('Create') !!}}</li>

                                        </ul>
                                    </li>

                                </ul>
                            </li>

                        </ul>
                    </li>


                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Extra Pages</span>
                            </a>
                            <ul class="sub">
                                <li><a href="blank.html">Blank Page</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="lock_screen.html">Lock Screen</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-tasks"></i>
                                <span>Forms</span>
                            </a>
                            <ul class="sub">
                                <li><a href="form_component.html">Form Components</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-th"></i>
                                <span>Data Tables</span>
                            </a>
                            <ul class="sub">
                                <li><a href="basic_table.html">Basic Table</a></li>
                                <li><a href="responsive_table.html">Responsive Table</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class=" fa fa-bar-chart-o"></i>
                                <span>Charts</span>
                            </a>
                            <ul class="sub">
                                <li><a href="morris.html">Morris</a></li>
                                <li><a href="chartjs.html">Chartjs</a></li>
                            </ul>
                        </li>

                </ul>
                <!-- sidebar menu end-->

            </div>
        </aside>
        <!--sidebar end-->

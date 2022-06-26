@auth

<!--Administrator Sidebar-->
@role('administrator')
<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="#"
                        aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <li class="list-divider"></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                            class="hide-menu">Categories </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="{{ route('admin.cates.index') }}" class="sidebar-link"><span
                                    class="hide-menu"> view
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{ route('admin.cates.create') }}" class="sidebar-link"><span
                                    class="hide-menu"> Manage
                                </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                            class="hide-menu">Asked Problem </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="{{ route('admin.problem.index')}}" class="sidebar-link"><span
                                    class="hide-menu"> View
                                </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="bar-chart" class="feather-icon"></i><span
                            class="hide-menu">Solutions </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="{{ route('admin.soln.index') }}" class="sidebar-link"><span
                                    class="hide-menu"> View
                                </span></a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                    aria-expanded="false"><i data-feather="bar-chart" class="feather-icon"></i><span
                        class="hide-menu">Expert </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="{{ route('expert_list.index') }}" class="sidebar-link"><span
                                    class="hide-menu"> View
                                </span></a>
                        </li>

                        <li class="sidebar-item"><a href="{{ route('admin.soln.index') }}" class="sidebar-link"><span
                            class="hide-menu"> Add New
                                </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                        aria-expanded="false"><i power-feather="sidebar" class="icon-logout"></i><span
                            class="hide-menu">Logout
                        </span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                <li class="list-divider"></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
@endrole

<!--Expert Sidebar-->
@role('expert')
<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="#"
                        aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <li class="list-divider"></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                            class="hide-menu">Categories </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="{{ route('expert.cates.index') }}" class="sidebar-link"><span
                                    class="hide-menu"> view
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="" class="sidebar-link"><span
                                    class="hide-menu"> Manage
                                </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                            class="hide-menu">Asked Problem </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="{{ route('expert.problem.index') }}" class="sidebar-link"><span
                                    class="hide-menu"> View
                                </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="bar-chart" class="feather-icon"></i><span
                            class="hide-menu">Solutions </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="{{ route('expert.soln.index') }}" class="sidebar-link"><span
                                    class="hide-menu"> View
                                </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                        aria-expanded="false"><i power-feather="sidebar" class="icon-logout"></i><span
                            class="hide-menu">Logout
                        </span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                <li class="list-divider"></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
@endrole

<!--User Sidebar-->
@role('user')
<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="#"
                        aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Components</span></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                            class="hide-menu">My Problem </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="{{ route('user.problem.index') }}" class="sidebar-link"><span
                                    class="hide-menu"> View
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{ route('user.problem.create') }}" class="sidebar-link"><span
                                    class="hide-menu"> New Problem
                                </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                            class="hide-menu">IT Solutions </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="{{ route('users.index') }}" class="sidebar-link"><span
                                    class="hide-menu"> View
                                </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                    aria-expanded="false"><i power-feather="sidebar" class="icon-logout"></i><span
                        class="hide-menu">Logout
                        </span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                <li class="list-divider"></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
@endrole

@endauth

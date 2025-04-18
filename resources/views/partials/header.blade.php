<header>
    <div class="headline_container">
        <h2>Student Management System</h2>
    </div>
    <div class="container">
        <div class="sidebar">
            <nav>
                <ul class="menu">
                    <li class="menu-item">
                        <i class="fa-solid fa-gauge-high"></i>
                            <a href="{{ route('manager_system') }}">
                                Dashboard
                            </a>
                    </li>
                    <li class="menu-item">
                        <i class="fa-solid fa-chart-line"></i> 
                            Course
                                <i class="fa-regular fa-square-caret-left toggle-icon"></i>
                                    <ul class="submenu">
                                        <li class="active">
                                            <a href="">
                                                Add Course
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                View
                                            </a>
                                        </li>
                                    </ul> 
                    </li>
                    <li class="menu-item">
                        <i class="fa-solid fa-chart-line"></i> 
                            Subject
                        <i class="fa-regular fa-square-caret-left toggle-icon"></i>
                            <ul class="submenu">
                                <li class="active">
                                    <a href="">
                                        Add Course
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        View
                                    </a>
                                </li>
                            </ul> 
                    </li>
                    <li class="menu-item">
                        <i class="fa-solid fa-chart-line"></i>
                            Register
                        <i class="fa-regular fa-square-caret-left toggle-icon"></i>
                            <ul class="submenu">
                                <li class="active">
                                    <a href="">
                                        Add Course
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        View
                                    </a>
                                </li>
                            </ul> 
                    </li>
                    <li class="menu-item">
                        <i class="fa-solid fa-chart-line"></i> 
                            View Students
                        <i class="fa-regular fa-square-caret-left toggle-icon"></i>
                            <ul class="submenu">
                                <li class="active">
                                    <a href="">
                                        Add Course
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        View
                                    </a>
                                </li>
                            </ul> 
                    </li>
                    <li class="menu-item">
                        <i class="fa-solid fa-chart-line"></i> 
                            Session
                        <i class="fa-regular fa-square-caret-left toggle-icon"></i>            
                            <ul class="submenu">
                                <li class="active">
                                    <a href="">
                                        Add Course
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        View
                                    </a>
                                </li>
                            </ul> 
                    </li>
                    <li class="menu-item">
                        <i class="fa-solid fa-chart-line"></i> 
                            Logout
                        <i class="fa-regular fa-square-caret-left "></i> 
                            <ul class="submenu">
                                <li class="active">
                                    <a href="">
                                        Add Course
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        View
                                    </a>
                                </li>
                            </ul> 
                    </li>
                </ul>
            </nav>
        </div>
        @yield('content')
    </div>
</header>
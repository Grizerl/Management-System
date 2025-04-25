<aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a style="user-select: none;" class="brand-link ">
          <img src="/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Welcome {{Auth::user()->name}}</span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div style="user-select: none;" class="info">
            <a class="d-block ml-2">Stydent Manager System</a>
          </div>
        </div>
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('manager_system') }}" class="nav-link">
              <i class="fa-solid fa-house"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-newspaper"></i>
              <p>
                Course
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('courses.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>
                      Course Creation
                    </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('courses.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>
                      Show Courses
                    </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-layer-group"></i>
              <p>
                Subject
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('subjects.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>
                      New Subject
                    </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('subjects.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>
                      Browse Subjects
                    </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-regular fa-address-card"></i>
              <p>
                Register
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('register.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>
                      Create Logbook
                    </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('register.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>
                      View Logbook
                    </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-calendar"></i>
              <p>
                Session
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('register.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>
                      Begin Session
                    </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('register.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>
                      Check Session                    
                    </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-users-rays"></i>
                <p>
                  Oversee Students
                </p>
            </a>
          </li>
          <li class="nav-item">
            <form action="" method="post">
              @csrf
                <button style="border: none;" class="nav-link mt-2" type="submit">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <p>
                    Logout
                    </p> 
                </button>
            </form>
          </li>
        </nav>
      </div>
</aside>
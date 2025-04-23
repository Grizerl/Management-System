<aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a style="user-select: none;" class="brand-link ">
          <img src="/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">{{Auth::user()->name}}</span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div style="user-select: none;" class="info">
            <a class="d-block ml-2">Administrator Console</a>
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
                     Add Course
                    </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('courses.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>
                     View
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
                    Add Subject
                    </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('subjects.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>
                        View
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
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>
                     Add Register
                    </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>
                      View
                    </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fa-solid fa-book-bookmark"></i> 
                <p>
                 Session
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-users-rays"></i>
                <p>
                 Add  Session
                  <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                   View
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Create New User
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-gears"></i>
              <p>
                View Students
              </p>
            </a>
          </li>
          <li class="nav-item">
            <form action="" method="post">
              @csrf
                <button style="border: none;" class="nav-link" type="submit">
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
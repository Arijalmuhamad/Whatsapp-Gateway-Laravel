<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset ('') }}assets/dist/img/whatsapp.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Whatsapp API</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset ('') }}assets/dist/img/user1-128x128.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            

          {{-- dashboard --}}
          <li class="nav-item">
            <a class="nav-link {{ $title === "Dashboard" ? 'active' : '' }}" href="/">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          {{-- menu whatsapp --}}
          <li class="nav-item menu open">
            <a class="nav-link" href="#">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Menu Whatsapp
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a class="nav-link {{ $title === "Send Message" ? 'active' : '' }}" href="/send_message">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Send Message</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $title === "Webhook" ? 'active' : '' }}" href="/webhook"> 
                    <i class="far fa-circle nav-icon"></i>
                  <p>Webhook</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $title === "Menu Whatsapp" ? 'active' : '' }}" href="/whatsapp_menu">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Whatsapp</p>
                </a>
              </li>
            </ul>
          </li>
    
          {{-- menu Broadcast --}}
          <li class="nav-item">
            <a class="nav-link {{ $title === "Broadcast" ? 'active' : '' }}" href="/broadcast">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>
                Broadcast
              </p>
            </a>
          </li>

          {{-- menu auto replay --}}
          <li class="nav-item">
            <a class="nav-link {{ $title === "Auto Replay" ? 'active' : '' }}" href="/replay">
              <i class="nav-icon fas fa-paper-plane"></i>
              <p>
                Auto Replay
              </p>
            </a>
          </li>

          {{-- menu contact --}}
          <li class="nav-item">
            <a class="nav-link {{ $title === "Contact" ? 'active' : '' }}" href="/contact">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Contact
              </p>
            </a>
          </li>

          {{-- menu rest API --}}
          <li class="nav-item">
            <a class="nav-link {{ $title === "Rest API" ? 'active' : '' }}" href="/api">
              <i class="nav-icon fas fa-code"></i>
              <p>
                Rest API
              </p>
            </a>
          </li>

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
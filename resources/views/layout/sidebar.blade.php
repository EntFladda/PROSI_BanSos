<div class="sidebar"style="background-color: #d6d0d0">
    <!-- SidebarSearch Form -->
    <div class="form-inline mt-2">
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
        <li class="nav-header" style="color: black;font-weight:bold;font-size:122%">Menu</li>
        
        <!--<li class="nav-item" style="background-color: #1b3b40">
          <a href="{{ url('/') }}" class="nav-link {{ ($activeMenu == 'dashboard')? 'active' : '' }} ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>DASHBOARD</p>
          </a>
        </li>-->

        <li class="nav-item"style="background-color: #1b3b40;border-radius:10px;margin:5px">
            <a href="{{ url('/level') }}" class="nav-link {{ ($activeMenu == 'level')? 'active' : '' }} ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>DASHBOARD</p>
            </a>
          </li>
        
        <li class="nav-item"style="background-color: #1b3b40;border-radius:10px;margin:5px">
          <a href="{{ url('/level') }}" class="nav-link {{ ($activeMenu == 'level')? 'active' : '' }} ">
            <i class="nav-icon fas fa-layer-group"></i>
            <p>PENGAJUAN</p>
          </a>
        </li>
        <li class="nav-item"style="background-color: #1b3b40;border-radius:10px;margin:5px">
          <a href="{{ url('/user') }}" class="nav-link {{ ($activeMenu == 'user')? 'active' : '' }}">
            <i class="nav-icon far fa-user"></i>
            <p>VALIDASI</p>
          </a>
        </li>
        
        <li class="nav-item"style="background-color: #1b3b40;border-radius:10px;margin:5px">
          <a href="{{ url('/kategori') }}" class="nav-link {{ ($activeMenu == 'kategori')? 'active' : '' }} ">
            <i class="nav-icon far fa-bookmark"></i>
            <p>LAPORAN</p>
          </a>
        </li>
        
        
      </ul>
    </nav>
  </div>
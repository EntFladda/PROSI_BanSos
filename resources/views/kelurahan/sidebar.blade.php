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
     

        <li class="nav-item"style="background-color: #1b3b40;border-radius:10px;margin:5px">
            <a href="{{ url('/dashboardrt') }}" class="nav-link {{ ($activeMenu == 'dashboardrt')? 'active' : '' }} ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>DASHBOARD</p>
            </a>
          </li>
        
        <li class="nav-item"style="background-color: #1b3b40;border-radius:10px;margin:5px">
          <a href="{{ url('/level') }}" class="nav-link {{ ($activeMenu == 'level')? 'active' : '' }} ">
            <i class="nav-icon fas fa-layer-group"></i>
            <p>INFORMASI</p>
          </a>
        </li>

        <li class="nav-item"style="background-color: #1b3b40;border-radius:10px;margin:5px">
          <a href="{{ url('/level') }}" class="nav-link {{ ($activeMenu == 'level')? 'active' : '' }} ">
            <i class="nav-icon fas fa-layer-group"></i>
            <p>PENGAJUAN</p>
          </a>
        </li>
        
        <li class="nav-item" style="background-color: #1b3b40; border-radius:10px; margin:5px">
          <a href="{{ url('/kategori') }}" class="nav-link {{ ($activeMenu == 'kategori')? 'active' : '' }} ">
              <i class="nav-icon far fa-bookmark"></i>
              <p>LAPORAN</p>
              <span class="fas fa-caret-down" style="position:absolute; top:50%; right:20px; transform:translateY(-50%); transition:transform 0.4s"></span>
              <ul class="submenu-penerimaan" hidden style="background-color: #1b3b40; border-radius:10px; margin:5px">
                  <li class="nav-item">
                      <a href="{{ url('/kategori') }}" class="nav-link {{ ($activeMenu == 'kategori')? 'active' : '' }} ">
                          <i class="nav-icon far fa-bookmark"></i>
                          <p>PENERIMAAN</p>
                      </a>
                  </li>
              </ul>
          </a>
      </li>
      
        
      </ul>
    </nav>

  </div>
  <script>
    // JavaScript for dropdown menu functionality
    const laporanLink = document.querySelector('.sidebar .nav-item a[p="LAPORAN"]');
    const laporanSubMenu = document.querySelector('.sidebar .nav-item ul');

    laporanLink.addEventListener('click', () => {laporanSubMenu.classList.toggle('hidden');
    });
  </script>
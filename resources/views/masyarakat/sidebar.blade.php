<div class="sidebar"style="background-color: #d6d0d0">
    <!-- SidebarSearch Form -->
    <div class="form-inline mt-2">

    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header" style="color: black;font-weight:bold;font-size:122%">Menu</li>


        <li class="nav-item"style="background-color: #1b3b40;border-radius:10px;margin:5px">
            <a href="{{ url('/dashboardm') }}" class="nav-link {{ ($activeMenu == 'level')? 'active' : '' }} ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>DASHBOARD</p>
            </a>
          </li>

        <li class="nav-item"style="background-color: #1b3b40;border-radius:10px;margin:5px">
          <a href="{{ url('/informasi') }}" class="nav-link {{ ($activeMenu == 'level')? 'active' : '' }} ">
            <i class="nav-icon fas fa-layer-group"></i>
            <p>INFORMASI BANSOS</p>
          </a>
        </li>

        <li class="nav-item"style="background-color: #1b3b40;border-radius:10px;margin:5px">
          <a href="{{ url('/pengajuanm') }}" class="nav-link {{ ($activeMenu == 'level')? 'active' : '' }} ">
            <i class="nav-icon fas fa-layer-group"></i>
            <p>PENGAJUAN</p>
          </a>
        </li>

        <li class="nav-item" style="background-color: #1b3b40; border-radius:10px; margin:5px">
          <a href="{{ url('/konfirmasi') }}" class="nav-link {{ ($activeMenu == 'kategori')? 'active' : '' }} ">
              <i class="nav-icon far fa-bookmark"></i>
              <p>KONFIRMASI</p>
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

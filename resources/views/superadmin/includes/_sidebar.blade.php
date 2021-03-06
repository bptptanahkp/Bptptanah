    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion toggled" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center shadow" href="/">
      <img src="{{asset('photo/logo.png')}}"  height="250%">
        <div class="sidebar-brand-text mx-3">BptpJatim</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/admin">
          <i class="fa fa-fw fa-tachometer"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
          <i class="fa fa-dollar"></i>
          <span>Kategori Uji Tanah</span>
        </a>
        <div id="collapse1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Kategori:</h6>
            <a class="collapse-item" href="/supertarifanalisiskimia">Analisis Kimia Tanah Rutin</a>
            <a class="collapse-item" href="/supertarifpupukorganik">Pupuk Organik/Kompos/Cair</a>
            <a class="collapse-item" href="/supertarifpupukkimia">Pupuk Kimia(Anorganik)</a>
            <a class="collapse-item" href="/supertariftanaman">Tanaman</a>
            <a class="collapse-item" href="/supertarifpengujianair">Pengujian Air</a>

          </div>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#peraturan" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fa fa-fw fa-align-justify"></i>
          <span>Proser Pemesanan</span>
        </a>
        <div id="peraturan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Prosedur:</h6>
            <a class="collapse-item" href="/superperaturanpelanggan">Prosedur Pesan Uji Tanah</a>
            <a class="collapse-item" href="/superketentuanminimal">Ketentuan Minimal</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#hasilpesan" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fa fa-fw fa-book"></i>
          <span>Hasil Pesanan</span>
        </a>
        <div id="hasilpesan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Hasil Pesanan:</h6>
            <a class="collapse-item" href="/superdatapesan">Pesanan Pelanggan</a>
            <a class="collapse-item" href="/superdatapermintaan">Detail Pesanan Pelanggan</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/supersaran">
          <i class="fa fa-fw fa-book"></i>
          <span>Saran</span></a>
      </li>

      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link" href="/logout">
          <i class="fa fa-fw fa-book"></i>
          <span>Logout</span></a>
      </li>

        
      <!-- Divider -->

      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Addons
      </div> -->

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fa fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Charts -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fa fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li> -->

      <!-- Nav Item - Tables -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fa fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-1" id="sidebarToggle">
        </button>
      </div>

    </ul>
    <!-- End of Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="img/logo-putih.png" width="40" height="40" style="margin-bottom: 5px;">
        </div>
        <div class="sidebar-brand-text mx-1">Nlenkan</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Beranda</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-file"></i>
            <span>Data Utama</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Data:</h6>
                <a class="collapse-item" href="biodata.php">Biodata</a>
                <a class="collapse-item" href="berita.php">Berita</a>
                <a class="collapse-item" href="kegiatan.php">Kegiatan</a>
                <a class="collapse-item" href="galery.php">Galery</a>
                <a class="collapse-item" href="behavior.php">Behavior</a>
                <a class="collapse-item" href="pesan.php">Pesan</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <hr class="sidebar-divider">

        <div class="sidebar-heading">
            User
        </div>

        <li class="nav-item">
            <a class="nav-link" href="user.php">
                <i class="fas fa-fw fa-user"></i>
                <span>User</span></a>
        </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Lain-lain
    </div>

    <!-- Nav Item - Pages Collapse Menu -->

    <!-- Nav Item - Charts -->

    <li class="nav-item">
        <a class="nav-link" href="keluar.php" onclick="return confirm('Yakin Ingin Meninggalkan Halaman?')">
            <i class="fas fa-sign-out-alt fa-sm fa-fw"></i>
            <span>Keluar</span></a>
    </li>

    <!-- Nav Item - Tables -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
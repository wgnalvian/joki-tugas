<?php
include "../../config.php";
if (!isset($_SESSION)) {
    session_start();
}
$role = $_SESSION['role'];
?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <?php if ($role == "admin") { ?>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#mhs" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Data Mahasiswa</span>
            </a>
            <div id="mhs" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/mahasiswa/index.php" ?>">Daftar Mahasiswa</a>
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/mahasiswa/add.php" ?>">Tambah Mahasiswa</a>

                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#prodi" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Data Prodi</span>
            </a>
            <div id="prodi" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/prodi/index.php" ?>">Daftar Prodi</a>
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/prodi/add.php" ?>">Tambah Prodi</a>

                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dosen" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Data Dosen</span>
            </a>
            <div id="dosen" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/dosen/index.php" ?>">Daftar Dosen</a>
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/dosen/add.php" ?>">Tambah Dosen</a>

                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#matkul" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Data Matkul</span>
            </a>
            <div id="matkul" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/matkul/index.php" ?>">Daftar Matkul</a>
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/matkul/add.php" ?>">Tambah Matkul</a>

                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#krs" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>KRS</span>
            </a>
            <div id="krs" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/krs/index.php" ?>">Daftar KRS</a>
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/krs/add.php" ?>">Tambah KRS</a>

                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#khs" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>KHS</span>
            </a>
            <div id="khs" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/khs/index.php" ?>">Daftar KHS</a>
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/khs/add.php" ?>">Tambah KHS</a>

                </div>
            </div>

        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ruang" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Ruang Kelas</span>
            </a>
            <div id="ruang" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/ruang/index.php" ?>">Daftar Ruang</a>
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/ruang/add.php" ?>">Tambah Ruang</a>

                </div>
            </div>

        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#jadwalM" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Jadwal MataKuliah</span>
            </a>
            <div id="jadwalM" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/jadwalMatkul/index.php" ?>">Daftar Jadwal</a>
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/jadwalMatkul/add.php" ?>">Tambah Jadwal</a>

                </div>
            </div>

        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pengeluaran" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Pengeluaran</span>
            </a>
            <div id="pengeluaran" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/pengeluaran/index.php" ?>">Daftar Pengeluaran</a>
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/pengeluaran/add.php" ?>">Tambah Pengeluaran</a>

                </div>
            </div>

        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pemasukan" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Pemasukan</span>
            </a>
            <div id="pemasukan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/pemasukan/index.php" ?>">Daftar Pemasukan</a>
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/pemasukan/add.php" ?>">Tambah Pemasukan</a>

                </div>
            </div>

        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#asset" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Asset</span>
            </a>
            <div id="asset" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/asset/index.php" ?>">Daftar Asset</a>
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/asset/add.php" ?>">Tambah Asset</a>

                </div>
            </div>

        </li>

    <?php } ?>
    <?php if ($role == "dosen") { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#khs" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>KHS</span>
            </a>
            <div id="khs" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/khs/index.php" ?>">Daftar KHS</a>
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/khs/add.php" ?>">Tambah KHS</a>

                </div>
            </div>

        </li>
    <?php } ?>
    <?php if ($role == "mahasiswa") { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#khs" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>KHS</span>
            </a>
            <div id="khs" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= $baseUrl . "/dashboard/khs/index.php" ?>">Daftar KHS</a>
                   

                </div>
            </div>

        </li>
        <?php } ?>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="<?= $baseUrl . "/auth/doLogout.php" ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Logout</span></a>
    </li>
    <hr class="sidebar-divider">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
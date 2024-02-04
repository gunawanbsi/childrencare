<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url().'admin'?>">
<div class="sidebar-brand-icon rotate-n-15">
<i class="fas fa-child"></i>
</div>
<div class="sidebar-brand-text mx-3">BSI Children Cares</div>
</a>
<!-- Divider -->
<hr class="sidebar-divider">
 
<!-- Looping Menu-->
 
<!-- Heading -->
<div class="sidebar-heading">
Master Data
</div>
<!-- Nav Item - Dashboard -->
<li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url().'admin' ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
<!-- Divider -->
<hr class="sidebar-divider mt-3">

<li class="nav-item active">
<li class="nav-item">
<a class="nav-link pb-0" href="<?=base_url('admin/user'); ?>">
<i class="fas fa-users"></i>
<span>Data User</span></a>
</li>
<!-- Nav Item - Dashboard -->
<li class="nav-item">
<a class="nav-link pb-0" href="<?=base_url('admin/petugas'); ?>">
<i class="fas fa-book-medical"></i>
<span>Data Petugas</span></a>
</li>
</li>
<li class="nav-item">
<a class="nav-link pb-0" href="<?=base_url('admin/konsul'); ?>">
<i class="fas fa-clinic-medical"></i>
<span>Data Konsultasi Pasien</span></a>
</li>
</li>

<!-- Divider -->
<hr class="sidebar-divider mt-3">
<div class="sidebar-heading">
Laporan
</div>
<li class="nav-item active">
<li class="nav-item">
<a class="nav-link pb-0" href="<?=base_url('laporan/LaporanUser'); ?>">
<i class="fas fa-users"></i>
<span>Laporan Data User</span></a>
</li>
<!-- Nav Item - Dashboard -->
<li class="nav-item">
<a class="nav-link pb-0" href="<?=base_url('laporan/LaporanPetugas'); ?>">
<i class="fas fa-book-medical"></i>
<span>Laporan Data Petugas</span></a>
</li>
</li>
<li class="nav-item">
<a class="nav-link pb-0" href="<?=base_url('laporan/LaporanKonsul'); ?>">
<i class="fas fa-clinic-medical"></i>
<span>Laporan Data Konsultasi</span></a>
</li>
</li>
<!-- Divider -->
<hr class="sidebar-divider mt-3">
<div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
</div>
</ul>
<!-- End of Sidebar -- > 
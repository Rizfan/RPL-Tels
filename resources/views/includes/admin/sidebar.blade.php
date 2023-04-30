<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/dashboard">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3"> Admin </div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item @if(Request::is('admin/dashboard','admin/dashboard*')) active @endif">
    <a class="nav-link" href="/admin/dashboard">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item @if(Request::is('admin/sarkom','admin/sarkom*')) active @endif">
    <a class="nav-link" href="/admin/sarkom">
      <i class="fas fa-fw fa-comments"></i>
      <span>Saran & Komentar</span>
    </a>
  </li>
  <li class="nav-item @if(Request::is('admin/manage_galeri','admin/manage_galeri*')) active @endif">
    <a class="nav-link" href="/admin/manage_galeri">
      <i class="fas fa-fw fa-images"></i>
      <span>Manage Galeri</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
    <!-- End of Sidebar -->
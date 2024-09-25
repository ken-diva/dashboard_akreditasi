<!-- Brand Logo Light -->
<div class=" bg-putih">
  <a href="/" class="logo logo-light">
    <span class="custom-logo-lg">
      <img src="{{ asset('dist/assets/images/logo.png') }}" alt="logo">
    </span>
    <span class="custom-logo-sm">
      <img src="{{ asset('dist/assets/images/logo-sm.png') }}" alt="small logo">
    </span>
  </a>
</div>

<!-- Sidebar -left -->
<div class="h-100 bg-putih" id="leftside-menu-container" data-simplebar>
  <!--- Sidemenu -->
  <ul class="side-nav">

    <li class="side-nav-item">
      <a href="/" class="side-nav-link">
        <div class="{{ $bread_item == 'Dashboard' ? 'sidebar-active' : 'sidebar-nonactive' }}">
          <i class="ri-dashboard-line"></i>
          <span> Dashboard </span>
        </div>
      </a>
    </li>

    <li class="side-nav-item">
      <a href="/study_program" class="side-nav-link">
        <div class="{{ $bread_item == 'Program Studi' ? 'sidebar-active' : 'sidebar-nonactive' }}">
          <i class="ri-database-2-line"></i>
          <span> Program Studi </span>
        </div>
      </a>
    </li>
    {{-- <li class="side-nav-item">
      <a href="/mahasiswa" class="side-nav-link">
        <div class="{{ $bread_item == 'Data Mahasiswa' ? 'sidebar-active' : 'sidebar-nonactive' }}">
          <i class="ri-database-2-line"></i>
          <span> Data Mahasiswa </span>
        </div>
      </a>
    </li> --}}


  </ul>
  <!--- End Sidemenu -->

  <div class="clearfix"></div>
</div>

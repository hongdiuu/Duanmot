<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../../thu_vien/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../../thu_vien/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Hello Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../thu_vien/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="index.php" class="d-block">Hà Thế Bảo</a>
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
         
         
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="bi bi-archive-fill"></i>
              <p>
                Sản Phẩm 
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">3</span>
              </p>
            </a>
            <ul class="nav nav-treeview">

            <li class="nav-item">
            <a href="index.php?act=add_dm" class="nav-link">
            <i class="bi bi-bookmarks-fill"></i>
              <p>
                Quản lí danh mục 
              </p>
            </a>
          </li>
              <li class="nav-item">
                <a href="index.php?act=add_sp" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lí sản phẩm  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?act=add_spbt" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lí biến thể </p>
                </a>
              </li>
            </ul>
          </li>
       
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="bi bi-person-circle"></i>
              <p>
                Tài Khoản  
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?act=add_kh" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lí khách hàng   </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lí người dùng </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
            <i class="bi bi-chat-dots-fill"></i>
              <p>
                Quản lí bình luận 
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
            <i class="bi bi-gear-wide-connected"></i>
              <p>
                Quản lí hệ thống
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
            <i class="bi bi-images"></i>
              <p>
                Quản lí banner
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
            <i class="bi bi-newspaper"></i>
              <p>
                Quản lí tin tức  
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
            <i class="bi bi-tencent-qq"></i>
              <p>
                Quản lí khuyến mại 
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
            <i class="bi bi-envelope-check-fill"></i>
              <p>
                Quản lí liên hệ 
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="index.php?act=list_don_hang" class="nav-link">
            <i class="bi bi-cart-check-fill"></i>
              <p>
                Quản lí đơn hàng 
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
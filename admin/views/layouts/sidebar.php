<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?= ADMIN_ASSET ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= ADMIN_ASSET ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
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
        <!-- Trang quản trị -->
        <li class="nav-item menu-close">
          <a href="http://localhost/duan1-nhom7/cp-admin" class="nav-link warning">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Trang quản trị
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
        <!-- Trang sản phẩm -->
        <li class="nav-item">
          <a href="http://localhost/duan1-nhom7/product" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Sản Phẩm
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
        <!-- Trang tài khoản user -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-users"></i>
            <p>
              Manager users
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">6</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="users" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Khách hàng</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="staff" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Nhân</p>
              </a>
            </li>

          </ul>
        </li>
        <!-- Trang bình luận -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-comment-dots"></i>
            <p>
              Bình Luận
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
        <!-- Trang danh mục -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Danh mục
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
        <!-- Đơn hàng -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tv"></i>
            <p>
              Đơn hàng
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
        <!-- Slide -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-images"></i>
            <p>
              Slide
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
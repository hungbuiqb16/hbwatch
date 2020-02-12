<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HBWatch System | Trang quản trị</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{URL::asset('css/backend/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{URL::asset('css/backend/ionicons.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{URL::asset('css/backend/adminlte.min.css')}}">
  <!-- Summernote Plugin -->
  <link rel="stylesheet" href="{{URL::asset('css/backend/summernote-bs4.css')}}">
  <!-- CKEditor Plugin -->
  @stack('ckeditor')
  @stack('alertity')
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{('/')}}" class="nav-link">Trang bán hàng</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Tìm kiếm" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{('/admin')}}" class="brand-link">
      <img src="{{URL::asset('img/backend/AdminLTELogo.png')}}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">HBWatch | Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('img/backend/user2-128x128.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
              <?php
                $fname = session()->get('fname');
                if ($fname) {
                    echo $fname;
                }
              ?>
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <!-- users -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-fw fa-user-circle"></i>
              <p>
                User
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-user-plus"></i>
                  <p>Add User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>List Users</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- end-users -->
         <!--  product -->
          <li class="nav-header">ADMIN SHOP</li>
          <!-- Order -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fas fa-cart-plus"></i>
              <p>
                 Quản lý đơn hàng
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">1</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{('/admin/order')}}" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>Danh sách đơn hàng</p>
                </a>
              </li>
            </ul>
          </li>
         <!--  end order -->
          <!-- product -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fab fa-product-hunt"></i>
              <p>
                Quản lý sản phẩm
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{('/admin/product/add')}}" class="nav-link">
                  <i class="fas fa-cart-plus"></i>
                  <p>Thêm sản phẩm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{('/admin/product')}}" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>Danh sách sản phẩm</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- end-product -->
          <!-- category-product -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-bold"></i>
              <p>
                 Thương hiệu
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{('/admin/brand')}}" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>Quản lý thương hiệu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{('/admin/brand/add')}}" class="nav-link">
                  <i class="fas fa-cart-plus"></i>
                  <p>Thêm thương hiệu</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">ADMIN CONTENT</li>
          <!-- Order -->
          <!-- Blog/News -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fas fa-newspaper"></i>
              <p>
                 Blog/Tin tức
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{('/admin/news/add')}}" class="nav-link">
                  <i class="fas fa-plus-square"></i>
                  <p>Thêm bài viết</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('/admin/news')}}" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>Danh sách bài viết</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fas fa-sliders-h"></i>
              <p>
                 Slide
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-plus-square"></i>
                  <p>Thêm slide </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>Danh sách slide</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- end-category-product -->
          <li class="nav-header">Other</li>
          <li class="nav-item">
            <a href="{{('/admin/logout')}}" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                @yield('content')
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-rc.1
    </div>
    <strong>Copyright &copy; 2014-2020 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{URL::asset('js/backend/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{URL::asset('js/backend/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('js/backend/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset('js/backend/demo.js')}}"></script>

</body>
</html>

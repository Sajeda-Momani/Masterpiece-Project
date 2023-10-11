<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard </title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Right navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
            <div class="navbar-nav pl-2">
                <!-- <ol class="breadcrumb p-0 m-0 bg-white">
      <li class="breadcrumb-item active">Dashboard</li>
     </ol> -->
            </div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link p-0 pr-3" data-toggle="dropdown" href="#">
                        <img src="{{ asset('admin/img/avatar5.png') }}" class='img-circle elevation-2' width="40"
                            height="40" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-3">
                        <h4 class="h4 mb-0"><strong>Sajeda Momani</strong></h4>
                        <div class="mb-3">example@example.com</div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-user-cog mr-2"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-lock mr-2"></i> Change Password
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="{{ asset('images\logo\logo.png') }}" alt="Smartify Logo" class="brand-image">
                <span class="brand-text font-weight-light"> © </span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <nav class="mt-2">

                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item {{ request()->is('dashboard*') ? 'active' : '' }}">
                            <a href="{{ url('/dashboard') }}" class="nav-link">
                                <ion-icon name="home-outline" class="custom-icon-size"></ion-icon>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('categories*') ? 'active' : '' }}">
                            <a href="{{ url('/categories') }}" class="nav-link">
                                <ion-icon name="cube-outline" class="custom-icon-size"></ion-icon>
                                <p>Category</p>
                            </a>
                        </li>
                        

                        <li class="nav-item {{ request()->is('products*') ? 'active' : '' }}">
                            <a href="{{ url('/products') }}" class="nav-link">
                                <ion-icon name="bag-handle-outline" class="custom-icon-size"></ion-icon>
                                <p>Products</p>
                            </a>
                        </li>
                        
                        <li class="nav-item {{ request()->is('orders*') ? 'active' : '' }}">
                            <a href="{{ url('/orders') }}" class="nav-link">
                                <ion-icon name="cart-outline"class="custom-icon-size"></ion-icon>
                                <p>Orders</p>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('customers*') ? 'active' : '' }}">
                            <a href="{{ url('customers') }}" class="nav-link">
                                <ion-icon name="people-outline"class="custom-icon-size"></ion-icon>
                                <p>Users</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item {{ request()->is('admins*') ? 'active' : '' }}">
                            <a href="{{ url('/admins') }}" class="nav-link">
                                <ion-icon name="shield-checkmark-outline"class="custom-icon-size"></ion-icon>
                                <p>Admins</p>
                            </a>
                        </li> --}}
                        <li class="nav-item {{ request()->is('contacts*') ? 'active' : '' }}">
                            <a href="{{ url('/contacts') }}" class="nav-link">
                                <ion-icon name="chatbubble-outline"class="custom-icon-size"></ion-icon>
                                <p>Messages</p>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('reviews*') ? 'active' : '' }}">
                            <a href="{{ url('/reviews') }}" class="nav-link">
                                <ion-icon name="star-outline"class="custom-icon-size"></ion-icon>
                                <p>Reviwes</p>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('coupons*') ? 'active' : '' }}">
                            <a href="{{ url('/coupons') }}" class="nav-link">
                                <ion-icon name="pricetag-outline"class="custom-icon-size"></ion-icon>
                                <p>Discount</p>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('address*') ? 'active' : '' }}">
                            <a href="{{ url('/address') }}" class="nav-link">
                                <ion-icon name="location-outline"class="custom-icon-size"></ion-icon>
                                <p>Address</p>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('paymant*') ? 'active' : '' }}">
                            <a href="{{ url('/paymant') }}" class="nav-link">
                                <ion-icon name="card-outline"class="custom-icon-size"></ion-icon>
                                <p>Paymant</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <ion-icon name="log-out-outline"class="custom-icon-size"></ion-icon>
                                <p>Sign Out</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- ====== ionicons ======= -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

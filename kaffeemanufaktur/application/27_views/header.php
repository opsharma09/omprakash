<!DOCTYPE html>
<html lang="en">
<head>
  <script type="text/javascript">
    var base_url="<?php echo base_url(); ?>";
  </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>kaffeemanufaktur | <?php echo $page_title ?> </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>tools/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() ?>tools/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>tools/admin/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
<link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.3.0/fullcalendar.min.css" rel="stylesheet"/>
<link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.3.0/fullcalendar.print.css" rel="stylesheet"  media="print" />
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->

    <!-- SEARCH FORM -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
<!--<font face="FreeMono">kaffeemanufaktur</font>-->
     <img src="<?php echo base_url()?>/tools/img/logo.png" alt="">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url().'admin/dashboard' ?>" class="nav-link <?php if ($this->uri->segment(1)==' '){ echo 'active';}?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('users') ?>" class="nav-link <?php if ($this->uri->segment(1)=='users'){ echo 'active';}?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('coupons') ?>" class="nav-link <?php if ($this->uri->segment(1)=='coupons'){ echo 'active';}?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Coupons
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?php if($this->uri->segment(2)!=''){echo "menu-open";}?>" data-id="0" >  <!--menu-open -->
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-box"></i>
              <p>
                Products
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview " style="<?php if($this->uri->segment(2)!=''){echo "display: block";}?>">
              <li class="nav-item">
                <a href="<?php echo base_url().'products/category' ?>" class="nav-link <?php if ($this->uri->segment(2)=='category'){ echo 'active';}?>">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Products Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'products/subcategory' ?>" class="nav-link <?php if ($this->uri->segment(2)=='subcategory'){ echo 'active';}?>">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Products Sub Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'home/product_equipment' ?>" class="nav-link <?php if ($this->uri->segment(2)=='product_equipment'){ echo 'active';}?>">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Product Variable</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'products/admin_products' ?>" class="nav-link <?php if ($this->uri->segment(2)=='admin_products'){ echo 'active';}?>">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
              <li class="nav-item has-treeview <?php if($this->uri->segment(2)=='variation' || $this->uri->segment(2)=='product_availability'){echo "menu-open";}?>" data-id="0">  <!--menu-open -->
            <a href="#" class="nav-link ">
              <i class="fas fa-angle-right nav-icon"></i>
              <p>
                Variations
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview " style="<?php if($this->uri->segment(2)=='variation' || $this->uri->segment(2)=='product_availability'){echo "display: block";}?>;padding-left:10px">
              <li class="nav-item">
                <a href="<?php echo base_url().'products/variation' ?>" class="nav-link <?php if ($this->uri->segment(2)=='variation'){ echo 'active';}?>">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Product Type</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'products/product_availability' ?>" class="nav-link <?php if ($this->uri->segment(2)=='product_availability'){ echo 'active';}?>">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Product Variation</p>
                </a>
              </li>
             </ul>
            </li>
              
             <!-- <li class="nav-item">
                <a href="<?php echo base_url().'products/product_type' ?>" class="nav-link <?php if ($this->uri->segment(2)=='product_type'){ echo 'active';}?>">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Product type</p>
                </a>
              </li>-->
              
               
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('events')?>" class="nav-link <?php if ($this->uri->segment(2)=='events'){ echo 'active';}?>">
              <i class="nav-icon fas fa-clone"></i>
              <p>
                Events
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?=base_url('order')?>" class="nav-link <?php if ($this->uri->segment(2)=='orders'){ echo 'active';}?>">
              <i class="nav-icon fas fa-clone"></i>
              <p>
                Manage Order
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'login/logout' ?>" class="nav-link">
              <i class="fas fa-sign-out-alt nav-icon"></i>
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo $page_title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $page_title ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

$(document).ready(function() {
  $flag =0;
    $(".product_menu").click(function(){
       $(this).attr('class', 'menu-open');
       $('.product_sub_menu').css('display', 'block');
      
    });

  });
</script>

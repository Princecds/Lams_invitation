

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    
    <!--<a href="index3.html" class="brand-link">-->
    <!--  <img src="<?php echo base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
    <!--  <span class="brand-text font-weight-light">Navodit</span>-->
    <!--</a>-->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!--<div class="image">-->
          <!--<img src="https://www.navoditmicrocredit.com/images/logo1.png" class="img-circle elevation-2" alt="User Image">-->
        <!--</div>-->
        <div class="image">
                    <img src="https://www.navoditmicrocredit.com/images/logo1.png" class="w-100 p-2" alt="User Image">

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
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="https://hrms.kindasolutions.com/invitation.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!--<i class="right fas fa-angle-left"></i>-->
              </p>
            </a>
            <!--<ul class="nav nav-treeview">-->
            <!--  <li class="nav-item">-->
            <!--    <a href="./" class="nav-link active">-->
            <!--      <i class="far fa-circle nav-icon"></i>-->
            <!--      <p>Dashboard v1</p>-->
            <!--    </a>-->
            <!--  </li>-->
            <!--</ul>-->
          </li>
      
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                New User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>invitation.php/New_user/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>invitation.php/New_user/list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User List</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
              Invitation Form
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>invitation.php/user_form/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>invitation.php/user_form/list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User List</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
               Complete Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>invitation.php/complete_form/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                     <p>Create profile</p>
                  
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>invitation.php/complete_form/list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                <p>Profile list</p>
                </a>
              </li>
            </ul>
          </li>
       
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

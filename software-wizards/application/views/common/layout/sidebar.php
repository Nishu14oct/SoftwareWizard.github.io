    <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="">
                <img src="<?php echo base_url('assets/admin/assets/img/brand/blue.png');?>">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div> 
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item  active ">
            <a class="nav-link " href="<?php echo base_url('dashboard');?>">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?=base_url('admin-contact-us');?>">
              <i class="ni ni-planet text-blue"></i> Contact Report
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?=base_url('admin-job-report');?>">
              <i class="ni ni-pin-3 text-orange"></i> Job apply Report
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?=base_url('admin-iternship');?>">
              <i class="ni ni-single-02 text-yellow"></i> Internship Report
            </a>
          </li>
          
        </ul>
        <!-- Divider -->
       
      </div>
    </div>
  </nav>
  <div class="main-content">
  <!-- Navbar -->
  <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="<?php echo base_url('dashboard');?>">Dashboard</a>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="<?php echo base_url('assets/admin/assets/img/theme/admin.png');?>">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"> <?php echo $this->session->userdata('user_id');  ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0"><?php echo $this->session->userdata('email');  ?></h6>
              </div>
              <a href="" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <!-- <a href="" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a> -->
              <div class="dropdown-divider"></div>
              <a href="<?php echo base_url('admin-logout');?>" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
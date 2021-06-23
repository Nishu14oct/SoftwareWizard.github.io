
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/argon-dashboard/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jan 2020 19:15:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Limatsoft Dashboard - Free Dashboard for Bootstrap 4 by Creative Tim
  </title>



  <!-- Favicon -->
  <link href="<?php echo base_url('assets/admin/assets/img/brand/favicon.png'); ?>" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo base_url('assets/admin/assets/js/plugins/nucleo/css/nucleo.css'); ?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/admin/assets/js/plugins/%40fortawesome/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo base_url('assets/admin/assets/css/limatsoft-dashboard.min.css'); ?>" rel="stylesheet" />

  <script src="<?php echo base_url('assets/admin/assets/js/plugins/jquery/dist/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.validate.min.js') ?>"></script>

<style type="text/css">
  .error{
    color: red;
    padding-top: 10px;
    padding-left: 10px;
  }
</style>
</head>

<body class="bg-default">
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="main-content">
    <!-- Navbar -->

    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8"> 
  
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-transparent">
              <div class="text-center text-muted"> 
                <h2>Admin sign in with credentials</h2>
                <HR style="margin-top:0px;margin-bottom:0px">
              </div>
            <div class="card-body ">
              
              <?php if ($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <?php  echo $this->session->flashdata('error'); ?>
                </div>
              <?php } ?>

              <form role="form" id="admin_login_form" action="<?php  echo base_url('admin-login');?>" method="post">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email" name="email" value="<?php echo set_value('email'); ?>" style="width:80%;">
                    <?php echo form_error('email', '<label class="error">', '</label>'); ?>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="password" style="width:80%;">
                    <?php echo form_error('password', '<label class="error">', '</label>'); ?>
                  </div>
                </div>
         
                <div class="text-center">
                  <input type="submit" class="btn btn-primary my-4" name="submit" value="Sign in">
                </div>
              </form>
            </div>
          </div>
       
        </div>
      </div>
    </div>

  </div>
  


<script type="text/javascript">
    $("#admin_login_form").validate({
        rules: {
          email: {required:true, email:true},
          password: {required:true} 
        },
    });
</script>  
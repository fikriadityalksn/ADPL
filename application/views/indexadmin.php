<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin SIMPANG ITS</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url().'assets/admin2/css/bootstrap.min.css'?>" />
<link rel="stylesheet" href="<?php echo base_url().'assets/admin2/css/bootstrap-responsive.min.css'?>" />
<link rel="stylesheet" href="<?php echo base_url().'assets/admin2/css/colorpicker.css'?>" />
<link rel="stylesheet" href="<?php echo base_url().'assets/admin2/css/datepicker.css'?>" />
<link rel="stylesheet" href="<?php echo base_url().'assets/admin2/css/uniform.css'?>" />
<link rel="stylesheet" href="<?php echo base_url().'assets/admin2/css/select2.css'?>" />
<link rel="stylesheet" href="<?php echo base_url().'assets/admin2/css/maruti-style.css'?>" />
<link rel="stylesheet" href="<?php echo base_url().'assets/admin2/css/maruti-media.css" class="skin-color'?>" />

</head>
<body>

<!--Header-part-->
<div id="header">
  <h2 style="color: white">
    Admin SIMPANG ITS
  </h2>
</div>
<!--close-Header-part--> 

<!--top-Header-messaages-->
<div class="btn-group rightzero"> 
  <a class="top_message tip-left" title="Manage Files">
    <i class="icon-file"></i>
  </a> 
  <a class="top_message tip-bottom" title="Manage Users">
    <i class="icon-user"></i>
  </a>
  <a class="top_message tip-bottom" title="Manage Comments">
    <i class="icon-comment"></i>
    <span class="label label-important">5</span>
  </a> 
  <a class="top_message tip-bottom" title="Manage Orders">
    <i class="icon-shopping-cart"></i>
  </a> 
</div>
<!--close-top-Header-messaages--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li class="">
      <a title="" href="<?php echo base_url() .'index.php/logout'?>">
        <i class="icon icon-share-alt"></i> 
        <span class="text">Logout</span>
      </a>
    </li>
  </ul>
</div>
<!--close-top-Header-menu-->

<!-- left-menu-stats-sidebar -->
<div id="sidebar">
  <a href="<?php echo base_url() .'index.php/home'?>" class="visible-phone">
    <i class="icon icon-home"></i> 
    Home
  </a>
  <ul>
    <li class="active">
      <a href="<?php echo base_url() .'index.php/home'?>">
        <i class="icon icon-home"></i> 
        <span>Home</span>
      </a> 
    </li>
    <li class="active">
      <a href="<?php echo base_url() .'index.php/MyControllerAP/tablegedung'?>">
        <i class="icon icon-th-list"></i> 
        <span>Data Gedung</span>
      </a> 
    </li>
  </ul>
</div>
<!--close-left-menu-stats-sidebar-->

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> 
      <a href="<?php echo base_url()."index.php/home" ?>" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> 
        Home
      </a> 
        <!-- <a href="#" class="tip-bottom">Form elements</a> --> 
      <a href="<?php echo base_url()."index.php/home" ?>" class="current">
        Form Gedung
      </a>
    </div>
    <h1>Form Gedung</h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> 
            <span class="icon"> 
              <i class="icon-align-justify"></i> 
            </span>
            <h5>Upload Gedung dan Deskripsi</h5>
          </div>
          <div class="widget-content nopadding">
          <?php echo form_open_multipart(base_url('index.php/MyControllerAP/do_upload'));?>
            <form action="#" method="get" class="form-horizontal">
              <br> <br>
              <div class="control-group">
                <label class="control-label">Judul Gedung</label>
                <div class="controls">
                  <input type="text"  name="judul" class="span11" placeholder="Judul">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Deskripsi Gedung</label>
                <div class="controls">
                  <textarea name="deskripsi" class="span11" placeholder="Deskripsi Gedung" ></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Foto Gedung</label>
                <div class="controls">
                    <input type="file" name="image" value="image" >
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" name="submit" value="Upload" class="btn btn-primary btn-lg" tabindex="7">
              </div>
                <hr class="colorgraph">
            </form>
            <div class="row-fluid" >
              <div id="footer" class="span11"></div>
            </div>
          <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
              
<script src="<?php echo base_url().'assets/admin2/js/jquery.min.js'?>"></script> 
<script src="<?php echo base_url().'assets/admin2/js/jquery.ui.custom.js'?>"></script> 
<script src="<?php echo base_url().'assets/admin2/js/bootstrap.min.js'?>"></script> 
<script src="<?php echo base_url().'assets/admin2/js/bootstrap-colorpicker.js'?>"></script> 
<script src="<?php echo base_url().'assets/admin2/js/bootstrap-datepicker.js'?>"></script> 
<script src="<?php echo base_url().'assets/admin2/js/jquery.uniform.js'?>"></script> 
<script src="<?php echo base_url().'assets/admin2/js/select2.min.js'?>"></script> 
<script src="<?php echo base_url().'assets/admin2/js/maruti.js'?>"></script> 
<script src="<?php echo base_url().'assets/admin2/js/maruti.form_common.js'?>"></script>
</body>
</html>

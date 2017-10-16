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
    Dashboard
  </a>
  <ul>
    <li class="active">
      <a href="<?php echo base_url() .'index.php/home'?>">
      <i class="icon icon-home"></i> 
      <span>Dashboard</span>
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
        <a href="<?php echo base_url()."/index.php/" ?>" title="Go to Home" class="tip-bottom">
          <i class="icon-home"></i> 
          Home
        </a>
        <a href="<?php echo base_url()."index.php/pegawai" ?>" title="Form Pegawai" class="current">
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
              <h5>Data Gedung</h5>
            </div>
            <div class="widget-content nopadding">
              <?php echo form_open(base_url('index.php/MyControllerAP/do_updateGedung')); ?> 
              <form action="#" method="get" class="form-horizontal">
                <div class="control-group">
                  <label class="control-label"><br>ID :</label>
                  <div class="controls">
                    <input readonly type="text" name="news_id" class="span11" placeholder="ID" value="<?php echo $news_id ?>" ><br><br>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Judul :</label>
                  <div class="controls">
                    <input type="text" name="judul" class="span11" placeholder="Judul" value="<?php echo $judul ?>"><br><br>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Deskripsi :</label>
                  <div class="controls">
                    <input type="text"  name="deskripsi" class="span11" placeholder="Deskripsi" value="<?php echo $deskripsi ?>"><br><br>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Foto :</label>
                  <div class="controls">
                    <input type="file" name="image" class="span11" placeholder="Foto" value="<?php echo $image ?>">
                  </div>
                </div>
                <div class="form-actions">
                  <input type="submit" name="submit" value="Submit"> 
                  <?php echo form_close(); ?>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>  
    </div>  
    <div class="row-fluid">
      <div id="footer" class="span6"></div>
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

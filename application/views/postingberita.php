<!DOCTYPE html>
<html lang="en">
<head>
<title>Dinkes Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url().'assets/admin2/css/bootstrap.min.css'?>" />
<link rel="stylesheet" href="<?php echo base_url().'assets/admin2/css/bootstrap-responsive.min.css'?>" />
<link rel="stylesheet" href="<?php echo base_url().'assets/admin2/css/fullcalendar.css'?>" />
<link rel="stylesheet" href="<?php echo base_url().'assets/admin2/css/maruti-style.css'?>" />
<link rel="stylesheet" href="<?php echo base_url().'assets/admin2/css/maruti-media.css'?>" class="skin-color" />
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Dinkes Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-messaages-->
<div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>
<!--close-top-Header-messaages--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li class=""><a title="" href="<?php echo base_url() .'index.php/logout'?>"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->

<div id="sidebar"><a href="<?php echo base_url() .'index.php/home'?>" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a><ul>
    <li class="active"><a href="<?php echo base_url() .'index.php/home'?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <!-- <li> <a href="charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
    <li> <a href="widgets.html"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li>
    <li><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
    <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>  -->
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Puskesmas</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="<?php echo base_url() .'index.php/createDataDasar'?>">Data Dasar</a></li>
        <!-- <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li> -->
      </ul>
    </li>
     <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Pegawai</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="<?php echo base_url()."index.php/pegawai/" ?>">Data Pegawai</a></li>
        <!-- <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li> -->
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Table</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="<?php echo base_url()."index.php/tablepuskesmas" ?>">Data Dasar Puskesmas</a></li>
        <li><a href="<?php echo base_url()."index.php/tablepegawai" ?>">Data Pegawai</a></li>
        <!-- <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li> -->
      </ul>
    </li>
    <!-- <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
    <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="index2.html">Dashboard2</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="chat.html">Chat option</a></li>
      </ul>
    </li> -->
  </ul>
</div>
<!--close-left-menu-stats-sidebar-->

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <!-- <a href="#" class="tip-bottom">Form elements</a> --> <a href="<?php echo base_url()."index.php/createDataDasar" ?>" class="current">Form Puskesmas</a> </div>
    <h1>Form Puskesmas</h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Data Dasar Puskesmas</h5>
          </div>
          <div class="widget-content nopadding">
          <?php echo form_open_multipart(base_url('index.php/MyController/do_upload'));?>

            <form action="#" method="get" class="form-horizontal">
              <br> <br>
              <div class="control-group">
                <label class="control-label">Judul Berita</label>
                <div class="controls">
                <input type="text"  name="judul" class="span9" placeholder="Nama Puskesmas">
                  <!-- <input type="text" class="span11" placeholder="Last name" /> -->
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Berita</label>
                <div class="controls">
                  <textarea name="news" class="span9" ></textarea>
                </div>
                </div>
                <div class="control-group">
                <label class="control-label">File upload input</label>
                <div class="controls">
                  <input type="file" name="image"/>
                </div>
              </div>
                <!-- <div class="control-group">
                <label class="control-label">File upload input</label>
                <div class="controls">
                <div id="uniform-undefined" class="uploader hover"> 

                  <span class="filename" style="-moz-user-select: none;">No File Selected</span>
                  <span class="action" style="-moz-user-select: none;">Choose File</span>
                  
                </div>
              </div>
            </div> -->

      
      <hr class="colorgraph">
      <div class="row">
        <div class="col-xs-12 col-md-6">
        <input type="submit" value="Upload" class="btn btn-primary btn-block btn-lg" tabindex="7">
        </div>
              <div class="form-actions">
                  <input type="submit" name="submit" value="Submit"> 
                  <?php echo form_close(); ?>
                </div>
              


              <!-- <div class="control-group">
                <label class="control-label">Company info :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Company name" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Description field:</label>
                <div class="controls">
                  <input type="text" class="span11" />
                  <span class="help-block">Description field</span> </div>
              </div>
              <div class="control-group">
                <label class="control-label">Message</label>
                <div class="controls">
                  <textarea class="span11" ></textarea>
                </div>
              </div> -->
              
<div class="row-fluid">
  <div id="footer" class="span13"></div>
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

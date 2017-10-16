<!DOCTYPE html>
<html lang="en">
<head>
<?php echo $map['js']; ?> 
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
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
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
        <li><a href="<?php echo base_url()."index.php/pegawai/" ?>">Form Pegawai</a></li>
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
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Maps</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="<?php echo base_url()."index.php/maps"?>">Peta Puskesmas</a></li>
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

    <div id="breadcrumb"> <a href="<?php echo base_url() .'index.php/home'?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>

   
    
        <div class="widget-content">
        </div>
        <?php echo $map['html']; ?> 
        <script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyDg-qlTXQ0WZSBXU6xMh1CTotFQ9miE4b0&callback=myMap"></script>
       
        <div class="row-fluid">
  <div id="footer" class="span12"> 2012 &copy; Marutii Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<script src="<?php echo base_url().'assets/admin2/js/excanvas.min.js'?>"></script> 
<script src="<?php echo base_url().'assets/admin2/js/jquery.min.js'?>"></script> 
<script src="<?php echo base_url().'assets/admin2/js/jquery.ui.custom.js'?>"></script> 
<script src="<?php echo base_url().'assets/admin2/js/bootstrap.min.js'?>"></script> 
<script src="<?php echo base_url().'assets/admin2/js/jquery.flot.min.js'?>"></script> 
<script src="<?php echo base_url().'assets/admin2/js/jquery.flot.resize.min.js'?>"></script> 
<script src="<?php echo base_url().'assets/admin2/js/jquery.peity.min.js'?>"></script> 
<script src="<?php echo base_url().'assets/admin2/js/fullcalendar.min.js'?>"></script> 
<script src="<?php echo base_url().'assets/admin2/js/maruti.js'?>"></script> 
<script src="<?php echo base_url().'assets/admin2/js/maruti.dashboard.js'?>"></script> 
<script src="<?php echo base_url().'assets/admin2/js/maruti.chat.js'?>"></script> 
 

<script type="<?php echo base_url().'assets/admin2/text/javascript'?>">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
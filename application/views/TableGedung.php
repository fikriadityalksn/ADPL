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
				<a href="<?php echo base_url()."index.php/home" ?>" title="Go to Home" class="tip-bottom">
					<i class="icon-home"></i> Home 
				</a> 
				<a href="<?php echo base_url()."index.php/MyControllerAP/tablegedung" ?>" class="current">
					Data Gedung
				</a> 
			</div>
		    <h1>Data Gedung</h1>
		</div>
		<div class="container-fluid">
	    	<div class="row-fluid">
	      		<div class="span12">
	        		<div class="widget-box">
	          			<div class="widget-title">
	             			<span class="icon"><i class="icon-th"></i></span> 
	            			<h5>Data Gedung</h5>
	          			</div>
	          			<div class="widget-content nopadding">
				            <table class="table table-bordered data-table">
								<thead>
									<tr>
										<th>Judul</th>
										<th>Deskripsi</th>
										<th>Foto</th>
										<th>Delete</th>
										<th>Edit</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($gedung as $g) { ?>
									<tr>
										<td><?php echo $g['judul'] ?></td>
										<td><?php echo $g['deskripsi'] ?></td>
										<td><?php echo $g['image'] ?></td>
										<td><a href="<?= base_url()."index.php/MycontrollerAP/deleteGedung/".$g['news_id'] ?>"><button>Delete</button></a>  </td>
	   		 							<td><a href="<?= base_url()."index.php/MycontrollerAP/updateGedung/".$g['news_id'] ?>"><button>Edit</button></a>  </td>
									</tr>
									<?php } ?>
								</tbody>
								<tfoot>
									<tr>
										<th>Judul</th>
										<th>Deskripsi</th>
										<th>Foto</th>
										<th>Delete</th>
										<th>Edit</th>
									</tr>
								</tfoot>
							</table>
						</div>
	    			</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row-fluid">
  		<div id="footer" class="span12">
  		</div>
	</div>
	<script src="js/jquery.min.js"></script> 
	<script src="js/jquery.ui.custom.js"></script> 
	<script src="js/bootstrap.min.js"></script> 
	<script src="js/jquery.uniform.js"></script> 
	<script src="js/select2.min.js"></script> 
	<script src="js/jquery.dataTables.min.js"></script> 
	<script src="js/maruti.js"></script> 
	<script src="js/maruti.tables.js"></script>
</body>
</html>

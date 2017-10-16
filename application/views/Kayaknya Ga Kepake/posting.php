<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Tulis Berita</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Bootstrap 3 template for corporate business" />
<!-- css -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="assets/css/cubeportfolio.min.css" rel="stylesheet" />
<link href="assets/css/style.css" rel="stylesheet" />


<!-- Theme skin -->
<link id="t-colors" href="assets/skins/default.css" rel="stylesheet" />

	<!-- boxed bg -->
	<link id="bodybg" href="assets/bodybg/bg1.css" rel="stylesheet" type="text/css" />


</head>
<body> 



<div id="wrapper">
	<!-- start header -->
	<header>
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							
					


						</div>
					</div>
				</div>
			</div>	
			
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    
            </div>
        </div>
        </div>
	</header>
	<!-- end header -->
	
	<section id="content">
<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<!-- <form role="form" class="register-form" method="post" action="
	<?php echo base_url().'index.php/MyController/do_upload'?>" enctype="multipart"> -->
	<?php echo form_open_multipart(base_url('index.php/MyController/do_upload'));?>

			<h2>TULIS BERITA <small></small></h2>
			<hr class="colorgraph">

			<div class="form-group">
			<input type="text" name="judul" class="form-control input-lg" placeholder="Judul Berita" tabindex="4">   
				<!--<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">-->
			</div>
				<!--<input type="password" class="form-control input-lg" id="exampleInputPassword1" placeholder="Password">-->
			<div class="form-group"> 
			<textarea name="news" id="news" required="required" class="form-control input-lg" placeholder="Isi Berita" rows="3"></textarea> 
				<!--<input type="password" class="form-control input-lg" id="exampleInputPassword1" placeholder="Password">-->
			</div>
			<div class="form-group">
				<input type="file" name="image" id="image" size="20">
				<!-- <input type="hidden" name="is_submit" value="1" /> -->
			</div>
			<div class="row">
				
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6">
				<input type="submit" value="Upload" class="btn btn-primary btn-block btn-lg" tabindex="7">
				</div>
				<!--<div class="col-xs-12 col-md-6">Don't have an account? <a href="register.html">Register</a></div>-->

			</div>
		<!-- </form> -->
		<?php echo form_close(); ?>
	</div>
</div>

</div>
	</section>

	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				
			</div>
		</div>
	</div>
	</footer>
	
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>

	<!-- <h2>Tulis Berita</h2>  
    <table>
    <form role="form" class="register-form" method="post">
	<?php echo form_open_multipart(base_url('index.php/MyController/do_upload')); ?> 
	<tr>
		<td> <p>News</p> </td>
		<td> <textarea name="news" id="news" required="required" class="form-control" rows="3"></textarea> </td>
	</tr>
	<tr>
		<td>Upload Gambar</td>
		<td><input type="file" name="image" id="image" size="20"></td>
		<td><input type="hidden" name="is_submit" value="1" /></td> 
	</tr>
	</table>
	<input type="submit" name="submit" value="Submit">  
	<?php echo form_close(); ?><br>    
	</form> -->
	

	</body> 
</html>
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.html">Dashboard</a></li>
			<li><a href="#">Pegawai</a></li>
			<li><a href="#">Data Pegawai</a></li>
		</ol>
		<div id="social" class="pull-right">
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-youtube"></i></a>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Data Pegawai</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">
				<h4 class="page-header">Data Pegawai</h4>
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label class="col-sm-2 control-label">NIP</label>
						<div class="col-sm-4">
							<input type="text" name="nip" class="form-control" placeholder="NIP" data-toggle="tooltip" data-placement="bottom" title="Tooltip for name">
						</div>
						<br>
						<br>
						<label class="col-sm-2 control-label">Nama</label>
						<div class="col-sm-4">
							<input type="text" name="nama" class="form-control" placeholder="Nama" data-toggle="tooltip" data-placement="bottom" title="Tooltip for name">
						</div>
						<br><br>
						<label class="col-sm-2 control-label">Alamat</label>
						<div class="col-sm-4">
							<input type="text" name="alamat" class="form-control" placeholder="Alamat" data-toggle="tooltip" data-placement="bottom" title="Tooltip for name">
						</div>
						<br><br>
						<label class="col-sm-2 control-label">Golongan Terakhir</label>
						<div class="col-sm-4">
							<input type="text" name="golongan_terakhir" class="form-control" placeholder="Golongan" data-toggle="tooltip" data-placement="bottom" title="Tooltip for name">
						</div>
						<br><br>
						<label class="col-sm-2 control-label">Pendidikan Pertama</label>
						<div class="col-sm-4">
							<input type="text" name="pendidikan_pertama" class="form-control" placeholder="Pendidikan Pertama" data-toggle="tooltip" data-placement="bottom" title="Tooltip for name">
						</div>
						<br>
						<br>
						<label class="col-sm-2 control-label">Pendidikan Terakhir</label>
						<div class="col-sm-4">
							<input type="text" name="pendidikan_terakhir" class="form-control" placeholder="Pendidikan Terakhir" data-toggle="tooltip" data-placement="bottom" title="Tooltip for name">
						</div>
						<br><br>
						<label class="col-sm-2 control-label">Eselon</label>
						<div class="col-sm-4">
							<input type="text" name="eselon" class="form-control" placeholder="Eselon" data-toggle="tooltip" data-placement="bottom" title="Tooltip for name">
						</div>
						<br><br>
						<label class="col-sm-2 control-label">Gol Jabatan</label>
						<div class="col-sm-4">
							<input type="text" name="gol_jabatan" class="form-control" placeholder="Golongan Jabatan" data-toggle="tooltip" data-placement="bottom" title="Tooltip for name">
						</div>
						<br><br>
						<label class="col-sm-2 control-label">Unit Kerja</label>
						<div class="col-sm-4">
							<input type="text" name="unit_kerja" class="form-control" placeholder="Unit Kerja" data-toggle="tooltip" data-placement="bottom" title="Tooltip for name">
						</div>
						<br><br>
						</div>
						</form>
						<div class="form-group">
						<div class="col-sm-6 col-sm-offset-6">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
						<br>
						<br>
					</form>
<script type="text/javascript">
// Run Select2 plugin on elements
function DemoSelect2(){
	$('#s2_with_tag').select2({placeholder: "Select OS"});
	$('#s2_country').select2();
}
// Run timepicker
function DemoTimePicker(){
	$('#input_time').timepicker({setDate: new Date()});
}
$(document).ready(function() {
	// Create Wysiwig editor for textare
	TinyMCEStart('#wysiwig_simple', null);
	TinyMCEStart('#wysiwig_full', 'extreme');
	// Add slider for change test input length
	FormLayoutExampleInputLength($( ".slider-style" ));
	// Initialize datepicker
	$('#input_date').datepicker({setDate: new Date()});
	// Load Timepicker plugin
	LoadTimePickerScript(DemoTimePicker);
	// Add tooltip to form-controls
	$('.form-control').tooltip();
	LoadSelect2Script(DemoSelect2);
	// Load example of form validation
	LoadBootstrapValidatorScript(DemoFormValidator);
	// Add drag-n-drop feature to boxes
	WinMove();
});
</script>

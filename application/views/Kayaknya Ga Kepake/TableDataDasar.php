<style type="text/css">

table, th, td {
	border: 1px solid black;
    border-collapse: collapse;
}

th, td {
    padding: 5px;
}

</style>
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Pegawai</a></li>
			<li><a href="#">Tabel Pegawai</a></li>
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
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-usd"></i>
					<span>Daftar Pegawai</span>
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
				<div class="no-move">
					
				</div>
			</div>
			<div class="box-content no-padding">
				<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1" >
					<thead>
						<tr>
							<th>NIP</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Golongan Terakhir</th>
							<th>Pendidikan Pertama</th>
							<th>Pendidikan Terakhir</th>
							<th>Eselon</th>
							<th>Golongan Jabatan</th>
							<th>Unit Kerja</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($datapegawai as $d) { ?>
						<tr>
							<td><?= $d['nip'] ?> </td>
							<td><?= $d['nama'] ?> </td>
							<td><?= $d['alamat'] ?> </td>
							<td><?= $d['golongan_terakhir'] ?> </td>
							<td><?= $d['pendidikan_pertama'] ?> </td>
							<td><?= $d['pendidikan_terakhir'] ?> </td>
							<td><?= $d['eselon'] ?> </td>
							<td><?= $d['gol_jabatan'] ?> </td>
							<td><?= $d['unit_kerja'] ?> </td>
						</tr>
						<?php } ?>
					</tbody>
					<tfoot>
						<tr>
							<th>NIP</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Golongan Terakhir</th>
							<th>Pendidikan Pertama</th>
							<th>Pendidikan Terakhir</th>
							<th>Eselon</th>
							<th>Golongan Jabatan</th>
							<th>Unit Kerja</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>


<script type="<?php echo base_url().'assets/admin/text/javascript'?>">
// Run Datables plugin and create 3 variants of settings
function AllTables(){
	TestTable1();
	TestTable2();
	TestTable3();
	LoadSelect2Script(MakeSelect2);
}

function MakeSelect2(){
	$('select').select2();
	$('.dataTables_filter').each(function(){
		$(this).find('label input[type=text]').attr('placeholder', 'Search');
	});
}

$(document).ready(function() {
	// Load Datatables and run plugin on tables 
	LoadDataTablesScripts(AllTables);
	// Add Drag-n-Drop feature
	WinMove();
});
</script>

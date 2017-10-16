<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>  

	<h2>Input Data</h2>  
	<?php echo form_open(base_url('index.php/MyController/createdatadasar')); ?>  
	<input type="text" name="kode_puskes" placeholder="Kode Puskesmas"><br><br>  
	<input type="text" name="nama_puskes" placeholder="Nama Puskesmas"><br><br>  
	<input type="text" name="alamat" placeholder="Alamat"><br><br>  
	<input type="text" name="jenis_puskes" placeholder="Jenis Puskesmas">
	<input type="text" name="kecamatan" placeholder="Kecamatan">
	<input type="text" name="desa" placeholder="Desa">
	<input type="text" name="latitude" placeholder="Posisi Latitude">
	<input type="text" name="kodepos" placeholder="Kodepos">
	<input type="text" name="longtitude" placeholder="Posisi Longtitude">
	<input type="email" name="email" placeholder="Email">
	<input type="text" name="fax" placeholder="Fax">
	<input type="text" name="tlep" placeholder="No Telfon">
	<input type="text" name="kondisi_bangunan" placeholder="Kondisi Bangunan">
	<input type="text" name="status_akreditasi" placeholder="Status Akreditasi">
	<input type="text" name="jumlah_dokter" placeholder="Jumlah Dokter">
	<input type="text" name="jumlah_doktergigi" placeholder="Jumlah Dokter Gigi">
	<input type="text" name="jumlah_perawat" placeholder="Jumlah Perawat">
	<input type="text" name="jumlah_bidan" placeholder="Jumlah Bidan">
	<input type="text" name="jumlah_TKM" placeholder="Jumlah Tenaga Kesehatan Masyarakat">
	<input type="text" name="jumlah_TKL" placeholder="Jumlah Tenaga Kesahatan Lingkungan">
	<input type="text" name="jumlah_ahliGizi" placeholder="Jumlah Tenaga Gizi">
	<input type="text" name="jumlah_ahliLab" placeholder="Jumlah ahli Lab">
	<input type="text" name="jumlah_farmasi" placeholder="Jumlah Farmasi">
	<input type="text" name="jumlah_tenagapenunjang" placeholder="Jumlah Tenaga Penunjang">
	<input type="text" name="jumlah_tenaga" placeholder="Jumlah Tenaga Keseluruhan">
	<br><br>  
	<input type="submit" name="submit" value="Submit">  
	<?php echo form_close(); ?><br>  
	<a href="<?php echo base_url() . 'index.php/read' ?>">
	<button>Read</button></a> <br> <br>
	<a href="<?php echo base_url() . 'index.php/posting' ?>">
	<button>Posting Berita</button></a>

</body> 
</html>
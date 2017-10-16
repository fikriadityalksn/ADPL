<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>  
	<h2>Input Data Pegawai</h2>  

<?php echo form_open(base_url('index.php/MyController/createdatapegawai')); ?>  
	<input type="text" name="nip" placeholder="NIP"><br><br>  
	<input type="text" name="nama" placeholder="nama"><br><br>  
	<input type="text" name="alamat" placeholder="Alamat"><br><br>  
	<input type="text" name="golongan_terakhir" placeholder="Golongan Terakhir">
	<input type="text" name="pendidikan_pertama" placeholder="pendidikan Pertama">
	<input type="text" name="pendidikan_terakhir" placeholder="Pendidikan Terakhir">
	<input type="text" name="eselon" placeholder="Eselon">
	<input type="text" name="gol_jabatan" placeholder="Golongan Jabatan">
	<input type="text" name="unit_kerja" placeholder="Unit Kerja">
	

	<br><br>  
	<input type="submit" name="submit" value="Submit">  
	
<?php echo form_close(); ?><br>  
	<a href="<?php echo base_url() . 'index.php/read' ?>">
	<button>Read</button></a> <br> <br>
	<a href="<?php echo base_url() . 'index.php/posting' ?>">
	<button>Posting Berita</button></a>

	</body> 
</html>
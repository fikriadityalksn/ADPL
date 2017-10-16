<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<style type="text/css">

table, th, td {
	border: 1px solid black;
    border-collapse: collapse;
}

th, td {
    padding: 5px;
}
</style>
<tbody>   
	<table border="1" style="border-collapse: collapse">
	
	  
		<tr style="background:gray;">
		<th>Nama Puskesmas</th>
		<th>Jumlah Pasien Umum</th>
		<th>Jumlah Pasien Gigi</th>
		<th>Jumlah Pasien </th>
		<th>Action</th>

	<tr>
	<?php foreach ($data as $x) { ?> 
	    <td><?= $x['nama_Puskes'] ?></td>    
	    <td><?= $x['jumlah_Pasien_Umum'] ?></td>      
	    <td><?= $x['jumlah_pasien_gigi'] ?></td>    
	    <td><?= $x['jumlah_pasien_kb'] ?></td>  
	    <td><a href="<?= base_url() ?>"><button>Delete</button></a>  
	    <a href="<?= base_url() ?>"><button>Edit</button></a>   
	    </tr>   
	    <?php } ?> 
	    </tbody> 
	    </table>
	    <br> 
	    <a href="<?= base_url() ?>"><button>Back</button></a> 
</html>
<?php 
	$jumlahPositif = 1245653;
	$jumlahDirawat = 411;
	$jumlahSembuh = 1227793;
	$meninggal = 15244;
	$namaOperator = "Robby Maulana";
	$nimMahasiswa = "191011401643"
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>UTS Pemrograman WEB 2</title>
 	<style type="style.css"></style>
 </head>
 <body>
 	<center><h4>Data Pemantauan Covid19 wilayah <select name="pilih">
		<option value="laki-laki genap">Jawa Barat</option>
		<option value="laki-laki ganjil">DKI jakarta</option>Jawa Barat
		<option value="perempuan genap">Banten</option>
		<option value="perempuan ganjil"> Jawa Tengah</option>
	</select></h4></center>
 	<center><h4>per 17 april 2022 14:08:16 (Waktu dan Jam Sekarang)</h4></center>
 	<center><h4><?php echo "$namaOperator / $nimMahasiswa" ?></h4></center>
 	<center><table border="1" cellspacing="0" cellpadding="10">
 		<tr>
 			<td>Positif</td>
 			<td>Dirawat</td>
 			<td>Sembuh</td>
 			<td>Meninggal</td>
 		</tr>
 		<tr>
 			<td><?php echo $jumlahPositif; ?></td>
 			<td><?php echo $jumlahDirawat; ?></td>
 			<td><?php echo $jumlahSembuh; ?></td>
 			<td><?php echo $meninggal?></td>
 		</tr>
 	</table></center>
 </body>
 </html>
<!DOCTYPE html>
<html>
<head>
	<title>Masalah</title>
</head>
<style type="text/css">body{background: lightblue;}table{background: grey; font-size: 15px;}</style>
<body>
	<center><h2>SILAHKAN PILIH KESALAHAN YANG ANDA ALAMI</h2>
		<center><h3>KAMI DARI KELOMPOK 3 INGIN MEMPERBAIKI TUGAS DARI BUK DESITA</h3>
<form method="post">
	<center>
<table>
	<tr><th>Aapkah anda mengalami</th><td><input type="radio" name="pilihan" value="p1" checked></td></tr>
	<tr><th>Aapkah anda mengalami</th><td><input type="radio" name="pilihan" value="p2" ></td></tr>
	<tr><th>Aapkah anda mengalami</th><td><input type="radio" name="pilihan" value="p3" ></td></tr>
	<tr><th>Aapkah anda mengalami</th><td><input type="radio" name="pilihan" value="p4" ></td></tr>
	<tr><th>Aapkah anda mengalami</th><td><input type="radio" name="pilihan" value="p5" ></td></tr>
	<tr><th>Aapkah anda mengalami</th><td><input type="radio" name="pilihan" value="p6" ></td></tr>
	<tr><th>Aapkah anda mengalami</th><td><input type="radio" name="pilihan" value="p7" ></td></tr>
	<tr><th>Aapkah anda mengalami</th><td><input type="radio" name="pilihan" value="p8" ></td></tr>
	<tr><th>Aapkah anda mengalami</th><td><input type="radio" name="pilihan" value="p9" ></td></tr>
	<tr><th>Aapkah anda mengalami</th><td><input type="radio" name="pilihan" value="p10"></td></tr>
	<tr><td><input type="submit" name="masukan" value="masukan"></td></tr>
</table>
	</center>
	<?php 

	

	if (isset($_POST['masukan'])) {

		$pilihan = $_POST['pilihan'];
		
		if ($pilihan == 'p1') {
		echo "Masalah 1";}
		elseif ($pilihan == 'p2') {
		echo "Masalah 2";}
		elseif ($pilihan == 'p3') {
		echo "Masalah 3";}
		elseif ($pilihan == 'p4') {
		echo "Masalah 4";}
		elseif ($pilihan == 'p5') {
		echo "Masalah 5";}
		elseif ($pilihan == 'p6') {
		echo "Masalah 6";}
		elseif ($pilihan == 'p7') {
		echo "Masalah 7";}
		elseif ($pilihan == 'p8') {
		echo "Masalah 8";}
		elseif ($pilihan == 'p9') {
		echo "Masalah 9";}
		elseif ($pilihan == 'p10') {
		echo "Masalah 10";}
	}
	else{
		echo "SELAMAT DATANG DI WEB KAMI :) SILAHKAN ANDA KLIK SALAH SATU MASUKAN INPUT DI ATAS";
	}
	

	  ?>
</form>
</body>
</html>
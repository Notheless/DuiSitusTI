<?php
	$Nama = $_POST["Nama"];
	$Email = $_POST["Email"];
	$Telp = $_POST["Telp"];
	$HP = $_POST["HP"];
	$Alamat = $_POST["Alamat"];
	$Pendidikan = $_POST["Pendidikan"];
	$Bidang = $_POST["Bidang"];

	$Pengajaran = $_POST["Pengajaran"];
	$pengabdian = $_POST["Pengabdian"];
	$penunjang = $_POST["Penunjang"];
	$Penelitian = $_POST["Penelitian"];

	echo "Nama : ".$Nama."<br>";
	echo "Email : ".$Email."<br>";
	echo "Telp : ".$Telp."<br>";
	echo "HP : ".$HP."<br>";
	echo "Alamat : ".$Alamat."<br>";
	echo "Pendidikan : ".$Pendidikan."<br>";
	echo "Bidang Riset : ".$Bidang."<br>";

	foreach($Pengajaran as $input){
		if(strcmp($input,"")) echo "Pengajaran : ".$input."<br>";
	}
	foreach($pengabdian as $input){
		if(strcmp($input,"")) echo "pengabdian : ".$input."<br>";
	}
	foreach($penunjang as $input){
		if(strcmp($input,"")) echo "penunjang : ".$input."<br>";
	}
	foreach($Penelitian as $input){
		if(strcmp($input,"")) echo "Penelitian : ".$input."<br>";
	}
	echo "gambar <img src='".$_POST["Foto"]."'>";
?>
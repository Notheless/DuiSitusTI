<?php
	$hasil =  exif_imagetype ( $_FILES['gambar']['tmp_name'] );
    move_uploaded_file($name,'A.jpg');
	echo $hasil;
?>
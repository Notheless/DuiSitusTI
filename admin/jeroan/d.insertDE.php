<?php
	include '../../database.php';
	
	$newdosen = 1;
	$sql = "SELECT MAX(ID) AS last FROM dosen";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		$rowx = $result->fetch_assoc();
		$newdosen = $rowx["last"];
	}
	$newdosen +=1;
	$ResTarget = 2000;
	if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
		
	$str = $_POST['Foto'];
	foreach( $str as $key) {
				//upload and convert
				$actual_image_name = "..\\..\\img\\".$newdosen.".jpg";
				$img = $key;
				$img = substr($img, 1+strrpos($img, ','));
				$data = base64_decode($img);
				$success = file_put_contents($actual_image_name,$data);
					
				$check =  exif_imagetype ( $actual_image_name );
				$tmp = $actual_image_name;
				$exploded = explode('.',$tmp);
				if ($check == 2 )
					$imageTmp=imagecreatefromjpeg($tmp);
				else if ($check == 3 )
					$imageTmp=imagecreatefrompng($tmp);
				else if ($check == 1 )
					$imageTmp=imagecreatefromgif($tmp);
				else if ($check == 6 )
					$imageTmp=imagecreatefrombmp($originalImage);
				imagejpeg($imageTmp, $tmp, 100);	
				$ext = $exploded[count($exploded) - 1]; 
				
				//resize
				
				$filenamex = $tmp;
				list($width, $height) = getimagesize($filenamex);
				if($width>$ResTarget||$height>$ResTarget){
					if($width>$height) $percent = $ResTarget / $width;
					else $percent = $ResTarget / $width;
					
					$new_width = $width * $percent;
					$new_height = $height * $percent;
			
					$image_p = imagecreatetruecolor($new_width, $new_height);
					$image = imagecreatefromjpeg($filenamex);
					imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
					imagejpeg($image_p, $tmp, 100);	
				}
				
				//actual upload process
				move_uploaded_file($tmp,$actual_image_name);
			}
	//header("Location: index.html"); /* Redirect browser */
	}
	
	else{
		echo"
		<script>
			alert('".$_FILES['gambar']."');
		</script>";
	}
	
	
	$Nama = $_POST["Nama"];
	$Email = $_POST["Email"];
	$Telp = $_POST["Telp"];
	$HP = $_POST["HP"];
	$Alamat = $_POST["Alamat"];
	$Pendidikan = $_POST["Pendidikan"];
	$Bidang = $_POST["Bidang"];

	$sql = "INSERT INTO `dosen`(`ID`, `Nama`, `Email`, `HP`, `Telp`, `Alamat`, `Pendidikan`, `Bidang`) VALUES (".$newdosen.",'".$Nama."','".$Email."','".$HP."','".$Telp."','".$Alamat."','".$Pendidikan."','".$Bidang."');";

	if ($conn->query($sql) === False) {
		echo "
		<script>
			alert('Terjadi Kelasahan pada input dosen');
		</script>";
		echo $sql;
	}
	$Pengajaran = $_POST["Pengajaran"];
	$pengabdian = $_POST["Pengabdian"];
	$penunjang = $_POST["Penunjang"];
	$Penelitian = $_POST["Penelitian"];

	
	foreach($Pengajaran as $input){
		if(strcmp($input,"")){
			$sql = "INSERT INTO `detaildosen`(`IDDosen`, `IDCatagory`, `Isi`) VALUES (".$newdosen.",1,'".$input."')";
			$conn->query($sql);
		}
	}
	foreach($pengabdian as $input){
		if(strcmp($input,"")){
			$sql = "INSERT INTO `detaildosen`(`IDDosen`, `IDCatagory`, `Isi`) VALUES (".$newdosen.",3,'".$input."')";
			$conn->query($sql);
		}
	}
	foreach($penunjang as $input){
		if(strcmp($input,"")){
			$sql = "INSERT INTO `detaildosen`(`IDDosen`, `IDCatagory`, `Isi`) VALUES (".$newdosen.",4,'".$input."')";
			$conn->query($sql);
		}
	}
	foreach($Penelitian as $input){
		if(strcmp($input,"")){
			$sql = "INSERT INTO `detaildosen`(`IDDosen`, `IDCatagory`, `Isi`) VALUES (".$newdosen.",2,'".$input."')";
			$conn->query($sql);
		}
	}
	echo"
		<script>
			window.location.href='../dosen.php';
		</script>";
?>
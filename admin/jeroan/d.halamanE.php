
	<?php
	include '../../database.php';
	$id= $_POST['ID'];
	$judul = $_POST['Judul'];
	$isi = $_POST['Isi'];
	$header = $_POST['header'];
	$count = 0;

	$sql = "DELETE FROM `datahalaman` WHERE `datahalaman`.`Katagori` = ".$id.";";
	$result = $conn->query($sql);
	foreach($judul as $k){
		if( strcmp($judul[$count],"") || strcmp($isi[$count],"") ) {
			if($count == ($header-1)){
				$sql="INSERT INTO `datahalaman`( `Katagori`, `Header`, `Judul`, `Isi`) VALUES (".$id.",1,'".$judul[$count]."','".$isi[$count]."');";
			}
			else{
				$sql="INSERT INTO `datahalaman`( `Katagori`, `Header`, `Judul`, `Isi`) VALUES (".$id.",0,'".$judul[$count]."','".$isi[$count]."');";
			}
			$result = $conn->query($sql);
		
		}
		$count+=1;

	}

	
//insert
$ResTarget = 2000;
if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
	
$str = $_POST['Foto'];
foreach( $str as $key) {
			//upload and convert
			$actual_image_name = '..\\..\\f_img\\cont\\'.$id.'.jpg';
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
	}
	echo "
		<script>
			alert('Data telah diupdate');
			window.location.href='../halaman.php';
		</script>";
?>
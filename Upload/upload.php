<?php
include '../database.php';
$sql = "SELECT MAX(ID) AS last FROM gambar";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id = $row["last"];
$id +=1;

$ResTarget = 2000;
$count = 0;
if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
	foreach ($_FILES['gambar']['name'] as $name){
    $size = $_FILES['gambar']['size'][$count];
    if (strlen($name)) {
        if ($size < (1024 *1024 * 1024)) { // Image size max 1 MB
			//upload and convert
			$id += $count;
            $actual_image_name = "hasil/".$id.".jpg";
            $tmp = $_FILES['gambar']['tmp_name'][$count];
            move_uploaded_file($tmp,$actual_image_name);
				
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
			$filename = $tmp;
			$percent = 1;
			list($width, $height) = getimagesize($filename);
			if($width>$ResTarget||$height>$ResTarget){
				if($width>$height) $percent = $ResTarget / $width;
				else $percent = $ResTarget / $width;
					
				$new_width = $width * $percent;
				$new_height = $height * $percent;
			
				$image_p = imagecreatetruecolor($new_width, $new_height);
				$image = imagecreatefromjpeg($filename);
				imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
				imagejpeg($image_p, $tmp, 100);	
			}
			
			//actual upload process
            move_uploaded_file($tmp,$actual_image_name);
			$sql = "INSERT INTO `gambar` (`ID`, `TagPost`, `Utama`) VALUES ('".$id."',2,0);";
			$conn->query($sql);
			$count+=1;
        }
	}
	}
	//header("Location: index.html"); /* Redirect browser */
	exit;
}

?>
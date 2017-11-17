<?php
$ResTarget = 2000;
if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_FILES['gambar']['name'];
    $size = $_FILES['gambar']['size'];
    if (strlen($name)) {
        if ($size < (1024 *1024 * 1024)) { // Image size max 1 MB
			//upload and convert
            $actual_image_name = "hasil/".time().".jpg";
            $tmp = $_FILES['gambar']['tmp_name'];
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
        }
	}
	//header("Location: index.html"); /* Redirect browser */
	exit;
}

?>
<?php
$valid_formats = array("jpg", "png", "gif", "bmp", "jpeg");
if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_FILES['gambar']['name'];
    $size = $_FILES['gambar']['size'];
    if (strlen($name)) {
        list($txt, $ext) = explode(".", $name);
        if (in_array($ext, $valid_formats)) {
            if ($size < (1024 * 1024)) { // Image size max 1 MB
                $actual_image_name = "hasil/".time().".jpg";
                $tmp = $_FILES['gambar']['tmp_name'];
				
				$exploded = explode('.',$tmp);
				if (preg_match('/jpg|jpeg/i',$ext))
					$imageTmp=imagecreatefromjpeg($tmp);
    			else if (preg_match('/png/i',$ext))
    			    $imageTmp=imagecreatefrompng($tmp);
    			else if (preg_match('/gif/i',$ext))
    			    $imageTmp=imagecreatefromgif($tmp);
    			else if (preg_match('/bmp/i',$ext))
					$imageTmp=imagecreatefrombmp($originalImage);
				imagejpeg($imageTmp, $tmp, "100");
				imagedestroy($imageTmp);
				
				$ext = $exploded[count($exploded) - 1]; 
                if (move_uploaded_file($tmp,$actual_image_name)) {
                    echo "<img src='uploads/" . $actual_image_name . "'>";
                } else {
                    echo "failed";
                }
            } else {
                echo "Image file size max 1 MB";
            }
        } else {
            echo "Invalid file format..";
        }
    } else {
        echo "Please select image..!";
    }
    exit;
}

?>
?>
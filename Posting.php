<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Posting</title>  
	<?php include 'header.html';?>
</head>
<body>
	<?php
		include 'database.php';
		$id=0;
		$sql = "SELECT * FROM posting";
		$result = $conn->query($sql);
		$judul ='';
		$tanggal ='';
		$isi ='';
		$auth ='';
		$tag0 ='';
		$tag1 ='';
		$tag2 ='';
		$tag3 ='';
		$tag4 ='';
		$tag5 ='';
		$tag6 ='';
		$tag7 ='';
		$tag8 ='';
		
		if($_GET["ID"]) 
		{
			$id=$_GET["ID"];
		}			
		if ((!$id==0)&&($result->num_rows > 0)) 
		{
			while($row = $result->fetch_assoc()) 
			{
				if($row["ID"]==$id)
				{
					$judul =$row["Judul"];
					$tanggal =$row["Tanggal"];
					$isi =$row["Isi"];
					$auth =$row["Author"];
					$tag0 =$row["tag0"];
					$tag1 =$row["tag1"];
					$tag2 =$row["tag2"];
					$tag3 =$row["tag3"];
					$tag4 =$row["tag4"];
					$tag5 =$row["tag5"];
					$tag6 =$row["tag6"];
					$tag7 =$row["tag7"];
					$tag8 =$row["tag8"];
				}
			}
			if($judul==='')notfound();
		}
		else
		{	
			notfound();
		}
		function notfound() {
			//header("Location: ViewP.php"); /* Redirect browser */
			exit();
		}
	?>
		<?php include 'Navbar.html';?>
    <div class="grid-container">
        <!-- navigasi kiri -->
			<?php include 'left_nav.html';?>
		<!--Recent-->
			<?php include 'recent.html' ?>
        <!-- konten -->
		
        <div class="grid-headline-header">
            <h1 class="headline-header"> POSTINGAN <span class="header-revcolor">DAN TEMAN-TEMANNYA </span></h1>
        </div>
        <div class="grid-content">
            <div class="contentstyle" style="margin:40px;text-align:justify">
                <!-- content start -->
                <?php 
					echo $isi;
					
					//gambar
					$sqlx = "SELECT * FROM gambar";
					$resultx = $conn->query($sqlx);			
					if ((!$id==0)&&($resultx->num_rows > 0)) 
					{
						while($rowx = $resultx->fetch_assoc()) 
						{
							if($rowx["TagPost"]==$id){
								?>
								
								<a href="imgpost\<?php echo $rowx["ID"]; ?>.jpg" style="width:300px; height:300px; overflow: hidden;"><img src="imgpost\<?php echo $rowx["ID"]; ?>.jpg" width=300px></a>
								
								<?php
							}
						}
					}
				?>
					
                <!-- content end -->
            </div>
        </div>
    </div>
</body>
</html>
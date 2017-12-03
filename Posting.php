<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Posting</title>  
	<?php include 'header.html';?>
</head>
<body>
	<?php
		error_reporting(0);
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
        <!-- konten -->
		
        <div class="grid-headline-header"></div>
        <div class="grid-content">
            <div class="contentstyle" style="margin:40px;text-align:justify">
                <!-- content start -->
                <?php 
					echo $isi."<br>";
					
					//gambar
					$sqlx = "SELECT * FROM gambar";
					$resultx = $conn->query($sqlx);			
					if ((!$id==0)&&($resultx->num_rows > 0)) 
					{
						while($rowx = $resultx->fetch_assoc()) 
						{
							if($rowx["TagPost"]==$id){
								?>
								<a href="imgpost\<?php echo $rowx["ID"]; ?>.jpg"><img src="imgpost\<?php echo $rowx["ID"]; ?>-thumbnail.jpg" ></a>
								
								<?php
							}
						}
					}
					if($id==0){
						$sqlx = "SELECT * FROM posting ORDER BY ID DESC LIMIT 10";
						$resultx = $conn->query($sqlx);
						if (($resultx->num_rows > 0)) 
						{
							?>
							<div class="ultimate-header">
								<p>NEWS</p>
							</div>
							<ul>
							<?php
							while($rowx = $resultx->fetch_assoc()) 
							{
								$sqly = "SELECT * FROM gambar";
								$resulty = $conn->query($sqly);	
								?>
									<div class="daftar-artikel">
										<div class="daftar-artikel-header">
											<?php 
											$mid = strrpos(substr($rowx["Judul"], 0, floor(strlen($rowx["Judul"]) / 2)), ' ') + 1;
											
											$judulf = substr($rowx["Judul"], 0, $mid);
											$judulb = substr($rowx["Judul"], $mid);
											?>
											<a href="?ID=<?php echo $rowx["ID"]?>">
											<b><span><?php echo $judulf; ?></span><span><?php echo $judulb; ?></span></b></a>
										</div>
										<div class="daftar-artikel-thumbnail">
											<?php 
											while($rowy = $resulty->fetch_assoc()) {
												if (($rowx["ID"] == $rowy["TagPost"]) and ($rowy["Utama"] == 1)) { ?>
													<img class="artikel-list-thumbnail" src="imgpost\<?php echo $rowy["ID"]; ?>.jpg">
											<?php } } ?>
										</div>
										<div>
											<p id="artikel-ket">
												Diposting pada tanggal 
												<?php echo $rowx["Tanggal"]?>
												oleh 
												<?php echo $rowx["Author"]?>
											</p>
										</div>
										<div class="daftar-artikel-content">
											<?php 
												$str = $rowx["Isi"]; 
												$isi = substr($str, 0, 300);
												$isi .= "...";
												echo $isi;
											?>
											<a href="?ID=<?php echo $rowx["ID"]?>">
											<b>Read More</b></a><br>
										</div>
										<div>
											<p id="artikel-tags">Tags : 
												<?php 
													$tgn = 0;
													$tgsp = 0;
													while ($tgn <= 8)
													{
														if ($rowx["tag".$tgn] == 1) {
															if ($tgsp == 0) {$tgsp = 1;}
															else {echo ", ";}
															if ($tgn == 0) {echo "Kecendikiawanan";}
															elseif ($tgn == 1) {echo "Kerjasama";}
															elseif ($tgn == 2) {echo "Laboratorium";}
															elseif ($tgn == 3) {echo "Lulusan";}
															elseif ($tgn == 4) {echo "Mahasiswa";}
															elseif ($tgn == 5) {echo "Monev-Mutu";}
															elseif ($tgn == 6) {echo "Pendidikan";}
															elseif ($tgn == 7) {echo "Penelitian";}
															elseif ($tgn == 8) {echo "Pengabdian";}											;	
														}
														$tgn += 1;
													}
												?>
											</p>
										</div>
									</div>
								<?php
							}
							?>
							</ul>
							<div class="page-list-row">
								<a href><div class="page-list-counter"><p>1<p></div></a>
								<div class="page-list-counter"><p>2<p></div>
								<div class="page-list-counter"><p>3<p></div>
							</div>
							<?php
						}
						
					}
				?>
				
					
                <!-- content end -->
            </div>
        </div>
    </div>
</body>
</html>
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
			<?php include 'left_nav.php';?>
		<!--Recent-->
        <!-- konten -->
		
        <div class="grid-headline-header"></div>
        <div class="grid-content">
            <div class="contentstyle" style="margin:40px;text-align:justify">
                <!-- content start -->
                <?php ?>
					<div class="daftar-artikel-header" id="artikel-header">
						<?php 
						$mid = strrpos(substr($judul, 0, floor(strlen($judul) / 2)), ' ') + 1;
						
						$judulf = substr($judul, 0, $mid);
						$judulb = substr($judul, $mid);
						?>
						<b><span><?php echo $judulf; ?></span><span><?php echo $judulb; ?></span></b></a>
					</div>
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
					if ($id==0){
						if ( $_GET['page'] ) { $page_id = $_GET['page']; }
						else { $page_id = 1; }
						if (isset($_GET['search'])) {$searchse = $_GET['search']; $sqlx = "SELECT * FROM posting WHERE Judul LIKE '%".$searchse."%' ORDER BY ID DESC LIMIT ".(($page_id - 1) * 10).",10";} 
						elseif (isset($_GET['tags'])) {$tagse = $_GET['tags']; $sqlx = "SELECT * FROM posting WHERE tag0=".$tagse." OR tag1=".$tagse." OR tag2=".$tagse." OR tag3=".$tagse." OR tag4=".$tagse." OR tag5=".$tagse." OR tag6=".$tagse." OR tag7=".$tagse." OR tag8=".$tagse." ORDER BY ID DESC LIMIT ".(($page_id - 1) * 10).",10";} 
						else { $sqlx = "SELECT * FROM posting ORDER BY ID DESC LIMIT ".(($page_id - 1) * 10).",10"; }
						
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
								$avaible = true;
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
												if (($rowx["ID"] == $rowy["TagPost"]) and ($rowy["Utama"] == 0) and $avaible) { $avaible=false;?>
													<img class="artikel-list-thumbnail" src="imgpost\<?php echo $rowy["ID"]; ?>-thumbnail.jpg">
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
													$tagn = 0;
													while ($tagn <= 8)
													{
														$sql_tag = "SELECT * FROM tags";
														$resultt = $conn->query($sql_tag);
														if ($resultt->num_rows > 0) {
															while($rowtag = $resultt->fetch_assoc()) {
																if ($rowx['tag'.$tagn] == $rowtag['ID']) { echo $rowtag['Text']; }
															}
														}
														if ($rowx["tag".($tagn + 1)] != 0) { echo ", "; }

														$tagn += 1;
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
								<?php 
									if (isset($_GET['search'])) {$searchse = $_GET['search']; $sqlx = "SELECT COUNT(*) FROM posting WHERE Judul LIKE '%".$searchse."%'";} 
									elseif (isset($_GET['tags'])) {$tagse = $_GET['tags']; $sqlm = "SELECT COUNT(*) FROM posting WHERE tag0=".$_GET['tags']." OR tag1=".$tagse." OR tag2=".$tagse." OR tag3=".$tagse." OR tag4=".$tagse." OR tag5=".$tagse." OR tag6=".$tagse." OR tag7=".$tagse." OR tag8=".$tagse;}
									else {$sqlm = "SELECT COUNT(*) FROM posting;";}
									
									$resultm = $conn->query($sqlm);
									while($rowm = $resultm->fetch_assoc()) { $max_page = $rowm['COUNT(*)'] / 10; }
								?>

								<?php if ($page_id > 2) { ?> 
									<a href="?page=<?php echo $page_id - 2; if(isset($_GET['search'])) {echo "&search=".$_GET['search']; } if(isset($_GET['tags'])) {echo "&tags=".$_GET['tags']; } ?>"><div class="page-list-counter"><p><?php echo $page_id - 2; ?><p></div></a> 
								<?php } 
								if ($page_id > 1) { ?> 
									<a href="?page=<?php echo $page_id - 1; if(isset($_GET['search'])) {echo "&search=".$_GET['search']; } if(isset($_GET['tags'])) {echo "&tags=".$_GET['tags']; } ?>"><div class="page-list-counter"><p><?php echo $page_id - 1; ?><p></div></a> 
								<?php } ?>
								<a href><div class="page-list-counter" id="active"><p><?php echo $page_id; ?><p></div></a>
								<?php if ($page_id < $max_page) { ?> 
									<a href="?page=<?php echo $page_id + 1; if(isset($_GET['search'])) {echo "&search=".$_GET['search']; } if(isset($_GET['tags'])) {echo "&tags=".$_GET['tags']; } ?>"><div class="page-list-counter"><p><?php echo $page_id + 1; ?><p></div></a> 
								<?php } 
								if ($page_id + 1 < $max_page) { ?> 
									<a href="?page=<?php echo $page_id + 2; if(isset($_GET['search'])) {echo "&search=".$_GET['search']; } if(isset($_GET['tags'])) {echo "&tags=".$_GET['tags']; } ?>"><div class="page-list-counter"><p><?php echo $page_id + 2; ?><p></div></a> 
								<?php } ?>
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
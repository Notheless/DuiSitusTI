<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Alumni</title>    
	<?php 
	include 'header.html';
	include 'database.php';
	?>
</head>
<body>
    <?php include 'Navbar.html';?>
    <div class="grid-container">
        
        <!-- navigasi kiri -->
			<?php include 'left_nav.php';?>
		<!--Recent-->
        <!-- konten -->
		<div class="grid-headline-header">
            <h1 class="headline-header"><span class="header-revcolor">ALUMNI</span></h1>
        </div>
        <div class="grid-headline-para">
            <p class="headline-para">
            <?php
                    
                    $sql = "SELECT * FROM `datahalaman`";
                    $result = $conn->query($sql);
                    $id=8;
                    while($row = $result->fetch_assoc()) 
                    {
                        if($id==$row["Katagori"]&& 1==$row["Header"]) echo nl2br($row["Isi"]);
                    }
                    mysqli_data_seek($result,0);
                 ?></p>
        </div>
        <div class="grid-headline-thumbnail">
            <img class="thumbnail" src="f_img/cont/<?php echo $id;?>.jpg" height="auto" width="100%"/>
        <div class="headline-thumbnail-det">
            <div style="padding:10px;font-style:italic;color:white">
                <h2>Alumni Program Studi S1 FMIPA Unpad</h2>
                <p>Sampai 18 Agustus 2017, Jumlah lulusan adalah sebanyak 64 orang.</p>
            </div>
        </div>
        </div>
        <div class="grid-content">
            <div class="contentstyle" style="margin:40px;text-align:justify">
                <!-- content start -->
				
                <?php
                
                $sql = "SELECT * FROM `datahalaman`";
                $result = $conn->query($sql);
                $id=8;
                while($row = $result->fetch_assoc()) 
                {
                    if($id==$row["Katagori"]&& 0==$row["Header"]) {
            ?>
                    <h1><?php echo nl2br($row["Judul"]);?> </h1>
            <p>
                    <?php echo nl2br($row["Isi"]);?>
            </p>
            <?php
                    }
                }
             ?>
				<table class="tabel-alumni">
					<tr class="tabel-head">
						<th>#</th>
						<th>Nama/Pembimbing</th>
						<th>Lulus/Penguji</th>
						<th>Skripsi</th>
					</tr>
						<?php
							$sql = "SELECT * FROM `lulusan`";
							$result = $conn->query($sql);
							$i=1;
							while($row = $result->fetch_assoc()) 
							{
								
								$Penguji1="***";
								$Penguji2="***";
								$Penguji3="***";
								$Pembimbing1="***";
								$Pembimbing2="***";
							
								$sqlx = "SELECT * FROM `dosen`";
								$resultx = $conn->query($sqlx);
								while($rowx = $resultx->fetch_assoc()) 
								{
									if($rowx["ID"]==$row["Pembimbing1"])$Pembimbing1=$rowx["Nama"];
									if($rowx["ID"]==$row["Pembimbing2"])$Pembimbing2=$rowx["Nama"];
									if($rowx["ID"]==$row["Penguji1"])$Penguji1=$rowx["Nama"];
									if($rowx["ID"]==$row["Penguji2"])$Penguji2=$rowx["Nama"];
									if($rowx["ID"]==$row["Penguji3"])$Penguji3=$rowx["Nama"];
								}
						?>
					<tr>
						<td><strong><?php echo $i; ?></strong></td>
						<td><b><?php echo $row["Nama"]; ?>/<strong><?php echo $Pembimbing1.",".$Pembimbing2; ?></strong></b></td>
						<td><strong><?php echo $row["TanggalLulus"]."/".$Penguji1.",".$Penguji2.",".$Penguji3; ?></strong></td>
						<td><strong><?php echo $row["Judul"]; ?></strong></td>
					</tr>
					<?php
						$i+=1;
						}
					?>
				</table>
                <!-- content end -->
            </div>
        </div>
    </div>
</body>
</html>
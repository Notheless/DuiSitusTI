<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Pengabdian</title>    
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
            <h1 class="headline-header"><span class="header-revcolor">PENGABDIAN</span></h1>
        </div>
        <div class="grid-headline-para">
            <p class="headline-para">
            <?php
                    
                    $sql = "SELECT * FROM `datahalaman`";
                    $result = $conn->query($sql);
                    $id=11;
                    while($row = $result->fetch_assoc()) 
                    {
                        if($id==$row["Katagori"]&& 1==$row["Header"]) echo nl2br($row["Isi"]);
                    }
                    mysqli_data_seek($result,0);
                 ?>
                 </p>
        </div>
        <div class="grid-headline-thumbnail">
        <img class="thumbnail" src="f_img/cont/<?php echo $id;?>.jpg" height="auto" width="100%"/>
        <div class="headline-thumbnail-det">
            <div style="padding:10px;font-style:italic;color:white">
                <h2></h2>
                <p>We can't help everyone. But everyone can help someone.
					<br> <div style="text-align:right"> - Ronald Raegan</div>
				</p>
        </div>
            </div>
        </div>
        <div class="grid-content">
            <div class="contentstyle" style="margin:40px;text-align:justify">
                <!-- content start -->
                <?php
                
                $sql = "SELECT * FROM `datahalaman`";
                $result = $conn->query($sql);
                $id=11;
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
                <!-- content end -->
            </div>
        </div>
    </div>
</body>
</html>
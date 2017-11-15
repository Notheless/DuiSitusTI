<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Tenaga Pendidik</title>
    <?php include 'header.html';?>
</head>
<body>
    <?php include 'Navbar.html';?>
	<div class="grid-dosen-container">
        <!-- navigasi kiri -->
			<?php include 'left_nav.html';?>
        <!-- konten -->
        <div class="grid-dosen-header">
            <h1 class="headline-header">TENAGA <span class="header-revcolor">PENDIDIK</span></h1>
        </div>
		<?php
		include 'database.php';
		$sql = "SELECT * FROM dosen";
		$result = $conn->query($sql);
		$id = $_GET["ID"];
		while($row = $result->fetch_assoc()) {
		if($row["ID"]==$id){
        ?>
		<div class="grid-dosen-info">
			<div class="dosen-info">
                <h1><?php echo$row["Nama"];?></h1>
                <div></div>
                <p><?php echo $row["Bidang"]; ?></p>
			</div>
		</div>
        <div class="grid-dosen-pic">
        <div class="photo-border">
			<img src="img/sam.png"></div>
		</div>
        <div class="grid-dosen-stats">
			<div class="dosen-stats">
				<table style="width:100%;">
					<tr><td width="110px"><p>Nama</p></td><td><p>:</p></td><td><p><?php echo $row["Nama"];?></p></td></tr>
					<tr><td width="110px"><p>Email</p></td><td><p>:</p></td><td><p><?php echo $row["Email"];?></p></td></tr>
					<tr><td width="110px"><p>Telp</p></td><td><p>:</p></td><td><p><?php echo $row["Telp"];?></p></td></tr>
					<tr><td width="110px"><p>HP</p></td><td><p>:</p></td><td><p><?php echo $row["HP"];?></p></td></tr>
					<tr><td width="110px"><p>Alamat</p></td><td><p>:</p></td><td><p><?php echo $row["Alamat"];?></p></td></tr>
					<tr><td width="110px"><p>Pendidikan</p></td><td><p>:</p></td><td><p><?php echo $row["Pendidikan"];?></td></tr>
				</table>
        	</div>
        </div>
		<?php }} 
			$sql = "SELECT * FROM detaildosen";
			$result = $conn->query($sql);
			$pengajaran='';
			$penelitian='';
			$pengabdian='';
			$penunjang='';
			while($row = $result->fetch_assoc()) {
				if($row["IDDosen"]==$id){
					if($row["IDCatagory"]==3) $pengajaran .= "<tr><td>".$row["Isi"]."</tr></td>";
					if($row["IDCatagory"]==1) $penelitian .= "<tr><td>".$row["Isi"]."</tr></td>";
					if($row["IDCatagory"]==2) $pengabdian .= "<tr><td>".$row["Isi"]."</tr></td>";
					if($row["IDCatagory"]==4) $penunjang .= "<tr><td>".$row["Isi"]."</tr></td>";
				}
			}
			?>
        <div class="grid-dosen-data">
            <div class="menu-bar-aspek">
                <div class="button-menu" onclick="showPengajaranDosen()"><p>Pengajaran</p></div>
                <div class="button-menu" onclick="showPenelitianDosen()"><p>Penelitian</p></div>
                <div class="button-menu" onclick="showPengabdianDosen()"><p>Pengabdian</p></div>
                <div class="button-menu" onclick="showPenunjangDosen()"><p>Penunjang</p></div>
            </div>
            <div class="menu-bar-konten">
                <div id="pengajaran-d" class="konten-data">
					<p>
					<table style="width:100%;">
					<?php
						echo $pengajaran;
					?>
					</table>
					</p>
				</div>
                <div id="penelitian-d" class="konten-data">
					<p>
					<?php
						echo $penelitian;
					?>
					</p>
				</div>
                <div id="pengabdian-d" class="konten-data">
					<p>
					<?php
						echo $pengabdian;
					?>
					</p>
				</div>
                <div id="penunjang-d" class="konten-data">
					<p>
					<?php
						echo $penunjang;
					?>
					</p>
				</div>
				<?php
				
				?>
            </div>
        </div>
    </div>
	
</body>
</html>
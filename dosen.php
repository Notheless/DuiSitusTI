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
		error_reporting(0);
		include 'database.php';
		$sql = "SELECT * FROM dosen";
		$result = $conn->query($sql);
		$id = 0;
		if($_GET["ID"]){
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
			<img src="img/<?php echo $row["ID"];?>.jpg" style="height:300px;"></div>
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
			$pengajaran="<ol>";
			$penelitian="<ol>";
			$pengabdian="<ol>";
			$penunjang="<ol>";
			while($row = $result->fetch_assoc()) {
				if($row["IDDosen"]==$id){
					if($row["IDCatagory"]==3) $pengajaran .= "<li>".$row["Isi"]."</li>";
					if($row["IDCatagory"]==1) $penelitian .= "<li>".$row["Isi"]."</li>";
					if($row["IDCatagory"]==2) $pengabdian .= "<li>".$row["Isi"]."</li>";
					if($row["IDCatagory"]==4) $penunjang .= "<li>".$row["Isi"]."</li>";
				} 
			}
			$pengajaran.="</ol>";
			$penelitian.="</ol>";
			$pengabdian.="</ol>";
			$penunjang.="</ol>";
			?>
        <div class="grid-dosen-data">
			<table>
				<tr>
					<td class="data-column-button"><button onclick="showPengajaranDosen()">Pengajaran</button></td>
					<td class="data-column-button"><button onclick="showPenelitianDosen()">Penelitian</button></td>
					<td class="data-column-button"><button onclick="showPenunjangDosen()">Penunjang</button></td>
					<td class="data-column-button"><button onclick="showPengabdianDosen()">Pengabdian</button></td>					</td>
				</tr>
				<tr>
					<td colspan="4" class="data-column-fill">
						<div id="pengajaran-d" class="konten-data">
							<?php
								echo $pengajaran;
								?>
						</div>
						<div id="penelitian-d" class="konten-data">
							<?php
								echo $penelitian;
								?>
						</div>
						<div id="pengabdian-d" class="konten-data">
							<?php
								echo $pengabdian;
								?>
						</div>
						<div id="penunjang-d" class="konten-data">
							<?php
								echo $penunjang;
								?>
						</div>
					</td>
				</tr>
			</table>
        </div>
<<<<<<< HEAD
		<?php } ?>
	</div>
    <script type="text/javascript" src="js/menu_aspek_dosen.js"></script>
=======
		<?php 
		}
			else{
		?>
        <div class="grid-dosen-stats">
			<table>
				<tr><th>Daftar Dosen</th></tr>
		<?php 
				$i = 1;
				while($row = $result->fetch_assoc()) {
		?>
				<tr><td><a href="?ID=<?php echo $row["ID"]?>"> <?php echo $row["Nama"]?> </a></td></tr>			
		<?php	
					$i+=1;
				}
		?>
			</table>
		</div>
		<?php
			}
		?>
    </div>
	
>>>>>>> 8b7e9d4121104ff12e271bdd93fd8105ddee47b3
</body>
</html>

	<?php
		$data = $_POST['Judul'];
		$isi = $_POST['Isi'];
		$header = $_POST['header'];
		$count = 0;
		foreach($data as $judul){
			echo "Judul :".$judul."<br>";
			echo "isi :".$isi[$count]."<br>";
			if($count == ($header-1)){
				echo "HEADER";
			}
			else{
				echo "not header";
			}
			echo "<br><br>";
			$count+=1;
		}
	?>
<form action="test.php" enctype="multipart/form-data" method="POST" onload="loaded();">
<input type="hidden" value="NULL" name="auth">
<input type="hidden" value="0" name="tag0">
<input type="hidden" value="0" name="tag1">
<input type="hidden" value="0" name="tag2">
<input type="hidden" value="0" name="tag3">
<input type="hidden" value="0" name="tag4">
<input type="hidden" value="0" name="tag5">
<input type="hidden" value="0" name="tag6">
<input type="hidden" value="0" name="tag7">
<input type="hidden" value="0" name="tag8">
<table id="myTable">
	<tr>
		<td><p>Judul Artikel : </p></td>
		<td width="70%"><input class="data-input" type="text" name="judul_artikel" placeholder="judul artikel"></td>
	</tr>
	<tr>
		<td><p>Tanggal : </p></td>
		<td><input class="data-input" type="datetime-local" name="tanggal_artikel" placeholder="11/7/2017" ></td>
	</tr>
	<tr>
		<td><p>Isi Artikel: </p></td>
	</tr>
	<tr>
		<td colspan="2"><textarea rows="3" name="isi_artikel" placeholder="isi artikel"></textarea></td>
	</tr>
	<tr>
		<td><p>Unggah gambar:</p></td>
		<td><label class ="button"><input id ="imgbutton" type="file" multiple="multiple" accept="image/*" style ="display: none;" onchange="handleFileSelect()"/>Tambah gambar</label></td>
	</tr>
	<tr>
	<td colspan="2"> 
		<label id="result"></label>
	</td>
	</tr>
	<tr>
		<td><button  type="button" onclick="hideInsertDiv()">◀ kembali</button></td>
		<td style="text-align: right"><input id="submit" class="button" type="submit" value="Masukkan"></td>
	</tr>
</table>
</form>

<script type="text/javascript" src="/dui/admin/js/insert-img.js"></script>
<?php 
	$str = $_POST['gambar'];
	$count =100;
	foreach( $str as $key) {
		$count +=1;
		echo "<img src='".$key."'>";
		$img = $key;
		$img = substr($img, 1+strrpos($img, ','));
		$data = base64_decode($img);
		$file = '..\\..\\imgpost\\'.$count . '.png';
		$success = file_put_contents($file, $data);
	}
?>
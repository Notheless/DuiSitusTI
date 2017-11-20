<form action="test.php" enctype="multipart/form-data" method="POST">
	<table>
		<tr>
			<input type='checkbox' name='checkboxvar[]' value='satu'>1<br>
		</tr>
		<tr>
			<input type='checkbox' name='checkboxvar[]' value='dua'>2<br>
		</tr>
		<tr>
			<input type='checkbox' name='checkboxvar[]' value='tiga'>3<br>
		</tr>
		<tr>
			<input class="button" type="submit" value="Masukkan">
		</tr>
		
	</table>
</form>
<?php 
if (isset($_POST['checkboxvar'])) 
{
	foreach($_POST['checkboxvar'] as $Z){
		echo $Z."<br>";
	}
}
?>
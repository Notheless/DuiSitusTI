function deleteP(i){
	var txt = 'Artikel akan dihapus';
	var lnk = 'deletePE.php?ID='+i
	var x = confirm(txt);
	if (x == true) 
	{
		window.location.href=lnk;
	}
}
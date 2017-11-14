function deleteL(i){
	var txt = 'Data lulusan akan dihapus';
	var lnk = 'deleteLE.php?ID='+i
	var x = confirm(txt);
	if (x == true) 
	{
		window.location.href=lnk;
	}
}
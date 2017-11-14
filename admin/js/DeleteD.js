function deleteD(i){
	var txt = 'Data dosen akan dihapus';
	var lnk = 'deleteDE.php?ID='+i
	var x = confirm(txt);
	if (x == true) 
	{
		window.location.href=lnk;
	}
}
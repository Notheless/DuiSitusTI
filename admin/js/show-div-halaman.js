function showUpdateDiv(str) {
	document.getElementById('divUpdate').style.display = "block";
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) {
			document.getElementById("update").innerHTML=this.responseText;
		}
	}
	xmlhttp.open("GET","jeroan/d.halaman.php?ID="+str,true);
	xmlhttp.send();
}
function hideUpdateDiv() {
	document.getElementById('divUpdate').style.display = "none";
}

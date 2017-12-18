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


function newA(inp){
    var output = document.getElementById('LastA');
    var x = document.getElementById('Anum').value;
    var y = Number(x);

    if(inp==y){
        document.getElementById('Anum').value = y+1;
        x = document.getElementById('Anum').value;
        var output = document.getElementById("LastA");
        
        var div = document.createElement("tr");
		div.innerHTML = "<td><p>Judul Bagian : </p></td><td width=\"70%\"><input class=\"data-input\" type=\"text\" name=\"Judul[]\" placeholder=\"Judul Bagian\" onkeypress=\"newA("+x+")\"></td>";
		output.insertBefore(div, null);
		
        var div = document.createElement("tr");
		div.innerHTML = "<td><p>Isi Bagian : </p></td><td width=\"70%\"></td>";
		output.insertBefore(div, null);
		
        var div = document.createElement("tr");
		div.innerHTML = "<td colspan=\"2\"><textarea rows=\"3\" name=\"Isi[]\" placeholder=\"Isi bagian\" onkeypress=\"newA("+x+")\" ></textarea></td>";
		output.insertBefore(div, null);
		
        var div = document.createElement("tr");
		div.innerHTML = "<td><label><input name=\"header\" value="+x+" type=\"radio\" required>Header Konten</label></td>";
        output.insertBefore(div, null);
    }
    if(false){
    }
}

var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById('preview');
        output.src = reader.result;
        var Val = document.getElementById('imgval');
        Val.value = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  }
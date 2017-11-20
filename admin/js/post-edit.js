function enable(str){
    var check = document.getElementById("GC"+str).checked;
	if(!check){
		document.getElementById("Gambar"+str).style.filter = "grayscale(100%)";
		document.getElementById("Gambar"+str).style.WebkitFilter = "grayscale(100%)";
	}
	else{
		document.getElementById("Gambar"+str).style.filter = "grayscale(0%)";
		document.getElementById("Gambar"+str).style.WebkitFilter = "grayscale(0%)";
	}
 }
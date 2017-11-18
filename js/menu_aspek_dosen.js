function showPengajaranDosen() {
	document.getElementById('pengajaran-d').style.display = "block";
	document.getElementById('penelitian-d').style.display = "none";
	document.getElementById('pengabdian-d').style.display = "none";
	document.getElementById('penunjang-d').style.display = "none";
}
function showPenelitianDosen() {
	document.getElementById('pengajaran-d').style.display = "none";
	document.getElementById('penelitian-d').style.display = "block";
	document.getElementById('pengabdian-d').style.display = "none";
	document.getElementById('penunjang-d').style.display = "none";
}
function showPengabdianDosen() {
	document.getElementById('pengajaran-d').style.display = "none";
	document.getElementById('penelitian-d').style.display = "none";
	document.getElementById('pengabdian-d').style.display = "block";
	document.getElementById('penunjang-d').style.display = "none";
}
function showPenunjangDosen() {
	document.getElementById('pengajaran-d').style.display = "none";
	document.getElementById('penelitian-d').style.display = "none";
	document.getElementById('pengabdian-d').style.display = "none";
	document.getElementById('penunjang-d').style.display = "block";
}
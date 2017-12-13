
<h2 class="content-title">Artikel Baru</h2>
                <form action="jeroan/d.insertPE.php"  enctype="multipart/form-data" method="POST" onload="loaded();">
                    <input type="hidden" value="0" id="imgnum">
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
                            <td><p>Nama Dosen : </p></td>
                            <td width="70%"><input class="data-input" type="text" name="judul_artikel" placeholder="Nama Dosen" required></td>
                        </tr>
                        <tr>
                            <td><p>Email : </p></td>
                            <td><input class="data-input" type="Email" name="tanggal_artikel" placeholder="Email" ></td>
                        </tr>
                        <tr>
                            <td><p>Telp : </p></td>
                            <td><input class="data-input" type="text" name="tanggal_artikel" placeholder="Telp" ></td>
                        </tr>
                        <tr>
                            <td><p>HP : </p></td>
                            <td><input class="data-input" type="text" name="tanggal_artikel" placeholder="HP" ></td>
                        </tr>
                        <tr>
                            <td><p>Unggah gambar:</p></td>
							<td><label class ="button"><input id ="imgbutton" type="file" accept="image/*" style ="display: none;" onchange="handleFileSelectI()"/>Tambah gambar</label></td>
						</tr>
                        <tr>
                        <td colspan="2"> 
                            <label id="resultI"></label>
                        </td>
                        </tr>
                        <tr>
                            <td><button  type="button" onclick="hideInsertDiv()">◀ kembali</button></td>
                            <td style="text-align: right"><input id="submit" class="button" type="submit" value="Masukkan"></td>
						</tr>
                    </table>
                </form>
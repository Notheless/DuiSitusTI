<h2 class="content-title">Input Dosen</h2>
                <form action="jeroan/insertPE.php" enctype="multipart/form-data" method="POST">
                    <input type="hidden" value="<?php echo $_GET["ID"] ?>" name="ID">
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
					<table>
                        <tr>
                            <td><p>Judul Artikel : </p></td>
                            <td width="70%"><input class="data-input" type="text" name="judul_artikel" placeholder="judul artikel" required></td>
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
							<td><input type="file" name="gambar[]" multiple="multiple" accept="image/*" /></td>
                        </tr>
                        <tr>
                            <td><button type="button" onclick="hideInsertDiv()">kembali</button></td>
                            <td style="text-align: right"><input class="button" type="submit" value="Masukkan"></td>
						</tr>
                    </table>
                </form>
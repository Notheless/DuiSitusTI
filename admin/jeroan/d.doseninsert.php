
<h2 class="content-title">Dosen Baru</h2>
               <form action="jeroan/d.insertDE.php"  enctype="multipart/form-data" method="POST" onload="loaded();">
					<table id="myTable">
                        <tr>
                            <td><p>Nama Dosen : </p></td>
                            <td width="70%"><input class="data-input" type="text" name="Nama" placeholder="Nama Dosen" required></td>
                        </tr>
                        <tr>
                            <td><p>Email : </p></td>
                            <td><input class="data-input" type="Email" name="Email" placeholder="Email" ></td>
                        </tr>
                        <tr>
                            <td><p>Telp : </p></td>
                            <td><input class="data-input" type="text" name="Telp" placeholder="Telp" ></td>
                        </tr>
                        <tr>
                            <td><p>HP : </p></td>
                            <td><input class="data-input" type="text" name="HP" placeholder="HP" ></td>
                        </tr>
                        
                        <tr>
                            <td><p>Alamat: </p></td>
                        </tr>
                        <tr>
                            <td colspan="2"><textarea rows="3" name="Alamat" placeholder="Alamat"></textarea></td>
                        </tr>
                        
                        <tr>
                            <td><p>Pendidikan: </p></td>
                        </tr>
                        <tr>
                            <td colspan="2"><textarea rows="3" name="Pendidikan" placeholder="Pendidikan"></textarea></td>
                        </tr>
                        <tr>
                            <td><p>Bidang Riset: </p></td>
                        </tr>
                        <tr>
                            <td colspan="2"><textarea rows="3" name="Bidang" placeholder="Bidang Riset"></textarea></td>
                        </tr>
                        <tr>
                            <td><p>Unggah gambar:</p></td>
							<td><label class ="button"><input id ="imgbutton" type="file" accept="image/*" style ="display: none;" onchange="loadFile(event)" required/>Tambah gambar</label></td>
						</tr>
                        <tr>
                            <td><input id="imgval" type="hidden" name="Foto[]" value="#"></td>
                        <td> 
                            <img id="preview" src="#" alt="Foto" width='200px' height='200px'/>
                        </td>
                        </tr>
                        
                        <tr>
                            <td><p>Pengajaran : </p></td>
                            <td>
                                <input class="data-input" type="text" name="Pengajaran[]" placeholder="Pengajaran" onkeypress="newA(0)" id="Pengajaran0">
                                <label id="LastA"></label>
                                <input type="hidden" value="0" id="Anum">
                            </td>
                        </tr>
                        
                        <tr>
                            <td><p>Penelitian : </p></td>
                            <td>
                                <input class="data-input" type="text" name="Penelitian[]" placeholder="Penelitian" onkeypress="newB(0)" id="Penelitian0">
                                <label id="LastB"></label>
                                <input type="hidden" value="0" id="Bnum">
                            </td>
                        </tr>
                        
                        <tr>
                            <td><p>Penunjang : </p></td>
                            <td>
                                <input class="data-input" type="text" name="Penunjang[]" placeholder="Penunjang" onkeypress="newC(0)" id="Penunjang0">
                                <label id="LastC"></label>
                                <input type="hidden" value="0" id="Cnum">
                            </td>
                        </tr>
                        
                        <tr>
                            <td><p>Pengabdian : </p></td>
                            <td>
                                <input class="data-input" type="text" name="Pengabdian[]" placeholder="Pengabdian" onkeypress="newD(0)" id="Pengabdian0">
                                <label id="LastD"></label>
                                <input type="hidden" value="0" id="Dnum">
                            </td>
                        </tr>

                        <tr>
                            <td><button  type="button" onclick="hideInsertDiv()">◀ kembali</button></td>
                            <td style="text-align: right"><input id="submit" class="button" type="submit" value="Masukkan"></td>
						</tr>
                    </table>
                </form>
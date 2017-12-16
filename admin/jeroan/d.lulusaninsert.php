
<h2 class="content-title">Lulusan Baru</h2>				
			<?php
				include '../../database.php';
				$sql = "SELECT * FROM dosen";
				$result = $conn->query($sql);
			?>
               <form action="jeroan/d.insertLE.php"  enctype="multipart/form-data" method="POST" onload="loaded();">
					<table id="myTable">
                        <tr>
                            <td><p>Nama Lulusan : </p></td>
                            <td width="70%"><input class="data-input" type="text" name="Nama" placeholder="Nama Lulusan" required></td>
                        </tr>
                        <tr>
                            <td><p>Judul Skripsi : </p></td>
                            <td><input class="data-input" type="text" name="Judul" placeholder="Judul Skripsi" ></td>
                        </tr>
                        <tr>
                            <td><p>Tanggal : </p></td>
                            <td><input class="data-input" type="datetime-local" name="Tanggal" placeholder="Tanggal" ></td>
                        </tr>
                        <tr>
                            <td><p>Pembimbing 1 : </p></td>
                            <td>
                                <select class="data-input" type="text" name="Pembimbing1">
                                    <option value=0>Pilih dosen</option>
                                <?php
                                mysqli_data_seek($result,0);
                                while($row = $result->fetch_assoc()){
                                    echo "<option value=".$row["ID"].">".$row["Nama"]."</option>";
                                } 	
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                        <td><p>Pembimbing 2 : </p></td>
                        <td>
                            <select class="data-input" type="text" name="Pembimbing2">
                                <option value=0>Pilih dosen</option>
                            <?php
                            mysqli_data_seek($result,0);
                            while($row = $result->fetch_assoc()){
                                echo "<option value=".$row["ID"].">".$row["Nama"]."</option>";
                            } 	
                            ?>
                        </td>
                        </tr>

                        <tr>
                        <td><p>Penguji 1 : </p></td>
                        <td>
                            <select class="data-input" type="text" name="Penguji1">
                                <option value=0>Pilih dosen</option>
                            <?php
                            mysqli_data_seek($result,0);
                            while($row = $result->fetch_assoc()){
                                echo "<option value=".$row["ID"].">".$row["Nama"]."</option>";
                            } 	
                            ?>
                        </td>
                        </tr>
                        

                        <tr>
                        <td><p>Penguji 2 : </p></td>
                        <td>
                            <select class="data-input" type="text" name="Penguji2">
                                <option value=0>Pilih dosen</option>
                            <?php
                            mysqli_data_seek($result,0);
                            while($row = $result->fetch_assoc()){
                                echo "<option value=".$row["ID"].">".$row["Nama"]."</option>";
                            } 	
                            ?>
                        </td>
                        </tr>
                        

                        <tr>
                        <td><p>Penguji 3 : </p></td>
                        <td>
                            <select class="data-input" type="text" name="Penguji3">
                                <option value=0>Pilih dosen</option>
                            <?php
                            mysqli_data_seek($result,0);
                            while($row = $result->fetch_assoc()){
                                echo "<option value=".$row["ID"].">".$row["Nama"]."</option>";
                            } 	
                            ?>
                        </td>
                        </tr>

                        <tr>
                            <td><button  type="button" onclick="hideInsertDiv()">◀ kembali</button></td>
                            <td style="text-align: right"><input id="submit" class="button" type="submit" value="Masukkan"></td>
						</tr>
                    </table>
                </form>
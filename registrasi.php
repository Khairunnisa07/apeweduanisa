<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>

<?php
	$kabupaten = [
					[
					"id"=>1,
					"nama_kab"=>"Kota Pontianak"
					],
				
					["id"=>2,
					"nama_kab"=>"Kubu Raya"
					],
				
				
					["id"=>3,
					"nama_kab"=>"Mempawah"
					],
				
				
					["id"=>4,
					"nama_kab"=>"Singkawang"
					],
				];

?>	
<h2>Registrasi</h2>
 <form method = "POST" action= "proses.php">
  	<table>
   		<tr>
    		<td>Username</td>
    		<td>:</td>
    		<td><input type='text' name='username'></td>
   		</tr>

   		<tr>
    		<td>Password</td>
    		<td>:</td>
    		<td><input type='password' name='password'></td>
   		</tr>
   	
   		<tr>
    		<td>Nama</td>
    		<td>:</td>
    		<td><input type='text' name='nama'></td>
   			</tr>

   		<tr>
   			<td>No.Hp</td>
   			<td>:</td>
   			<td><input type="text" name="nohp"></td>
   		</tr>

   		<tr>
   			<td>Alamat</td>
   			<td>:</td>
   			<td><textarea name="alamat"></textarea>
   			</td>
   		</tr>

   		<tr>
   			<td>Kabupaten</td>
   			<td>:</td>
   			<td><select name="kabupaten">
   			<?php foreach($kabupaten as $kab): ?>
   			<option value="<?php echo $kab['id']?>"> <?php echo $kab['nama_kab'];?> </option>
   			<?php endforeach; ?>
   			</select></td>

   			

   		</tr>

   		<tr>
   			<td>Jenis Kelamin</td>
   			<td>:</td>
   			<td><input type="radio" name="jeniskelamin" value="pria">Pria</td>
   			<td><input type="radio" name="jeniskelamin" value="wanita">Wanita</td>
   		</tr>

   		<tr>
   			<td>Prodi Pilihan</td>
   			<td>:</td>
   			<td><input type="checkbox" name="prodipilihan" value="sistem_informasi">Sistem Informasi</td>
   			<td><input type="checkbox" name="prodipilihan" value="sistem_komputer">Sistem Komputer</td>
   			<td><input type="checkbox" name="prodipilihan" value="informatika">Informatika</td>
   		</tr>
   		<tr>
    		<td></td>
    		<td></td>
    		<td><input type='submit' value='SIMPAN'></td>
   		</tr>
  	</table>  
 </form>

</body>
</html>
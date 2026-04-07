<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
		<h3>XI PPLG 2025</h3>
	</div>
	
	<br/>
 
	<a href="barang.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="inputbarang-aksi.php" method="post">		
		<table>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="namabarang"></td>					
			</tr>	
			<tr>
				<td>Stock Barang</td>
				<td><input type="text" name="stockbarang"></td>					
			</tr>	
			<tr>
				<td>Harga Barang</td>
				<td><input type="text" name="hargabarang"></td>					
			</tr>
			<tr>
				<td>Suplier</td>
				<td><input type="text" name="suplier"></td>					
			</tr>		
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>
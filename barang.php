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
 
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="index.php">Dashboard | </a>
	<a class="tombol" href="inputbarang.php">+ Tambah Data Baru</a>
 
	<h3>Data Barang</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Stock Barang</th>
			<th>Harga Barang</th>
			<th>Suplier</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "config.php";
		$query_mysql = mysql_query("SELECT * FROM barang")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['namabarang']; ?></td>
			<td><?php echo $data['stockbarang']; ?></td>
			<td><?php echo $data['hargabarang']; ?></td>
			<td><?php echo $data['suplier']; ?></td>
			<td>
				<a class="edit" href="edit.php?id=<?php echo $data['idbarang']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?php echo $data['idbarang']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
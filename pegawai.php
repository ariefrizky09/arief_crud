<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8" />
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<!-- NAVBAR GRADIENT (desain sama seperti sebelumnya) -->
	<div class="navbar">
		<h1>🌈 Dashboard</h1>
		<div class="menu">
			<a href="index.php">Home</a>
			<a href="input.php">+ Tambah Data</a>
		</div>
	</div>

	<!-- CONTAINER UTAMA -->
	<div class="container">

		<!-- HEADER/JUDUL (dibiarkan agar fungsi/teks asli tetap ada) -->
		<div class="card hero">
			<div class="judul">		
				<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
				<h2>Menampilkan data dari database</h2>
				<h3>XI PPLG 2025</h3>
			</div>
			<div class="actions">
				<a class="tombol" href="index.php">Dashboard</a>
				<a class="tombol primary" href="input.php">+ Tambah Data Baru</a>
			</div>

			<!-- PESAN (input/update/hapus) -->
			<div class="flash">
			<?php 
			if(isset($_GET['pesan'])){
				$pesan = $_GET['pesan'];
				if($pesan == "input"){
					echo "<span class='badge success'>Data berhasil di input.</span>";
				}else if($pesan == "update"){
					echo "<span class='badge info'>Data berhasil di update.</span>";
				}else if($pesan == "hapus"){
					echo "<span class='badge danger'>Data berhasil di hapus.</span>";
				}
			}
			?>
			</div>
		</div>

		<!-- TABEL DATA (fungsi asli dipertahankan) -->
		<div class="card">
			<h3 class="card-title">Data Pegawai</h3>
			
			<div class="table-wrap">
				<table class="table">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Pekerjaan</th>
						<th>Opsi</th>		
					</tr>
					<?php 
					include "config.php";
					$query_mysql = mysql_query("SELECT * FROM user") or die(mysql_error());
					$nomor = 1;
					while($data = mysql_fetch_array($query_mysql)){
					?>
					<tr>
						<td><?php echo $nomor++; ?></td>
						<td><?php echo $data['nama']; ?></td>
						<td><?php echo $data['alamat']; ?></td>
						<td><?php echo $data['pekerjaan']; ?></td>
						<td>
							<a class="btn small edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
							<a class="btn small hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>

	</div><!-- /container -->

</body>
</html>

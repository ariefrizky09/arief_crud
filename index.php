<?php
// dashboard.php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard - Arief MR</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #f4f7fa;
    }
    .navbar {
      background: linear-gradient(45deg, #000000, #ee0979);
      padding: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: white;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }
    .navbar h1 {
      margin: 0;
      font-size: 22px;
    }
    .menu {
      display: flex;
      gap: 20px;
    }
    .menu a {
      text-decoration: none;
      color: white;
      font-weight: bold;
      transition: 0.3s;
      padding: 8px 15px;
      border-radius: 8px;
    }
    .menu a:hover {
      background: rgba(255,255,255,0.3);
    }
    .container {
      padding: 20px;
      animation: fadeIn 0.5s ease-in-out;
    }
    .card {
      background: white;
      border-radius: 12px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 6px 12px rgba(0,0,0,0.1);
      transition: 0.3s;
    }
    .card:hover {
      transform: translateY(-3px);
    }
    @keyframes fadeIn {
      from {opacity: 0;}
      to {opacity: 1;}
    }
  </style>
</head>
<body>

<div class="navbar">
  <h1>🌈 Dashboard</h1>
  <div class="menu">
    <a href="?page=home">Home</a>
    <a href="pegawai.php">Pegawai</a>
    <a href="barang.php">Barang</a>
  </div>
</div>

<div class="container">
  <?php if($page == 'home'): ?>
    <div class="card">
      <h2>Selamat Datang di Dashboard</h2>
      <p>Ini adalah halaman utama untuk mengelola data pegawai dan barang.</p>
    </div>
  <?php elseif($page == 'pegawai'): ?>
    <div class="card">
      <h2>Data Pegawai</h2>
      <p>Anda dapat mengelola daftar pegawai di sini.</p>
      <table border="1" width="100%" cellpadding="10" cellspacing="0">
        <tr style="background:#ff6a00; color:white;">
          <th>No</th><th>Nama</th><th>Jabatan</th>
        </tr>
        <tr><td>1</td><td>Budi</td><td>Manager</td></tr>
        <tr><td>2</td><td>Sinta</td><td>Staff</td></tr>
      </table>
    </div>
  <?php elseif($page == 'barang'): ?>
    <div class="card">
      <h2>Data Barang</h2>
      <p>Anda dapat mengelola daftar barang di sini.</p>
      <table border="1" width="100%" cellpadding="10" cellspacing="0">
        <tr style="background:#ee0979; color:white;">
          <th>No</th><th>Nama Barang</th><th>Stok</th>
        </tr>
        <tr><td>1</td><td>Laptop</td><td>10</td></tr>
        <tr><td>2</td><td>Printer</td><td>5</td></tr>
      </table>
    </div>
  <?php endif; ?>
</div>

</body>
</html>

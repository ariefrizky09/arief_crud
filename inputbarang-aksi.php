<?php 
include 'config.php';
$namabarang = $_POST['namabarang'];
$stockbarang = $_POST['stockbarang'];
$hargabarang = $_POST['hargabarang'];
$suplier = $_POST['suplier'];
 
mysql_query("INSERT INTO barang VALUES('','$namabarang','$stockbarang','$hargabarang','suplier')");
 
header("location:barang.php?pesan=input");
?>
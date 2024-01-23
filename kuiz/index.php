<!DOCTYPE html>
<html>
<head>
<title>Tampil Data</title>
<style>
fieldset {
width: 400px;
margin:auto;
}
</style>
</head>
<body>
<fieldset >
<h3>
            <a href="index.php">Home</a> |
            <a href="admin.php">Admin</a> |
            <a href="pengadaan.php">Pengadaan</a>
</h3>
<!--Judul pada fieldset-->
<legend align="center">Data Produk</legend>
<center><h1>Pencarian Produk</h1></center>
<center>||<a href="tambah_form.html">Tambah Data</a>||</center>
<br>
<form method="GET" action="index.php" style="text-align: center;">
<label>Kata Pencarian : </label>
<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo
$_GET['kata_cari']; } ?>" />
<button type="submit">Cari</button>
</form>
<table>

<thead>
<tr>
<th>Kode Produk</th>
<th>Nama Produk</th>
<th>Harga</th>
<th>Stok</th>
<!--Tambahan untuk opsi Update & Delete-->
<th>OPSI</th>
</tr>
</thead>
<tbody>
<?php
//untuk meinclude kan koneksi
include 'koneksi.php';
//jika kita klik cari, maka yang tampil query cari ini
if(isset($_GET['kata_cari'])) {
    $kata_cari = $_GET['kata_cari'];
    $query = "SELECT * FROM tb_buku WHERE id_buku like '%".$kata_cari."%' OR nama_buku like '%".$kata_cari."%' ORDER BY id_buku ASC";
 }else {
//jika tidak ada pencarian, default yang dijalankan query ini
$query = "SELECT * FROM tb_buku ORDER BY id_buku ASC";
}
$result = mysqli_query($koneksi, $query);
if(!$result) {
die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
}
//kalau ini melakukan foreach atau perulangan
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?php echo $row['id_buku']; ?></td>
<td><?php echo $row['nama_buku']; ?></td>
<td><?php echo $row['harga']; ?></td>
<td><?php echo $row['stok']; ?></td>
<td><?php echo $row['penerbit']; ?></td>




<!--Tambahan untuk opsi edit dan hapus-->
<td>
<a href="edit_form.php?id_buku=<?php echo $row['id_buku']; ?>">EDIT</a>
<a href="delete.php?id_buku=<?php echo $row['id_buku']; ?>">HAPUS</a>

</td>
</tr>

<?php
}
?>
</tbody>
</table>
</fieldset>
</body>
</html>
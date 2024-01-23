<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <title>Tampil Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <fieldset >
    <!--Judul pada fieldset-->
        
        <h3>
            <a href="index.php">Home</a> |
            <a href="admin.php">Admin</a> |
            <a href="Pengadaan.php">Pengadaan</a>
        </h3>
        <legend align="center">Selamat Datang Di Toko Kami</legend>
        <center><h1>Pencarian Produk</h1></center>
        <center>||<a href="tambah_penerbit.php">Tambah Data</a>||</center>
        <br>
        <form method="GET" action="index.php" style="text-align: center;">
        <label>Kata Pencarian : </label>
        <input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo
        $_GET['kata_cari']; } ?>" />
        <button type="submit">Cari</button>
        </form>
<br>
<div class="table_keren">
    <table class="table_home">
        <thead>
        <tr>
        <th>Kode Penerbit</th>
        <th>Nama Penerbit</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>Telepon</th>
        <th colspan="2">Aksi</th>
        </tr>   
        </thead>
    <?php
    //untuk meinclude kan koneksi
    include 'koneksi.php';
    //jika kita klik cari, maka yang tampil query cari ini
    if(isset($_GET['kata_cari'])) {
    //menampung variabel kata_cari dari form pencarian
    $kata_cari = $_GET['kata_cari'];
    $query = "SELECT * FROM tb_penerbit WHERE id_penerbit like '%".$kata_cari."%' OR
    nama_penerbit like '%".$kata_cari."%' ORDER BY id_penerbit ASC";
    } else {
    //jika tidak ada pencarian, default yang dijalankan query ini
    $query = "SELECT * FROM tb_penerbit ORDER BY id_penerbit ASC";
    }
    $result = mysqli_query($koneksi, $query);
    if(!$result) {
    die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    }
    //kalau ini melakukan foreach atau perulangan
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row['id_penerbit']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
            <td><?php echo $row['kota']; ?></td>
            <td><?php echo $row['telepon']; ?></td>
            <td><a href="edit_form_penerbit.php?id_penerbit=<?php echo $row['id_penerbit']; ?>">Edit</a></td>
            <td><a href="delete_penerbit.php?id_penerbit=<?php echo $row['id_penerbit']; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">Hapus</a></td>
        </tr>
        <?php
        }
        ?>
        </table>
    </fieldset>
</body>
</html>
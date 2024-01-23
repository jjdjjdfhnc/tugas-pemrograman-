<?php

if (isset($_POST['edit'])) {
    include 'koneksi.php';
    $id_penerbit = $_POST['id_penerbit'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $telepon = $_POST['telepon'];

    $query = "UPDATE tb_penerbit SET nama='$nama', alamat='$alamat', kota='$kota', telepon='$telepon' WHERE id_penerbit='$id_penerbit'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    } else {
        $result;
        echo "<script>alert('Data Penerbit berhasil diedit');window.location='pengadaan.php';</script>";
    }
}
?>
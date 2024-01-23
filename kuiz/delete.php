<?php
    include 'koneksi.php';
    $id_buku = $_GET['id_buku'];
    $query = "DELETE FROM tb_buku WHERE id_buku ='$id_buku'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    } else {
        $result;
        echo "<script>alert('Buku berhasil dihapus');location='admin.php';</script>";
    }
?>
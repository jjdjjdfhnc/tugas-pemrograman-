<!DOCTYPE html>
<html>
<head>
<title>Form Edit Data</title>
<style>
fieldset {
width: 400px;
margin:auto;
}
</style>
</head>
<body>
<fieldset >
    <?php
        include 'koneksi.php';
        $id_penerbit = $_GET['id_penerbit'];
        $query = "SELECT * FROM tb_penerbit WHERE id_penerbit='$id_penerbit'";
        $result = mysqli_query($koneksi, $query);
        if (!$result) {
            die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
        }
        $data = mysqli_fetch_assoc($result);
    ?>
    <legend>Edit Buku</legend>
    <form action="edit_proses_penerbit.php" method="post">
        
    <div class="input">
            <label>ID Penerbit 
                <small>(ID Penerbit harus unik contoh: SP01)</small>*
            </label> <br>
            <input type="text" name="id_penerbit" placeholder="ID Penerbit" required value="<?php echo $data['id_penerbit'] ?>">
        </div>
        <div class="input">
            <label>Nama Penerbit</label><br>
            <input type="text" name="nama" placeholder="Nama Penerbit" required value="<?php echo $data['nama'] ?>">
        </div>
        <div class="input">
            <label>Alamat</label><br>
            <input type="text" name="alamat" placeholder="Alamat" required value="<?php echo $data['alamat'] ?>">
        </div>
        <div class="input">
            <label>Kota</label><br>
            <input type="text" name="kota" placeholder="Kota" required value="<?php echo $data['kota'] ?>">
        </div>
        <div class="input">
            <label>Telepon</label><br>
            <input type="text" name="telepon" placeholder="Telepon" required value="<?php echo $data['telepon'] ?>">
        </div><br>
        <div class="input" align="right">
            <button type="submit" name="edit" onclick="return confirm('Apakah Anda yakin ingin mengubah data penerbit?')">Edit</button>
            <button type="reset" onclick="window.location.href='pengadaan.php'">Batal</button>
        </div>
    </form>
</fieldset>
</div>
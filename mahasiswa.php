<?php
include "koneksi.php";
$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css" />
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="header">
        <img class="logo" src="img/mahasiswa.png" alt="no image">
        <h1>Data Mahasiswa</h1>
    </div>

    <div class="container">
        <h2>Daftar Mahasiswa</h2>
        <table>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>No HP</th>
                <th>Alamat</th>
            </tr>
            <?php
            while($row = $result->fetch_assoc()) {
            echo
            '<tr>'.
                '<td>'.$row["nim"].'</td>'.
                '<td>'.$row["nama"].'</td>'.
                '<td>'.$row["prodi"].'</td>'.
                '<td>'.$row["nohp"].'</td>'.
                '<td>'.$row["alamat"].'</td>'.
            '</tr>';
            }
            ?>
        </table>

        <h2>Tambah Mahasiswa</h2>
        <form action="tambah_post.php" method="POST">
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim"><br><br>
            <label for="nama">Nama :</label>
            <input type="text" id="nama" name="nama"><br><br>
            <label for="prodi">Prodi :</label>
            <input type="text" id="prodi" name="prodi"><br><br>
            <label for="prodi">No HP :</label>
            <input type="text" id="nohp" name="nohp"><br><br>
            <label for="prodi">Alamat :</label>
            <input type="text" id="alamat" name="alamat"><br><br>
            <input type="submit" value="Tambah">
        </form>

        <h2>Update Mahasiswa</h2>
        <form action="ubah_post.php" method="POST">
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim"><br><br>
            <label for="nama">Nama :</label>
            <input type="text" id="nama" name="nama"><br><br>
            <label for="prodi">Prodi :</label>
            <input type="text" id="prodi" name="prodi"><br><br>
            <label for="prodi">No HP :</label>
            <input type="text" id="nohp" name="nohp"><br><br>
            <label for="prodi">Alamat :</label>
            <input type="text" id="alamat" name="alamat"><br><br>
            <input type="submit" value="Ubah">
        </form>

        <h2>Hapus Mahasiswa</h2>
        <form action="hapus_post.php" method="POST">
            <label for="nim">NIM :</label>
            <input type="text" id="nim" name="nim"><br><br>
            <input type="submit" value="Hapus">
        </form>
    </div>
</body>
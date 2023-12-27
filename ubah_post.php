<?php
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];

// Menyimpan data ke database
$sql = "UPDATE mahasiswa SET nama='$nama', prodi='$prodi', nohp='$nohp', alamat='$alamat' WHERE nim=$nim";

if ($conn->query($sql) === TRUE) {
    echo 
    '<script language="javascript">
    alert ("[SUKSES] Data berhasil diubah!");
    window.location="mahasiswa.php";
    </script>';
    exit();
} else {
    echo 
    '<script language="javascript">
    alert ("[ERROR] Error SQL Query!");
    window.location="mahasiswa.php";
    </script>';
    exit();
}

$conn->close();
?>

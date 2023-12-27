<?php
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];

$cekduplicate = mysqli_num_rows(mysqli_query($conn, "SELECT nim FROM mahasiswa WHERE nim='$nim'"));

if($cekduplicate > 0)
{
    echo '<script language="javascript">
    alert ("[ERROR] Data sudah ada!");
    window.location="mahasiswa.php";
    </script>';
    exit();
}

// Menyimpan data ke database
$sql = "INSERT INTO mahasiswa (nim, nama, prodi, nohp, alamat) VALUES ('$nim', '$nama', '$prodi', '$nohp', '$alamat')";

if ($conn->query($sql) === TRUE) {
    echo 
    '<script language="javascript">
    alert ("[SUKSES] Data berhasil ditambahkan!");
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

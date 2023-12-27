<?php
include "koneksi.php";

$nim = $_POST['nim'];

$sql = "DELETE FROM mahasiswa WHERE nim=$nim";

if ($conn->query($sql) === TRUE) {
    echo 
    '<script language="javascript">
    alert ("[SUKSES] Data berhasil dihapus!");
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

<?php 
include "koneksi.php";
$nim = $_GET['nim'];
$query = mysqli_query($conn, "delete from mahasiswa where nim = '$nim'");
if (!$query) {
    header("location:mahasiswa.php?pesan=gagal");
    # code...
}else{
    header("location:mahasiswa.php?pesan=hapus");
}
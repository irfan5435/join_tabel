<?php
include 'koneksi.php';
$id = $_GET['id_murid'];

mysqli_query($db,"DELETE from tb_jurusan where id_jurusan= '$id'");

mysqli_query($db,"DELETE from tb_spp where id_spp= '$id'");

mysqli_query($db,"DELETE from tb_siswa where id_siswa= '$id'");

header("location:join-tabel.php");

?>
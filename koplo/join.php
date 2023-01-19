<html>
<head>
 <title>Join Table</title>
</head>
<body>

   <h4> <a href=tambah.php>Tambah siswa</a></h4>
    <table border="1">
      <tr>
      <td>No.</td>
      <td>Nama</td>
      <td>Kelas</td>
      <td>Jurusan</td>
   <td>Tahun</td>
   <td>Nominal</td>
   <td>Aksi</td>
  </tr>
  
  <?php
  include ("koneksi.php");

   $query = mysqli_query($koneksi,"SELECT * FROM tb_murid INNER JOIN tb_jurusan ON tb_murid.id_jurusan = tb_jurusan.id_jurusan INNER JOIN tb_spp ON tb_murid.id_spp=tb_spp.id_spp");
  
    $no = 1;
     foreach($query as $row):
        ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['kelas']; ?></td>
            <td><?= $row['nama_jurusan']; ?></td>
            <td><?= $row['tahun']; ?></td>
            <td><?= $row['nominal']; ?></td>
            <td>
                <a href=edit.php?id>edit</a>||
                <a href=hapus.php?id>hapus</a>

    <?php endforeach; ?>

    </table>
    </body>
    </html>
 
 
 
 
 
 
 
 
 
 
 
 

 
 

 
 
 

 
 
 
 
 
 
 

 

 
 

 
 
 
 

 
 
 
 
 
 
 
 
 

 
 
 
 

 
 

 
 
 
 
 
 
 

 

 
 
 
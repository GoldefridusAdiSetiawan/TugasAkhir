<?php
include 'koneksi.php';
if($_POST['getDetail']) {
    $id = $_POST['getDetail'];
    
    $sql = mysqli_query($koneksi, "SELECT * from pesan where id_pesan='$id'");
    while ($row = mysqli_fetch_array($sql)){
      $isi=$row["isi"];
      $judul=$row["judul"];
    }
    echo "<h3> Perihal : ".$judul."</h3><br>".$isi; 
    $update_query = "UPDATE pesan SET st_p = '1' WHERE id_pesan='$id' and st_p='0'";
    mysqli_query($koneksi, $update_query);
  }

?>
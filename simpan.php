<?php
include "conn.php";

if (isset($_POST['submit_simpan'])) {
    $toraja = mysqli_real_escape_string($koneksi, $_POST['toraja']);
    $indonesia = mysqli_real_escape_string($koneksi, $_POST['indonesia']);
    $makna = mysqli_real_escape_string($koneksi, $_POST['makna']);
    $contoh = mysqli_real_escape_string($koneksi, $_POST['contoh']);
   
    // Insert data jalan into table
    $query =  "INSERT INTO tbl_kamus(toraja, indonesia, makna, contoh) VALUES('$toraja','$indonesia','$makna', '$contoh')";


    //coba
    $hasil = mysqli_query($koneksi, $query);

    if ($hasil) {
        //echo "<script>alert('Menyimpan kata')".$toraja."</script>";
        echo "<script>alert('coba4')</script>";
        header("Location:daftarkata.php");
    } else {  //jika simpan gagal maka muncul pesan
        echo "<script>alert('Proses simpan gagal, coba kembali')</script>";
        header("Location:tambahkata.php");
    }
}

if (isset($_POST['submit_update'])) {
    $toraja = mysqli_real_escape_string($koneksi, $_POST['toraja']);
    $indonesia = mysqli_real_escape_string($koneksi, $_POST['indonesia']);
    $makna = mysqli_real_escape_string($koneksi, $_POST['makna']);
    $contoh = mysqli_real_escape_string($koneksi, $_POST['contoh']);
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    // Insert data jalan into table
    $query =  "UPDATE tbl_kamus SET toraja = '".$toraja."', indonesia ='".$indonesia."', makna='".$makna."', contoh='".$contoh."' where id='".$id."' ";


    //coba
    $hasil = mysqli_query($koneksi, $query);

    if ($hasil) {
        //echo "<script>alert('Menyimpan kata')".$toraja."</script>";
        echo "<script>alert('coba4')</script>";
        header("Location:daftarkata.php");
    } else {  //jika simpan gagal maka muncul pesan
        echo "<script>alert('Proses simpan gagal, coba kembali')</script>";
        header("Location:daftarkata.php");
    }
}

?>
<?php
    include "conn.php";
    $id = $_GET['id'];
    
    //coba
    $hasil = mysqli_query($koneksi, "DELETE FROM tbl_kamus WHERE id=$id");

    if ($hasil) {
        echo "<script>alert('Berhasil menghapus kata')</script>";
        
        header("Location:daftarkata.php");
    } else {  //jika simpan gagal maka muncul pesan
        echo "<script>alert('Proses gagal, coba kembali')</script>";
        header("Location:daftarkata.php");
    }

?>
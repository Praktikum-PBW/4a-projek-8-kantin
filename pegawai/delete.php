<?php

if (isset($_GET['id_pegawai'])){
    $id = $_GET['id_pegawai'];

    $query = mysqli_query($koneksi, "DELETE FROM pegawai WHERE id_pegawai='$id'");

    if($query){
        echo"
        <script> 
        alert('Data Berhasil dihapus!');
        document.location.href='index.php';
        </script>
    ";
    }else{
        echo"
    <script> 
    alert('Data Gagal dihapus!');
    document.location.href='index.php';
    </script>
"; 
    }
}
?>
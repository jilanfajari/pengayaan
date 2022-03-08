<?php
    $koneksi = mysqli_connect("localhost","root","","fortopolio_jilan");
    $a = mysqli_query($koneksi, "SELECT * FROM user");
    $b = mysqli_query($koneksi, "SELECT * FROM about");
    
    function data($isi){
        global $koneksi;
        $c = mysqli_query($koneksi, $isi);
        $box = [];
        while ($lakukan = mysqli_fetch_assoc($c)){
            $box[] = $lakukan;
        }
        return $box;
    }
    
    function tambah($data){
        global $koneksi;
        $Email = $data["Email"];
        $Nama = $data["Nama"];
        $Pesan = $data["Pesan"];
        
        $query = "INSERT INTO Contact
                  VALUES
                  (NULL,'$Email','$Nama','$Pesan')";
        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);
    }
?>
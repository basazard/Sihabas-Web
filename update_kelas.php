<?php

$id_kelas     =$_POST['id_kelas'];
$nama_kelas   =$_POST['nama_kelas'];
$tahun_ajaran =$_POST['tahun_ajaran'];

echo $id_kelas."<br>";
echo $nama_kelas."<br>";
echo $tahun_ajaran."<br>";

        $hostname ="127.0.0.1";
        $username ="admin";
        $password ="admin";
        $dba_name ="db_habas";
        $port     ="3306";
        $conn = new mysqli($hostname, $username, $password, $dba_name, $port);
        if ($conn->connect_error) die("Fatal Error");

        $stmt = 'SELECT * FROM `tbl_kelas` WHERE  `id_kelas`="'.$id_kelas.'" OR `nama_kelas`="'.$nama_kelas.'" AND `tahun_ajaran`="'.$tahun_ajaran.'";';
         $result   = mysqli_query($conn, $stmt);
         $n_result = mysqli_num_rows($result);
         if (($n_result)==0) {
             echo "Data Tidak Ditemukan";
         }
         else
         {
             $stmt1 = 'UPDATE `tbl_kelas` SET `nama_kelas` = "'.$nama_kelas.'", `tahun_ajaran` = "'.$tahun_ajaran.'" WHERE `tbl_kelas`.`id_kelas` = "'.$id_kelas.'";';
             echo $stmt1."<br>";
             $result = mysqli_query($conn, $stmt1);
             if (($result)!=null) {
                echo "Data Berhasil Disimpan";
             }
             else
             {
                 echo "Data Gagal Disimpan";
             }
         }
       $conn->close(); 

?>
<?php

$id_murid   =$_POST['id_murid'];
$nama_murid =$_POST['nama_murid'];
$gender     =$_POST['gender'];

echo $id_murid."<br>";
echo $nama_murid."<br>";
echo $gender."<br>";

        $hostname ="127.0.0.1";
        $username ="admin";
        $password ="admin";
        $dba_name ="db_habas";
        $port     ="3306";
        $conn = new mysqli($hostname, $username, $password, $dba_name, $port);
        if ($conn->connect_error) die("Fatal Error");
        
        $stmt = 'SELECT * FROM `tbl_murid` WHERE  `id_murid`="'.$id_murid.'"';
         $result   = mysqli_query($conn, $stmt);
         $n_result = mysqli_num_rows($result);
         if (($n_result)==1) {
             echo "Data Tersebut Sebelumnya Telah Tersimpan";
         }
         else
         {
             $stmt1 = 'INSERT INTO `tbl_murid` (`id_murid`, `nama_murid`, `gender`) VALUES ("'.$id_murid.'", "' .$nama_murid.'", "'.$gender.'");';
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
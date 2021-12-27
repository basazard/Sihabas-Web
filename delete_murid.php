<?php

$id_murid   =$_POST['id_murid'];
echo $id_murid."<br>";

        $hostname ="127.0.0.1";
        $username ="admin";
        $password ="admin";
        $dba_name ="db_habas";
        $port     ="3306";
        $conn = new mysqli($hostname, $username, $password, $dba_name, $port);
        if ($conn->connect_error) die("Fatal Error");
        
        $stmt = 'SELECT * FROM `tbl_murid` WHERE  `id_murid`="'.$id_murid.'";';
         $result   = mysqli_query($conn, $stmt);
         $n_result = mysqli_num_rows($result);
         if (($n_result)==0) {
             echo "Data Tidak Ditemukan";
         }
         else
         {
             $stmt1 = 'DELETE FROM `tbl_murid` WHERE `tbl_murid`.`id_murid` = "'.$id_murid.'";';
             echo $stmt1."<br>";
             $result = mysqli_query($conn, $stmt1);
             if (($result)!=null) {
                echo "Data Berhasil Dihapus";
             }
             else
             {
                 echo "Data Gagal Dihapus";
             }
         }
       $conn->close(); 
?>
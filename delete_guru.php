<?php

$id_guru   =$_POST['id_guru'];
//$nama_guru =$_POST['nama_guru'];
//$user_name  = md5($_POST['id_guru']);
//$pass_word  = md5($_POST['password']);

echo $id_guru."<br>";
//echo $nama_guru."<br>";
//echo $user_name."<br>";
//echo $pass_word."<br>";

$remove = array('"' , "'" , "," , "=" , "-" , "DROP", "drop" , "DELETE" , "delete" , "UPDATE" , "update" , "CREATE" , "create" , ":" , ";" , "AND" , "OR" , "or" , "and" , "/" , "&" , "`" , "*");

$id = str_replace($remove, "", $id_guru);
//$na = str_replace($remove, "", $nama_guru);
//$us = str_replace($remove, "", $user_name);
//$pa = str_replace($remove, "", $pass_word);

echo $id."<br>";
//echo $na."<br>";
//echo $us."<br>";
//echo $pa."<br>";
        
        $hostname ="127.0.0.1";
        $username ="admin";
        $password ="admin";
        $dba_name ="db_habas";
        $port     ="3306";
        $conn = new mysqli($hostname, $username, $password, $dba_name, $port);
        if ($conn->connect_error) die("Fatal Error");
        
        $stmt = 'SELECT * FROM `tbl_guru` WHERE  `id_guru`="'.$id.'"';// AND `username`="'.$user_name.'" AND `password`="'.$pass_word.'"';
         $result   = mysqli_query($conn, $stmt);
         $n_result = mysqli_num_rows($result);
         if (($n_result)==0) {
             echo "Data Not Found";
         }
         else
         {
             $stmt1 ='DELETE FROM `tbl_guru` WHERE `tbl_guru`.`id_guru` = "'.$id.'"';
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
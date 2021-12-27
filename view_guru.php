<?php

//$id_guru   =$_POST['id_guru'];
//$nama_guru =$_POST['nama_guru'];
//$user_name  = md5($_POST['id_guru']);
//$pass_word  = md5($_POST['password']);

//echo $id_guru."<br>";
//echo $nama_guru."<br>";
//echo $user_name."<br>";
//echo $pass_word."<br>";

//$remove = array('"' , "'" , "," , "=" , "-" , "DROP", "drop" , "DELETE" , "delete" , "UPDATE" , "update" , "CREATE" , "create" , ":" , ";" , "AND" , "OR" , "or" , "and" , "/" , "&" , "`" , "*");

//$id = str_replace($remove, "", $id_guru);
//$na = str_replace($remove, "", $nama_guru);
//$us = str_replace($remove, "", $user_name);
//$pa = str_replace($remove, "", $pass_word);

//echo $id."<br>";
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

        //$stmt = 'SELECT * FROM `tbl_guru` WHERE  `id_guru`="'.$id.'" AND `username`="'.$user_name.'" AND `password`="'.$pass_word.'"';
        $stmt = 'SELECT * FROM `tbl_guru`';
         $result   = mysqli_query($conn, $stmt);
         $n_result = mysqli_num_rows($result);
         if (($n_result)==0) {
             echo "Data Not Found";
         }
         else
         {
             echo "Data is Found";
             echo '<table border="0" cellspacing="2" cellpadding="2"> 
                  <tr>
                <td> <font face="Arial">No.</font> </td> 
                <td> <font face="Arial">id_guru</font> </td> 
                <td> <font face="Arial">nama_guru</font> </td> 
                <td> <font face="Arial">username</font> </td>
                <td> <font face="Arial">password</font> </td>
                  </tr>';
            $i=1;
            while($row = mysqli_fetch_assoc($result)) {
               
                $field1name = $row["id_guru"];
                $field2name = $row["nama_guru"];
                $field3name = $row["username"];
                $field4name = $row["password"];
                
               echo '<tr> 
                  <td>'.$i.'</td> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td>
                    </tr>';
               $i++;
            }
         }
       $conn->close();       

?>
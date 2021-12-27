<?php

        $hostname ="127.0.0.1";
        $username ="admin";
        $password ="admin";
        $dba_name ="db_habas";
        $port     ="3306";
        $conn = new mysqli($hostname, $username, $password, $dba_name, $port);
        if ($conn->connect_error) die("Fatal Error");
        
        $stmt = 'SELECT * FROM tbl_murid';
         $result = mysqli_query($conn, $stmt);         
         
         if (mysqli_num_rows($result) > 0) {
            echo '<table border="0" cellspacing="2" cellpadding="2"> 
                  <tr>
                <td> <font face="Arial">No.</font> </td> 
                <td> <font face="Arial">NIS</font> </td> 
                <td> <font face="Arial">Nama Murid</font> </td> 
                <td> <font face="Arial">P/L</font> </td>
                  </tr>';
            $i=1;
            while($row = mysqli_fetch_assoc($result)) {
                $field1name = $row["id_murid"];
                $field2name = $row["nama_murid"];
                $field3name = $row["gender"];
                $test=$field1name;
               //echo $test;
               echo '<tr> 
                  <td>'.$i.'</td> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td>
                    </tr>';
               $i++;
            }
         } else {
               echo "0 results";
         }
       $conn->close(); 

?>
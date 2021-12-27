<?php
        
        $hostname="127.0.0.1";
        $username="admin";
        $password="admin";
        $dba_name="db_habas";
        $port="3306";
        $conn = new mysqli($hostname, $username, $password, $dba_name, $port);
        if ($conn->connect_error) die("Fatal Error");
        
        $id_kelas = mysqli_real_escape_string($conn,$_POST['id_kelas']);
        //$stmt = 'SELECT * FROM tbl_murid';
        $stmt = "SELECT t2.id_murid , t2.nama_murid, t2.gender\n"
             . "  FROM tbl_recordmurid t1 INNER JOIN tbl_murid t2 INNER JOIN tbl_kelas t3 \n"
             . "  ON t1.id_murid = t2.id_murid AND t1.id_kelas = t3.id_kelas\n"
             . "  WHERE t1.id_kelas = \"".$id_kelas."\"";
        echo $id_kelas;
        $result = mysqli_query($conn, $stmt);         
         if (mysqli_num_rows($result) > 0) {
            echo '<table border="0" cellspacing="2" cellpadding="2"> 
                  <tr>
                <td> <font face="Arial">No.</font> </td> 
                <td> <font face="Arial">ID MURID</font> </td> 
                <td> <font face="Arial">NAMA MURID</font> </td> 
                <td> <font face="Arial">GENDER</font> </td>
                <td> <font face="Arial">KEHADIRAN</font> </td>
                  </tr>';
            $i=1;
            while($row = mysqli_fetch_assoc($result)) {
               //echo "Name: " . $row["NIS"]. $row["nama_siswa"]. $row["gender"]."<br>";
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
                  <td>
                        <input type="radio" name= '.$test.' value="ALPHA"  >ALPHA
                        <input type="radio" name= '.$test.' value="IZIN"   >IZIN
                        <input type="radio" name= '.$test.' value="SAKIT"  >SAKIT
                        <input type="radio" name= '.$test.' value="HADIR" checked >HADIR
                  </td>
                  </tr>';
               $i++;
            }
         } else {
               echo "0 results";
         }
        $conn->close();        
?>


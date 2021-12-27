<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
       
    <body>
        <div>
        <br>
        <a href="add_guru.html">administrasi guru</a><br>
        <a href="add_murid.html">administrasi siswa</a><br>
        <a href="add_kelas.html">administrasi kelas</a><br>
        <a href="add_recordmurid.html">administrasi kelas</a><br>
        <a href="login.html">login guru</a><br>
        <br> 
        </div>
        <form action="save_kehadiran.php" method="POST">
            <div>
        <?php
        $hostname="127.0.0.1";
        $username="admin";
        $password="admin";
        $dba_name="db_habas";
        $port="3306";
        $conn = new mysqli($hostname, $username, $password, $dba_name, $port);
        if ($conn->connect_error) die("Fatal Error");
        $stmt = 'SELECT * FROM tbl_murid';
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
                </div>
            <input type="submit">
            </form>
    </body>
</html>

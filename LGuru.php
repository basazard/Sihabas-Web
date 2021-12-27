<?php
session_destroy();    
session_start();
unset($_SESSION['NIP'] );
unset($_SESSION['pass']);
unset($_SESSION['nama_guru']);
if (! isset($_SESSION['NIP'])){
  $_SESSION['NIP'] = $_POST['NIP'];
} else {
    unset($_SESSION['NIP'] );
}
if (! isset($_SESSION['pass'])){
  $_SESSION['pass'] = $_POST['pass'];
} else {
    unset($_SESSION['pass']);
    
}


            $NIP   = $_SESSION['NIP'];
            $pass  = $_SESSION['pass'];
            

            
            //echo $NIP."      =".$user_name."<br>";
            //echo $pass."      =".$pass_word."<br>";
                    

            include 'Database.php';
            $conn = dbcon();
            $stmt = 'SELECT nama_guru FROM `tbl_guru` WHERE `username`="'.$NIP.'" AND `password`="'.$pass.'"';
            $user = mysqli_query($conn, $stmt);
            
            
            if( mysqli_num_rows($user) > 0 )
            {
                while ($row = mysqli_fetch_assoc($user)) {
                $_SESSION['nama_guru'] = $row["nama_guru"];
                }
                //echo "mantab";
                header("location:Dguru/Dakun.php");
            }

            else
            {
                session_destroy(); 
                header("location:akun.html");
            }
?>


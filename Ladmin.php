<?php
session_destroy();    
session_start();
unset($_SESSION['NIP'] );
unset($_SESSION['pass']);

unset($_SESSION['nama_admin']);
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
            
           // $user_name = md5($NIP);
           // $pass_word = md5($pass);
            
            //echo $NIP."      =".$user_name."<br>";
            //echo $pass."      =".$pass_word."<br>";
                    

            include 'Database.php';
            $conn = dbcon();
            $user = mysqli_query($conn, "SELECT * FROM AU where NIP='$NIP' and katasandi='$pass'");
            
            
            if( mysqli_num_rows($user) > 0 )
            {
                while ($row = mysqli_fetch_assoc($user)) {
                $_SESSION['nama_admin'] = $row["nama_admin"];
                }
                //echo "mantab";
                header("location:Dadmin/Dadmin.php");
            }

            else
            {
                session_destroy(); 
                header("location:akun.html");
            }
?>


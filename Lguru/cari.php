<?php
            $nips   = $_POST['NIP'];
            include 'Database.php';
            $conn = dbcon();
            $user = mysqli_query($conn, "SELECT * FROM guru where NIP='$nips'");
            if( mysqli_num_rows($user) > 0)
            {
                header("location:Fpass.html");
                echo "data berhasil ditemukan";
                
            }
            else
            {
                header("location:Lguru.html");
            }
?>

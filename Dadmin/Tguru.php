<?php
    session_start();

    $_SESSION['daftar_guru'] = $_SESSION['daftar_guru'];
    if (! isset($_SESSION['NIP'])){
        session_destroy();  
    } 
    else {
      $_SESSION['NIP'] = $_SESSION['NIP'];
    }
    if (! isset($_SESSION['pass'])){
        session_destroy();  
    } else {
      $_SESSION['pass'] = $_SESSION['pass'];
    }
    if (! isset($_SESSION['nama_guru'])){
        session_destroy();  
    } else {
      $_SESSION['nama_guru'] = $_SESSION['nama_guru'];
    }

    include '../Database.php';
    $conn = dbcon();
      if(isset($_POST['submit'])) {
        $idg=$_POST['ids'];
        $nguru=$_POST['nama'];
        $username=$_POST['uname'];
        $psw=$_POST['psw'];
        $mp=$_POST['mapel'];

        // Insert data into mysql
        $sql="INSERT INTO tbl_guru (id_guru,nama_guru, username, password, Mata_Pelajaran) VALUES ('$idg', '$nguru', '$username', '$psw', '$mp')";
        if (!mysqli_query($conn, $sql)) {
            die('An error occurred. Your review has not been submitted.');
        } 
        else {    

            header("location:Dguru.php");
       
        }
     }
    
    $conn->close();
?>


<?php
    session_start();
    $_SESSION['id_kelas'] = $_SESSION['id_kelas'];
    $_SESSION['nama_kelas'] = $_SESSION['nama_kelas'];
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
    if (! isset($_SESSION['id_murid'])){
      $_SESSION['id_murid'] = $_POST['id_murid'];
    } else {
      $_SESSION['id_murid'] = $_SESSION['id_murid'];
    }
    if (! isset($_SESSION['submit'])){
      $_SESSION['submit'] = $_POST['submit'];
    } else {
      $_SESSION['submit'] = $_SESSION['submit'];
    }
    
    include 'Database.php';
    $conn = dbcon();
    $id_kelas = $_SESSION['id_kelas'];
    $id_murid = $_SESSION['id_murid'];
    $status   = $_SESSION['submit'];
    
    echo $id_kelas.$id_murid.$status;
    if (($id_kelas == "") || ($id_murid == "")){
        header("location:Dadmin/Dsiswa.php");
    } elseif ($status == "[ + ] Daftarkan"){
        $stmt = "INSERT INTO `tbl_recordmurid`(`id_kelas`, `id_murid`) VALUES (\"".$id_kelas."\",\"".$id_murid."\")";
        $result = mysqli_query($conn, $stmt);
        header("location:Dadmin/Dsiswa.php");
    } elseif ($status == "[ - ] Keluarkan") {
        $stmt = "DELETE FROM `tbl_recordmurid` WHERE `id_murid`=\"".$id_murid."\" AND `id_kelas`=\"".$id_kelas."\"";
        $result = mysqli_query($conn, $stmt);  
        header("location:Dadmin/Dsiswa.php");
    } else {
        header("location:Dadmin/Dsiswa.php");
}

?>

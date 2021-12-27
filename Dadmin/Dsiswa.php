<?php
session_start();
if (! isset($_SESSION['NIP'])){
    session_destroy();  
} else {
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
if (! isset($_SESSION['id_kelas'])){
  $_SESSION['id_kelas'] = $_POST['id_kelas'];
} else {
  $_SESSION['id_kelas'] = $_SESSION['id_kelas'];
}

if (! isset($_SESSION['nama_kelas'])){
  $_SESSION['nama_kelas'] = $_POST['nama_kelas'];
} else {
  $_SESSION['nama_kelas'] = $_SESSION['nama_kelas'];
}

if (isset($_SESSION['submit'])){
    unset($_SESSION['submit']);
}

if (isset($_SESSION['id_murid'])){
    unset($_SESSION['id_murid']);
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/admin.css"> 
    <link rel="stylesheet" type="text/css" href="asset/Font-Awesome-master/css/all.min.css">
    <link rel="icon" type="image/png" href="../Ladmin/images/icons/harbas.ico" />
    <title>Dashboard Admin</title>
  </head>
  <body>
   <!-- membuat header navigasi pada dashboard-->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <a class="navbar-brand" href="#">SELAMAT DATANG <?php echo $_SESSION['nama_guru']?></a>
        
          <form class="form-inline my-2 my-lg-0 ml-auto" >
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <div class="icon ml-4" >
            <h5>
                <!--untuk menampilkan title pada icon ketika diarahkan ke icon tersebut-->
                <i class="fas fa-envelope mr-3" data-toogle="tooltip"  title="Inbox "></i>
                <i class="fas fa-bell mr-3"  data-toogle="tooltip"  title="Notifikasi "></i>
                <i class="fas fa-user  mr-3" data-toogle="tooltip"  title="Pengaturan "></i>
                <a href="../Ladmin.html" title="Keluar" style="color: black;">
                  <i  class="fas fa-sign-out-alt  mr-3" data-toogle="tooltip"   title="Keluar " ></i>
                </a>
            </h5>

          </div>
        </div>
      </nav>

      <div class="row no-gutters mt-5" >
        <!-- untuk sidebar-->       
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4" >
            <!--set margin, dan paddinng pada sidebar nya-->  
            <ul class="nav flex-column ml-3 mb-5">
                 
                <li class="nav-item">
                    <!--merubah tulisan supaya tidak auto disetiap a href nya -->
                    <!--menambahkan garis bisa make hr atau border bottom-->
                    <!--menambahkan hover-->
                  <a class="nav-link active text-white" href="Dadmin.php">
                    <i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="Dkelas.php"> <i class="fas  fa-school mr-2 "></i>Daftar Kelas</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#"> <i class="fas fa-chalkboard-teacher mr-2"></i>Daftar Guru</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="Djadwal.php"> <i class="fas fa-calendar-alt mr-2"></i> Jadwal Belajar</a><hr class="bg-secondary">
                  </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fas fa-paper-plane mr-2"></i> Nilai Siswa</a><hr class="bg-secondary">
                  </li>
              
              </ul>
        </div>
        <!--untuk kontent-->
            <div class="col-md-10 p-5 pt-2">
                <h3> 
                  <i class="fas fa-graduate-alt mr-2 "> DAFTAR SISWA KELAS <?php echo $_SESSION['nama_kelas'] ?></i>
                </h3>
                
                <form action="../crud_recordsiswa.php" method="POST">
                    
                    <div>
                        <?php
                        
                        $id_kelas=$_SESSION['id_kelas'];
                        echo "<input type='hidden' name='id_kelas' value='".$id_kelas."' readonly='readonly' />";
                        ?>
                    </div>
                    <div>
                        <label> ID Siswa : </label>
                        <input  title="Masukan NIS Siswa" type="text" name="id_murid" value="" />
                    </div>
                <input class="btn btn-primary mb-3" type="submit" value="[ + ] Daftarkan" name="submit" />
                <input class="btn btn-primary mb-3" type="submit" value="[ - ] Keluarkan" name="submit" />
                
                </form>
                
                
                <table class="table table-striped"> 
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">NIS</th> 
                      <th scope="col">Nama</th>
                      <th scope="col">P/L</th>
                      <th scope="col">TTL</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Password</th>
                      <th colspan ="3" scope="col">Pengaturan</th>
                    </tr>
                  </thead>
                  <!-- cari code untuk menampilkan data ke table dari database pada html secara automatis-->
                  <!-- ini example-->
                  <tbody>
                    <?php
                    include '../Database.php';
                    $conn = dbcon();
                    //$id_kelas = mysqli_real_escape_string($conn,$_POST['id_kelas']);
                    $id_kelas=$_SESSION['id_kelas'];
                    
                    $stmt = "SELECT t2.id_murid , t2.nama_murid, t2.gender\n"
                        . "  FROM tbl_recordmurid t1 INNER JOIN tbl_murid t2 INNER JOIN tbl_kelas t3 \n"
                        . "  ON t1.id_murid = t2.id_murid AND t1.id_kelas = t3.id_kelas\n"
                        . "  WHERE t1.id_kelas = \"".$id_kelas."\"";
                    $result = mysqli_query($conn, $stmt);         
                    if (mysqli_num_rows($result) > 0) {
                        $i=1;
                        while($row = mysqli_fetch_assoc($result)) {
                            $no_urut = $i;
                            $nis     = $row["id_murid"];
                            $nama    = $row["nama_murid"];
                            $gender  = $row["gender"];

                          echo '<tr> 
                              <td>'.$no_urut.'</td> 
                              <td>'.$nis.'</td>     
                              <td>'.$nama.'</td> 
                              <td>'.$gender.'</td> 
                
                              <td> <a href="" class="btn btn-primary">Details</a></td>
                              <td> <i class="fas fa-edit " data-toogle="tooltip" title="edit"></i></td>
                              <td> <i class="fas fa-trash-alt" data-toogle="tooltip" title="delete"></i></td>
                              </tr>';
                          
                          $i++;
                        }
                    } else { 
                    }
                    $conn->close();        
                    ?>  
                  </tbody>
                </table>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/admin.js"></script>
</body>
</html>



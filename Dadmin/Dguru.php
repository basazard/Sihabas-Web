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
  if (! isset($_SESSION['id_gurus'])){
    $_SESSION['id_gurus'] = $_POST['id_gurus'];
  } else {
    $_SESSION['id_gurus'] = $_SESSION['id_gurus'];
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
    
    <style>
              body {font-family: Arial, Helvetica, sans-serif;}
              * {box-sizing: border-box;}

              /* Full-width input fields */
              input[type=text], input[type=password] {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                display: inline-block;
                border: none;
                background: #f1f1f1;
              }

              /* Add a background color when the inputs get focus */
              input[type=text]:focus, input[type=password]:focus {
                background-color: #ddd;
                outline: none;
              }

              /* Set a style for all buttons */
              button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
                opacity: 0.9;
              }

              button:hover {
                opacity:1;
              }

              /* Extra styles for the cancel button */
              .cancelbtn {
                padding: 14px 20px;
                background-color: #f44336;
              }

              /* Float cancel and signup buttons and add an equal width */
              .cancelbtn, .signupbtn {
                float: left;
                width: 50%;
              }

              /* Add padding to container elements */
              .container {
                padding: 16px;
              }

              /* The Modal (background) */
              .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: #474e5d;
                padding-top: 50px;
              }

              /* Modal Content/Box */
              .modal-content {
                background-color: #fefefe;
                margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                border: 1px solid #888;
                width: 80%; /* Could be more or less, depending on screen size */
              }

              /* Style the horizontal ruler */
              hr {
                border: 1px solid #f1f1f1;
                margin-bottom: 25px;
              }
              
              /* The Close Button (x) */
              .close {
                position: absolute;
                right: 35px;
                top: 15px;
                font-size: 40px;
                font-weight: bold;
                color: #f1f1f1;
              }

              .close:hover,
              .close:focus {
                color: #f44336;
                cursor: pointer;
              }

              /* Clear floats */
              .clearfix::after {
                content: "";
                clear: both;
                display: table;
              }

              /* Change styles for cancel button and signup button on extra small screens */
              @media screen and (max-width: 300px) {
                .cancelbtn, .signupbtn {
                  width: 100%;
                }
              }
          </style>
    <title>Dashboard Admin</title>
  </head>
  <body>
   <!-- membuat header navigasi pada dashboard-->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <a class="navbar-brand" href="#">SELAMAT DATANG <?php echo $_SESSION['nama_guru']?></a>
        

          <div class="icon ml-4 my-lg-0 ml-auto" >
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
                  <a class="nav-link text-white" href="Dguru.php"> <i class="fas fa-chalkboard-teacher mr-2"></i>Daftar Guru</a><hr class="bg-secondary">
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
                  <i class="fas fa-graduate-alt mr-2 "> Daftar Guru<?php echo $_SESSION['daftar_guru'] ?></i>
                </h3>
                    <div>
                    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Tambah Data</button>
                    <div id="id01" class="modal">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

                    <form class="modal-content" action="Tguru.php" method="POST">
                      <div class="container">
                        <h1>Tambah Data Guru</h1>
                        
                        <hr>
                        <label for="id"><b>Id guru</b></label>
                        <input type="text" placeholder="Masukkan id anda" name="ids" required>
                        
                        <label for="nama"><b>Nama guru</b></label>
                        <input type="text" placeholder="Masukkan nama anda" name="nama" required>

                        <label for="mapel"><b>Mata pelajaran</b></label>
                        <input type="text" placeholder="Masukkan mapel yang  anda ajar" name="mapel" required>

                        <label for="us"><b>Username</b></label>
                        <input type="text" placeholder="Masukkan username" name="uname" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Masukkan Password" name="psw" required>
                        
                        <label>
                          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                        </label>

                        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                        <div class="clearfix">
                          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                          <button type="submit" class="signupbtn" name="submit">Tambahkan</button>
                        </div>

                      </div>
                    </form>
                  </div>
                  </div>
                
                <table class="table table-striped"> 
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">ID Guru</th>
                      <th scope="col">Nama lengkap</th> 
                      <th scope="col">Mata pelajaran</th>

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
        $id_kelas=$_SESSION['id_gurus'];
        
        $stmt = "SELECT * from tbl_guru ";
        $result = mysqli_query($conn, $stmt);         
         if (mysqli_num_rows($result) > 0) {
            $i=1;
            while($row = mysqli_fetch_assoc($result)) {
                $no_urut = $i;
                $nis     = $row["id_guru"];
                $nama    = $row["nama_guru"];
                $gender  = $row["Kode_Mapel"];

               echo '<tr> 
                  <td>'.$no_urut.'</td> 
                  <td>'.$nis.'</td>     
                  <td>'.$nama.'</td> 
                  <td>'.$gender.'</td> 
  
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
        <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/admin.js"></script>
</body>
</html>



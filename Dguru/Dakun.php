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
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/Guru.css"> 
    <link rel="stylesheet" type="text/css" href="asset/Font-Awesome-master/css/all.min.css">
    <link rel="icon" type="image/png" href="../LGuru/images/icons/harbas.ico" />
    <title>Dashboard Guru</title>
  </head>
  <body>
   <!-- membuat header navigasi pada dashboard-->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
    <a class="navbar-brand" href="#">Hello  <?php echo $_SESSION['nama_guru']?></a>
        
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

      <div class="row no-gutters mt-5 " >
        <!-- untuk sidebar-->       
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4" >
            <!--set margin, dan paddinng pada sidebar nya-->  
            <ul class="nav flex-column ml-3 mb-5 " >
                 
                <li class="nav-item " >
                    <!--merubah tulisan supaya tidak auto disetiap a href nya -->
                    <!--menambahkan garis bisa make hr atau border bottom-->
                    <!--menambahkan hover-->
                  <a class="nav-link active text-white" href="Dakun.php">
                    <i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="Dkelas.php"> <i class="fas fa-user-graduate mr-2 "></i>Daftar Kelas</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="Dtugas.php"> <i class="fas fa-chalkboard-teacher mr-2"></i>Tugas</a><hr class="bg-secondary">
                </li>
				        <li class="nav-item">
                  <a class="nav-link text-white" href="Dkehadiran.php"> <i class="fas fa-chalkboard-teacher mr-2"></i>Kehadiran</a><hr class="bg-secondary">
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
                <i class="fas fa-tachometer-alt mr-2"> Dashboard</i><hr>
                <div class="row text-white">
                    <div class="card bg-info ml-5" style="width: 18rem;">
                    
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-user-graduate mr-2 "></i>
                            </div>
                          <h5 class="card-title">JUMLAH SISWA</h5>
                            <div class="display-4">
                                900
                            </div>
                            <a href="">
                                <p class="card-text text-white">more
                                    <i class="fas-fa-angle-double-right ml-2"></i>
                                </p>
                            </a>
                        </div>
                    
                    </div>
                        <!--untuk info guru-->
                        <div class="card bg-success ml-5" style="width: 18rem;">
                    
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-chalkboard-teacher mr-2"></i>
                                </div>
                              <h5 class="card-title">JUMLAH GURU</h5>
                                <div class="display-4">
                                    50
                                </div>
                                <a href="">
                                    <p class="card-text text-white">more
                                        <i class="fas-fa-angle-double-right ml-2"></i>
                                   </p>
                                </a>
                            </div>
                        </div>    
                        
                           <!--untuk info guru-->
                           <div class="card bg-danger ml-5" style="width: 18rem;">
                    
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-chalkboard-teacher mr-2"></i>
                                </div>
                              <h5 class="card-title">JUMLAH PEGAWAI</h5>
                                <div class="display-4">
                                    250
                                </div>
                                <a href="">
                                    <p class="card-text text-white">more
                                        <i class="fas-fa-angle-double-right ml-2"></i>
                                   </p>
                                </a>
                            </div>
                        </div>  
                    </div>
                </h3>
            </div>
      
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/Guru.js"></script>
</body>
</html>
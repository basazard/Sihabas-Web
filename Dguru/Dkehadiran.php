<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/Dguru.css"> 
    <link rel="stylesheet" type="text/css" href="asset/Font-Awesome-master/css/all.min.css">
    <link rel="icon" type="image/png" href="../LGuru/images/icons/harbas.ico" />
    <title>Dashboard Guru</title>
  </head>
  <body>
   <!-- membuat header navigasi pada dashboard-->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <a class="navbar-brand" href="#">SELAMAT DATANG GURU</a>
        
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
                <i class="fas fa-sign-out-alt  mr-3" data-toogle="tooltip"  title="Keluar "></i>
            </h5>

          </div>
        </div>
      </nav>

      <div class="row no-gutters mt-5" >
        <!-- untuk sidebar-->       
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4" >
            <!--set margin, dan paddinng pada sidebar nya-->  
            <ul class="nav flex-column ml-3 mb-5">
            <li class="nav-item " >
                    <!--merubah tulisan supaya tidak auto disetiap a href nya -->
                    <!--menambahkan garis bisa make hr atau border bottom-->
                    <!--menambahkan hover-->
                  <a class="nav-link active text-white" href="Dakun.php">
                    <i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="Dsiswa.php"> <i class="fas fa-user-graduate mr-2 "></i>Daftar Kelas</a><hr class="bg-secondary">
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
                  <i class="fas fa-user-graduate mr-2 ">Jadwal Kehadiran</i><hr>

                </h3>
                <table class="table table-striped"> 
                  <thead>
                    <tr>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Hari</th> 
                      <th scope="col">Kelas</th>
                      <th scope="col">Jam</th>
                      <th colspan ="3" scope="col">Deskripsi</th>
                    </tr>
                  </thead>
                  <!-- cari code untuk menampilkan data ke table dari database pada html secara automatis-->
                  <tbody>
                    <tr>
                      <th scope="row">2020-06-15</th>
                      <td>Senin</td>
                      <td>XII Akuntansi 1</td>
                      <td>09.00 - 12.00</td>
                      <td> <a href="" class="btn btn-primary">Details</a></td>
                    </tr>
                  </tbody>
                </table>
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
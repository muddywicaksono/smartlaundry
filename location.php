
<?php
  include "open_db.php";
  include "notice_menu.php";

  $sql = "SELECT * FROM admin";
  $query = mysqli_query($conn, $sql);
  session_start();
  if(empty($_SESSION['username_user']))
  {
    header("location:login.php?pesan=belum_login");
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Smart Cleaner</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
      crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
      crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
      crossorigin="anonymous">
  </script>

  <link rel="stylesheet" type="text/css" href="template.css">
</head>
<body>
  <div class="container">
    <div class="header">
      <nav class="navbar fixed-top" style="background-color: #8c59b1;">
        <form class="form-inline" method="GET" action="menu_s.php">
            <a class="navbar-brand" href="menu.php"><img src="logo.png" width="175" height="30"></a>
            <input class="form-control mr-sm-2" type="search" placeholder="Search" name="cari" 
              aria-label="Search" style="width: 350px; margin-left: 10px;">
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
          </form> 
          <ul class="nav justify-content-end" >
            <li class="nav-item">
              <a class="nav-link" href="e-wallet.php">
                <button type="button" class="btn btn-outline-dark" data-toggle="modal"
                data-target="#notice_user">
                  <img src="pic/dompet.png" width="20" height="20"> Rp.1.000.00
                 </button>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
               <button type="button" class="btn btn-dark" data-toggle="modal" 
                data-target="#notice_user">
                  <img src="pic/person.png" width="20" height="20">
                </button>
              </a>
            </li>
          </ul>
      </nav>

      <nav class="navbar nav-item dropdown fixed-top" id="menu" style="background-color: #a37ac0; top: 65px;">
          <div><font color="#f3eef7">Welcome <?php echo $_SESSION['username_user'] ?> !</font></div>
          <div>
            <ul class="nav ml-auto">
              <li class="nav-item"><a class="nav-link active" href="menu.php"><font color="#f3eef7">Home</font></a></li>
              <li class="nav-item"><a class="nav-link" href="location.php"><font color="#f3eef7">Location</font></a></li>
              <li class="nav-item"><a class="nav-link" href="service.php"><font color="#f3eef7">Service</font></a></li>
            </ul>
          </div>
      </nav>
    </div>

    <div class="main">
      <!--Move Clip -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
        style="margin-bottom: 20px;">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="pic/1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="pic/2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="pic/3.jpg" class="d-block w-100">
            </div>
          </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!--Notive Login -->
      <div class="modal fade" id="notice_user" tabindex="-1" role="dialog" 
          aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 style="margin-left: auto; margin-right;">
              <strong>Hi, <?php echo $_SESSION['username_user'] ?></strong>
            </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button><br>
          </div>
          <div class="modal-body">
            <img src="pic/profil1.png" class="rounded-circle mx-auto d-block" width="200" height="200"><br>
            <a href="iklan_saya.php" class="btn btn-outline-secondary btn-lg btn-block">E-Wallet</a><br>
            <a href="iklan_saya.php" class="btn btn-outline-secondary btn-lg btn-block">Riwayat Pemesanan</a><br>
            <a href="edit_user.php" class="btn btn-outline-secondary btn-lg btn-block">Edit Profil</a><br>
            <a href="logout.php" class="btn btn-secondary btn-lg btn-block">Logout</a>
          </div>
        </div>
      </div>
      </div>

      <!--Isi -->
      <h3><center>
            Coming Soon <br>
            Maintenence
          </center>
        </h3>
    

<div class="footer">
        <div class="contact">
          <div class="contact-content">
            <h4>Contact Us</h4>
            <div class="ft-img">
              <img src="img/phone.png" class="footer-img" alt="">
              <span>081234567890</span>
            </div>
            <div class="ft-img">
              <img src="img/mail.png" class="footer-img" alt="">
              <span>info@smartlaundry.com</span>
            </div>
          </div>

          <div class="contact-content">
            <h4>Social Medias</h4>
            <div class="ft-img">
              <img src="img/ig.png" class="footer-img" alt="">
              <span>@SmartLaundry</span>
            </div>
            <div class="ft-img">
              <img src="img/tw.png" class="footer-img" alt="">
              <span>@SmartLaundry</span>
            </div>
            <div class="ft-img">
              <img src="img/fb.png" class="footer-img" alt="">
              <span>Smart Laundry</span>
            </div>
          </div>
        </div>
      

    <div class="ft-2">
      <center>
          <font size="2" color="white">
            &copy;Copyright Muddy Pulber | 2020 | Alright reserved
          </font>
        </center>
    </div>
      
  </div>
    

</body>
</html>
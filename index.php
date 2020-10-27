<?php
  include "open_db.php";
  include "notice_index.php";

  $query = mysqli_query($conn,"SELECT * FROM admin");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Smart CLeaner</title>

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
				<form class="form-inline" method="GET" action="index_s.php">
            <a class="navbar-brand" href="menu.php"><img src="logo.png" width="175" height="30"></a>
            <input class="form-control mr-sm-2" type="search" placeholder="Search Laundry" name="cari" 
              varia-label="Search" style="width: 350px; margin-left: 10px;">
            <button class="btn btn-light"" type="submit">Search</button>
          </form> 
  				<ul class="nav justify-content-end" > 
  					<li class="nav-item">
  						<a class="nav-link" href="login.php">
  							<button type="button" class="btn btn-light">LOGIN</button>
  						</a>
  					</li>
  				</ul>
			</nav>

			<nav class="navbar nav-item dropdown fixed-top" id="menu" style="background-color: #a37ac0; top: 65px;">
					<div><font color="#f3eef7">Welcome Guest!</font></div>
					<div>
						<ul class="nav ml-auto">
							<li class="nav-item"><a class="nav-link active" href=""><font color="#f3eef7">Home</font></a></li>
							<li class="nav-item"><a class="nav-link" href="location.php"><font color="#f3eef7">Location</font></a></li>
							<li class="nav-item"><a class="nav-link" href="service.php"><font color="#f3eef7">Service</font></a></li>
						</ul>
					</div>
			</nav>
		</div>

		<div class="main">
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


			<h3>Laundry Teratas</h3>
			<?php while ($data = mysqli_fetch_array($query)){ ?>

      <div class="card" style="margin-bottom: 5px;">
        <a class="stretched-link" 
        href="admin_register.php?id_admin=<?php echo $data["id_admin"];?>">
        </a>
        <div class="card-body">
          <div class="row">
            <div class="col-2">
              <img src="admin/img/<?= $data["gambar"]; ?>" width="125px" height="125px">

            </div>
            <div class="col-10">
              <h3>
                <img src="img/toko.png" class="footer-img" alt="">
                <strong><?php echo $data['nama_toko']; ?></strong>
              </h3>
               <div class="row">

                <div class="col-6"> <br>
                  <h5>
                      <img src="img/own.png" class="footer-img" alt="">
                      <?php echo $data['nama_admin']; ?>
                    <h5/>
                </div>

                <div class="col">
                <table>
                  <tr>
                      <div class="ft-img">
                        <img src="img/wa.png" class="footer-img" alt="">
                        <span>&emsp;<?php echo $data['telp_admin']; ?></span>
                      </div>
                  </tr>
                  <tr> </tr>
                  <tr>
                    <div class="ft-img">
                        <img src="img/loc.png" class="footer-img" alt="">
                        <span>&emsp;<?php echo $data['alamat_admin']; ?></span>
                      </div>
                  </tr>
                </table>
                </div>

               </div>
            </div>
          </div>
        </div>
      </div>

      <?php } ?>
		</div>
	</div>

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
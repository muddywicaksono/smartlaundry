<?php
  include "open_db.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Smart Cleaner</title>
  <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>$(document).ready(function(){$("#myModal").modal('show');});</script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="template.css">
</head>
<body>

  <?php 
    if(isset($_GET['pesan'])){
      $pesan = $_GET['pesan'];
        if($pesan == "sama"){ ?>
          <div id="myModal" class="modal fade">
            <div class="modal-dialog" style="border-color: #c5acd8">
              <div class="modal-content">
                <div class="modal-header">
                  <img src="pic/logo1.png" width="175" height="30" style="margin-left: auto; margin-right: auto;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              <div class="modal-body">
                <img src="pic/warn.jpg" class="rounded-circle mx-auto d-block" width="200" height="200"><br><p class="text-center">Username not Available </p>
              </div>
              </div>
            </div>
          </div>
        <?php } 
        else if($pesan == "kosong"){ ?>
           <div id="myModal" class="modal fade" style="border-color: #c5acd8">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <img src="logo.png" width="175" height="30" style="margin-left: auto; margin-right: auto;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              <div class="modal-body" style="border-color: #c5acd8">
                <img src="pic/warn.png" class="rounded-circle mx-auto d-block" width="200" height="200">
                  <br><p class="text-center">Data Cannot be Empty</p>
              </div>
              </div>
            </div>
          </div>
        <?php }
        }
      ?>


	<div class="container" style="margin-top: 3%; margin-bottom: 3%; padding: 0 15%;">
	<div class="card" style="background-color: #c5acd8">
  		<div class="card-header text-center">
    		<img src="logo.png" width="175" height="30">
  		</div>
  		<div class="card-body">
  		<form method="POST" action="input_register.php">
    		<div class="input-group mb-3">
				<div class="input-group-prepend">
    				<span class="input-group-text">ID User</span>
  				</div>
  				<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" readonly name="id_user" value="<?php echo rand(100000000,999999999)?>">
			</div>
			<div class="form-group">
    			<label for="nama">Name</label>
    			<input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
  			</div>
  			<div class="form-group">
    			<label for="mail">E-Mail</label>
    			<input type="text" class="form-control" id="mail" placeholder="example@gmail.com" name="email">
  			</div>
  			<div class="form-group">
    			<label for="telp">No. Telepon</label>
    			<input type="text" class="form-control" id="telp" placeholder="ex: 081234567890" name="telp">
  			</div>
  			<div class="form-group">
    			<label for="alamat">Address</label>
    			<input type="text" class="form-control" id="alamat" placeholder="Address" name="alamat">
  			</div>
    		<div class="form-group">
      			<label for="user">Username</label>
    			<input type="text" class="form-control" id="user" placeholder="Username" name="username_user">
  			</div>
  			<div class="form-group">
     				<label for="pass">Password</label>
   				<input type="password" class="form-control" id="user" placeholder="Password" name="pass_user">
   			</div>
  			<center><br><input class="btn btn-light" type="submit" name="simpan" value="Create"><br></center>
  		</form>		
  		</div>
	</div>
	</div>

</body>
</html>
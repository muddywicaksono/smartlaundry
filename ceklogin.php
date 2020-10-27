<?php 
	ob_start();
	session_start();
	$query = new mysqli('localhost','root','','laundry');

	$username_user = $_POST['username_user'];
	$pass_user = $_POST['pass_user'];

	$data = mysqli_query($query, "SELECT * FROM user where username_user='$username_user' 
				and pass_user='$pass_user'")
						OR die(mysqli_error($query));

	$cek = mysqli_num_rows($data);

	if ($cek > 0) {
		$_SESSION['username_user'] = $username_user;
		$_SESSION['status'] = "login";

		header("location:menu.php");
	}

	else {
		header ("location:login.php?pesan=gagal");

	}
	ob_end();
 ?>
<?php 
session_start();
require '../functions.php';

if(isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}


 if (isset($_POST["login"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");

	// Cek username
	if (mysqli_num_rows($result) === 1) {
		// cek password
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])) {
				// set session
				$_SESSION["login"] = true;

				header("Location: index.php");
				exit;
			
		}
	}
    $error = true;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="../css/login.css">

    <script src="https://kit.fontawesome.com/c45ed65471.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="login">

        <div class="avatar">
            <i class="fa-solid fa-user" style="color: #000000;"></i>
        </div>
        
        <h4>Login Form</h4>
        <?php if(isset($error)) :?>
            <p style="color : red; font-style : italic;"> Username / Password salah</p>
        <?php endif; ?>
        <form action="" method="POST">
        <div class="box-login">
        <!-- <i class="fa-solid fa-envelope" style="color: #000000;"></i> -->
            <input type="text" placeholder="Username" name="username">
        </div>
        
        <div class="box-login">
        <!-- <i class="fa-solid fa-lock" style="color: #000000;"></i> -->
            <input type="password" placeholder="Password" name="password">
        </div>

        <button name="login" type="submit" class="btn-login">Login</button>
        </form>
        <div class="bottom">
            <a href="index.php">Back</a> 
        </div>



    </div>
    




</body>
</html>

<?php
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
}

require '../functions.php';

$id = $_GET["id"];

$id = query("SELECT * FROM admin WHERE id = $id")[0];


if (isset($_POST["ubah"])) {
    if (ubah_admin($_POST) > 0) {
        echo"<script>
        alert('admin baru berhasil di Ubah');
        document.location.href = 'admin.php';
        </script>";
    }else {
        echo mysqli_error($conn);
    }
}
?>
<?php require "partials/header.php" ?>
   <?php require "partials/nav.php" ?>
    <main class="mt-5 pt-3">
      <div class="container-fluid">


        <div class="content" id="container">
                <h1>Ubah Data Admin</h1>
                
                <form action="" method="post" enctype="multipart/form-data" class="box-input">
                    <input type="hidden" name="id" value="<?= $id['id'];?>">
                    <div class="mb-3">
                       <label for="username" class="form-label">Username</label>
                        <input class="form-control" type="text" id="username" name="username" value="<?= $id['username'];?>">
                    </div>
                    <div class="mb-3">
                       <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="text" id="email" name="email" value="<?= $id['email'];?>">
                    </div>
                    <div class="mb-3">
                       <label for="password" class="form-label">Password</label>
                        <input class="form-control" type="password" id="password" name="password" value="<?= $id['password'];?>">
                    </div>
                    <div class="button">
				        <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
			        </div>
              </form>
        </div>


                       
    </div>
    <?php require "partials/footer.php" ?>
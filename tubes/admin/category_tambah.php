
<?php
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
}

require '../functions.php';
if (isset($_POST["tambah"])) {
    if (tambah_category($_POST) > 0) {
        echo"<script>
        alert('category baru berhasil di tambahkan');
        document.location.href = 'category.php';
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
                <h1>Tambah Category</h1>
                
                <form action="" method="post" enctype="multipart/form-data" class="box-input">
                    <div class="mb-3">
                       <label for="category" class="form-label">Category</label>
                        <input class="form-control" type="text" id="category" name="category">
                    </div>
                    <div class="button">
				        <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
			        </div>
              </form>
        </div>


                       
    </div>
    <?php require "partials/footer.php" ?>
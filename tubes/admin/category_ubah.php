
<?php

require '../functions.php';

$id = $_GET["id_category"];

$category = query("SELECT * FROM kategori WHERE id_category = $id")[0];


if (isset($_POST["ubah"])) {
    if (ubah_category($_POST) > 0) {
        echo"<script>
        alert('Category berhasil di Ubah');
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
                <h1>Ubah Category</h1>
                
                <form action="" method="post" enctype="multipart/form-data" class="box-input">
                    <input type="hidden" name="id_category" value="<?= $category['id_category'];?>">
                    <div class="mb-3">
                       <label for="category" class="form-label">Username</label>
                        <input class="form-control" type="text" id="category" name="category" value="<?= $category['category'];?>">
                    </div>
                    <div class="button">
				        <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
			        </div>
              </form>
        </div>


                       
    </div>
    <?php require "partials/footer.php" ?>
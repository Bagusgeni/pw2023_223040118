<?php 
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
}
require '../functions.php';

$kategori = query("SELECT * FROM kategori");

if(isset($_POST["cari"])){
    $kategori = cari_category($_POST["keyword"]);
}
?>



<?php require "partials/header.php"; ?>
<?php require "partials/nav.php"; ?>


<main class="mt-5 pt-3">
    <div class="container-fluid mt-5">
       

    <div class="row">
    <div class="col-md-6">
      <form action="" method="POST">
        <div class="input-group mb-2">
          <input type="search" class="form-control" placeholder="Cari Admin" name="keyword" id="keyword_category" autofocus autocomplete="off">
          <button class="btn btn-primary" type="submit" name="cari" id="cari_category"><i class="bi bi-search"></i></button>
          <a href="category_tambah.php" class="btn btn-danger ms-2 px-3">Tambah</a>
      </div>
      </form>
     </div>
     </div>



<div id="container">
    <table class="table table-striped table-hover">
        <thead class="table-info">
            <tr>
                <th>ID Category</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($kategori as $c) : ?>
            <tr>
                <td><?= $c['id_category']; ?></td>
                <td><?= $c['category']; ?></td>
                <td><a href="category_hapus.php?id_category=<?= $c['id_category']; ?>" class="btn btn-danger btn-sm">Hapus</a>|
                    <a href="category_ubah.php?id_category=<?= $c['id_category']; ?>" class="btn btn-primary btn-sm">Ubah</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


    </div>
</main>











<?php require "partials/footer.php"; ?>
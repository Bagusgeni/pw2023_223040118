<?php 
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
}

require '../functions.php';


$admin = "SELECT id FROM admin ORDER BY id";
$admin = mysqli_query($conn, $admin);
$admin = mysqli_num_rows($admin);

$kategori = "SELECT id_category FROM kategori ORDER BY id_category";
$kategori = mysqli_query($conn, $kategori);
$kategori = mysqli_num_rows($kategori);

$berita = "SELECT id_news FROM berita ORDER BY id_news";
$berita = mysqli_query($conn, $berita);
$berita = mysqli_num_rows($berita);
?>
   <?php require "partials/header.php" ?>
   <?php require "partials/nav.php" ?>
    <main class="mt-5 pt-3">
      <div class="container-fluid">
      <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header">admin</div>
                    <div class="card-body">
                        <p class="card-text">Untuk menampilkan data admin</p>
                        <i class="fa-solid fa-users-gear fa-2xl float-end" style="color: #f5f5f5;"></i>
                        <h5 class="card-title"><?= $admin; ?> Admin</h5>
                        <div class="card-footer">
                        <a href="admin.php" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Go table admin</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                        <div class="card-header">Category</div>
                    <div class="card-body">
                        <p class="card-text">Untuk menambah / mengubah / menghapus Category Berita</p>
                        <i class="fa-solid fa-bars fa-2xl float-end" style="color: #e60000;"></i>
                        <h5 class="card-title"><?= $kategori ?> Category</h5>
                        <div class="card-footer">
                        <a href="category.php" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Go Category</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                        <div class="card-header">Berita Fashion</div>
                    <div class="card-body">
                        <p class="card-text">Untuk menambah / mengubah / menghapus Berita</p>
                        <i class="fa-solid fa-newspaper fa-2xl float-end" style="color: #ffffff;"></i>
                        <h5 class="card-title"><?= $berita; ?> Berita</h5>
                        <div class="card-footer">
                        <a href="berita.php" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Go table berita</a>
                        </div>
                    </div>
                </div>
            </div>
      </div>
</main>



          <?php require "partials/footer.php" ?>
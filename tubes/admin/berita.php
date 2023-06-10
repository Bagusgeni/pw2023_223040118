<?php 
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
}
require '../functions.php';

$berita = query("SELECT * FROM berita");

if(isset($_POST["cari"])){
    $berita = cari_berita($_POST["keyword"]);
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
          <input type="search" class="form-control" placeholder="Cari Admin" name="keyword" id="keyword_berita" autofocus autocomplete="off">
          <button class="btn btn-primary" type="submit" name="cari" id="cari_berita"><i class="bi bi-search"></i></button>
          <a href="berita_tambah.php" class="btn btn-danger ms-2 px-3">Tambah</a>
          <a href="../pdf/cetak_berita.php" target="_blank" class="btn btn-dark ms-2 px-3">Cetak</a>
      </div>
      </form>
     </div>
     </div>



<div id="container">
    <table class="table table-striped table-hover">
        <thead class="table-info">
            <tr>
                <th>ID Berita</th>
                <th>Category</th>
                <th>Image</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($berita as $b) : ?>
            <tr>
                <td><?= $b['id_news']; ?></td>
                <td>
                    <?php
                     $category = mysqli_query($conn, "SELECT * FROM kategori");
                     while ($c = mysqli_fetch_array($category)) {
                        if ($c['id_category'] == $b['category']) {?>
                     <?= $c['category']; ?>
                     <?php }
                     } ?>
                 </td>
                <td><img src="../image/<?= $b['img']; ?>" width="200px"></td>
                <td><?= $b['judul']; ?></td>
                <td><?= $b['isi']; ?></td>
                <td><a href="berita_hapus.php?id_news=<?= $b['id_news']; ?>" class="btn btn-danger btn-sm">Hapus</a>|
                    <a href="berita_ubah.php?id_news=<?= $b['id_news']; ?>" class="btn btn-primary btn-sm">Ubah</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    </div>
</main>











<?php require "partials/footer.php"; ?>
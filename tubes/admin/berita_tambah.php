
<?php
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
}

require '../functions.php';
if (isset($_POST["tambah"])) {
    if (tambah_berita($_POST) > 0) {
        echo"<script>
        alert('berita baru berhasil di tambahkan');
        document.location.href = 'berita.php';
        </script>";
    }else {
        echo"<script>
        alert('berita gagal berhasil di tambahkan');
        document.location.href = 'berita_tambah.php';
        </script>"
    }
}
?>
<?php require "partials/header.php" ?>
   <?php require "partials/nav.php" ?>
    <main class="mt-5 pt-3">
      <div class="container-fluid">


        <div class="content" id="container">
                <h1>Tambah Berita</h1>
                
                <form action="" method="post" enctype="multipart/form-data" class="box-input">
                    <div class="mb-3">
                       <label for="category" class="form-label">category</label>
                        <select class="form-control" name="category">
                            <option value="">Pilih category</option>
                            <?php 
                            $category = mysqli_query($conn, "SELECT * FROM kategori");
                            while ($c = mysqli_fetch_array($category)) :
                            ?>
                            <option value="<?= $c['id_category']?>"> <?= $c['category'];  ?> </option>
                                <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                       <label for="img" class="form-label">Masukan Foto</label>
                        <input class="form-control" type="file" id="img" name="img">
                    </div>
                    <div class="mb-3">
                       <label for="judul" class="form-label">Judul Berita</label>
                        <input class="form-control" type="text" id="judul" name="judul">
                    </div>
                    <div class="mb-3">
                       <label for="isi" class="form-label">Isi Berita</label>
                        <textarea class="form-control" id="isi" name="isi"></textarea>
                    </div>
                    <div class="button">
				        <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
			        </div>
              </form>
        </div>


                       
    </div>
    <?php require "partials/footer.php" ?>
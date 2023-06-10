
<?php

require '../functions.php';

$id_news = $_GET["id_news"];

$news = query("SELECT * FROM berita WHERE id_news = $id_news")[0];


if (isset($_POST["ubah"])) {
    if (ubah_berita($_POST) > 0) {
        echo"<script>
        alert('berita berhasil di Ubah');
        document.location.href = 'berita.php';
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
                <h1>Ubah Berita</h1>
                
                <form action="" method="post" enctype="multipart/form-data" class="box-input">
                    <input type="hidden" name="id_news" value="<?= $news["id_news"]?>">
                    <input type="hidden" name="gambar_lama" value="<?= $news["img"]?>">
                    <div class="mb-3">
                       <label for="category" class="form-label">category</label>
                        <select class="form-control" name="category">
                            <option value="">Pilih category</option>
                            <?php 
                            $category = mysqli_query($conn, "SELECT * FROM kategori");
                            while ($c = mysqli_fetch_array($category)) :
                                if ($c['id_category'] == $news['category']) {
                            ?>
                            <option value="<?= $c['id_category']?>" selected> <?= $c['category'];  ?> </option>
                            <?php }else{ ?>
                                <option value="<?= $c['id_category']?>"> <?= $c['category'];  ?> </option>
                            <?php } ?>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                       <label for="img" class="form-label">Masukan Foto</label>
                        <input class="form-control" type="file" id="img" name="img">
                    </div>
                    <div class="mb-3">
                       <label for="judul" class="form-label">Judul Berita</label>
                        <input class="form-control" type="text" id="judul" name="judul" value="<?= $news["judul"]?>">
                    </div>
                    <div class="mb-3">
                       <label for="isi" class="form-label">Isi Berita</label>
                        <textarea class="form-control" id="isi" name="isi"><?= $news["isi"]?></textarea>
                    </div>
                    <div class="button">
				        <button type="submit" name="ubah" class="btn btn-primary">Ubah Berita</button>
			        </div>
              </form>
        </div>


                       
    </div>
    <?php require "partials/footer.php" ?>
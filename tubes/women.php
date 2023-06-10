<?php 
require 'functions.php';

$berita = query("SELECT * FROM berita");

?>

<?php require 'partials/header.php'; ?>
<?php require 'partials/nav.php'; ?>


<div class="container-men mt-5">
    <h1 class="display-1 text-center shadow-lg p-3 mb-5 bg-body-tertiary rounded">MEN FASHION</h1>
<?php foreach ($berita as $b) :?>
  <?php if($b['category'] == "2") : ?>
    <div class="d-flex position-relative mb-5">
      <img src="image/<?= $b['img']?>" class="flex-shrink-0 me-3" alt="" width="300px" height="450px">
      <div>
        <h5 class="mt-0"><?= $b['judul']?></h5>
        <p><?= $b['isi']?></p>
      </div>
    </div>
<?php endif; ?>
<?php endforeach; ?>
    <div class="d-flex position-relative bg-body-secondary">
      <img src="image/8.jpg" class="flex-shrink-0 me-3" alt="" width="300px" height="450px">
      <div>
        <h5>Full Body fashion tahun 2022</h5>
        <p class="isi">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab culpa voluptas ipsum numquam iste officia aut quis recusandae fugit. Natus ut ex qui sequi? Sunt blanditiis adipisci doloribus soluta nemo.</p>
      </div>
    </div>

</div>




</html>

<?php 
require '../functions.php';

$admins = query("SELECT * FROM admin");

if(isset($_POST["cari"])){
    $admins = cari_admin($_POST["keyword"]);
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
          <input type="search" class="form-control" placeholder="Cari Admin" name="keyword" id="keyword_admin" autofocus autocomplete="off">
          <button class="btn btn-primary" type="submit" name="cari" id="cari_admin"><i class="bi bi-search"></i></button>
          <a href="admin_tambah.php" class="btn btn-danger ms-2 px-3">Tambah</a>
      </div>
      </form>
     </div>
     </div>



<div id="container">
    <table class="table table-striped table-hover">
        <thead class="table-info">
            <tr>
                <th>ID</th>
                <th>Action</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($admins as $admin) : ?>
            <tr>
                <td><?= $admin['id']; ?></td>
                <td><a href="admin_hapus.php?id=<?= $admin['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>|
                    <a href="admin_ubah.php?id=<?= $admin['id']; ?>" class="btn btn-primary btn-sm">Ubah</a></td>
                <td><?= $admin['username']; ?></td>
                <td><?= $admin['email']; ?></td>
                <td><?= $admin['password']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
    </div>
</main>











<?php require "partials/footer.php"; ?>
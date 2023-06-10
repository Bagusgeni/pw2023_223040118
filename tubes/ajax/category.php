<?php 
require '../functions.php';

$keyword = $_GET["keyword"];
$query = "SELECT * FROM kategori
            WHERE
            id_category LIKE '%$keyword%' OR
            category LIKE '%$keyword%'
            ";

$kategori = query($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Web</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200;300;400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c45ed65471.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/admin.css">
    <script src="../js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="../js/script.js"></script>


</head>
<body>

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
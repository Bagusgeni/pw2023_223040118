<?php 
$mahasiswa = 
[
    [
        'nrp' => '223040118',
        'nama' => 'Bagus Geni Hurip',
        'email' => 'bagusgeni0001@gmail.com',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'bagus.jpg',
    ],
    [
        'nrp' => '223040005',
        'nama' => 'Ripan Maulana',
        'email' => 'ripanmaulana9128@gmail.com',
        'jurusan' => 'Teknik Mesin',
        'foto' => 'ripan.jpeg',
    ],
    [
        'nrp' => '223040200',
        'nama' => 'Taufiq Alexy',
        'email' => 'taufiqalexys1212@gmail.com',
        'jurusan' => 'Teknik Industri',
        'foto' => 'lexi.jpeg',
    ],
    [
        'nrp' => '223050101',
        'nama' => 'Rich Brian',
        'email' => 'brianimanuel201@gmail.com',
        'jurusan' => 'Teknik Mesin',
        'foto' => 'brian.jpeg',
    ],
    [
        'nrp' => '223040105',
        'nama' => 'Alfachri',
        'email' => 'alfachri2020@gmail.com',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'alfachri.jpeg',
    ],
    [
        'nrp' => '2210304050',
        'nama' => 'Fajri Perdyana',
        'email' => 'fajriperdyana@gmail.com',
        'jurusan' => 'Teknik Mesin',
        'foto' => 'fajri.jpeg',
    ],
    [
        'nrp' => '22102030111',
        'nama' => 'Tarsiman Arizky',
        'email' => 'tarsimanariszky17@gmail.com',
        'jurusan' => 'Teknik Pangan',
        'foto' => 'siman.jpeg',
    ],
    [
        'nrp' => '223020001',
        'nama' => 'Luthfi Halimawan',
        'email' => 'halimawan@gmail.com',
        'jurusan' => 'Teknik pangan',
        'foto' => 'upi.jpeg',
    ],
    [
        'nrp' => '225040122',
        'nama' => 'Ray Restu Fauzi',
        'email' => 'Ray007@gmail.com',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'ray.jpeg',
    ],
    [
        'nrp' => '223040111',
        'nama' => 'Cendy',
        'email' => 'cendy871616@gmail.com',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'cendy.jpeg',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
    <style>
        img{
            width: 100px;
            height: 150px;
        }
    </style>
</head>
<body>
    <h2>Daftar $mahasiswa</h2>
    <?php foreach($mahasiswa as $mhs) {?>
    <ul>
        <li><img src="img/<?= $mhs['foto'];?>"></li>
        <li>Nama : <?=  $mhs['nama']; ?></li>
        <li>NRP : <?= $mhs['nrp']; ?></li>
        <li>Jurusan : <?= $mhs['jurusan']?></li>
        <li>Email : <?= $mhs['email']?></li>
    </ul>
    <?php } ?>
</body>
</html>
<?php 
// Array Associative 
// array yang index nya adalah string yang kita buat
$mahasiswa = [
['nama' => 'geki',
 'makanan' => [,'🫓','🧈'],
 'binatang' => '🐔'
],
[
    'nama' => 'Hanma',
    'makanan' => ['🥞'],
    'binatang' => '🐗'
],
[
    'nama' => 'Shuji',
    'makanan' => ['🧂','🥫','🌭'],
    'binatang' => '🐷'
],
[
    'nama' => 'killu',
    'makanan' => ['🍔'],
    'binatang' => '🐶'
],
[
    'nama' => 'jeki',
    'makanan' => ['🍕','🥨'],
    'binatang' => '🐵'
]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama : <?= $mhs['nama'];?> </li>
        <li>Makanan Favorit :
             <?php foreach($mhs['makanan'] as $m ) 
             {
                echo $m;
             } ?></li>
        <li>Peliharan : <?= $m['binatang']; ?> </li>
    
    </ul>
<?php } ?>

</body>
</html>
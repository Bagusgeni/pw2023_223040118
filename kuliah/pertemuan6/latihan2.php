<?php 
// Array multidimensi
// array di dalam array
$mahasiswa = [
['geki', '🍟', '🐔'],
['Hanma', '🥞', '🐗'],
['Shuji','🌭','🐷'],
['killu','🍔','🐶'],
['jeki','🍕','🐵']
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
<?php foreach($mahasiswa as $m) { ?>
    <ul>
        <li>Nama : <?= $m[0];?> </li>
        <li>Makanan Favorit : <?=$m[1];  ?> </li>
        <li>Peliharan : <?= $m[2]; ?> </li>
    
    </ul>
<?php } ?>

</body>
</html>
<?php  
$film = [
    ['poster' => 'FastFurious.jpeg',
     'judul' => 'fast and furious 7',
     'tahun' => '2015',
     'genre' => ['Laga','Petualangan', 'kejahatan', 'Cerita Seru', 'Misteri'],
     'pemeran utama' => ['Vin Diesel,','Paul Wlaker'],
     'sutradara' => 'James Wan',
],
    ['poster' => 'ironman.jpeg',
     'judul' => 'iron man',
     'tahun' => '2008',
     'genre' => ['Laga','Perang', 'Petualangan', 'Fiksi Ilmiah', 'Cerita Seru', 'Film Fantasi', 'Film Pahlawan Super'],
     'pemeran utama' => ['	Robert Downey Jr','Terrence Howard','Jeff Bridges','Shaun Towb','Gwyneth Paltrow'],
     'sutradara' => 'Jon Favreau',
],
    ['poster' => 'spiderman.jpeg',
     'judul' => 'Spider Man',
     'tahun' => '2002',
     'genre' => ['	Robert Downey Jr','Terrence Howard','Jeff Bridges','Shaun Towb','Gwyneth Paltrow'],
     'pemeran utama' => ['Tobey Maguire','Willem Dafoe','Kirsten Dunst','James Franco','Cliff Robertson' ,'Rosemary Harris'],
     'sutradara' => 'Sam Raimi',
],
    ['Poster' => 'crows.jpeg',
     'judul' => 'Crows Zero',
     'tahun' => '2007',
     'genre' => ['Laga','Cerita Seru'],
     'pemeran utama' => ['Shun Oguri','Kyosuke Yabe','Takayuki Yamada','Shunsuke Daito','Meisa Kuroki','Tssutomu Takahasi','Goro Khisitani','Mikey'],
     'sutradara' => 'Takashi Miike',
],
    ['poster' => 'pertaruhan.jpeg',
     'judul' => 'pertaruhan',
     'tahun' => '2017',
     'genre' => ['Laga'],
     'pemeran utama' => ['Adipati Dolken','Aliando Syarief','Tio Pakusadewo','Jefri Nichol','Giuli Parengkuan','Widika Sidmore','Tarza','Silviia Anggraini'],
     'sutradara' => 'Krishto Damar Alam',
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
<style>img {
            width: 100px;
            height :150px;
        }
        </style>
</head>
<body>
<h2>Daftar Film Animasi </h2>
    <?php foreach ($film as $f) { ?>
        <ul>
            <li><img src="img/<?= $f ["Poster"]; ?>"></li>
            <li>Nama : <?= $f ["Judul"]; ?></li>
            <li>Tahun : <?= $f ["Tahun"]; ?></li>
            <li>Sutradara : <?= $f ["Sutradara"]; ?></li>
            <li>Pemeran Utama : <?= $f['Pemeran utama']; ?></li>
            <li>Genre : 
                    <?php foreach ($f ['Genre']as $f) {
                        echo $f ;
                    }?>
        </ul>
    <?php } ?>
</body>
</html>
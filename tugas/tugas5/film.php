<?php 
$film  = 
[
    [
        'Poster' =>  'FastFurious.jpeg' ,
        'Judul'  =>  'Fast And Furious 7' ,
        'Tahun'  =>  ' 2015 ' , 
        'Genre'  =>  ['Laga, ', ' Petualangan, ', ' kejahatan, ', ' Cerita Seru, ', ' Misteri, '] ,
        'Pemeran utama' => ' Vin Diesel ', 
        'Sutradara' => 'James Wan',
    ],

    [ 
        'Poster' =>  'ironman.jpeg' ,
        'Judul'  =>  'Iron Man' ,
        'Tahun'  =>  '2008' , 
        'Genre'  =>  ['Laga ',' Perang,', ' Petualangan, ', ' Fiksi Ilmiah, ', ' Cerita Seru, ', ' Film Fantasi, ', ' Film Pahlawan Super, '] ,
        'Pemeran utama' => 'Robert Downey Jr',
        'Sutradara' => 'Jon Favreau',
    ],

    [
        'Poster' =>  'spiderman.jpeg' ,
        'Judul'  =>  'Spider Man' ,
        'Tahun'  =>  '2002' , 
        'Genre'  =>  ['Laga, ', ' Fiksi Ilmiah, ',' Film Pahlawan Super' ] ,
        'Pemeran utama' => 'Tobey Maguire',
        'Sutradara' => 'Sam Raimi',
    ],

    [
        'Poster' =>  'crows.jpeg' ,
        'Judul'  =>  ' Crows Zero ' ,
        'Tahun'  =>  '2007' , 
        'Genre'  =>  ['Laga, ', ' Cerita Seru '] ,
        'Pemeran utama' => 'Shun Oguri',
        'Sutradara' => 'Takashi Miike',
    ],

    [
        'Poster' =>  'pertaruhan.jpg' ,
        'Judul'  =>  'Pertaruhan' ,
        'Tahun'  =>  '2017' , 
        'Genre'  =>  ['laga'] ,
        'Pemeran utama' => 'Adipati Dolken',
        'Sutradara' => 'Krishto Damar Alama',
    ],

    [
        'Poster' =>  'suzume.jpeg' ,
        'Judul'  =>  'Suzume' ,
        'Tahun'  =>  '2022' , 
        'Genre'  =>  ['Romance, ' , 'Fantasy, '] ,
        'Pemeran utama' => 'Suzume Iwato',
        'Sutradara' => 'Makoto Shinkai'
    ],
     
    [
        'Poster' =>  'urname.jpeg' ,
        'Judul'  =>  'Your Name.' ,
        'Tahun'  =>  '2017' , 
        'Genre'  =>  ['Romance, ' , 'Fantasy, '] ,
        'Pemeran utama' => 'Mitsuha Miyamizu',
        'Sutradara' => 'Makoto Shinkai',
    ],

    [
        'Poster' =>  'opRED.jpeg' ,
        'Judul'  =>  'One Piece Film: Red' ,
        'Tahun'  =>  '2022' , 
        'Genre'  =>  ['	Petualangan, ' , 'fantasi, '] ,
        'Pemeran utama' => 'Luffy',
        'Sutradara' => 'Gorō Taniguchi',
    ],

    [
        'Poster' =>  'jujutsu.jpeg' ,
        'Judul'  =>  'Jujutsu Kaisen 0' ,
        'Tahun'  =>  '2021' , 
        'Genre'  =>  ['Petualangan, ' , ' Fantasi Gelap, ', ' Supranatural '] ,
        'Pemeran utama' => 'Okkotsu Yuta',
        'Sutradara' => 'Gege Akutami',
    ],

    [
        'Poster' =>  'kimetsu.jpeg' ,
        'Judul'  =>  'Kimetsu no Yaiba: Mugen Ressha-hen' ,
        'Tahun'  =>  '2020' , 
        'Genre'  =>  ['Fantasi, ' , ' Laga ' ] ,            
        'Pemeran utama' => 'Kamado Tanjiro',                                          
        'Sutradara' => 'Haruo Sotozaki',  
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

        img {
            width: 100px;
            height :150px;
        }
    </style>
</head>
<body>
    <h2>Daftar Film Dan Film Animasi </h2>
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
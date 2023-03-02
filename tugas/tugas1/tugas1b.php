<?php 
$b = "18";
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php echo"Aku adalah angka <b>$b</b>"; ?> <br>
    <?php $b *= 5 ?>
    <?php echo "Jika aku dikali 5, maka aku sekarang menjadi <b>$b</b>" ?> <br>
    <?php $b = $b / 2 ?>
    <?php echo "Jika aku dibagi 2, maka aku sekarang menjadi <b>$b</b>" ?> <br>
    <?php $b = $b + 75 ?>
    <?php echo "Jika aku ditambah 75, maka aku sekarang menjadi <b>$b</b>" ?> <br>
    <?php $b = $b - 20 ?>
    <?php echo "Jika aku dikurang 20, maka aku sekarang menjadi <b>$b</b>" ?> 

    
 </body>
 </html>
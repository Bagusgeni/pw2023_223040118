<?php 
    $nd = 'bagus' ;
    $nt = 'geni' ;
    ?>
 <?php 
    for ($b = 1; $b <= 100; $b++) {
        if ($b % 3 == 0 && $b %5 == 0 ){
            echo $nd ." ". $nt ."<br>";  
        
        }elseif ($b % 3 == 0){
            echo $nd ."<br>";
        }elseif ($b % 5 == 0 ){
            echo $nt ."<br>";
        }
        else {
            echo $b ."<br>";
        } 
    }
?>

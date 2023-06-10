<?php 
define('BASE_URL',' /pw2023_223040118/kuliah/pertemuan8/index.php/'); 


function chekActive($uri) {
    return($_SERVER["REQUEST_URI"] === BASE_URL . $uri) ? 'active' : '';
}
?>
<?php 
require('functions.php');
$title ='Home';
$students = [
    [
        "nama" => "Bagus Geni",
        "npm" => "223040118",
        "email" => "bagusgeni0001@gmail.com",
    ],
    [
        "nama" => "Umar fauzy",
        "npm" => "223040128",
        "email" => "umar11fauzym@gmail.com",
    ],   
    
];

// echo $_SERVER['REQUEST_URI'];
// /pw2023_223040118/kuliah/pertemuan8/index.php

require('views/index.view.php');

?>

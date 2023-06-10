<?php

require_once __DIR__ . '/../vendor/autoload.php';

require '../functions.php';

$berita = query("SELECT * FROM berita");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Web</title>
    <link rel="stylesheet" href="../css/admin.css">
    <script src="../js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="../js/script.js"></script>

</head>
<body>
<h1 class="pdf">Berita Fashion</h1>
<table class="tb">
<thead class="table-info">
    <tr>
    <th>ID Berita</th>
    <th>Category</th>
    <th>Image</th>
    <th>Judul</th>
    <th>Isi</th>
    </tr>
</thead>
<tbody>
';

foreach ($berita as $b) {

$html .='
    <tr>
        <td>'. $b["id_news"] .'</td>';
        $category = mysqli_query($conn, "SELECT * FROM kategori");
        while ($c = mysqli_fetch_array($category)) {
           if ($c["id_category"] == $b["category"]) {
$html .= '<td>'. $c["category"] .'</td>';            
         }
        } 
$html .= '        
        <td><img src="../image/'. $b["img"] .'" width="200px" height="250px"></td>
        <td>'. $b["judul"] .'</td>
        <td>'. $b["isi"] .'</td>
    </tr>';
} 





$html .= '</tbody>
</table>
</body>
</html>';


$mpdf->WriteHTML($html);
$mpdf->Output();
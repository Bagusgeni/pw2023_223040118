<?php

require_once __DIR__ . '/../vendor/autoload.php';

require '../functions.php';
$admins = query("SELECT * FROM admin");

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
<h1 class="pdf">Admin</h1>
<table class="tb">
<thead class="table-info">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
    </tr>
</thead>
<tbody>
';

foreach ($admins as $a) {

$html .='
    <tr>
        <td>'. $a["id"] .'</td>
        <td>'. $a["username"] .'</td>
        <td>'. $a["email"] .'</td>
        <td>'. $a["password"] .'</td>
    </tr>';
} 





$html .= '</tbody>
</table>
</body>
</html>';


$mpdf->WriteHTML($html);
$mpdf->Output();
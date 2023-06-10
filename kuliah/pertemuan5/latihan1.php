<?php 
// ARRAY
// Membuat array
$hari = array ('Senin' , 'Selasas' , 'Rabu');
$bulan = ['Januari' , 'Febuari' , 'Maret'];
$myArray = ['Geni' , 19, false];
$binatang = ['🐵' , '🐶' , '🐷' , '🐔' ,'🐗'];

// menampilkan isi array
// mencetak satu elemen pada array menggunakan index
echo $hari[1];
echo "<hr>";

// mencetak seluruh isi array
// var_dump, print_r
var_dump ($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
print_r($binatang);
echo "<hr>";

// manipulasi isi array
// isi elemen menggunakan index
$hari[3] = 'Kamis';
print_r($hari);
echo "<br>";

//menambahkan elemen di akhir array menggunakan index kosong []
$hari[] = "Jum'at";
$hari[] = "sabtu";
print_r($hari);
echo "<br>";

// menambahkan elemen baru di akhir array menggunakan array_push()
array_push($bulan, 'April', 'Mei'); // jika ingin menambah lagit tinggal menambahkan koma 
print_r($bulan);
echo "<hr>";

// Menambahkan elemen baru di awal array menggunakan array_unshift
array_unshift($binatang, '🐭', '🦝'); // jika ingin menambahkan lagi tinggal menggunakan koma
print_r($binatang);
echo "<hr>";

// Menghapus elemen di akhir array menggunakan array_pop
array_pop($hari);
array_pop($hari);
print_r($hari);
echo "<hr>";

// Menghapus elemen di awa array menggunakan array_shift
array_shift($hari);
print_r($hari);
echo "<hr>";


?>
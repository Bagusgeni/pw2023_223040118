
<?php 
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
}



require '../functions.php';

$id_news = $_GET['id_news'];

if(hapus_berita($id_news) > 0){
    echo"<script>
    alert('Berita berhasil di hapus');
    document.location.href = 'berita.php';
    </script>";
}else {
    echo mysqli_error($id_news);
}




?>
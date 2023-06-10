<?php 
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
}



require '../functions.php';

$id = $_GET['id'];

if(hapus_admin($id) > 0){
    echo"<script>
    alert('admin berhasil di hapus');
    document.location.href = 'admin.php';
    </script>";
}else {
    echo mysqli_error($id);
}




?>
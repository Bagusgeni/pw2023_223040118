
<?php 



require '../functions.php';

$id_category = $_GET['id_category'];

if(hapus_category($id_category) > 0){
    echo"<script>
    alert('category berhasil di hapus');
    document.location.href = 'category.php';
    </script>";
}else {
    echo mysqli_error($id_category);
}




?>
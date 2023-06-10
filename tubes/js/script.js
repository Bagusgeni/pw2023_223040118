$(document).ready(function(){

    //tombol cari 
    $('#cari_category').hide();
    // ketika keywoard di tulis
    $('#keyword_category').on('keyup', function(){
        $('#container').load('../ajax/category.php?keyword=' + $('#keyword_category').val());
    });




    //tombol cari 
    $('#cari_admin').hide();
    // ketika keywoard di tulis
    $('#keyword_admin').on('keyup', function(){
        $('#container').load('../ajax/admin.php?keyword=' + $('#keyword_admin').val());
    });
    

//tombol cari 
    $('#cari_berita').hide();
    // ketika keywoard di tulis
    $('#keyword_berita').on('keyup', function(){
        $('#container').load('../ajax/berita.php?keyword=' + $('#keyword_berita').val());
    });

});
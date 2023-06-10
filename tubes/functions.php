<?php
define('BASE_URL', '/pw2023_2230401/tubes/admin/');
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "fashion");

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function registrasi($data)
{
	global $conn;

	$username = strtolower(stripcslashes($data["username"]));
	$email = $data["email"];
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username sudah terdaftar!')
			  </script>";
		return false;
	}

	// cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
				alert('konfirmasi password tidak sesuai')
			  </script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO `admin` (`id`, `username`, `email`, `password`)
	VALUES(null, '$username', '$email', '$password')");

	return mysqli_affected_rows($conn);
}

function ubah_admin($data)
{
	global $conn;

	$id = $data["id"];
	$username = strtolower(stripcslashes($data["username"]));
	$email = $data["email"];
	$password = mysqli_real_escape_string($conn, $data["password"]);

	$password = password_hash($password, PASSWORD_DEFAULT);


	$query = "UPDATE admin SET
				id = '$id', 
				username = '$username',
				email = '$email',
				`password` = '$password'
			WHERE id = $id
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus_admin($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM admin WHERE id = '$id'");
	return mysqli_affected_rows($conn);
}

function cari_admin($keyword)
{
	$query = "SELECT * FROM admin
				WHERE
			  id LIKE '%$keyword%' OR
			  username LIKE '%$keyword%' OR
			  email LIKE '%$keyword%'
			";
	return query($query);
}


function tambah_category($data){

	global $conn;

	$category = $data["category"];

	$query = "INSERT INTO kategori
				VALUES
				(null, '$category')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function ubah_category($data)
{
	global $conn;

	$id_category = $data["id_category"];
	$category = $data["category"];


	$query = "UPDATE kategori SET
				id_category = '$id_category', 
				category = '$category'
			WHERE id_category = $id_category
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus_category($id_category)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM kategori WHERE id_category = '$id_category'");
	return mysqli_affected_rows($conn);
}

function cari_category($keyword)
{
	$query = "SELECT * FROM kategori
				WHERE
			  id_category LIKE '%$keyword%' OR
			  category LIKE '%$keyword%' 
			";
	return query($query);
}


function tambah_berita($data)
{
	global $conn;

	$img = upload_berita();
	if (!$img){
		return false;
	}
	$category = $data["category"];
	$judul = htmlspecialchars($data["judul"]);
	$isi = htmlspecialchars($data["isi"]);

	$query = "INSERT INTO berita
				VALUES
				(null, '$category', '$img', '$judul', '$isi')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload_berita()
{
	$nameFile = $_FILES['img']['name'];
	$ukuranFile = $_FILES['img']['size'];
	$error = $_FILES['img']['error'];
	$tmpName = $_FILES['img']['tmp_name'];

	if ($error === 4){
		echo"<script>
		alert('masukan foto terlebih dahulu'); 
		</script>";
		return false;
	}


	$ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'webp'];
	$ekstensiGambar = explode ('.', $nameFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo"<script>
		alert('yang anda uplod bukan gambar '); 
		</script>";
		return false;
	}

	if ($ukuranFile > 1000000){
		echo"<script>
		alert('ukuran gambar terlalu besar '); 
		</script>";
		return false;
	}


	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;


	// memindahkan file
	move_uploaded_file ($tmpName, '../image/' . $namaFileBaru);
	return $namaFileBaru;


}

function hapus_berita($id_news)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM berita WHERE id_news = '$id_news'");
	return mysqli_affected_rows($conn);
}

function ubah_berita($data)
{
	global $conn;

	$id_news = htmlspecialchars($data["id_news"]);
	$gambar_lama = htmlspecialchars($data["gambar_lama"]);
	if ($_FILES ['img']['error'] === 4 ) {
		$img = $gambar_lama;
	} else{
		$img = upload_berita();
	}
	$judul = htmlspecialchars($data["judul"]);
	$category = $data["category"];
	$isi = htmlspecialchars($data["isi"]);

	$query = "UPDATE berita SET
				id_news = '$id_news', 
				category = '$category', 
				img = '$img',
				judul = '$judul',
				isi = '$isi'
			WHERE id_news = $id_news
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function cari_berita($keyword)
{
	$query = "SELECT * FROM berita
				WHERE
			  category LIKE '%$keyword%' OR
			  img LIKE '%$keyword%' OR
			  judul LIKE '%$keyword%' OR
			  isi LIKE '%$keyword%'
			";
	return query($query);
}
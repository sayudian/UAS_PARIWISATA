
<?php

include"config/fungsi_gambar.php";

$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];


$username		= $_POST['username'];
$kategori		= $_POST['kategori'];
$judul			= $_POST['judul'];
$isi			= $_POST['isi'];
$tanggal		= $_POST['tanggal'];
$jam			= $_POST['jam'];


if (empty ($kategori) or empty ($judul) or empty($isi) )
{
echo "<script>alert('data tidak boleh kosong');
document.location.href='?page=input_berita'; </script>\n"; exit ;
}


if (!empty($lokasi_file))
   {
    UploadFile($nama_file);

		$query = mysql_query ('insert into tbl_berita (username,kategori,judul,isi,tanggal,jam,gambar)values("'.$username.'"
		,"'.$kategori.'"
		,"'.$judul.'"
		,"'.$isi.'"
		,"'.$tanggal.'"
		,"'.$jam.'"
		,"'.$nama_file.'")');
		} else {
		$query=mysql_query('insert into tbl_berita (username,kategori,judul,isi,tanggal,jam,gambar)values("'.$username.'"
		,"'.$kategori.'"
		,"'.$judul.'"
		,"'.$isi.'"
		,"'.$tanggal.'"
		,"'.$jam.'"
		,"'.$nama_file.'")');
				
				}

if($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='?page=berita'; </script>\n";
}else{
echo "<script>alert('data gagal disimpan');
document.location.href='?page=berita'; </script>\n";
}
?>

<?php

include"config/fungsi_pelayanan.php";

$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];


$username			= $_POST['username'];
$judul				= $_POST['judul'];
$isi				= $_POST['isi'];
$tanggal			= $_POST['tanggal'];


if (empty ($judul) or empty($isi) )
{
echo "<script>alert('data tidak boleh kosong');
document.location.href='?page=input_pelayanan'; </script>\n"; exit ;
}


if (!empty($lokasi_file))
   {
    UploadFile($nama_file);

		$query = mysql_query ('insert into tbl_pelayanan (username,judul,isi,tanggal,gambar)values("'.$username.'"
		,"'.$judul.'"
		,"'.$isi.'"
		,"'.$tanggal.'"
		,"'.$nama_file.'")');
		} else {
		$query=mysql_query('insert into tbl_pelayanan (username,judul,isi,tanggal,gambar)values("'.$username.'"
		,"'.$judul.'"
		,"'.$isi.'"
		,"'.$tanggal.'"
		,"'.$nama_file.'")');
				
				}

if($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='?page=pelayanan'; </script>\n";
}else{
echo "<script>alert('data gagal disimpan');
document.location.href='?page=pelayanan'; </script>\n";
}
?>

<?php

include"config/fungsi_agenda.php";

$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];


$username		= $_POST['username'];
$judul_agenda			= $_POST['judul_agenda'];
$isi_agenda			= $_POST['isi_agenda'];
$tanggal_agenda		= $_POST['tanggal_agenda'];


if (empty ($judul_agenda) or empty($isi_agenda) )
{
echo "<script>alert('data tidak boleh kosong');
document.location.href='?page=input_agenda'; </script>\n"; exit ;
}


if (!empty($lokasi_file))
   {
    UploadFile($nama_file);

		$query = mysql_query ('insert into tbl_agenda (username,judul_agenda,isi_agenda,tanggal_agenda,gambar_agenda)values("'.$username.'"
		,"'.$judul_agenda.'"
		,"'.$isi_agenda.'"
		,"'.$tanggal_agenda.'"
		,"'.$nama_file.'")');
		} else {
		$query=mysql_query('insert into tbl_agenda (username,judul_agenda,isi_agenda,tanggal_agenda,gambar_agenda)values("'.$username.'"
		,"'.$judul_agenda.'"
		,"'.$isi_agenda.'"
		,"'.$tanggal_agenda.'"
		,"'.$nama_file.'")');
				
				}

if($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='?page=agenda'; </script>\n";
}else{
echo "<script>alert('data gagal disimpan');
document.location.href='?page=agenda'; </script>\n";
}
?>
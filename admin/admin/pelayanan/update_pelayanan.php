<?php
include"config/fungsi_pelayanan.php";
extract($_POST);
?>

<?php
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name']; 
  
    // Apabila ada gambar yang diupload
   if (empty($lokasi_file)){
   
    $q=mysql_query("UPDATE tbl_peayanan SET 
                                   username				= '$_POST[username]',
                                   judul				= '$_POST[judul]',
                                   isi					= '$_POST[isi]',
                                   tanggal				= '$_POST[tanggal]',
                                   WHERE id_pelayanan	= '$_GET[id]'");
 } 
  else{
    UploadFile($nama_file);
   
    $q=mysql_query("UPDATE tbl_pelayanan SET 
									username			= '$_POST[username]',
									judul				= '$_POST[judul]',
									isi					= '$_POST[isi]',
									tanggal				= '$_POST[tanggal]',
                                    gambar				= '$nama_file'
                                    WHERE id_pelayanan	= '$_GET[id]'");
		} 
if($q){	
 
echo"<script>alert('data berhasil di update...');
document.location.href='?page=pelayanan'; </script>\n";

} else {
echo"<script>alert('gagal di update');
document.location.href='?page=pelayanan'; </script>\n";
}
?>


<?php
include"config/fungsi_agenda.php";
extract($_POST);
?>

<?php
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name']; 
$tgl         =date('Y-m-d');
  
    // Apabila ada gambar yang diupload
   if (empty($lokasi_file)){
   
    $q=mysql_query("UPDATE tbl_agenda SET 
									username			= '$_POST[username]',
                                   judul_agenda			= '$_POST[judul_agenda]',
                                   isi_agenda			= '$_POST[isi_agenda]',
                                    tanggal_agenda		= '$tanggal_agenda',
                                    WHERE id_agenda		= '$_GET[id]'");
 } 
  else{
    UploadFile($nama_file);
   
    $q=mysql_query("UPDATE tbl_agenda SET 
									username			= '$_POST[username]',
                                   judul_agenda			= '$_POST[judul_agenda]',
                                   isi_agenda			= '$_POST[isi_agenda]',
                                    tanggal_agenda		= '$tanggal_agenda',
                                    gambar_agenda		= '$nama_file'
                                    WHERE id_agenda		= '$_GET[id]'");
		} 
if($q){	
 
echo"<script>alert('data berhasil di update...');
document.location.href='?page=agenda'; </script>\n";

} else {
echo"<script>alert('gagal di update');
document.location.href='?page=agenda'; </script>\n";
}
?>


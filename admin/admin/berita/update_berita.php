<?php
include"config/fungsi_gambar.php";
extract($_POST);
?>

<?php
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name']; 
$tgl         =date('Y-m-d');
  
    // Apabila ada gambar yang diupload
   if (empty($lokasi_file)){
   
    $q=mysql_query("UPDATE tbl_berita SET 
									username			= '$_POST[username]',
                                    kategori	 		= '$_POST[kategori]',
                                    judul				= '$_POST[judul]',
                                    isi			 		= '$_POST[isi]',
                                    tanggal				= '$tgl',
                                    jam					= '$jam'
                                    WHERE id_berita		= '$_GET[id]'");
 } 
  else{
    UploadFile($nama_file);
   
    $q=mysql_query("UPDATE tbl_berita SET 
									username			= '$_POST[username]',
									kategori	 		= '$_POST[kategori]',
                                    judul				= '$_POST[judul]',
                                    isi			 		= '$_POST[isi]',
                                    tanggal				= '$tgl',
                                    jam					= '$jam',
                                    gambar		 		= '$nama_file'
                                    WHERE id_berita		= '$_GET[id]'");
		} 
if($q){	
 
echo"<script>alert('data berhasil di update...');
document.location.href='?page=berita'; </script>\n";

} else {
echo"<script>alert('gagal di update');
document.location.href='?page=berita'; </script>\n";
}
?>


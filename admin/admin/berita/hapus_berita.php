
<?php

$id_berita  = $_GET['id'];
$foto		= $_GET['filenya'];


if ($foto=="")
{
$query = mysql_query("delete from tbl_berita where id_berita='$id_berita'");

} else {
$query = mysql_query("delete from tbl_berita where gambar='$foto'");
unlink("berita/foto/$_GET[filenya]");
}


if ($query){
echo"<script>alert('data berhasil di hapus...');
document.location.href='?page=berita'; </script>\n";
}
else
{echo"<script>alert('hapus gagal');
document.location.href='?page=berita'; </script>\n";}


?>


<?php

$id_profil  = $_GET['id'];
$foto		= $_GET['filenya'];


if ($foto=="")
{
$query = mysql_query("delete from tbl_profil where id_profil='$id_profil'");

} else {
$query = mysql_query("delete from tbl_profil where gambar_profil='$foto'");
unlink("profil/foto/$_GET[filenya]");
}


if ($query){
echo"<script>alert('data berhasil di hapus...');
document.location.href='?page=profil'; </script>\n";
}
else
{echo"<script>alert('hapus gagal');
document.location.href='?page=profil'; </script>\n";}

?>

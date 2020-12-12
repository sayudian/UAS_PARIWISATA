
<?php

$id_agenda  = $_GET['id'];
$foto		= $_GET['filenya'];


if ($foto=="")
{
$query = mysql_query("delete from tbl_agenda where id_agenda='$id_agenda'");

} else {
$query = mysql_query("delete from tbl_agenda where gambar_agenda='$foto'");
unlink("agenda/foto/$_GET[filenya]");
}


if ($query){
echo"<script>alert('data berhasil di hapus...');
document.location.href='?page=agenda'; </script>\n";
}
else
{echo"<script>alert('hapus gagal');
document.location.href='?page=agenda'; </script>\n";}

?>

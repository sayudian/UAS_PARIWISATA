
<?php

$id_pelayanan  	= $_GET['id'];
$foto			= $_GET['filenya'];


if ($foto=="")
{
$query = mysql_query("delete from tbl_pelayanan where id_pelayanan='$id_pelayanan'");

} else {
$query = mysql_query("delete from tbl_pelayanan where gambar='$foto'");
unlink("pelayanan/foto/$_GET[filenya]");
}


if ($query){
echo"<script>alert('data berhasil di hapus...');
document.location.href='?page=pelayanan'; </script>\n";
}
else
{echo"<script>alert('hapus gagal');
document.location.href='?page=pelayanan'; </script>\n";}

?>

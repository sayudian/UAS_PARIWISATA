####################################################################################################### -->
<div class="wrapper">
  <div class="container">
  <?php
include "koneksi.php";
$id=$_GET['id'];
$query = "select * from tbl_berita where id_berita='$id' ";
$sql = mysql_query($query);
$r=mysql_fetch_array($sql);
?>
<br>
<div class="col-lg-4">
	<img src="admin/admin/berita/foto/<?php echo $r['gambar']; ?>" style="width:250px; height:250px;">
</div>
<div class="col-lg-8">
	<h1><?php echo"$r[judul]"; ?></h1>
	<?php echo"$r[isi]"; ?>
</div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<br>
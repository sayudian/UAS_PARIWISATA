<?php 
include "koneksi.php";
$query=mysql_query("select * from tbl_pelayanan where id_pelayanan='$_GET[id]'");
$data=mysql_fetch_array($query);
?>

<br>
<div class="wrapper">
      <div class="row">
      <div class="col-md-3" style="margin:30px;">
     <img src="admin/admin/pelayanan/foto/<?php echo $data['gambar']; ?>" style="width:250px; height:250px;">   
    </div>
      <div class="col-md-6" style="margin-left:10px ; margin-top:10px;">
        <center> <td><b>Detail </b></td> </center>
		<table>
        	<tr>
        		<h3><td><b>Judul </b></td>		<td> : <?php echo $data['judul']; ?></td></h3>
        	</tr>

        	<tr>
        		<h3><td><b>Isi </b></td>		    <td> : <?php echo $data['isi']; ?></td></h3>
        	</tr>

        	<tr>
        		<h3><td><b>Tanggal </b></td>		<td> : <?php echo $data['tanggal']; ?></td></h3>
        	</tr>

        	
        </table><br><br>
         
    </div>
</div>
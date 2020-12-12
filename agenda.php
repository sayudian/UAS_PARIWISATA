</div>
		   
		  </div>
		  
		</div>
		
	  </div>

</div>
		
		<section class="section-divider textdivider divider2">
			<div class="container">
			<br/>
			<br/>
				<p><b><h2 style="color:#fff000;"><marquee>KALENDER EVENT PROVINSI BALI</marquee></h2></b></p>
				<hr>
				<p>To develop comfort, beautiful natural beauty is the main priotas in your tourist destination</p>
			</div><!-- container -->
		</section><!-- section -->
<?php include"koneksi.php"; ?>


			<!-- /row -->
			<br>
			<br>
		<!-- /row -->
<!-- /container -->
	
	

<div class="wrapper "  >
	  <div class="container">
		<div class="content">
		  <div id="featured_slide " >
		  
		   
		   <div>
			  
					<?php  
						include "koneksi.php";  
					   
					$batas=10;
					$paging=@$_GET['paging'];
					if(empty($paging))
						{
						$posisi=0;
						$paging=1;
						}

					else{
						$posisi=($paging-1) * $batas;
						}
					$query=mysql_query("select * from tbl_agenda order by tanggal_agenda desc limit $posisi,$batas");
					while($r=mysql_fetch_array($query))
					{
					echo"<div class='fl_right col-sm-4'>
					<img border=2 src='admin/admin/agenda/foto/$r[gambar_agenda]' border=0 width=300 height=200> <br>
					 <strong><a href='?module=detail&id=$r[id_agenda]'>$r[judul_agenda].</a></strong>
					 <p><strong>$r[tanggal_agenda]</strong></p>
					<p>  </p> </div>
						 
					"; 
						  
						} 

					?>

		   </div>
		   
		  </div>
		  
		</div>
		
	  </div>

</div>
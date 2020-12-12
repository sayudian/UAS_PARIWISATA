
<div id="headerwrap" id="home" name="home">
			<header class="clearfix">
	  		 	
	  		 		<p><marquee>PAKET TOUR BERBASIS SISTEM INFORMASI DESA BONDALEM </marquee></p>
	  		 		<p><b><h3 style="color:#fff000;">DINAS PARIWISATA DAN KEBUDAYAAN</h3></b></p>
	  		</header>	    
	    </div><!-- /headerwrap -->

		<!-- ==== GREYWRAP ==== -->
		<div id="greywrap">
					<p>BERITA UTAMA</p>
			<div class="row" class='fl_right col-sm-4'>
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
					$query=mysql_query("select id_berita,gambar,judul,isi,tanggal,jam from tbl_berita where id_berita='1'");
					while($r=mysql_fetch_array($query))
					{
					echo"<div class='fl_right col-sm-4'>
					<img border=2 src='admin/admin/berita/foto/$r[gambar]' border=0 width=300 height=200> 
					 <br><strong><a href='?module=readmore&id=$r[id_berita]'>$r[judul].</a></strong>
					 <p><strong>$r[tanggal]</strong> | <strong>$r[jam]</strong></p>
					".substr($r['isi'],0,100)." .....<a href='?module=readmore&id=$r[id_berita]'>Read More</a> </p> </div>
						 
					"; 
						  
						} 

					?>
					
			
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
					$query=mysql_query("select id_berita,gambar,judul,isi,tanggal,jam from tbl_berita where id_berita='8'");
					while($r=mysql_fetch_array($query))
					{
					echo"<div class='fl_right col-sm-4'>
					<img border=2 src='admin/admin/berita/foto/$r[gambar]' border=0 width=300 height=200> 
					 <br><strong><a href='?module=readmore&id=$r[id_berita]'>$r[judul].</a></strong>
					 <p><strong>$r[tanggal]</strong> | <strong>$r[jam]</strong></p>
					".substr($r['isi'],0,100)." .....<a href='?module=readmore&id=$r[id_berita]'>Read More</a> </p> </div>
						 
					"; 
						  
						} 

					?>
			
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
					$query=mysql_query("select id_berita,gambar,judul,isi,tanggal,jam from tbl_berita where id_berita='3'");
					while($r=mysql_fetch_array($query))
					{
					echo"<div class='fl_right col-sm-4'>
					<img border=2 src='admin/admin/berita/foto/$r[gambar]' border=0 width=300 height=200> 
					 <br><strong><a href='?module=readmore&id=$r[id_berita]'>$r[judul].</a></strong>
					 <p><strong>$r[tanggal]</strong> | <strong>$r[jam]</strong></p>
					".substr($r['isi'],0,80)." .....<a href='?module=readmore&id=$r[id_berita]'>Read More</a> </p> </div>
						 
					"; 
						  
						} 

					?>
			
				
				
			</div><!-- row -->
		</div><!-- greywrap -->
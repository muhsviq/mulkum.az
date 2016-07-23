<!-- home start here -->
<div class="home">
<div class="container">
	<div class="row">  
	<br>
	  	<div class="col-md-12">
		  	<div class="col-md-8">
			  	<div class="col-md-12">
			  		<div id="myCarousel" class="carousel slide" data-ride="carousel">

		    <!-- Wrapper for slides -->

		    
					    <div class="carousel-inner" role="listbox">

					      <div class="item active">
					        <img src="<?PHP echo $site_url;?>images/h1.jpg">
					      </div>

					      <div class="item">
					        <img src="<?PHP echo $site_url;?>images/h2.jpg">
					      </div>
					    
					      <div class="item">
					        <img src="<?PHP echo $site_url;?>images/h3.jpg">
					      </div>

					      <div class="item">
					        <img src="<?PHP echo $site_url;?>images/h4.jpg">
					      </div>
					    </div>
			  		

			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			      <span class="sr-only">Next</span>
			    </a>
			    </div>
				</div>
			    <div class="clearFix3"></div>
			    


			    <div class="main">
					<div class="premium vip">
					<div class="col-md-12">
						<h2>Oxşar elanlar</h2>
					</div>
				<div class="col-md-12">
					<div class="col-md-3">
						<div class="col-md-12">
							<img src="<?PHP echo $site_url;?>images/pre.png">
						</div>
						<div class="col-md-12">
							<h3><strong>НОВОСТРОЙКА</strong></h3>
						</div>
						<div class="col-md-12 info">
							<span class="col-md-5" >Tarix:</span><span class="col-md-7"><span class="pull-right">21/04/2015</span></span>
						</div>
						<div class="col-md-12 info">
							<span class="col-md-5 ">Qiymet:</span><span class="price col-md-7"><span class="pull-right">2700000azn</span></span>
						</div>
						<div class="col-md-12 info">
							<span class="col-md-5">Yer:</span><span  class="col-md-7"><span class="pull-right">Nesimi metrosu</span></span>
						</div>
						<div class="col-md-12 info">
							<span class="col-md-5">Otaq sayi:</span><span class="col-md-7"><span class="pull-right">5</span></span>
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="col-md-12">
							<img src="<?PHP echo $site_url;?>images/pre.png">
						</div>
						<div class="col-md-12">
							<h3><strong>НОВОСТРОЙКА</strong></h3>
						</div>
						<div class="col-md-12 info">
							<span class="col-md-5" >Tarix:</span><span class="col-md-7"><span class="pull-right">21/04/2015</span></span>
						</div>
						<div class="col-md-12 info">
							<span class="col-md-5 ">Qiymet:</span><span class="price col-md-7"><span class="pull-right">2700000azn</span></span>
						</div>
						<div class="col-md-12 info">
							<span class="col-md-5">Yer:</span><span  class="col-md-7"><span class="pull-right">Nesimi metrosu</span></span>
						</div>
						<div class="col-md-12 info">
							<span class="col-md-5">Otaq sayi:</span><span class="col-md-7"><span class="pull-right">5</span></span>
						</div>
					</div>
					<div class="col-md-3">
						<div class="col-md-12">
							<img src="<?PHP echo $site_url;?>images/pre.png">
						</div>
						<div class="col-md-12">
							<h3><strong>НОВОСТРОЙКА</strong></h3>
						</div>
						<div class="col-md-12 info">
							<span class="col-md-5" >Tarix:</span><span class="col-md-7"><span class="pull-right">21/04/2015</span></span>
						</div>
						<div class="col-md-12 info">
							<span class="col-md-5 ">Qiymet:</span><span class="price col-md-7"><span class="pull-right">2700000azn</span></span>
						</div>
						<div class="col-md-12 info">
							<span class="col-md-5">Yer:</span><span  class="col-md-7"><span class="pull-right">Nesimi metrosu</span></span>
						</div>
						<div class="col-md-12 info">
							<span class="col-md-5">Otaq sayi:</span><span class="col-md-7"><span class="pull-right">5</span></span>
						</div>
					</div>		
					<div class="col-md-3">
						<div class="col-md-12">
							<img src="<?PHP echo $site_url;?>images/pre.png">
						</div>
						<div class="col-md-12">
							<h3><strong>НОВОСТРОЙКА</strong></h3>
						</div>
						<div class="col-md-12 info">
							<span class="col-md-5" >Tarix:</span><span class="col-md-7"><span class="pull-right">21/04/2015</span></span>
						</div>
						<div class="col-md-12 info">
							<span class="col-md-5 ">Qiymet:</span><span class="price col-md-7"><span class="pull-right">2700000azn</span></span>
						</div>
						<div class="col-md-12 info">
							<span class="col-md-5">Yer:</span><span  class="col-md-7"><span class="pull-right">Nesimi metrosu</span></span>
						</div>
						<div class="col-md-12 info">
							<span class="col-md-5">Otaq sayi:</span><span class="col-md-7"><span class="pull-right">5</span></span>
						</div>
					</div>		

		</div>





</div>
</div>
</div>
<?PHP
		    	$elan_sql=mysqli_query($db,"SELECT * FROM elan WHERE id ='".$id."'");
		    		$elan_query = mysqli_fetch_assoc($elan_sql);
		    		
		    	
		    ?>
			  <div class="col-md-4">
			  	<div class="col-md-12 sticker-code">
			  		<span>Elanın kodu: </span> <span><?PHP echo $elan_query['id'];?></span>
			  	</div>
			  	<div class="clearFix3"></div>
			  	<div class="col-md-12 sticker-code">
			  		<span>Elanın tarixi: </span> <span><?PHP echo $elan_query['v_tarix'];?></span>
			  	</div>
			  	<div class="clearFix3"></div>
			  	<div class="col-md-12 look-count">
			  		<span>Baxış sayı:</span> <span>23</span>
			  	</div>
			  	<div class="clearFix3"></div>
			  	<div class="col-md-12 look-count price">
			  		<span>Elanın qiyməti:</span> <span><?PHP echo $elan_query['qiymet']; ?></span>
			  	</div>
			  	<div class="clearFix3"></div>
			  	<div class="col-md-12">
			  		<div class="person-button">
			  			<span >Əlaqədar şəxs</span>
			  		</div>
			  	</div>
			  	<?PHP $user_sql = mysqli_query($db,"SELECT * FROM user WHERE id = '".$elan_query['u_id']."'");
			  		$user_query=mysqli_fetch_assoc($user_sql);
			  			
			  		

			  		?>
			  	<div class="clearFix3"></div>
			  	<div class="col-md-12 look-count">
			  		<span><img src="<?PHP echo $site_url;?>images/person.png"><?PHP echo $user_query['name'];?></span>
			  	</div>
			  	<div class="clearFix3"></div>
			  	<div class="col-md-12 look-count">
			  		<span><img src="<?PHP echo $site_url;?>images/person.png">
					<?PHP if($elan_query['r_id']==1){
			  			echo "Əmlak sahibi";}
			  			else{
			  				echo "Vasitəçi";
			  			}?>
			  		</span>
			  	</div>
			  	<div class="clearFix3"></div>
			  	<div class="col-md-12 look-count price">
			  		<span><img src="<?PHP echo $site_url;?>images/call.png"><?PHP echo $user_query['telephone'];?></span> 	
			  	</div>
			  	<div class="clearFix3"></div>
			  	<div class="col-md-12">
			  		<div class="person-button">
			  			<span>Ümumi məlumat</span> 
			  		</div>
			  	</div>
			  	<div class="clearFix3"></div>
			  	<div class="col-md-12 color-gray">
			  		<span><?PHP echo $elan_query['text'];?></span> 
			  	</div>
			  	<div class="clearFix3"></div>
			  	<div class="col-md-12">
			  		<span class="bold-gray">Elanın Tipi: </span><span class="color-gray">Ev alqı satqısı</span>
			  	</div>
			  	<div class="clearFix3"></div>
			  	<div class="col-md-12">
			  		<span class="bold-gray">Əmlakın növü: </span><span class="color-gray">Köhnə tikili</span>
			  	</div>
			  	<div class="clearFix3"></div>
			  	<div class="col-md-12">
			  		<span class="bold-gray">Otaq sayı: </span><span class="color-gray"><?PHP echo $elan_query['otaq_say'];?></span>
			  	</div>
			  	<div class="clearFix3"></div>
			  	<div class="col-md-12">
			  		<span class="bold-gray">Mərtəbə: </span><span class="color-gray"><?PHP echo $elan_query['mertebe'];?>/<?PHP echo $elan_query['mertebe_say'];?></span>
			  	</div>
			  	<div class="clearFix3"></div>
			  	<div class="col-md-12">
			  		<span class="bold-gray">Əmlakın sənədi: </span><span class="color-gray">

			  		<?PHP 
			  			if($elan_query['emlak_sened']==1){
			  				echo "Kupça";
			  			}
			  			else{
			  				echo "Digər sənəd";
			  			}
			  		?></span>
			  	</div>
			  	<div class="clearFix3"></div>
			  	<div class="col-md-12">
			  		<div class="person-button">
			  		<span >Yerləşdiyi yer</span>
			  		</div>
			  	</div>
			  	<div class="clearFix3"></div>
			  	 	<div class="col-md-12">
			  		<span class="bold-gray">Şəhər:</span><span class="color-gray">Bakı ş.</span>
			  	</div>
			  	<div class="clearFix3"></div>
			  	 	<div class="col-md-12">
			  		<span class="bold-gray">Rayon/Qəsəbə:</span><span class="color-gray">Nərimanov r.	</span>
			  	</div>
			  	<div class="clearFix3"></div>
			  	 	<div class="col-md-12">
			  		<span class="bold-gray">Metro:</span><span class="color-gray">Gənclik m.</span>
			  	</div>
			  	<div class="clearFix3"></div>
			  	 	<div class="col-md-12">
			  		<span class="bold-gray">Ünvan:</span><span class="color-gray">Bakı.ş.Nərimanov.r.Gənclik metrosu.Gənclik şadlıq sarayının yaxınlığında.F.X.Xoyski kücəsi7</span>
			  	</div>
			  </div>
		  </div>
	  
	</div>
</div>
</div>
<!-- The section of home end here -->
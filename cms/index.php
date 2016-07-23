<?PHP include 'admin_conf.php';
	  include 'language.php';
	
	@$_l_ = $_SESSION['_login_'];
	@$_p_ = $_SESSION['_password_'];
	if($_l_ != '' and $_p_ != '' ){
		@$lng = $_GET['lng'];

	if($lng==''){ $lng='az';}
	
	
		
		
		
	// daxil olandan sonra start
	$s = MYSQLI_QUERY($connection,"SELECT * FROM admin WHERE l_adi = '$_l_' AND ppp = '$_p_'");
	$n = mysqli_fetch_assoc($s);
	?>
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml"> 
			<head>
				<title>WebCity</title>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<link rel="shortcut icon" href="images/loqo.png">
				<!--  CSS  -->
				<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
				<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
				<link rel="stylesheet" href="css/invalid.css" type="text/css" media="screen" /><!-- kolge,radius ve s -->
				<link rel="stylesheet" href="css/statistika.css" type="text/css" media="screen" />
				<!-- Javascripts -->
				<script src="js/jquery-1.10.2.min.js"></script>
				<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
  				<script type="text/javascript" src="js/simpla.jquery.configuration.js"></script>
  				<!--script type="text/javascript" src="js/jquery.wysiwyg.js"></script  !-->
				<script type="text/javascript" src="js/facebox.js"></script><!-- mesaj qutusu -->
					<!-- statistika -->
				<script src="js/statistika/RGraph.common.core.js" ></script>
				<script src="js/statistika/RGraph.line.js" ></script>	
			</head>
			<body>
			
				<div id="body-wrapper">
					<div id="sidebar">
						<div id="sidebar-wrapper"> <!-- Sidebar logo ve menu -->
							<!-- Loqo -->
							<a href="#"><img id="logo" src="images/loqo2.png" alt="WebCity loqo" /></a>
							<!-- Linkler -->
							<div id="profile-links">
								<font color="silver"><a href="http://www.webcity.az" title="Webcity.az" target="_blank">Webcity.az</a> | <a href="<?PHP echo $sayt_url_index;?>" title="Sayta bax"  target="_blank"><?php echo $dil['menu1'][$lng]; ?></a> | <a href="?exit=cix" title="Paneldən çıx"><?php echo $dil['menu2'][$lng]; ?></a>
							</div>
		<!--------------------------------------------- Accordion Menu --------------------------------------->
						<?PHP include('menu.php'); ?>
		<!----------------------------------------------------------------------------------------------------->
						</div><!-- sidebar-wrapper -->
					</div> <!-- sidebar -->
				
					<div id="main-content"> <!-- Orta -->
		<!------------------------------------------- Sehife Basliqi ----------------------------------------->
						<div class="content-box-header" style="border:solid 1px #d0cfcf;">
							<h3 style="width:97%;"><?php echo $dil['welcome_title'][$lng]; ?> <?PHP echo $n['ist_adi'];?>!</h3>
						</div> <!-- content-box-header -->
						
						<?PHP
						if(empty($menu))
						{
						?>
						<!-- bildiris -->				
						<div class="notification xeta png_bg" style="margin-top:15px;"><!-- Xeta arxafonu ile birlikde -->
							<a href="#" class="close"><img src="images/cross_grey_small.png" title="Məlumatı yox et" alt="close" /></a>
							<div>
								<a href="#messages" class="mesaj" rel="modal"><?php echo $dil['welcome_message'][$lng]; ?></a>
							</div>
						</div>
						<!-------------->

		<!------------------------------------------Mesaj qutusu------------------------------------------------------>				
						<?PHP include('mesaj.php'); ?>
		<!------------------------------------------- Statistika----- ----------------------------------------->
						<?PHP include('statistika.php');
						}
						?>
		<!------------------------------------------- Idare paneli ---------------------------------------->
						<?PHP
						$sql45=mysqli_QUERY($connection,'select a_menu.url_tag from `admin_menu` am, a_menu  where am.a_id="'.$_SESSION['_id_'].'" and am.m_id=a_menu.id order by am.`id`');
						$menus=array();
						
						while($b45=MYSQLI_FETCH_ASSOC($sql45))
						{ 
							$menus[]=$b45['url_tag'];
						}
						if(@$_GET['menu'])
						{
							$x=$_GET['menu'];
							foreach($menus as $m => $val)
							{
								if($x==$val)
								{
									$menu=$_GET['menu'];
									break;
								}
								else
								{
									$menu='not_allowed';
								}
							}
							if(mysqli_num_rows($sql45)==0){ $menu='not_allowed'; }
							include('page/'.$menu.'.php');
						}
						else
						{
							$menu='not_allowed';
						}
						?>
								
						
								
		<!------------------------------------------------------------------------------------------------->

						</div> <!--content-box -->
						<div class="clear"></div>
						<div id="footer">
							<small>
									&#169; Copyright 2013 <a href="http://www.webcity.az">WebCity</a>
							</small>
						</div><!-- footer -->
					</div><!-- main-content -->
				</div><!-- main -->
			</body>
		</html>
	<?php
	// daxil olandan sonra end
	}
	else{ include 'intro.php'; }

	@$exit = $_GET['exit'];
	if($exit=='cix'){
		unset($_SESSION['_login_']);
		unset($_SESSION['_password_']);
		print "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0; URL=./\">";
	}
	?>
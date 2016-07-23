<?PHP
	if(@$send){
	include 'upload_photos.php';
	
		@$hidsay = $_POST['hidsaysay'];
		@$active=$_POST['situation'];
		if ($active=='active') {
			$active=0;
		}
		elseif ($active=='passive') {
			$active=1;
		}
		$ddd=mysqli_query($connection,'select max(u_id) as uid from linkler');
		$bbb=MYSQLI_FETCH_ARRAY($ddd);
		$u_id=$bbb['uid'];
		$u_id++;
		
		$zzz=mysqli_query($connection,'select max(ordering) as uid from linkler');
		$ccc=MYSQLI_FETCH_ARRAY($zzz);
		$ordering=$ccc['uid'];
		$ordering+=10;
		
		$tip=0;
		
		for($i=1; $i<= $hidsay; $i++ ){
			
			
			
			$name= $_POST['name'.$i];
			$link= $_POST['link'.$i];
				
			@$insert = MYSQLI_QUERY($connection,"INSERT INTO `linkler` (
				`name`,
				`link`, 
				`l_id`, 
				`s_id`,
				`ordering`, 
				`u_id`, 
				`photo`)				
			VALUES (
				'$name',
				'$link',
				'$i',
				'$active',
				'$ordering',  
				'$u_id',
				'$avatar')");
				
				
				
			}
			if($insert){
					echo "<br><br><center><b><font size='4' color='red'> " .$dil['Əlavə olundu'][$lng]."! </font></b></center></br><br>
					<script>
					function redi(){
					document.location='?menu=linkler'
					}
					setTimeout(\"redi()\", 3000);
					</script>";
			}
			
		}
	
	else {
		?>
		<form action="" method="POST" enctype="multipart/form-data">
			<table cellpadding="0" cellspacing="0" border="0" align="center">
				<tr>
					<td style="background-color: #FFFFFF;"><center><b><?php echo $dil['Yeni_link'][$lng]; ?></b></center></td>
				</tr>
				<tr>
					<td>
					
					

					<div>
						<form action="">
							<ul style="float:right;position:relative;top:-38px;right:309px;">
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="active"><?php echo $dil['Aktiv'][$lng]; ?></li>
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="passive"><?php echo $dil['Passiv'][$lng]; ?></li>
							</ul>
						</form>
					</div>
					</td>
				</tr>
				
				
	<table cellpadding="0" cellspacing="0" border="0">
		
		<tr>
			<td><b><?php echo $dil['Şəkli seç'][$lng]; ?> (800 X 556):</b><br><input type="file" name="dosya" /></td>
		</tr>
	</table>

				
				<tr>
					
					 
						<link rel="stylesheet" href="js/jquery-ui.css">
						<script src="js/jquery-ui.js"></script>
						<script type="text/javascript" src="<?PHP echo $sayt_url;?>js/tiny_mce/tinymce.min.js"></script>
						<style type="text/css">
							#tab_li{
								float:left;
								margin: 5px;
								border:1px solid #ccc;
								border-radius: 23px;
							}
						</style>
						
				    <td>
						<div id="tabs">
								<ul id="tabs_ul">
								<?PHP
									$say=1;
									$sl = MYSQLI_QUERY($connection,"SELECT * FROM langs WHERE status='0' ORDER BY id ASC");
									$hidsaysay=mysqli_num_rows($sl);
									while($nl = MYSQLI_FETCH_ARRAY($sl)){
									
								?>
									<li id="tab_li"><a href="#tabs-<?PHP echo $say; ?>"><b><?PHP echo $nl['lang']; ?></b></a></li>
								<?PHP
									$say+=1;
									}
									
								?>	
								
								</ul>

								<?PHP
									$say=1;
									$sl = MYSQLI_QUERY($connection,"SELECT * FROM langs WHERE status='0'");
									while($nl = MYSQLI_FETCH_ARRAY($sl)){
									
								?>
								<div id="tabs-<?PHP echo $say; ?>">
								<table>
								
									<tr>
										<td><?php echo $dil['Ad'][$lng]; ?>: </td>
										<td><input name="name<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;"></td>
										
									</tr>
									<tr>
										<td><?php echo $dil['link'][$lng]; ?>: </td>
										<td><input name="link<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;"></td>
										
									</tr>
								</table>
								</div>
								<?PHP
									$say+=1;
									}
								?>	
						</div>
						<input type="hidden" name="hidsaysay" value="<?PHP echo $hidsaysay; ?>" />
					</td>
				</tr>
				<tr>
					<td height="20" style="background-color: #FFFFFF;"></td>
				</tr>
				<tr>
					<td><input type="submit" name="send" value="<?php echo $dil['Əlavə et'][$lng]; ?>"></td>
				</tr>
			</table>
		</form>
	
<?PHP 
}
?>
				 <script>
				  $(function() {
				    $( "#tabs" ).tabs();
				  });
				 </script>
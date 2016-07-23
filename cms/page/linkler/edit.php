<?PHP
	$idx = $_GET['id'];
	if(@$send){
	 include 'upload_photos.php';
	 
		$hidsay = $_POST['hidsaysay'];
		$active=$_POST['situation'];
		if ($active=='active') {
			$active=0;
		}
		elseif ($active=='passive') {
			$active=1;
		}
		
$tip=0;

$tip=0;
if(!empty($avatar)){
$delphoto = MYSQLI_QUERY($connection,"SELECT photo FROM linkler WHERE u_id='".$idx."' AND l_id='1'");
$delphoto22 = MYSQLI_FETCH_ASSOC($delphoto);
unlink('../products/'.$delphoto22['photo']);

}
else{}
		
		for($i=1; $i<= $hidsay; $i++ ){
		
			
			
			
			$name= $_POST['name'.$i];
			$link= $_POST['link'.$i];
			if(empty($avatar)){ 
			$update = MYSQLI_QUERY($connection,"UPDATE linkler SET  `name` = '$name', `link` = '$link',  `s_id` = '$active'  WHERE u_id='".$idx."' AND l_id='".$i."'");
			}
			else{
			
			$update = MYSQLI_QUERY($connection,"UPDATE linkler SET  `name` = '$name', `link` = '$link',   `s_id` = '$active', `photo` = '$avatar'  WHERE u_id='".$idx."' AND l_id='".$i."'");
			}
		
		}
		if($update){
			echo "<br><br><center><b><font size='4' color='red'> ".$dil['Redakte olundu'][$lng]."! </font></b></center></br><br>
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
					<td style="background-color: #FFFFFF;"><center><b><?php echo $dil['Redakte et'][$lng]; ?></b></center></td>
				</tr>
				<tr>
					<td>
					<?PHP
					$s_redakte1=mysqli_query($connection,'SELECT * FROM linkler WHERE u_id='.$idx.' AND l_id=1');
					$n_redakte1=MYSQLI_FETCH_ARRAY($s_redakte1);
					@$sub_halhazira=$n_redakte1['sub_id'];
					$sub_halhazira1='100';
					$tip_hh=$n_redakte1['tip'];
					?>
					
					
						
					<div>
						<form action="">
							<ul style="float:right;position:relative;top:-37px;right:309px;">
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="active" <?PHP if (@$b['status']==0) {	echo 'checked'; } ?>><?php echo $dil['Aktiv'][$lng]; ?></li>
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="passive" <?PHP if (@$b['status']==1) { echo 'checked'; } ?>><?php echo $dil['Passiv'][$lng]; ?></li>
							</ul>
							<?php $dm=MYSQLI_QUERY($connection,"SELECT * FROM linkler WHERE u_id='".$idx."'");
									$dmm=MYSQLI_FETCH_ASSOC($dm);
									
									
								?>
						</form>
					</div>
					</td>
				</tr>
				
				<table cellpadding="0" cellspacing="0" border="0">\
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
									
									$say=1;
									$sl = MYSQLI_QUERY($connection,"SELECT * FROM langs WHERE status='0'");

									while($nl = MYSQLI_FETCH_ARRAY($sl)){
									$dm=MYSQLI_QUERY($connection,"SELECT * FROM linkler WHERE u_id='".$idx."' AND l_id='".$nl['id']."'");
									$dmm=MYSQLI_FETCH_ASSOC($dm);
									
								?>	
								
								</ul>
								<div id="tabs-<?PHP echo $say; ?>">
								<table>
									<tr>
										<td><?php echo $dil['Ad'][$lng]; ?>: </td>
										<td><input name="name<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;" value="<?PHP echo $dmm['name']; ?>"></td>
									</tr>
									<tr>
										<td><?php echo $dil['link'][$lng]; ?>: </td>
										<td><input name="link<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;" value="<?PHP echo $dmm['link']; ?>"></td>
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
					<td><input type="submit" name="send" value="<?php echo $dil['Dəyişdir'][$lng]; ?>"></td>
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
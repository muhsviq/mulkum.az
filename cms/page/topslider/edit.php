<?PHP
	$u_id = $_GET['u_id'];
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
$delphoto = MYSQLI_QUERY($connection,"SELECT photo FROM slider WHERE u_id='".$u_id."'");
$delphoto22 = MYSQLI_FETCH_ASSOC($delphoto);
unlink('../products/'.$delphoto22['photo']);

}
else{}
			$text= $_POST['text'];
			$text1= $_POST['text1'];
			$text2= $_POST['text2'];
			$link= $_POST['link'];
			if(empty($avatar)){
			$update = MYSQLI_QUERY($connection,"UPDATE slider SET  `text` = '$text',  `text1` = '$text1',  `text2` = '$text2', `link` = '$link',  `s_id` = '$active'  WHERE u_id='".$u_id."'");
			}
			else{
			
			$update = MYSQLI_QUERY($connection,"UPDATE slider SET  `text` = '$text',  `text1` = '$text1',  `text2` = '$text2', `link` = '$link',  `s_id` = '$active', `photo` = '$avatar' WHERE u_id='".$u_id."' ");
			}
		
		
		if($update){
			echo "<br><br><center><b><font size='4' color='red'> ".$dil['Redakte olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=topslider&tip=1&pos=1&p_id=1'
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
					<td style="background-color: #FFFFFF;"><center><b><?php echo $dil['Məhsulu redaktə et'][$lng]; ?></b></center></td>
				</tr>
				<tr>
					<td>
					<?PHP
					$s_redakte1=mysqli_query($connection,'SELECT * FROM slider WHERE u_id='.$u_id.' AND l_id=1');
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
							
						</form>
					</div>
					</td>
				</tr>
				
				<table cellpadding="0" cellspacing="0" border="0">\
					<tr>
						<td><b><?php echo $dil['Şəkli seç'][$lng]; ?> (1000 X 380):</b><br><input type="file" name="dosya" /></td>
					</tr>
					

				</table>
				
				<tr>
					
					 <link rel="stylesheet" href="js/jquery-ui.css">
						<script src="js/jquery-ui.js"></script>
					
						<style type="text/css">
							#tab_li{
								float:left;
								margin: 5px;
								border:1px solid #ccc;
								border-radius: 23px;
							}
						</style>
					 
						<?PHP include 'tiny_mce.php'; ?>
						<td>
						<div id="tabs">
								<?PHP
									
									$dm=MYSQLI_QUERY($connection,"SELECT * FROM slider WHERE u_id='".$u_id."'  ");
									$dmm=MYSQLI_FETCH_ASSOC($dm);
									
								?>	
								<div id="tabs-<?PHP echo $say; ?>">
								<table>
									<tr>
										<td>Text1: </td>
										<td><input name="text1<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;" value="<?PHP echo $dmm['text1']; ?>"></td>
										
									</tr>
									<tr>
										<td>Text2: </td>
										<td><input name="text2<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;" value="<?PHP echo $dmm['text2']; ?>"></td>
										
									</tr>
									
									<tr>
										<td>link: </td>
										<td><input name="link<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;" value="<?PHP echo $dmm['link']; ?>"></td>
										
									</tr>
									<tr>
										<td><?php echo $dil['Text'][$lng]; ?>: </td>
										<td><textarea name="text" style="width:500px;height:200px;border-radius:5px;"><?PHP echo $dmm['text']; ?></textarea></td>
									</tr>
								</table>
								</div>
								<?PHP
									@$say+=1;
									
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
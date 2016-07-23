<?PHP
	$p_id = $_GET['p_id'];
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
$delphoto = MYSQLI_QUERY($connection,"SELECT photo FROM xeberler_photo WHERE u_id='".$u_id."'");
$delphoto22 = MYSQLI_FETCH_ASSOC($delphoto);
unlink('../products/'.$delphoto22['photo']);

}
else{}
			$text= $_POST['text'];
			if(empty($avatar)){
			$update = MYSQLI_QUERY($connection,"UPDATE xeberler_photo SET  `text` = '$text',  `s_id` = '$active'  WHERE u_id='".$u_id."'");
			}
			else{
			
			$update = MYSQLI_QUERY($connection,"UPDATE xeberler_photo SET  `text` = '$text', `s_id` = '$active', `photo` = '$avatar' WHERE u_id='".$u_id."' ");
			}
		
		
		if($update){
			echo "<br><br><center><b><font size='4' color='red'> Redakte olundu! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=xeberler_photo&p_id=$p_id'
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
					<td style="background-color: #FFFFFF;"><center><b>Məhsulu redaktə et</b></center></td>
				</tr>
				<tr>
					<td>
					<?PHP
					$s_redakte1=mysqli_query($connection,'SELECT * FROM xeberler_photo WHERE u_id='.$u_id.' AND l_id=1');
					$n_redakte1=MYSQLI_FETCH_ARRAY($s_redakte1);
					@$sub_halhazira=$n_redakte1['sub_id'];
					$sub_halhazira1='100';
					$tip_hh=$n_redakte1['tip'];
					?>
					
					
						
					<div>
						<form action="">
							<ul style="float:right;position:relative;top:-37px;right:309px;">
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="active" <?PHP if (@$b['status']==0) {	echo 'checked'; } ?>>Active</li>
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="passive" <?PHP if (@$b['status']==1) { echo 'checked'; } ?>>Passive</li>
							</ul>
							
						</form>
					</div>
					</td>
				</tr>
				
				<table cellpadding="0" cellspacing="0" border="0">\
					<tr>
						<td><b>Şəkli seç (1060 X 520):</b><br><input type="file" name="dosya" /></td>
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
									
									$dm=MYSQLI_QUERY($connection,"SELECT * FROM xeberler_photo WHERE u_id='".$u_id."'  ");
									$dmm=MYSQLI_FETCH_ASSOC($dm);
									
								?>	
								<div id="tabs-<?PHP echo $say; ?>">
								<table>
									<tr>
										<td>Text: </td>
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
					<td><input type="submit" name="send" value="Dəyişdir"></td>
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
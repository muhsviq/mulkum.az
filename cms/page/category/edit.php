<?PHP
$idx=$_GET['id'];
	if(@$send){
		include 'upload_photos.php';
		$kateqoriya	= $_POST['kateqoriya'];	
		$hidsay = $_POST['hidsaysay'];
		$active=$_POST['situation'];
		if ($active=='active') {
			$active=0;
		}
		elseif ($active=='passive') {
			$active=1;
		}
		
$tip=0;
if(!empty($avatar)){
$delphoto = MYSQLI_QUERY($connection,"SELECT photo FROM product_cat WHERE u_id='".$idx."' AND l_id='1'");
$delphoto22 = MYSQLI_FETCH_ASSOC($delphoto);
unlink('../'.$delphoto22['photo']);

}
else{}

		
		for($i=1; $i<= $hidsay; $i++ ){
			
			
			
			$name= $_POST['name'.$i];
			$url_tag= $_POST['url_tag'];
			$url_tag2= $_POST['url_tag2'.$i];
			$title= $_POST['title'.$i];
			$keyword= $_POST['keyword'.$i];
			$description= $_POST['description'.$i];
			$text= $_POST['text'.$i];
			if(empty($avatar)){
			$update = MYSQLI_QUERY($connection,"UPDATE product_cat SET `sub_id`='$kateqoriya', `name` = '$name', `text` = '$text', `status` = '$active', `url_tag` = '$url_tag', `url_tag2` = '$url_tag2', `title` = '$title', `keyword` = '$keyword', `description` = '$description' WHERE u_id='".$idx."' AND l_id='".$i."'");
			}
			else{
			$update = MYSQLI_QUERY($connection,"UPDATE product_cat SET `sub_id`='$kateqoriya', `name` = '$name', `text` = '$text', `status` = '$active', `url_tag` = '$url_tag', `url_tag2` = '$url_tag2', `title` = '$title', `keyword` = '$keyword', `description` = '$description', `photo` = '$avatar' WHERE u_id='".$idx."' AND l_id='".$i."'");
			}
		}
		if($update){
			echo "<br><br><center><b><font size='4' color='red'> ".$dil['Redakte olundu'][$lng]."! </font></b></center></br><br>
			<script>
			function redi(){
			document.location='?menu=category'
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
					<td style="background-color: #FFFFFF;"><center><b><?php echo $dil['redaktə et'][$lng]; ?></b></center></td>
				</tr>
				<tr>
					<td>
					<?PHP
					$s_redakte1=mysqli_query($connection,'SELECT * FROM product_cat WHERE u_id='.$idx.' AND l_id=1');
					$n_redakte1=MYSQLI_FETCH_ARRAY($s_redakte1);
					$sub_halhazira=$n_redakte1['sub_id'];
					$sub_halhazira1='100';
					$tip_hh=$n_redakte1['tip'];
					
					?>
					
					
						<?php echo $dil['Kateqoriya'][$lng]; ?>:<br>
						<?PHP
							
						?>
						<select name="kateqoriya">
						<option value="0"  <?PHP if($sub_halhazira=='0'){ ?>selected="selected"<?PHP } ?>><?php echo $dil['Əsas kateqoriya'][$lng]; ?></option>
						<?PHP
							$s_sub = mysqli_query($connection,'SELECT * FROM product_cat WHERE l_id=1 ORDER BY ordering ASC ');
							while($b=MYSQLI_FETCH_ASSOC($s_sub))
							{
								if ($sub_halhazira==$b['u_id']) {
									$s='selected="selected"';
								}
								else{
									$s='';
								}
								if ($b['u_id']==$idx) continue;
								echo'<option value="'.$b['u_id'].'" '.$s.' >'.$b['name'].'</option>';
							}
						?>
						</select>	
					<div>
							<ul style="float:right;position:relative;top:-37px;right:309px;">
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="active" <?PHP if ($n_redakte1['status']==0) {	echo 'checked'; } ?>><?php echo $dil['Aktiv'][$lng]; ?></li>
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="passive" <?PHP if ($n_redakte1['status']==1) { echo 'checked'; } ?>><?php echo $dil['Passiv'][$lng]; ?></li>
							</ul>
					</div>
					</td>
				</tr>
				<tr>
					<td>Cat.: </td>
					
					<td>
						<select style="width:500px;border-radius:5px;" name="url_tag">
							<?PHP 
								if($dmm['url_tag']=='ditem')
								{
							?>
							<option value="ditem" selected>DENTAL</option>
							<option value="bitem">BEAUTY</option>
							<option value=""></option>
							<?PHP 
								}
							elseif($dmm['url_tag']=='bitem')
							{
							?>
							<option value="ditem" selected>BEAUTY</option>
							<option value="bitem">DENTAL</option>
							<option value=""></option>
						<?PHP 
						} 
						else{
						?>
						<option value="" selected></option>
						<option value="ditem">DENTAL</option>
						<option value="bitem">BEAUTY</option>
						<?PHP 
						}
						?>
						</select>
					</td>
				</tr>
				
				<table cellpadding="0" cellspacing="0" border="0">\
					<tr>
						<td><b><?php echo $dil['Şəkli seç'][$lng]; ?> (170 X 140):</b><br><input type="file" name="dosya" /></td>
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
									$dm=mysqli_query($connection,'SELECT * FROM product_cat WHERE u_id='.$idx.' AND l_id='.$nl['id'].' limit 1');
									$dmm=MYSQLI_FETCH_ASSOC($dm);
								?>
								<div id="tabs-<?PHP echo $say; ?>">
								<table>
									<tr>
										<td><?php echo $dil['Ad'][$lng]; ?>: </td>
										<td><input name="name<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;" value="<?PHP echo $dmm['name']; ?>"></td>
									</tr>
									
									<tr>
										<td><?php echo $dil['url_tag'][$lng]; ?>: </td>
										<td><input name="url_tag2<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;" value="<?PHP echo $dmm['url_tag2']; ?>"></td>
									</tr>
									<tr>
										<td><?php echo $dil['Title'][$lng]; ?>: </td>
										<td><input name="title<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;" value="<?PHP echo $dmm['title']; ?>"></td>
									</tr>
									<tr>
										<td><?php echo $dil['keyword'][$lng]; ?>: </td>
										<td><input name="keyword<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;" value="<?PHP echo $dmm['keyword']; ?>"></td>
									</tr>
									<tr>
										<td><?php echo $dil['description'][$lng]; ?>: </td>
										<td><input name="description<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;" value="<?PHP echo $dmm['description']; ?>"></td>
									</tr>
									<tr>
										<td><?php echo $dil['Text'][$lng]; ?>: </td>
										<td><textarea name="text<?PHP echo $nl['id']; ?>" style="width:500px;height:200px;border-radius:5px;"><?PHP echo $dmm['text']; ?></textarea></td>
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
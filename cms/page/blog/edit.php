<?PHP
	$idx = $_GET['id'];
	if(@$send){
		 $category_id	= $_POST['category_id'];
	if(empty($category_id)){ ?><center><div style="font-face: Arial; font-size: 18px; color: red;">Zəhmət olmasa kateqoriyanı seçin</div></center><?PHP }
				else{
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
$product22=MYSQLI_QUERY($connection,"SELECT * from `blok` where l_id='1' and u_id='".$idx."'");
		$product=MYSQLI_FETCH_ARRAY($product22);
		if(file_exists('../'.$product['photo'].'')){
		unlink('../'.$product['photo'].'');
		}
		else{}

}
else{}
		$category_id	= $_POST['category_id'];
		for($i=1; $i<= $hidsay; $i++ ){
		
			
			
			$name= $_POST['name'.$i];
			$url_tag= $_POST['url_tag'.$i];
			$title= $_POST['title'.$i];
			$keyword= $_POST['keyword'.$i];
			$description= $_POST['description'.$i];
			$text2= $_POST['text2'.$i];
			$text= $_POST['text'.$i];
			if(empty($avatar)){
			$update = MYSQLI_QUERY($connection,"UPDATE blok SET  `name` = '$name',`cat_id`='$category_id', `text` = '$text', `text2` = '$text2', `status` = '$active', `url_tag` = '$url_tag', `title` = '$title', `keyword` = '$keyword', `description` = '$description' WHERE u_id='".$idx."' AND l_id='".$i."'");
			}
			else{
			
			$update = MYSQLI_QUERY($connection,"UPDATE blok SET  `name` = '$name',`cat_id`='$category_id', `text` = '$text', `text2` = '$text2', `status` = '$active', `url_tag` = '$url_tag', `title` = '$title', `keyword` = '$keyword', `description` = '$description',`photo` = '$avatar' WHERE u_id='".$idx."' AND l_id='".$i."'");
			}
		
		}
		if($update){
			echo "<br><br><center><b><font size='4' color='red'> ".$dil['Redakte olundu'][$lng]."! </font></b></center></br><br>
			<script>
			function redi(){
			document.location='?menu=blog&catid=".$category_id."'
			}
			setTimeout(\"redi()\", 3000);
			</script>"; 
		}
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
					$s_redakte1=mysqli_query($connection,'SELECT * FROM blok WHERE u_id='.$idx.' AND l_id=1');
					$n_redakte1=MYSQLI_FETCH_ARRAY($s_redakte1);
					@$sub_halhazira=$n_redakte1['sub_id'];
					$sub_halhazira1='100';
					$tip_hh=$n_redakte1['tip'];
					
					$catid=$n_redakte1['cat_id'];
					?>
					Menu:<br>
						<?PHP
							
						?>
						<select name="category_id">
							<option value="">Seçin</option>
							<?PHP
								function sub_link($sub, $margin, $catid,$conn)
								{
									$s_sub = MYSQLI_QUERY($conn,"SELECT * FROM blog_cat WHERE sub_id = '".$sub."' AND l_id='1' AND tip='0' ORDER BY ordering ASC");
									if(mysqli_num_rows($s_sub) != 0)
									{
										while($b = MYSQLI_FETCH_ASSOC($s_sub))
										{
											if($b['status'] == 0){
										?>
											<option value="<?PHP echo $b['u_id'];?>" style="padding-left:<?PHP echo $margin?>px;" <?PHP if($catid==$b['u_id']){ ?>selected="selected"<?PHP } ?>> <?PHP echo $b['name'];?></option>
										<?PHP
											}
										sub_link($b['u_id'], $margin+10, $catid,$conn);
										}
									}
								}
								sub_link(0, 0, $catid,$connection);

							?>
						</select>
						
					<div>
						<form action="">
							<ul style="float:right;position:relative;top:-37px;right:309px;">
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="active" <?PHP if (@$n_redakte1['status']==0) {	echo 'checked'; } ?>><?php echo $dil['Aktiv'][$lng]; ?></li>
								
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="passive" <?PHP if (@$n_redakte1['status']==1) { echo 'checked'; } ?>><?php echo $dil['Passiv'][$lng]; ?></li>
							</ul>
							<?php $dm=MYSQLI_QUERY($connection,"SELECT * FROM blok WHERE u_id='".$idx."'");
									$dmm=MYSQLI_FETCH_ASSOC($dm);
									
									
								?>	
								
						</form>
					</div>
					</td>
				</tr>
				
				<table cellpadding="0" cellspacing="0" border="0">\
					<tr>
						<td><b><?php echo $dil['Şəkli seç'][$lng]; ?> (700 X 350):</b><br><input type="file" name="dosya" /></td>
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
									
									$say=1;
									$sl = MYSQLI_QUERY($connection,"SELECT * FROM langs WHERE status='0'");

									while($nl = MYSQLI_FETCH_ARRAY($sl)){
									$dm=MYSQLI_QUERY($connection,"SELECT * FROM blok WHERE u_id='".$idx."' AND l_id='".$nl['id']."'");
									$dmm=MYSQLI_FETCH_ASSOC($dm);
									
								?>	
								
								</ul>
								<div id="tabs-<?PHP echo $say; ?>">
								<table>
									<tr>
										<td><?php echo $dil['Ad'][$lng]; ?>: </td>
										<td><input name="name<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;" value="<?PHP echo $dmm['name']; ?>"></td>
									</tr>
									<td><?php echo $dil['url_tag'][$lng]; ?>: </td>
										<td><input name="url_tag<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;" value="<?PHP echo $dmm['url_tag']; ?>"></td>
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
										<td><?php echo $dil['Qısa mətin'][$lng]; ?>: </td>
										<td><textarea name="text2<?PHP echo $nl['id']; ?>" style="width:500px;height:200px;border-radius:5px;"><?PHP echo $dmm['text2']; ?></textarea></td>
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
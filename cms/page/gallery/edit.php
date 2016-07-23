<?PHP
	$u_id = $_GET['u_id'];
	

	@$video_code = $_POST['video_code'];
	if(@$send){
		@$foto = $_POST['foto'];
	@$video = $_POST['video_code'];
		if(empty($video)){$tip=1;} else {$tip=2; }
			$category_id	= $_POST['category_id'];
	if(empty($category_id)){ ?><center><div style="font-face: Arial; font-size: 18px; color: red;"><?php echo $dil['kateqoriyanı seçin'][$lng]; ?></div></center><?PHP }
				else{
		if($video_code=="")
		{
	 include 'upload_photos.php';
		@$gallery=$avatar;
		}
		else{$gallery=$video_code;}
		$hidsay = $_POST['hidsaysay'];
		@$active=$_POST['situation'];
		if ($active=='active') {
			$active=0;
		}
		elseif ($active=='passive') {
			$active=1;
		}
$delphoto = MYSQLI_QUERY($connection,"SELECT * FROM gallery WHERE u_id='".$u_id."'");
$delphoto22 = MYSQLI_FETCH_ASSOC($delphoto);
if(!empty($avatar) and $delphoto22['tip']==1){
unlink('../products/'.$delphoto22['photo']);

}
else{}
			
			$name= $_POST['name'];
			@$checkbox = $_POST['checkbox'];
			@$link = $_POST['link'];
			if(@empty($gallery)){
				
			$update = MYSQLI_QUERY($connection,"UPDATE gallery SET `cat_id`='$category_id', `name` = '$name',`link` = '$link', `checkbox` = '$checkbox',  `s_id` = '$active',  `tip` = '$tip'  WHERE u_id='".$u_id."'");
			}
			else{
				if(empty($avatar) and $delphoto22['tip']==1 and $tip==2){
					unlink('../products/'.$delphoto22['photo']);
				}
				
			$update = MYSQLI_QUERY($connection,"UPDATE gallery SET `cat_id`='$category_id', `name` = '$name', `link` = '$link', `checkbox` = '$checkbox',  `s_id` = '$active',  `tip` = '$tip', `photo` = '$gallery' WHERE u_id='".$u_id."' ");
			
			}
		
		
		if($update){
			echo "<br><br><center><b><font size='4' color='red'> ".$dil['Redakte olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=gallery&catid=".$catid."'
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
					<td style="background-color: #FFFFFF;"><center><b><?php echo $dil['Gallery redaktə et'][$lng]; ?></b></center></td>
				</tr>
				<tr>
					<td>
					<?PHP
					$s_redakte1=mysqli_query($connection,'SELECT * FROM gallery WHERE u_id='.$u_id.'');
					$n_redakte1=MYSQLI_FETCH_ARRAY($s_redakte1);
					@$sub_halhazira=$n_redakte1['sub_id'];
					$sub_halhazira1='100';
					$tip_hh=$n_redakte1['tip'];
					$s_sub = mysqli_query($connection,'SELECT * FROM gallery WHERE u_id='.$u_id.' ORDER BY ordering ASC ');
					$b=MYSQLI_FETCH_ASSOC($s_sub);
					?>
					
					
					<?php echo $dil['Menyu'][$lng]; ?>:<br>
						<?PHP
							
						?>
						<select name="category_id">
							<option value=""><?php echo $dil['Seçin'][$lng]; ?></option>
							<?PHP
								function sub_link($sub, $margin, $catid,$conn)
								{
									$s_sub = MYSQLI_QUERY($conn,"SELECT * FROM gal_cat WHERE sub_id = '".$sub."' AND l_id='1' AND tip='0' ORDER BY ordering ASC");
									if(mysqli_num_rows($s_sub) != 0)
									{
										while($b = MYSQLI_FETCH_ASSOC($s_sub))
										{
											if($b['s_id'] == 0){
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
					
						<?php $dm=MYSQLI_QUERY($connection,"SELECT * FROM gallery WHERE u_id='".$u_id."'");
									$dmm=MYSQLI_FETCH_ASSOC($dm);
									
									if($dmm['checkbox']=='1'){
								?>	
								<span style="float:right;">
								<input type="checkbox" name="checkbox" checked value="1">Premier<br>
								</span>
								

								<?PHP
									}
									else{
								?>
								<span style="float:right;">
								<input type="checkbox" name="checkbox" value="1">Premier<br>
								</span>
								<?PHP
									}
								?>
					
					
						
					<div>
						<form action="">
						
					
						
						
						
						
						<link rel="stylesheet" href="js/jquery-ui.css">
						<script src="js/jquery-ui.js"></script>
						
						<div id="tabs">
				
				<ul style="float:right;margin-right:-575px;margin-top:5px;border:1px solid #ccc;position:relative;top:1px;border-radius:10px;left:-720px;background:none;">
						<li style="float:left;margin:5px;">
							<a href="#tabs-1" name="foto" ><div><?php echo $dil['Foto'][$lng]; ?></div></a>
						</li>
						<li style="float:left;margin:5px; ">
							<a href="#tabs-2"  name="video"><div><?php echo $dil['Video'][$lng]; ?></div></a>
						</li>
						
						
				</ul>
				<div style="clear:both;"></div>
					
					<div id="tabs-1"><b><?php echo $dil['Şəkli seç'][$lng]; ?> :</b><br><input type="file" name="dosya" style="width:400px;"/></div>
						<?php if($dmm['tip']==2) 
									{
									?>
					<div id="tabs-2"><?php echo $dil['Video'][$lng]; ?>: http://www.youtube.com/watch?v=<input name="video_code" style="width:300px;border-radius:5px; margin:10px 0;" value="<?PHP echo $dmm['photo']; ?>"></div>
					<?php 
									}
									else{
									?>
									<div id="tabs-2"><?php echo $dil['Video'][$lng]; ?>: http://www.youtube.com/watch?v=<input name="video_code" style="width:300px;border-radius:5px; margin:10px 0;" value=""></div>
									
									<?php }?>
					
					
				</div>
						
						
						
						
							
							
						</form>
					</div>
					</td>
				</tr>
				
			
				
				<tr>
					
					 
						
						<td>
						<div id="tabs">
								<?PHP
									
									$dm=MYSQLI_QUERY($connection,"SELECT * FROM gallery WHERE u_id='".$u_id."'  ");
									$dmm=MYSQLI_FETCH_ASSOC($dm);
									
								?>	
								<div id="tabs-<?PHP echo $say; ?>">
								<table>
								
									<tr>
										<td><?php echo $dil['Ad'][$lng]; ?>: </td>
										<td><input name="name" style="width:300px;border-radius:5px; margin:10px 0;"  value="<?PHP echo $dmm['name']; ?>"></td>
										
									</tr>
									<tr>
										<td><?php echo $dil['link'][$lng]; ?>: </td>
										<td><input name="link" style="width:300px;border-radius:5px; margin:10px 0;"  value="<?PHP echo $dmm['link']; ?>"></td>
										
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
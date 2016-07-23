<?PHP
	if(@$send){
	@$foto = $_POST['foto'];
	@$video = $_POST['video_code'];
		if(empty($video)){$tip=1;} else {$tip=2; }
		@$name = $_POST['name'];
		@$checkbox = $_POST['checkbox'];
		@$link = $_POST['link'];
		@$video_code = $_POST['video_code'];
		$category_id	= $_POST['category_id'];
	if(empty($category_id)){ ?><center><div style="font-face: Arial; font-size: 18px; color: red;"><?php echo $dil['kateqoriyanı seçin'][$lng]; ?></div></center><?PHP }
				else{
		if($video_code=="")
		{
		$_FILES['img']['tmp_name'];
			$rnd=rand(10000,99999);
			$faylinadi = $_FILES['img']['name'];
			$faylinozu = $_FILES['img']['tmp_name'];
			move_uploaded_file($faylinozu, '../products/'. $rnd.$faylinadi);
			
			$foto_insert = $rnd.$faylinadi;
			$gallery=$foto_insert;
		}
		else{$gallery=$video_code;}
			function getMax($connection) {
				$q="select max(u_id) from gallery";
				$res = mysqli_query($connection,$q);
				$b=mysqli_fetch_array($res);
				return $b[0];
			}
			$getmax = getMax($connection)+1;

			function getMax_Order($connection) {
				$q="select max(ordering) from gallery";
				$res = mysqli_query($connection,$q);
				$b=mysqli_fetch_array($res);
				return $b[0];
			}
			$getmax_order = getMax_Order($connection)+1;
				
				$insert = MYSQLI_QUERY($connection,"INSERT INTO gallery (cat_id, photo, s_id, ordering, u_id, tip, name, checkbox, link) values('".$category_id."', '".$gallery."', '0', '".$getmax_order."', '".$getmax."','".$tip."' ,'".$name."','".$checkbox."','".$link."'  )");
			
			if($insert){
				echo "<br><br><center><b><font size='4' color='red'> " .$dil['Əlavə olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=gallery'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
		}	
		
	}
	else {
		?>
		
		
		<form name="form1" method="post" action="" enctype="multipart/form-data">
			<table cellpadding="0" cellspacing="0" border="0" align="center">
				<tr>
					<td style="background-color: #FFFFFF;"><center><b><?php echo $dil['Yeni gallery'][$lng]; ?></b></center></td>
				</tr>
				
				
				
				<?php echo $dil['Menyu'][$lng]; ?>:<br>
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
				
				<span style="float:right;">
					<input type="checkbox" name="checkbox" value="1">Premier<br>
				</span>
				
				<link rel="stylesheet" href="js/jquery-ui.css">
						<script src="js/jquery-ui.js"></script>
						
				<div id="tabs">
				
				<ul style="float:right;margin-right:-575px;margin-top:5px;border:1px solid #ccc;position:relative;top:1px;border-radius:10px;left:-720px;background:none;">
						<li style="float:left;margin:5px;">
							<a href="#tabs-1"  name="foto" ><div><?php echo $dil['Foto'][$lng]; ?></div></a>
						</li>
						<li style="float:left;margin:5px; ">
							<a href="#tabs-2" name="video"><div><?php echo $dil['Video'][$lng]; ?></div></a>
						</li>
						
						
				</ul>
				<div style="clear:both;"></div>
					
					<div id="tabs-1"><b><?php echo $dil['Şəkli seç'][$lng]; ?> :</b><br><input type="file" name="img" style="width:400px;"/></div>
				
					<div id="tabs-2"><?php echo $dil['Video'][$lng]; ?>: http://www.youtube.com/watch?v=<input name="video_code" style="width:300px;border-radius:5px; margin:10px 0;"></div>
				</div>
				<?PHP
	
		@$catid = $_GET['catid'];
	?>
	

				
				<tr>
					
					 
						
						
				    <td>
								<table>
									
									<tr>
										<td><?php echo $dil['Ad'][$lng]; ?>: </td>
										<td><input name="name" style="width:300px;border-radius:5px; margin:10px 0;"></td>
										
									</tr>
									<tr>
										<td><?php echo $dil['link'][$lng]; ?>: </td>
										<td><input name="link" style="width:300px;border-radius:5px; margin:10px 0;"></td>
										
									</tr>
								</table>
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
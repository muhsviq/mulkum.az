<?PHP
	if(@$send){
	
	
		@$hidsay = $_POST['hidsaysay'];
		@$active=$_POST['situation'];
		if ($active=='active') {
			$active=0;
		}
		elseif ($active=='passive') {
			$active=1;
		}
		
		
		$ddd=mysqli_query($connection,'select max(u_id) as uid from viza');
		$bbb=MYSQLI_FETCH_ARRAY($ddd);
		$u_id=$bbb['uid'];
		$u_id++;
		
		$zzz=mysqli_query($connection,'select max(ordering) as uid from viza');
		$ccc=MYSQLI_FETCH_ARRAY($zzz);
		$ordering=$ccc['uid'];
		$ordering++;
		
		$tip=0;
		
		for($i=1; $i<= $hidsay; $i++ ){
			if(isset($_POST['checkbox'])){
			@$checkbox= $_POST['checkbox'];
			}
			else{
			@$checkbox=='0';
			}
			
			
			$url_tag= $_POST['url_tag'.$i];
			$title= $_POST['title'.$i];
			$keyword= $_POST['keyword'.$i];
			$description= $_POST['description'.$i];
			$text= $_POST['text'.$i];
			
			$olke= $_POST['olke'.$i];
			
			
			@$insert = MYSQLI_QUERY($connection,"INSERT INTO `viza` (
				
				`text`, 
				`l_id`, 
				`status`, 
				`tip`, 
				`ordering`, 
				`date`, 
				`u_id`, 
				`url_tag`, 
				`title`, 
				`keyword`, 
				`description`,
				`olke`)				
			VALUES (
				
				'$text', 
				'$i',
				'$active', 
				'0',
				'$ordering', 
				curdate(), 
				'$u_id',
				'$url_tag', 
				'$title', 
				'$keyword',
				'$description',
				'$olke')");
				
				
				
			}
			if($insert){
					echo "<br><br><center><b><font size='4' color='red'> Əlavə olundu! </font></b></center></br><br>
					<script>
					function redi(){
					document.location='?menu=viza'
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
					<td style="background-color: #FFFFFF;"><center><b>Yeni məhsul əlavə et</b></center></td>
				</tr>
				<tr>
					<td>
					
					

					<div>
						<form action="">
							<ul style="float:right;position:relative;top:-38px;right:309px;">
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="active">Active</li>
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="passive">Passive</li>
							</ul>
							
						</form>
					</div>
					</td>
				</tr>
				
				
				<?PHP
	
		$catid = $_GET['catid'];
	?>
	

				
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
									
								?>
								<div id="tabs-<?PHP echo $say; ?>">
								<table>
								
									<tr>
										<td>Ölkə: </td>
										<td><input name="olke<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;"></td>
										
									</tr>
									
									
									
									<tr>
										<td>url_tag: </td>
										<td><input name="url_tag<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;"></td>
									</tr>
									<tr>
										<td>title: </td>
										<td><input name="title<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;"></td>
									</tr>
									<tr>
										<td>keyword: </td>
										<td><input name="keyword<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;"></td>
									</tr>
									<tr>
										<td>description: </td>
										<td><input name="description<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;"></td>
									</tr>
									<tr>
										<td>Text: </td>
										<td><textarea name="text<?PHP echo $nl['id']; ?>" style="width:500px;height:200px;border-radius:5px;"></textarea></td>
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
					<td><input type="submit" name="send" value="&#399;lav&#601; et"></td>
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
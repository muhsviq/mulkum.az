<?PHP
	
	$p_id = $_GET['p_id'];
	if(@$send){
		@$video= $_POST['video'];
		if(!empty($_FILES['img']['tmp_name']) or !empty($_POST['video'])){
			if(empty($video))
			{
			$rnd=rand(10000,99999);
			$faylinadi = $_FILES['img']['name'];
			$faylinozu = $_FILES['img']['tmp_name'];
			move_uploaded_file($faylinozu, '../products/'. $rnd.$faylinadi);
			include_once 'SimpleImage.php';
			$image = new SimpleImage();
			$image->load('../products/'. $rnd.$faylinadi);
			$image->save('../products/'. $rnd.$faylinadi);
			$foto_insert = $rnd.$faylinadi;
			$tip=0;
			}
			else
			{
				$foto_insert = $video;
				$tip=2;
			}
			function getMax($connection) {
				$q="select max(u_id) from product_photo";
				$res = mysqli_query($connection,$q);
				$b=mysqli_fetch_array($res);
				return $b[0];
			}
			$getmax = getMax($connection)+1;

			function getMax_Order($connection) {
				$q="select max(ordering) from product_photo";
				$res = mysqli_query($connection,$q);
				$b=mysqli_fetch_array($res);
				return $b[0];
			}
			$getmax_order = getMax_Order($connection)+1;
				@$text= $_POST['text'];
				$insert = MYSQLI_QUERY($connection,"INSERT INTO product_photo (photo, s_id, ordering, u_id,  text, p_id , tip ) values('".$foto_insert."', '0', '".$getmax_order."', '".$getmax."','".$text."' ,'".$p_id."'  ,'".$tip."' )");
			
			if($insert){
				echo "<br><br><center><b><font size='4' color='red'> Əlavə olundu! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=product_photo&p_id=$p_id'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
			
		}
		else
		{
			?>Faylı seçin<?PHP
			
		}
	}
	else {
		?>
		
		
		<form name="form1" method="post" action="" enctype="multipart/form-data">
			<table cellpadding="0" cellspacing="0" border="0" align="center">
				<tr>
					<td style="background-color: #FFFFFF;"><center><b>Yeni şəkil əlavə et</b></center></td>
				</tr>
				<tr>
					<td><b>Şəkli seç (1060 X 520):</b><br><input type="file" name="img" style="width:400px;"/></td>
				</tr>
				
				
				
				<?PHP
	
		@$catid = $_GET['catid'];
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
								

								
								<div id="tabs-<?PHP echo $say; ?>">
								<table>
									<tr>
										<td>https://www.youtube.com/watch?v=</td>
										<td><input name="video" style="width:500px;border-radius:5px;"></td>
										
									</tr>
									<tr>
										<td>Text: </td>
										<td><textarea name="text" style="width:500px;height:200px;border-radius:5px;"></textarea></td>
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
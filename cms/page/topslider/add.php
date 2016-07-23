<?PHP
	$tip = $_GET['tip'];
	$pos = $_GET['pos'];
	$p_id = $_GET['p_id'];
	if(@$send){
		
		if(!empty($_FILES['img']['tmp_name'])){

			$rnd=rand(10000,99999);
			$faylinadi = $_FILES['img']['name'];
			$faylinozu = $_FILES['img']['tmp_name'];
			move_uploaded_file($faylinozu,'../products/'. $rnd.$faylinadi);
			include_once 'SimpleImage.php';
			$image = new SimpleImage();
			$image->load('../products/'. $rnd.$faylinadi);
			
			$image->save('../products/'. $rnd.$faylinadi);
			$foto_insert = $rnd.$faylinadi;
			
			function getMax($connection) {
				$q="select max(u_id) from slider";
				$res = mysqli_query($connection,$q);
				$b=mysqli_fetch_array($res);
				return $b[0];
			}
			$getmax = getMax($connection)+1;

			function getMax_Order($connection) {
				$q="select max(ordering) from slider";
				$res = mysqli_query($connection,$q);
				$b=mysqli_fetch_array($res);
				return $b[0];
			}
			$getmax_order = getMax_Order($connection)+1;
				@$text= $_POST['text'];
				@$text1= $_POST['text1'];
				@$text2= $_POST['text2'];
				@$link= $_POST['link'];
				
				$insert = MYSQLI_QUERY($connection,"INSERT INTO slider (photo, s_id, ordering, u_id, tip, pos, text, text1, text2, link, p_id ) values('".$foto_insert."', '0', '".$getmax_order."', '".$getmax."','".$tip."','".$pos."' ,'".$text."'  ,'".$text1."'  ,'".$text2."' ,'".$link."' ,'".$p_id."' )");
			
			if($insert){
				echo "<br><br><center><b><font size='4' color='red'>".$dil['Əlavə olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=topslider&tip=$tip&pos=$pos&p_id=$p_id'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
			
		}
		else
		{
			?><?php echo $dil['Faylı seçin'][$lng]; ?><?PHP
			
		}
	}
	else {
		?>
		
		
		<form name="form1" method="post" action="" enctype="multipart/form-data">
			<table cellpadding="0" cellspacing="0" border="0" align="center">
				<tr>
					<td style="background-color: #FFFFFF;"><center><b><?php echo $dil['Yeni slide'][$lng]; ?></b></center></td>
				</tr>
				<tr>
					<td><b><?php echo $dil['Şəkli seç'][$lng]; ?> (1000 X 380):</b><br><input type="file" name="img" style="width:400px;"/></td>
				</tr>
				
				
				
				<?PHP
	
		@$catid = $_GET['catid'];
	?>
	

				
				<tr>
					<link rel="stylesheet" href="js/jquery-ui.css">						<script src="js/jquery-ui.js"></script>											<style type="text/css">							#tab_li{								float:left;								margin: 5px;								border:1px solid #ccc;								border-radius: 23px;							}						</style>					 						<?PHP include 'tiny_mce.php'; ?>
				    <td>
						<div id="tabs">
								

								
								<div id="tabs-<?PHP echo $say; ?>">
								<table>
									<tr>
										<td>Text1: </td>
										<td><input name="text1<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;"></td>
										
									</tr>
									<tr>
										<td>Text2: </td>
										<td><input name="text2<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;"></td>
										
									</tr>
								
									<tr>
										<td>link: </td>
										<td><input name="link<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;"></td>
										
									</tr>
									<tr>
										<td><?php echo $dil['Text'][$lng]; ?>: </td>
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
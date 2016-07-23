<?PHP
	if(@$send){
	
		@$active=$_POST['situation'];
		if ($active=='active') {
			$active=0;
		}
		elseif ($active=='passive') {
			$active=1;
		}
		
			
			$ist_adi= $_POST['ist_adi'];
			$l_adi= $_POST['l_adi'];
			$ppp= $_POST['ppp'];
			
			
			
			$deyer		= "11215!@#$%7865****!@!%$$###";
			$ppp		= md5(md5(md5($ppp)));
			$ppp		= strrev($ppp);
			$pas		= $ppp.$deyer;
			
			
				
			@$insert = MYSQLI_QUERY($connection,"INSERT INTO `admin` (
				`ist_adi`, 
				`l_adi`, 
				`ppp`)				
			VALUES (
				'$ist_adi',
				'$l_adi', 
				'$pas')");
				
			$menu_admin_id=mysqli_insert_id($connection);
			
			$admin_menu= $_POST['admin_menu'];
			
			
			foreach($admin_menu as &$admin_menu){
		
			@$insert22 = MYSQLI_QUERY($connection,"INSERT INTO `admin_menu` (
				`a_id`, 
				`m_id`)				
			VALUES (
				'$menu_admin_id',
				'$admin_menu')");
			}
			
			if($insert){
					echo "<br><br><center><b><font size='4' color='red'> " .$dil['Əlavə olundu'][$lng]."! </font></b></center></br><br>
					<script>
					function redi(){
					document.location='?menu=admin'
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
					<td style="background-color: #FFFFFF;"><center><b><?php echo $dil['Yeni Admin'][$lng]; ?></b></center></td>
				</tr>
				<tr>
					<td>
					
					<div>
						<form action="">
							<ul style="float:right;position:relative;top:-38px;right:309px;">
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="active"><?php echo $dil['Aktiv'][$lng]; ?></li>
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="passive"><?php echo $dil['Passiv'][$lng]; ?></li>
							</ul>
							
							<span style="float:right;">
							
							<?PHP 
								$sql=mysqli_QUERY($connection,'select * from `a_menu` order by `id`');
								while($b=MYSQLI_FETCH_ASSOC($sql))
								{
							?>
							
								<input type="checkbox" name="admin_menu[]" value="<?PHP echo $b['id']; ?>"><?PHP echo $b['name']; ?><br>
								
								<?PHP 
								}
								?>
								
							</span>
							
							
							
							
						</form>
					</div>
					</td>
				</tr>
				
		
	

				
				<tr>
					
				    <td>
						<div id="tabs">
								
								<div id="tabs">
								<table>
									
									<tr>
										<td>İstifadəçi adı: </td>
										<td><input name="ist_adi" style="width:500px;border-radius:5px;"></td>
									</tr>
									
									<tr>
										<td><?php echo $dil['Ad'][$lng]; ?>: </td>
										<td><input name="l_adi" style="width:500px;border-radius:5px;"></td>
										
									</tr>
									
									<tr>
										<td>Parol: </td>
										<td><input name="ppp" style="width:500px;border-radius:5px;"></td>
									</tr>
									
								</table>
								</div>
									
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
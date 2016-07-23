<?PHP
	$idx = $_GET['id'];
	if(@$send){
	
		$hidsay = $_POST['hidsaysay'];
		$active=$_POST['situation'];
		if ($active=='active') {
			$active=1;
		}
		elseif ($active=='passive') {
			$active=0;
		}
		$cins=$_POST['cins'];
		
		

			
			$name= $_POST['name'];
			$surname= $_POST['surname'];
			$email= $_POST['email'];
			$parol= $_POST['parol'];
			
		
			
			$update = MYSQLI_QUERY($connection,"UPDATE qeydiyyat SET  `vip` = '$active', `name` = '$name', `surname` = '$surname', `email` = '$email', `parol` = '$parol', `cins` = '$cins' WHERE id='".$idx."'");
			
		
		if($update){
			echo "<br><br><center><b><font size='4' color='red'> Redakte olundu! </font></b></center></br><br>
			<script>
			function redi(){
			document.location='?menu=qeydiyyat'
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
					<td style="background-color: #FFFFFF;"><center><b>Redaktə et</b></center></td>
				</tr>
				<tr>
					<td>
					<?PHP
					$s_redakte1=mysqli_query($connection,'SELECT * FROM qeydiyyat WHERE id='.$idx.'');
					$n_redakte1=MYSQLI_FETCH_ARRAY($s_redakte1);
					@$sub_halhazira=$n_redakte1['sub_id'];
					$sub_halhazira1='100';
					$tip_hh=$n_redakte1['tip'];
					?>
					
						
						
						
						
					<div>
						<form action="">
							<ul style="float:right;position:relative;top:-37px;right:150px;">
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="active" <?PHP if (@$n_redakte1['vip']==1) {	echo 'checked'; } ?>>Active</li>
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="passive" <?PHP if (@$n_redakte1['vip']==0) { echo 'checked'; } ?>>Passive</li>
							</ul>
							
							<ul style="float:left;position:relative;top:-37px;left:130px;">
								<li style="float:left;"><input type="radio" name="cins" id="cins" value="1" <?PHP if (@$n_redakte1['cins']==1) {	echo 'checked'; } ?>>Kişi</li>
								<li style="float:left;"><input type="radio" name="cins" id="cins" value="2" <?PHP if (@$n_redakte1['cins']==2) { echo 'checked'; } ?>>Qadın</li>
							</ul>
							
							
							
							
							<?php $dm=MYSQLI_QUERY($connection,"SELECT * FROM qeydiyyat WHERE id='".$idx."'");
									$dmm=MYSQLI_FETCH_ASSOC($dm);
									
								?>	
								
						</form>
					</div>
					</td>
				</tr>
				
				
				
				<tr>
					
						<td>
						<div id="tabs">
								
								<div id="tabs-<?PHP echo $say; ?>">
								<table>
									<td>Name: </td>
										<td><input name="name" style="width:500px;border-radius:5px;" value="<?PHP echo $dmm['name']; ?>"></td>
									</tr>
									<tr>
										<td>Surname: </td>
										<td><input name="surname" style="width:500px;border-radius:5px;" value="<?PHP echo $dmm['surname']; ?>"></td>
									</tr>
									<tr>
										<td>E-mail: </td>
										<td><input name="email" style="width:500px;border-radius:5px;" value="<?PHP echo $dmm['email']; ?>"></td>
									</tr>
									<tr>
										<td>Parol: </td>
										<td><input name="parol" style="width:500px;border-radius:5px;" value="<?PHP echo $dmm['parol']; ?>"></td>
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
<?PHP
	$idx = $_GET['id'];
	if(@$send){
	
		$active=$_POST['situation'];
		if ($active=='active') {
			$active=0;
		}
		elseif ($active=='passive') {
			$active=1;
		}
		

			
			$ist_adi= $_POST['ist_adi'];
			$l_adi= $_POST['l_adi'];
			$ppp= $_POST['ppp'];
			
			
			
			if(empty($ppp)){
			$update = MYSQLI_QUERY($connection,"UPDATE admin SET  `ist_adi` = '$ist_adi',`l_adi` = '$l_adi' WHERE con='".$idx."'");
			}
			else{
			$deyer		= "11215!@#$%7865****!@!%$$###";
			$ppp		= md5(md5(md5($ppp)));
			$ppp		= strrev($ppp);
			$pas		= $ppp.$deyer;
				
			$update = MYSQLI_QUERY($connection,"UPDATE admin SET  `ist_adi` = '$ist_adi',`l_adi` = '$l_adi', `ppp` = '$pas' WHERE con='".$idx."'");
			}
		
			$admin_menu= $_POST['admin_menu'];
			
			MYSQLI_QUERY($connection,"DELETE FROM admin_menu WHERE a_id='".$idx."'");
			
			foreach($admin_menu as &$admin_menu){
		
			@$insert22 = MYSQLI_QUERY($connection,"INSERT INTO `admin_menu` (
				`a_id`, 
				`m_id`)				
			VALUES (
				'$idx',
				'$admin_menu')");
			}
			
			
			
		
		if($update){
			echo "<br><br><center><b><font size='4' color='red'> ".$dil['Redakte olundu'][$lng]."! </font></b></center></br><br>
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
					<td style="background-color: #FFFFFF;"><center><b>Redaktə et</b></center></td>
				</tr>
				<tr>
					<td>
					<?PHP
					$s_redakte1=mysqli_query($connection,'SELECT * FROM admin WHERE con='.$idx.'');
					$n_redakte1=MYSQLI_FETCH_ARRAY($s_redakte1);
					@$sub_halhazira=$n_redakte1['sub_id'];
					$sub_halhazira1='100';
					$tip_hh=$n_redakte1['tip'];
					
					$catid=$n_redakte1['cat_id'];
					?>
					
						
					<div>
						<form action="">
							<ul style="float:right;position:relative;top:-37px;right:309px;">
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="active" <?PHP if (@$n_redakte1['status']==0) {	echo 'checked'; } ?>><?php echo $dil['Aktiv'][$lng]; ?></li>
								
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="passive" <?PHP if (@$n_redakte1['status']==1) { echo 'checked'; } ?>><?php echo $dil['Passiv'][$lng]; ?></li>
							</ul>
							<?php $dm=MYSQLI_QUERY($connection,"SELECT * FROM admin WHERE con='".$idx."'");
									$dmm=MYSQLI_FETCH_ASSOC($dm);
								?>	
							<span style="float:right;">
							
							<?PHP 
								$sql=mysqli_QUERY($connection,'select * from `a_menu` order by `id`');
								while($b=MYSQLI_FETCH_ASSOC($sql))
								{
								$sql66=mysqli_QUERY($connection,'select * from `admin_menu` where a_id="'.$idx.'" and m_id="'.$b['id'].'" ');
								if(mysqli_num_rows($sql66)>0)
								{
									
							?>
							
							<input type="checkbox" name="admin_menu[]" value="<?PHP echo $b['id']; ?>" checked ><?PHP echo $b['name']; ?><br>
							<?PHP 
								}
								else{
							?>
							
								<input type="checkbox" name="admin_menu[]" value="<?PHP echo $b['id']; ?>"><?PHP echo $b['name']; ?><br>
								
								<?PHP 
								}
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
								<ul id="tabs_ul">
								<?PHP
								
									
								
									

									$dm=MYSQLI_QUERY($connection,"SELECT * FROM admin WHERE con='".$idx."'");
									$dmm=MYSQLI_FETCH_ASSOC($dm);
									
								?>	
								
								</ul>
								<div id="tabs">
								<table>
									<tr>
										<td>İstifadəçi adı: </td>
										<td><input name="ist_adi" style="width:500px;border-radius:5px;" value="<?PHP echo $dmm['ist_adi']; ?>"></td>
									</tr>
									
									<tr>
										<td><?php echo $dil['Ad'][$lng]; ?>: </td>
										<td><input name="l_adi" style="width:500px;border-radius:5px;" value="<?PHP echo $dmm['l_adi']; ?>"></td>
									</tr>
									<tr>
										<td><Parol: </td>
										<td><input name="ppp" style="width:500px;border-radius:5px;" value=""></td>
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
					<td><input type="submit" name="send" value="<?php echo $dil['Dəyişdir'][$lng]; ?>"></td>
				</tr>
			</table>
		</form>
	
	<?PHP } ?>
				 <script>
				  $(function() {
				    $( "#tabs" ).tabs();
				  });
				 </script>
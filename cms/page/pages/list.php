<?PHP
	@$save = $_POST['save'];
	@$delete = $_POST['delete'];
	@$aktiv = $_POST['aktiv'];


	if(isset($save)){
			$s_m = mysqli_query($connection,'SELECT * FROM menu WHERE l_id=1 ORDER BY ordering ASC');
					$says_m=mysqli_num_rows($s_m);
					if($says_m != 0){
						while($n_m = MYSQLI_FETCH_ASSOC($s_m)){
							$x='order'.$n_m['u_id'];
							
							if (!empty($_POST[$x])) {
								$supdate = mysqli_query($connection,'UPDATE menu SET ordering='.$_POST[$x].' WHERE u_id ='.$n_m['u_id']);
							}
						}
			}
					
			if(@$supdate){
				echo "<br><br><center><b><font size='4' color='red'> " .$dil['Sıralama yerinə yetirildi'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=pages&tip=$tip'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
	}

	if(isset($delete)){
			$chek = $_POST['chek'];
			for($n=0; $n<count($chek); $n++)
			{
				$s_del = MYSQLI_QUERY($connection,"DELETE FROM menu WHERE u_id = '".$chek[$n]."'");
			}
			if($s_del){
				echo "<br><br><center><b><font size='4' color='red'> " .$dil['silindi'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=pages&tip=$tip'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
	}
	
	
	if(isset($aktiv)){
			$chek = $_POST['chek'];
			for($n=0; $n<count($chek); $n++)
			{
				$supdate = MYSQLI_QUERY($connection,"UPDATE menu SET status='0' WHERE u_id = '".$chek[$n]."'");
			}
			if($supdate){
				echo "<br><br><center><b><font size='4' color='red'> ".$dil['Aktiv olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=pages&tip=$tip'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
	}

	if(isset($passiv)){
			$chek = $_POST['chek'];
			for($n=0; $n<count($chek); $n++)
			{
				$supdate = MYSQLI_QUERY($connection,"UPDATE menu SET status='1' WHERE u_id = '".$chek[$n]."'");
			}
			if($supdate){
				echo "<br><br><center><b><font size='4' color='red'> ".$dil['Passiv olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=pages&tip=$tip'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
	}
?>

<table>
	<!-- HEAD -->
	<thead>
		<th><?php echo $dil['Id'][$lng]; ?></th>
		<th>
			<input class="check-all" type="checkbox" />
		</th>
		<th><?php echo $dil['Ad'][$lng]; ?></th>
		<th><?php echo $dil['link'][$lng]; ?></th>
		<th><?php echo $dil['Tip'][$lng]; ?></th>
		<th><?php echo $dil['Ardıcıllıq'][$lng]; ?></th>
		<th><?php echo $dil['Status'][$lng]; ?></th>
		<th><?php echo $dil['Idarə'][$lng]; ?></th>
	</thead>
	<!-- BODY -->
	<tbody>
		<?PHP 
		function list_menu($sub, $u_id, $n, $from, $page_count,$margin,$conn, $lng, $dil){
					
					@$tip=$_GET['tip'];
					if (@$_GET['tip']=='yuxari') {
						$tip2='(1,3,5,7)';
					}elseif (@$_GET['tip']=='sol') {
						$tip2='(2,3,6,7)';
					}elseif (@$_GET['tip']=='sol') {
						$tip2='(4,6,5,7)';
					}elseif (@$_GET['tip']=='gizli') {
						$tip2='(0)';
					}


					$s_m = mysqli_query($conn,'SELECT * FROM menu WHERE sub_id = '.$sub.' AND tip in '.@$tip2.' AND l_id=1 ORDER BY ordering ASC');
					$says_m=mysqli_num_rows($s_m);
					if($says_m != 0){
						while($n_m = MYSQLI_FETCH_ASSOC($s_m)){
							?>
							<input type="hidden" name="u_id[]" value="<?PHP echo $n_m['u_id'];?>" />
							<tr>
								<th><?PHP echo $n_m['u_id'];?></th>
								<td>
									<input type="checkbox" name="chek[]" value="<?PHP echo $n_m['u_id'];?>" />
								</td>
								<td><div style="margin-left:<?PHP echo $margin?>px;"><?PHP echo $n_m['name'];?></div></td>
								<td><?PHP echo $n_m['url_tag']; ?></td>
								<td><?PHP echo $n_m['tip']; ?></td>
								<td><input class="text-input" type="text" name="order<?PHP echo $n_m['u_id'];?>" size="1" value="<?PHP echo $n_m['ordering'];?>" /></td>
								<td><?PHP if($n_m['status']==0){?><?php echo $dil['Aktiv'][$lng]; ?><?PHP } else{?><?php echo $dil['Passiv'][$lng]; ?><?PHP }?></td>
								<td>
									<!-- Icons -->
									
									<a href="?menu=topslider&tip=4&p_id=<?php echo $n_m['u_id']; ?>" title="şəkil əlavə et">
										<img src="images/silder.jpeg" alt="slider əlavə et" style="height:25px;"/>
									</a>&nbsp;
									
									 <a href="?menu=pages&mod=edit&id=<?PHP echo $n_m['u_id'];?>" title="<?php echo $dil['Düzəliş et'][$lng]; ?>">
										<img src="images/pencil.png" alt="Düzəliş et" />
									 </a>
									 <a href="?menu=pages&mod=delete&id=<?PHP echo $n_m['u_id'];?>" title="<?php echo $dil['Sil'][$lng]; ?>">
										<img src="images/cross.png" alt="Sil" />
									 </a> 
								</td>
							</tr>
							<?PHP
							list_menu($n_m['u_id'],0, $n, $from, $page_count,$margin+20,$conn, $lng, $dil);
						$n++;
						}
					}
				}
				list_menu(0, 0, 0, @$from, @$page_count,0, $connection, $lng, $dil);
				?>
	</tbody>
</table>

<?PHP

	@$catid = $_GET['catid'];
	@$save = $_POST['save'];
	@$delete = $_POST['delete'];
	@$aktiv = $_POST['aktiv'];
	@$tip = $_GET['tip'];
	@$u_id = $_GET['u_id'];


	if(isset($save)){
			$array = $_POST['order'];

			foreach($array as $k=>$vpppal) {
				foreach($vpppal as $ooo){
					$supdate = MYSQLI_QUERY($connection,"UPDATE gallery SET ordering='".$ooo."' WHERE u_id ='".$k."' ");
				}
			}
			if($supdate){
				echo "<br><br><center><b><font size='4' color='red'> " .$dil['Sıralama yerinə yetirildi'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=gallery&catid=".$catid."'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
	}

	if(isset($delete)){
			$chek = $_POST['chek'];
			for($n=0; $n<count($chek); $n++)
			{
				$s_del = MYSQLI_QUERY($connection,"DELETE FROM gallery WHERE u_id = '".$chek[$n]."'");
			}
			if($s_del){
				echo "<br><br><center><b><font size='4' color='red'> " .$dil['silindi'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=gallery&catid=".$catid."'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
	}
	
	
	if(isset($aktiv)){
			$chek = $_POST['chek'];
			for($n=0; $n<count($chek); $n++)
			{
				$supdate = MYSQLI_QUERY($connection,"UPDATE gallery SET s_id='0' WHERE u_id = '".$chek[$n]."'");
			}
			if($supdate){
				echo "<br><br><center><b><font size='4' color='red'> ".$dil['Aktiv olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=gallery&catid=".$catid."'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
	}

	if(isset($passiv)){
			$chek = $_POST['chek'];
			for($n=0; $n<count($chek); $n++)
			{ 
				$supdate = MYSQLI_QUERY($connection,"UPDATE gallery SET s_id='1' WHERE u_id = '".$chek[$n]."'");
			}
			if($supdate){
				echo "<br><br><center><b><font size='4' color='red'> ".$dil['Passiv olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=gallery&catid=".$catid."'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
	}


	
	
	
	
		if(empty($catid)){
	?>
	<center>
		<table style="width:500px;">
			<?PHP
			function list_menu($sub, $u_id, $n, $margin, $conn){
					$s_m = MYSQLI_QUERY($conn,"SELECT * FROM gal_cat WHERE sub_id = '".$sub."' AND l_id='1' AND tip='0' ORDER BY ordering ASC");
					if(mysqli_num_rows($s_m) != 0){
						while($n_m = MYSQLI_FETCH_ASSOC($s_m)){
							?>
							<tr>
								<td style="background:#F3F3F3; padding-left:<?PHP echo $margin?>px;"><a href="?menu=gallery&catid=<?PHP echo $n_m['u_id'];?>"><?PHP echo $n_m['name'];?></a></td>
							</tr>
							<tr>
								<td height="2"></td>
							</tr>
							<?PHP
							list_menu($n_m['u_id'],0, $n,$margin+20,$conn);
						$n++;
						}
					}
				}
				list_menu(0, 0, 0, 0, $connection);
			?>
		</table>
	</center>
	<?PHP
	}
	else{
	
	?>
	
	
	<table>
		<!-- HEAD -->
		<thead>
			<tr>
			   <th>
			   <?php echo $dil['Id'][$lng]; ?>
			   </th>
			   <th>
					<input class="check-all" type="checkbox" />
			   </th>
			   <th><?php echo $dil['Gallery'][$lng]; ?></th>
			   <th><?php echo $dil['Ad'][$lng]; ?></th>
			   <th><?php echo $dil['Ardıcıllıq'][$lng]; ?></th>
			   <th><?php echo $dil['Aktiv'][$lng]; ?></th>
			   <th><?php echo $dil['Idarə'][$lng]; ?></th>
			</tr>
		</thead>
		<!-- BODY -->
		<tbody>
			<?PHP				
				
				$s_m = MYSQLI_QUERY($connection,'SELECT * FROM gallery where cat_id= '.$catid.' ORDER BY ordering ASC');
				while($n_m = MYSQLI_FETCH_ASSOC($s_m)){
					?>
					<input type="hidden" name="u_id[]" value="<?PHP echo $n_m['u_id'];?>" />
					<tr>
						<th><?PHP echo $n_m['u_id'];?></th>
						<td>
							<input type="checkbox" name="chek[]" value="<?PHP echo $n_m['u_id'];?>" />
						</td>
						<td>
						
						
						<?php if($n_m['tip']==2){ 
						echo '
						<img src="http://img.youtube.com/vi/'.$n_m['photo'].'/hqdefault.jpg"  width="150"">';
						
						}  
						
						else {
						?>
						<img src="../products/<?PHP echo $n_m['photo'];?>" width="150"  border="0" />
						<?php } ?>
						</td>
						<td><?PHP echo $n_m['name'];?></td>
						<td><input class="text-input" type="text" name="order[<?PHP echo $n_m['u_id'];?>][]" size="1" value="<?PHP echo $n_m['ordering'];?>" /></td>
						<td><?PHP if(@$n_m['s_id']==0){?><?php echo $dil['Aktiv'][$lng]; ?><?PHP } else{?><?php echo $dil['Passiv'][$lng]; ?><?PHP }?></td>
						<td>
								<!-- Icons -->
								<a href="?menu=gallery&catid=<?PHP echo $n_m['cat_id'];?>&mod=edit&u_id=<?PHP echo $n_m['u_id'];?>" title="<?php echo $dil['Düzəliş et'][$lng]; ?>">
								<img src="images/pencil.png" alt="Düzəliş et" />
								</a>&nbsp;
								<a href="?menu=gallery&catid=<?PHP echo $n_m['cat_id'];?>&mod=delete&u_id=<?PHP echo $n_m['u_id'];?>" title="<?php echo $dil['Sil'][$lng]; ?>">
									<img src="images/cross.png" alt="Sil" />
								 </a> 
							</td>
					</tr>
					<?PHP
				}
				?>
		</tbody>
		
	</table>
	<?php }?>
</form>
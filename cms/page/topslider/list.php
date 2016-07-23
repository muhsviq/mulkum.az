<?PHP
	@$save = $_POST['save'];
	@$delete = $_POST['delete'];
	@$aktiv = $_POST['aktiv'];
	@$tip = $_GET['tip'];
	@$pos = $_GET['pos'];
	@$p_id = $_GET['p_id'];


	if(isset($save)){
			$array = $_POST['order'];

			foreach($array as $k=>$vpppal) {
				foreach($vpppal as $ooo){
					$supdate = MYSQLI_QUERY($connection,"UPDATE slider SET ordering='".$ooo."' WHERE u_id ='".$k."' ");
				}
			}
			if($supdate){
				echo "<br><br><center><b><font size='4' color='red'> " .$dil['Sıralama yerinə yetirildi'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=topslider&tip=$tip&pos=$pos&p_id=$p_id'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
	}

	if(isset($delete)){
			$chek = $_POST['chek'];
			for($n=0; $n<count($chek); $n++)
			{
				$select = MYSQLI_QUERY($connection,"SELECT * FROM slider WHERE u_id = '".$chek[$n]."'");
				$nn = MYSQLI_FETCH_ASSOC($select);
				unlink('../products/'.$nn['photo']);
				$s_del = MYSQLI_QUERY($connection,"DELETE FROM slider WHERE u_id = '".$chek[$n]."'");
			}
			if($s_del){
				echo "<br><br><center><b><font size='4' color='red'> " .$dil['silindi'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=topslider&tip=$tip&pos=$pos&p_id=$p_id'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
	}
	
	
	if(isset($aktiv)){
			$chek = $_POST['chek'];
			for($n=0; $n<count($chek); $n++)
			{
				$supdate = MYSQLI_QUERY($connection,"UPDATE slider SET s_id='0' WHERE u_id = '".$chek[$n]."'");
			}
			if($supdate){
				echo "<br><br><center><b><font size='4' color='red'> ".$dil['Aktiv olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=topslider&tip=$tip&pos=$pos&p_id=$p_id'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
	}

	if(isset($passiv)){
			$chek = $_POST['chek'];
			for($n=0; $n<count($chek); $n++)
			{ 
				$supdate = MYSQLI_QUERY($connection,"UPDATE slider SET s_id='1' WHERE u_id = '".$chek[$n]."'");
			}
			if($supdate){
				echo "<br><br><center><b><font size='4' color='red'> ".$dil['Passiv olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=topslider&tip=$tip&pos=$pos&p_id=$p_id'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
	}


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
			   <th><?php echo $dil['Slider'][$lng]; ?></th>
			   <th><?php echo $dil['Ardıcıllıq'][$lng]; ?></th>
			   <th><?php echo $dil['Aktiv'][$lng]; ?></th>
			   <th><?php echo $dil['Idarə'][$lng]; ?></th>
			</tr>
		</thead>
		<!-- BODY -->
		<tbody>
			<?PHP				
				
				$s_m = MYSQLI_QUERY($connection,'SELECT * FROM slider WHERE tip="'.$tip.'" and p_id="'.$p_id.'" ORDER BY ordering ASC');
				while($n_m = MYSQLI_FETCH_ASSOC($s_m)){
					?>
					<input type="hidden" name="u_id[]" value="<?PHP echo $n_m['u_id'];?>" />
					<tr>
						<th><?PHP echo $n_m['u_id'];?></th>
						<td>
							<input type="checkbox" name="chek[]" value="<?PHP echo $n_m['u_id'];?>" />
						</td>
						<td><img src="../products/<?PHP echo $n_m['photo'];?>" width="200"  border="0" /></td>
						<td><input class="text-input" type="text" name="order[<?PHP echo $n_m['u_id'];?>][]" size="1" value="<?PHP echo $n_m['ordering'];?>" /></td>
						<td><?PHP if(@$n_m['s_id']==0){?><?php echo $dil['Aktiv'][$lng]; ?><?PHP } else{?><?php echo $dil['Passiv'][$lng]; ?><?PHP }?></td>
						<td>
								<!-- Icons -->
								<a href="?menu=topslider&mod=edit&tip=<?php echo $tip; ?>&pos=<?php echo $pos ?>&p_id=<?php echo $p_id ?>&u_id=<?PHP echo $n_m['u_id'];?>" title="<?php echo $dil['Düzəliş et'][$lng]; ?>">
								<img src="images/pencil.png" alt="Düzəliş et" />
								</a>&nbsp;
								<a href="?menu=topslider&mod=delete&tip=<?php echo $tip; ?>&pos=<?php echo $pos ?>&p_id=<?php echo $p_id ?>&u_id=<?PHP echo $n_m['u_id'];?>" title="<?php echo $dil['Sil'][$lng]; ?>">
									<img src="images/cross.png" alt="Sil" />
								 </a> 
							</td>
					</tr>
					<?PHP
				}
				?>
		</tbody>
		
	</table>
	
</form>
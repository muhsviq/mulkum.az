<?PHP
	$save = $_POST['save'];
	$delete = $_POST['delete'];
	$aktiv = $_POST['aktiv'];

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
				document.location='?menu=links'
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
			   <th><?php echo $dil['Ad'][$lng]; ?></th>
			   <th><?php echo $dil['Idarə'][$lng]; ?></th>
			</tr>
		</thead>
	 <!-- BODY -->
		<tbody>
			<?PHP 
				$s_m = MYSQLI_QUERY($connection,"SELECT * FROM menu WHERE l_id='1' AND tip='1' ORDER BY u_id ASC");
				if(mysqli_num_rows($s_m) != 0){
					while($n_m = MYSQL_FETCH_ASSOC($s_m)){
							?>
							<input type="hidden" name="u_id[]" value="<?PHP echo $n_m['u_id'];?>" />
							<tr>
								<th><?PHP echo $n_m['u_id'];?></th>
								<td>
									<input type="checkbox" name="chek[]" value="<?PHP echo $n_m['u_id'];?>" />
								</td>
								<td><div style="margin-left:<?PHP echo $margin?>px;"><?PHP echo $n_m['name'];?></div></td>
								<td>
									<!-- Icons -->
									 <a href="?menu=links&mod=edit&id=<?PHP echo $n_m['u_id'];?>" title="<?php echo $dil['Düzəliş et'][$lng]; ?>">
										<img src="images/pencil.png" alt="Düzəliş et" />
									 </a>
									 <a href="?menu=links&mod=delete&id=<?PHP echo $n_m['u_id'];?>" title="<?php echo $dil['Sil'][$lng]; ?>">
										<img src="images/cross.png" alt="Sil" />
									 </a> 
								</td>
							</tr>
							<?PHP
						$n++;
						}
					}
				?>
		</tbody>
	</table>
</form>
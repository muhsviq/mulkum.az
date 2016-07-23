<?PHP
	@$save = $_POST['save'];
	@$delete = $_POST['delete'];
	@$aktiv = $_POST['aktiv'];
	@$p_id = $_GET['p_id'];


	if(isset($save)){
			$array = $_POST['order'];

			foreach($array as $k=>$vpppal) {
				foreach($vpppal as $ooo){
					$supdate = MYSQLI_QUERY($connection,"UPDATE product_photo SET ordering='".$ooo."' WHERE u_id ='".$k."' ");
				}
			}
			if($supdate){
				echo "<br><br><center><b><font size='4' color='red'> Sıralama yerinə yetirildi! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=product_photo&p_id=$p_id'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
	}

	if(isset($delete)){
			$chek = $_POST['chek'];
			for($n=0; $n<count($chek); $n++)
			{
				$s_del = MYSQLI_QUERY($connection,"DELETE FROM product_photo WHERE u_id = '".$chek[$n]."'");
			}
			if($s_del){
				echo "<br><br><center><b><font size='4' color='red'> Silindi! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=product_photo&p_id=$p_id'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
	}
	
	
	if(isset($aktiv)){
			$chek = $_POST['chek'];
			for($n=0; $n<count($chek); $n++)
			{
				$supdate = MYSQLI_QUERY($connection,"UPDATE product_photo SET s_id='0' WHERE u_id = '".$chek[$n]."'");
			}
			if($supdate){
				echo "<br><br><center><b><font size='4' color='red'> Aktiv olundu! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=product_photo&p_id=$p_id'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
	}

	if(isset($passiv)){
			$chek = $_POST['chek'];
			for($n=0; $n<count($chek); $n++)
			{ 
				$supdate = MYSQLI_QUERY($connection,"UPDATE product_photo SET s_id='1' WHERE u_id = '".$chek[$n]."'");
			}
			if($supdate){
				echo "<br><br><center><b><font size='4' color='red'> Passiv olundu! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=product_photo&p_id=$p_id'
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
			   Id
			   </th>
			   <th>
					<input class="check-all" type="checkbox" />
			   </th>
			   <th>Şəkil</th>
			   <th>Ardıcıllıq</th>
			   <th>Aktiv</th>
			   <th>Idarə</th>
			</tr>
		</thead>
		<!-- BODY -->
		<tbody>
			<?PHP				
				
				$s_m = MYSQLI_QUERY($connection,'SELECT * FROM product_photo WHERE  p_id="'.$p_id.'" ORDER BY ordering ASC');
				while($n_m = MYSQLI_FETCH_ASSOC($s_m)){
					?>
					<input type="hidden" name="u_id[]" value="<?PHP echo $n_m['u_id'];?>" />
					<tr>
						<th><?PHP echo $n_m['u_id'];?></th>
						<td>
							<input type="checkbox" name="chek[]" value="<?PHP echo $n_m['u_id'];?>" />
						</td>
						<?PHP 
							if($n_m['tip']==2)
							{
						?>
						<td><img src="http://img.youtube.com/vi/<?PHP echo $n_m['photo'];?>/hqdefault.jpg" width="200"  border="0" /></td>
						<?PHP 
							}
							else{
						?>
						<td><img src="../products/<?PHP echo $n_m['photo'];?>" width="200"  border="0" /></td>
						
						<?PHP 
							}
						?>
						
						<td><input class="text-input" type="text" name="order[<?PHP echo $n_m['u_id'];?>][]" size="1" value="<?PHP echo $n_m['ordering'];?>" /></td>
						<td><?PHP if(@$n_m['s_id']==0){?>Aktiv<?PHP } else{?>Passiv<?PHP }?></td>
						<td>
								<!-- Icons -->
								<a href="?menu=product_photo&mod=edit&p_id=<?php echo $p_id ?>&u_id=<?PHP echo $n_m['u_id'];?>" title="Düzəliş et">
								<img src="images/pencil.png" alt="Düzəliş et" />
								</a>&nbsp;
								<a href="?menu=product_photo&mod=delete&p_id=<?php echo $p_id ?>&u_id=<?PHP echo $n_m['u_id'];?>" title="Sil">
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
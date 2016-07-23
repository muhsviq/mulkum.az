<?PHP
	
	@$save = $_POST['save'];
	@$delete = $_POST['delete'];
	@$aktiv = $_POST['aktiv'];


	if(isset($save)){
			$catid = $_POST['catid'];
			$array = $_POST['order'];

			foreach($array as $k=>$vpppal) {
				foreach($vpppal as $ooo){
					$supdate = MYSQLI_QUERY($connection,"UPDATE bilet SET ordering='".$ooo."' WHERE u_id ='".$k."' ");
				}
			}
			if($supdate){
				echo "<br><br><center><b><font size='4' color='red'> Sıralama yerinə yetirildi! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=bilet'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
	}

	if(isset($delete)){
			$catid = $_POST['catid'];
			$chek = $_POST['chek'];
			for($n=0; $n<count($chek); $n++)
			{
				$s_del = MYSQLI_QUERY($connection,"DELETE FROM bilet WHERE u_id = '".$chek[$n]."'");
			}
			if($s_del){
				echo "<br><br><center><b><font size='4' color='red'> Silindi! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=bilet'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
	}
	
	
	if(isset($aktiv)){
			$catid = $_POST['catid'];
			$chek = $_POST['chek'];
			for($n=0; $n<count($chek); $n++)
			{
				$supdate = MYSQLI_QUERY($connection,"UPDATE bilet SET status='0' WHERE u_id = '".$chek[$n]."'");
			}
			if($supdate){
				echo "<br><br><center><b><font size='4' color='red'> Aktiv olundu! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=bilet'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
	}

	if(isset($passiv)){
			$catid = $_POST['catid'];
			$chek = $_POST['chek'];
			for($n=0; $n<count($chek); $n++)
			{
				$supdate = MYSQLI_QUERY($connection,"UPDATE bilet SET status='1' WHERE u_id = '".$chek[$n]."'");
			}
			if($supdate){
				echo "<br><br><center><b><font size='4' color='red'> Passiv olundu! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=bilet'
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
			   <th>Ad</th>
			   <th>Ardıcıllıq</th>
			   <th> </th>
			   <th>Aktiv</th>
			   <th>Idarə</th>
			</tr>
		</thead>
		<!-- BODY -->
		<tbody>
			<?PHP				
				@$page = $_GET['page'];
				if(!isset($page))$page=1;
				$s_say_menu = MYSQLI_QUERY($connection,"SELECT * FROM bilet WHERE  l_id='1' AND tip='0' ORDER BY ordering DESC");
				$n_say_menu = (mysqli_num_rows($s_say_menu));
				$page_count=10;
				$bolme_sayi = ceil($n_say_menu / $page_count); 
				$from = ( $page_count* $page ) - $page_count;

				
				
				$s_m = MYSQLI_QUERY($connection,"SELECT * FROM bilet WHERE l_id='1' AND tip='0' ORDER BY ordering DESC limit ".$from.", ".$page_count."");
				while($n_m = MYSQLI_FETCH_ASSOC($s_m)){
					?>
					<input type="hidden" name="u_id[]" value="<?PHP echo $n_m['u_id'];?>" />
					<input type="hidden" name="catid" value="<?PHP echo $catid;?>" />
					<tr>
						<th><?PHP echo $n_m['u_id'];?></th>
						<td>
							<input type="checkbox" name="chek[]" value="<?PHP echo $n_m['u_id'];?>" />
						</td>
						<td><div style="margin-left:<?PHP echo $margin?>px;"><?PHP echo $n_m['istiqamet'];?></div></td>
						<td><input class="text-input" type="text" name="order[<?PHP echo $n_m['u_id'];?>][]" size="1" value="<?PHP echo $n_m['ordering'];?>" /></td>
						<td><?PHP if(@$n_m['home']==1){?>Ana səhifədə olaacaq<?PHP }?></td>
						<td><?PHP if($n_m['status']==0){?>Aktiv<?PHP } else{?>Passiv<?PHP }?></td>
						<td>
							<!-- Icons -->
							
							
							 
							 <a href="?menu=bilet&catid=<?PHP echo $n_m['cat_id'];?>&mod=edit&id=<?PHP echo $n_m['u_id'];?>" title="Düzəliş et">
								<img src="images/pencil.png" alt="Düzəliş et" />
							 </a>&nbsp;
							 <a href="?menu=bilet&catid=<?PHP echo $n_m['cat_id'];?>&mod=delete&id=<?PHP echo $n_m['u_id'];?>" title="Sil">
								<img src="images/cross.png" alt="Sil" />
							 </a> 
						</td>
					</tr>
					<?PHP
				}
				?>
		</tbody>
		<!-- FOOTER -->
		<tfoot>
			<tr>
				<td colspan="9">
					<div class="pagination">
						<?PHP
						if($page == 1){}
						else{
						?>
						<a href="?menu=bilet&catid=<?PHP echo $catid;?>&page=1" title="Birinci səhifə">&laquo; Birinci</a>
						<a href="?menu=bilet&catid=<?PHP echo $catid;?>&page=<?PHP echo $page-1;?>" title="Geri"> &laquo; Geri </a>
						<?PHP
						}	
							$paging = '';
							$kichikdir = 5;
							$boyukdur = 9;
							$oterefbuteref=3;
								if($bolme_sayi <= $boyukdur){
									for($nomre=1; $nomre <=$bolme_sayi; $nomre++){
									$paging .= "<a href='?menu=bilet&catid=".$catid."&page=".$nomre."' class='number  "; 
										if($nomre == $page) $paging.="current";
										$paging.="' title='1'>".$nomre."</a>";
									}
								}
								elseif($bolme_sayi > $kichikdir && $page <=$boyukdur && $page>=$kichikdir ){
									if(($page>($bolme_sayi - $oterefbuteref)) && $page <7 )
									{
											for($nomre=1; $nomre <=$page; $nomre++){
												$paging .= "<a href='?menu=bilet&catid=".$catid."&page=".$nomre."' class='number  "; 
													if($nomre == $page) $paging.="current";
													$paging.="' title='1'>".$nomre."</a>";
											}
									}
									else
									{
											for($nomre=1; $nomre <=$page+$oterefbuteref; $nomre++){
													$paging .= "<a href='?menu=bilet&catid=".$catid."&page=".$nomre."' class='number  "; 
														if($nomre == $page) $paging.="current";
														$paging.="' title='1'>".$nomre."</a>";
											}
									}
									$paging.= "....<a href='?menu=bilet&catid=".$catid."&page=".$bolme_sayi."' class='number  "; 
											if($bolme_sayi == $page) $paging.="current";
											$paging.="' title='1'>".$bolme_sayi."</a>";
											echo "salam";
								}
								elseif($bolme_sayi > $kichikdir && $page <=$kichikdir ){
									for($nomre=1; $nomre <=$kichikdir; $nomre++){
										$paging .= "<a href='?menu=bilet&catid=".$catid."&page=".$nomre."' class='number  "; 
											if($nomre == $page) $paging.="current";
											$paging.="' title='1'>".$nomre."</a>";
									}
									$paging.= "....<a href='?menu=bilet&catid=".$catid."&page=".$bolme_sayi."' class='number  "; 
											if($bolme_sayi == $page) $paging.="current";
											$paging.="' title='1'>".$bolme_sayi."</a>";
								}
								elseif($bolme_sayi > $boyukdur && $page >=$boyukdur && $page <=($bolme_sayi-$kichikdir)  ){
									$paging.= "<a href='?menu=bilet&catid=".$catid."&page=1' class='number  "; 
											if($bolme_sayi == $page) $paging.="current";
											$paging.="' title='1'>1</a>...";
									for($nomre=$page-$oterefbuteref; $nomre <=$page+$oterefbuteref; $nomre++){
										$paging .= "<a href='?menu=bilet&catid=".$catid."&page=".$nomre."' class='number  "; 
											if($nomre == $page) $paging.="current";
											$paging.="' title='1'>".$nomre."</a>";
									}
									$paging.= "....<a href='?menu=bilet&catid=".$catid."&page=".$bolme_sayi."' class='number  "; 
											if($bolme_sayi == $page) $paging.="current";
											$paging.="' title='1'>".$bolme_sayi."</a>";
								}
								elseif($bolme_sayi > $boyukdur && $page >=$boyukdur && $page >($bolme_sayi-$kichikdir)  ){
									$paging.= "<a href='?menu=bilet&catid=".$catid."&page=1' class='number  "; 
											if($bolme_sayi == $page) $paging.="current";
											$paging.="' title='1'>1</a>...";
									for($nomre=$bolme_sayi-$kichikdir; $nomre <=$bolme_sayi; $nomre++){
										$paging .= "<a href='?menu=bilet&catid=".$catid."&page=".$nomre."' class='number  "; 
											if($nomre == $page) $paging.="current";
											$paging.="' title='1'>".$nomre."</a>";
									}
								}
							
							echo $paging;
						
						if($page == $bolme_sayi){}
						else{
						?>
						<a href="?menu=bilet&catid=<?PHP echo $catid;?>&page=<?PHP echo $page+1;?>" title="Irəli"> İrəli &raquo;</a>
						<a href="?menu=bilet&catid=<?PHP echo $catid;?>&page=<?PHP echo $bolme_sayi;?>" title="Sonuncu səhifə">Sonuncu &raquo;</a>
						<?PHP
						}
						?>
					</div> <!-- pagination -->
					<div class="clear"></div>
					
				</td>
			</tr>
		</tfoot>
	</table>
	
	
</form>
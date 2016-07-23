<?PHP
	@$catid = $_GET['catid'];
	@$delete = $_POST['delete'];
	@$aktiv = $_POST['aktiv'];



	if(isset($delete)){
			$catid = $_POST['catid'];
			$chek = $_POST['chek'];
			for($n=0; $n<count($chek); $n++)
			{
				$product22=MYSQLI_QUERY($connection,"SELECT * from `admin` where con='".$chek[$n]."'");
				$product=MYSQLI_FETCH_ARRAY($product22);
				$s_del = MYSQLI_QUERY($connection,"DELETE FROM admin WHERE con = '".$chek[$n]."'");
			}
			if($s_del){
				echo "<br><br><center><b><font size='4' color='red'> " .$dil['silindi'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=admin '
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
				$supdate = MYSQLI_QUERY($connection,"UPDATE admin SET status='0' WHERE con = '".$chek[$n]."'");
			}
			if($supdate){
				echo "<br><br><center><b><font size='4' color='red'> ".$dil['Aktiv olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=admin '
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
				$supdate = MYSQLI_QUERY($connection,"UPDATE admin SET status='1' WHERE con = '".$chek[$n]."'");
			}
			if($supdate){
				echo "<br><br><center><b><font size='4' color='red'> ".$dil['Passiv olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=admin '
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
			   <th>İstifadəçi adı</th>
			   <th><?php echo $dil['Ad'][$lng]; ?></th>
			   <th> </th>
			   <th><?php echo $dil['Aktiv'][$lng]; ?></th>
			   <th><?php echo $dil['Idarə'][$lng]; ?></th>
			</tr>
		</thead>
		<!-- BODY -->
		<tbody>
			<?PHP				
				@$page = $_GET['page'];
				if(!isset($page))$page=1;
				$s_say_menu = MYSQLI_QUERY($connection,"SELECT * FROM admin ORDER BY con DESC");
				$n_say_menu = (mysqli_num_rows($s_say_menu));
				$page_count=10;
				$bolme_sayi = ceil($n_say_menu / $page_count); 
				$from = ( $page_count* $page ) - $page_count;

				
				
				$s_m = MYSQLI_QUERY($connection,"SELECT * FROM admin  ORDER BY con DESC limit ".$from.", ".$page_count."");
				while($n_m = MYSQLI_FETCH_ASSOC($s_m)){
					?>
					<input type="hidden" name="con[]" value="<?PHP echo $n_m['con'];?>" />
					<input type="hidden" name="catid" value="<?PHP echo $catid;?>" />
					<tr>
						<th><?PHP echo $n_m['con'];?></th>
						<td>
							<input type="checkbox" name="chek[]" value="<?PHP echo $n_m['con'];?>" />
						</td>
						<td><div style="margin-left:<?PHP echo $margin?>px;"><?PHP echo $n_m['ist_adi'];?></div></td>
						<td><div style="margin-left:<?PHP echo $margin?>px;"><?PHP echo $n_m['l_adi'];?></div></td>
						
						<td><?PHP if(@$n_m['home']==1){?><?php echo $dil['Ana səhifədə olaacaq'][$lng]; ?><?PHP }?></td>
						<td><?PHP if($n_m['status']==0){?><?php echo $dil['Aktiv'][$lng]; ?><?PHP } else{?><?php echo $dil['Passiv'][$lng]; ?><?PHP }?></td>
						<td>
							<!-- Icons -->
						
							 <a href="?menu=admin&mod=edit&id=<?PHP echo $n_m['con'];?>" title="<?php echo $dil['Düzəliş et'][$lng]; ?>">
								<img src="images/pencil.png" alt="Düzəliş et" />
							 </a>&nbsp;
							 <a href="?menu=admin&mod=delete&id=<?PHP echo $n_m['con'];?>" title="<?php echo $dil['Sil'][$lng]; ?>">
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
						<a href="?menu=admin&catid=<?PHP echo $catid;?>&page=1" title="Birinci səhifə">&laquo; <?php echo $dil['Birinci'][$lng]; ?></a>
						<a href="?menu=admin&catid=<?PHP echo $catid;?>&page=<?PHP echo $page-1;?>" title="Geri"> &laquo; <?php echo $dil['Geri'][$lng]; ?> </a>
						<?PHP
						}	
							$paging = '';
							$kichikdir = 5;
							$boyukdur = 9;
							$oterefbuteref=3;
								if($bolme_sayi <= $boyukdur){
									for($nomre=1; $nomre <=$bolme_sayi; $nomre++){
									$paging .= "<a href='?menu=admin &page=".$nomre."' class='number  "; 
										if($nomre == $page) $paging.="current";
										$paging.="' title='1'>".$nomre."</a>";
									}
								}
								elseif($bolme_sayi > $kichikdir && $page <=$boyukdur && $page>=$kichikdir ){
									if(($page>($bolme_sayi - $oterefbuteref)) && $page <7 )
									{
											for($nomre=1; $nomre <=$page; $nomre++){
												$paging .= "<a href='?menu=admin &page=".$nomre."' class='number  "; 
													if($nomre == $page) $paging.="current";
													$paging.="' title='1'>".$nomre."</a>";
											}
									}
									else
									{
											for($nomre=1; $nomre <=$page+$oterefbuteref; $nomre++){
													$paging .= "<a href='?menu=admin &page=".$nomre."' class='number  "; 
														if($nomre == $page) $paging.="current";
														$paging.="' title='1'>".$nomre."</a>";
											}
									}
									$paging.= "....<a href='?menu=admin &page=".$bolme_sayi."' class='number  "; 
											if($bolme_sayi == $page) $paging.="current";
											$paging.="' title='1'>".$bolme_sayi."</a>";
											echo "salam";
								}
								elseif($bolme_sayi > $kichikdir && $page <=$kichikdir ){
									for($nomre=1; $nomre <=$kichikdir; $nomre++){
										$paging .= "<a href='?menu=admin &page=".$nomre."' class='number  "; 
											if($nomre == $page) $paging.="current";
											$paging.="' title='1'>".$nomre."</a>";
									}
									$paging.= "....<a href='?menu=admin &page=".$bolme_sayi."' class='number  "; 
											if($bolme_sayi == $page) $paging.="current";
											$paging.="' title='1'>".$bolme_sayi."</a>";
								}
								elseif($bolme_sayi > $boyukdur && $page >=$boyukdur && $page <=($bolme_sayi-$kichikdir)  ){
									$paging.= "<a href='?menu=admin &page=1' class='number  "; 
											if($bolme_sayi == $page) $paging.="current";
											$paging.="' title='1'>1</a>...";
									for($nomre=$page-$oterefbuteref; $nomre <=$page+$oterefbuteref; $nomre++){
										$paging .= "<a href='?menu=admin &page=".$nomre."' class='number  "; 
											if($nomre == $page) $paging.="current";
											$paging.="' title='1'>".$nomre."</a>";
									}
									$paging.= "....<a href='?menu=admin &page=".$bolme_sayi."' class='number  "; 
											if($bolme_sayi == $page) $paging.="current";
											$paging.="' title='1'>".$bolme_sayi."</a>";
								}
								elseif($bolme_sayi > $boyukdur && $page >=$boyukdur && $page >($bolme_sayi-$kichikdir)  ){
									$paging.= "<a href='?menu=admin &page=1' class='number  "; 
											if($bolme_sayi == $page) $paging.="current";
											$paging.="' title='1'>1</a>...";
									for($nomre=$bolme_sayi-$kichikdir; $nomre <=$bolme_sayi; $nomre++){
										$paging .= "<a href='?menu=admin &page=".$nomre."' class='number  "; 
											if($nomre == $page) $paging.="current";
											$paging.="' title='1'>".$nomre."</a>";
									}
								}
							
							echo $paging;
						
						if($page == $bolme_sayi){}
						else{
						?>
						<a href="?menu=admin&catid=<?PHP echo $catid;?>&page=<?PHP echo $page+1;?>" title="Irəli"> <?php echo $dil['İrəli'][$lng]; ?> &raquo;</a>
						<a href="?menu=admin&catid=<?PHP echo $catid;?>&page=<?PHP echo $bolme_sayi;?>" title="Sonuncu səhifə"> <?php echo $dil['Sonuncu'][$lng]; ?>&raquo;</a>
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
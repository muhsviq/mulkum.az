<?PHP
	@$catid = $_GET['catid'];
	@$save = $_POST['save'];
	@$delete = $_POST['delete'];
	@$aktiv = $_POST['aktiv'];


	if(isset($save)){
			$catid = $_POST['catid'];
			$array = $_POST['order'];

			foreach($array as $k=>$vpppal) {
				foreach($vpppal as $ooo){
					$supdate = MYSQLI_QUERY($connection,"UPDATE coment SET ordering='".$ooo."' WHERE id ='".$k."' ");
				}
			}
			if($supdate){
				echo "<br><br><center><b><font size='4' color='red'> " .$dil['Sıralama yerinə yetirildi'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=coment'
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
				$select = MYSQLI_QUERY($connection,"SELECT * FROM coment WHERE '".$chek[$n]."'");
				$nn = MYSQLI_FETCH_ASSOC($select);
				unlink('../products/'.$nn['photo']);
				
				$s_del = MYSQLI_QUERY($connection,"DELETE FROM coment WHERE id = '".$chek[$n]."' or sub_id = '".$chek[$n]."'");
			}
			if($s_del){
				echo "<br><br><center><b><font size='4' color='red'> " .$dil['silindi'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=coment'
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
				$supdate = MYSQLI_QUERY($connection,"UPDATE coment SET s_id='0' WHERE id = '".$chek[$n]."'");
			}
			if($supdate){
				echo "<br><br><center><b><font size='4' color='red'> ".$dil['Aktiv olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=coment'
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
				$supdate = MYSQLI_QUERY($connection,"UPDATE coment SET s_id='1' WHERE id = '".$chek[$n]."'");
			}
			if($supdate){
				echo "<br><br><center><b><font size='4' color='red'> ".$dil['Passiv olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=coment'
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
			   <th>Comment</th>
			   <th>  </th>
			   <th> Ad </th>
			   <th> Email </th>
			   <th> Tarix </th>
			   <th> Link </th>
			   <th><?php echo $dil['Aktiv'][$lng]; ?></th>
			</tr>
		</thead>
		<!-- BODY -->
		<tbody>
			<?PHP				
				@$page = $_GET['page'];
				if(!isset($page))$page=1;
				$s_say_menu = MYSQLI_QUERY($connection,"SELECT * FROM coment ORDER BY id DESC");
				$n_say_menu = (mysqli_num_rows($s_say_menu));
				$page_count=10;
				$bolme_sayi = ceil($n_say_menu / $page_count); 
				$from = ( $page_count* $page ) - $page_count;

				
				
				$s_m = MYSQLI_QUERY($connection,"SELECT * FROM coment   ORDER BY id DESC limit ".$from.", ".$page_count."");
				while($n_m = MYSQLI_FETCH_ASSOC($s_m)){
					if($n_m['page_id']==1)
					{
						$bazapages="xeberler";
						$bazalink="xeber";
					}
					elseif($n_m['page_id']==2)
					{
						$bazapages="product";
						$bazalink="mehsul";
					}
					else{}
					
					$product99=mysqli_QUERY($connection,'SELECT * from '.$bazapages.' where l_id=1 and  u_id="'.$n_m['mehsul_id'].'"');
					$product88=MYSQLI_FETCH_ARRAY($product99);
					?>
					<input type="hidden" name="id[]" value="<?PHP echo $n_m['id'];?>" />
					<input type="hidden" name="catid" value="<?PHP echo $catid;?>" />
					<tr style="padding:30px 0;">
						<th><?PHP echo $n_m['id'];?></th>
						<td>

							<input type="checkbox" name="chek[]" value="<?PHP echo $n_m['id'];?>" />

						</td>
						<td style="width:30%;"><div style="margin-left:0px;"><?PHP echo $n_m['text'];?></div></td>
						<td><div style="margin-left:0px;"> </div></td>
						<td><div style="margin-left:0px;"><?PHP echo $n_m['name'];?></div></td>
						<td><div style="margin-left:0px;"><?PHP echo $n_m['email'];?></div></td>
						<td><div style="margin-left:0px;"><?PHP echo $n_m['date'];?></div></td>
						<td><div style="margin-left:0px;"><a href="<?PHP echo $sayt_url_index.'az/'.$bazalink.'/'.$product88['url_tag'].'/' ;?>" target="_blank"><?PHP echo $sayt_url_index.'az/'.$bazalink.'/'.$product88['url_tag'].'/' ;?></div></td>
						<td><?PHP if($n_m['s_id']==0){?><?php echo $dil['Aktiv'][$lng]; ?><?PHP } else{?><?php echo $dil['Passiv'][$lng]; ?><?PHP }?></td>
						
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
						<a href="?menu=coment&page=1" title="Birinci səhifə">&laquo; <?php echo $dil['Birinci'][$lng]; ?></a>
						<a href="?menu=coment&page=<?PHP echo $page-1;?>" title="Geri"> &laquo; <?php echo $dil['Geri'][$lng]; ?> </a>
						<?PHP
						}	
							$paging = '';
							$kichikdir = 5;
							$boyukdur = 9;
							$oterefbuteref=3;
								if($bolme_sayi <= $boyukdur){
									for($nomre=1; $nomre <=$bolme_sayi; $nomre++){
									$paging .= "<a href='?menu=coment&page=".$nomre."' class='number  "; 
										if($nomre == $page) $paging.="current";
										$paging.="' title='1'>".$nomre."</a>";
									}
								}
								elseif($bolme_sayi > $kichikdir && $page <=$boyukdur && $page>=$kichikdir ){
									if(($page>($bolme_sayi - $oterefbuteref)) && $page <7 )
									{
											for($nomre=1; $nomre <=$page; $nomre++){
												$paging .= "<a href='?menu=coment&page=".$nomre."' class='number  "; 
													if($nomre == $page) $paging.="current";
													$paging.="' title='1'>".$nomre."</a>";
											}
									}
									else
									{
											for($nomre=1; $nomre <=$page+$oterefbuteref; $nomre++){
													$paging .= "<a href='?menu=coment&page=".$nomre."' class='number  "; 
														if($nomre == $page) $paging.="current";
														$paging.="' title='1'>".$nomre."</a>";
											}
									}
									$paging.= "....<a href='?menu=coment&page=".$bolme_sayi."' class='number  "; 
											if($bolme_sayi == $page) $paging.="current";
											$paging.="' title='1'>".$bolme_sayi."</a>";
											echo "salam";
								}
								elseif($bolme_sayi > $kichikdir && $page <=$kichikdir ){
									for($nomre=1; $nomre <=$kichikdir; $nomre++){
										$paging .= "<a href='?menu=coment&page=".$nomre."' class='number  "; 
											if($nomre == $page) $paging.="current";
											$paging.="' title='1'>".$nomre."</a>";
									}
									$paging.= "....<a href='?menu=coment&page=".$bolme_sayi."' class='number  "; 
											if($bolme_sayi == $page) $paging.="current";
											$paging.="' title='1'>".$bolme_sayi."</a>";
								}
								elseif($bolme_sayi > $boyukdur && $page >=$boyukdur && $page <=($bolme_sayi-$kichikdir)  ){
									$paging.= "<a href='?menu=coment&page=1' class='number  "; 
											if($bolme_sayi == $page) $paging.="current";
											$paging.="' title='1'>1</a>...";
									for($nomre=$page-$oterefbuteref; $nomre <=$page+$oterefbuteref; $nomre++){
										$paging .= "<a href='?menu=coment&page=".$nomre."' class='number  "; 
											if($nomre == $page) $paging.="current";
											$paging.="' title='1'>".$nomre."</a>";
									}
									$paging.= "....<a href='?menu=coment&page=".$bolme_sayi."' class='number  "; 
											if($bolme_sayi == $page) $paging.="current";
											$paging.="' title='1'>".$bolme_sayi."</a>";
								}
								elseif($bolme_sayi > $boyukdur && $page >=$boyukdur && $page >($bolme_sayi-$kichikdir)  ){
									$paging.= "<a href='?menu=coment&page=1' class='number  "; 
											if($bolme_sayi == $page) $paging.="current";
											$paging.="' title='1'>1</a>...";
									for($nomre=$bolme_sayi-$kichikdir; $nomre <=$bolme_sayi; $nomre++){
										$paging .= "<a href='?menu=coment&page=".$nomre."' class='number  "; 
											if($nomre == $page) $paging.="current";
											$paging.="' title='1'>".$nomre."</a>";
									}
								}
							
							echo $paging;
						
						if($page == $bolme_sayi){}
						else{
						?>
						<a href="?menu=coment&page=<?PHP echo $page+1;?>" title="Irəli"> <?php echo $dil['İrəli'][$lng]; ?> &raquo;</a>
						<a href="?menu=coment&page=<?PHP echo $bolme_sayi;?>" title="Sonuncu səhifə"> <?php echo $dil['Sonuncu'][$lng]; ?>&raquo;</a>
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
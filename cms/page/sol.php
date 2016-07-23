				<meta charset='utf-8'>
				<form action="" method="POST" enctype="multipart/form-data">								<?PHP 				if($mod != 'add' and $mod != 'edit')				{				 ?>
					<ul class="shortcut-buttons-set">
						
						<li>
							<a class="shortcut-button" href="?menu=links">
							<span>
								<img src="images/link.png" alt="linklər" width="45px" height="45px" /><br />
								<?php echo $dil['Linklər'][$lng]; ?>
							</span>
							</a>
						</li>
						
						<li>
							<a class="shortcut-button" href="?menu=pages&mod=add">
							<span>
								<img src="images/paper_content_pencil_48.png" width="45px" height="45px" alt="Yeni səhifə" /><br />
								<?php echo $dil['Yeni_səhifə'][$lng]; ?>
							</span>
							</a>
						</li>
						
						<li>
							<div class="button_input"><input type="submit" style="cursor: pointer; width:45px; height:45px; background: #F9F9F9 url('images/remember.png'); padding:0px; border:none;" name="save" value="" /><br><br><?php echo $dil['Yadda_saxla'][$lng]; ?></div>
						</li>
						
						<li>
							<div class="button_input"><input type="submit" style="cursor: pointer; width:45px; height:45px; background: #F9F9F9 url('images/delete.png'); padding:0px; border:none;" name="delete" value="" /><br><br><?php echo $dil['Sil'][$lng]; ?></div>
						</li>
						
						<li>
							<div class="button_input"><input type="submit" style="cursor: pointer; width:45px; height:45px; background: #F9F9F9 url('images/on.png'); padding:0px; border:none;" name="aktiv" value="" /><br><br><?php echo $dil['Aktiv'][$lng]; ?></div>
						</li>
						
						<li>
							<div class="button_input"><input type="submit" style="cursor: pointer; width:45px; height:45px; background: #F9F9F9 url('images/off.png'); padding:0px; border:none;" name="passiv" value="" /><br><br><?php echo $dil['Passiv'][$lng]; ?></div>
						</li>
						
					</ul><!-- shortcut-buttons-set -->										<?PHP 					}					else{}					 ?>
				</form>
				<div class="clear"></div> <!-- clear -->
				<div class="content-box">
					<div class="content-box-header">
						<h3 style="width:87%;"><?php echo $dil['Sol_Sehifeler'][$lng]; ?></h3>
						<ul class="content-box-tabs">
							<li>
								<a href="#tab1" class="default-tab"><?php echo $dil['Cedvel'][$lng]; ?></a>
							</li>
						</ul>
						<div class="clear"></div>
					</div> <!-- content-box-header -->
					
					<div class="content-box-content">
						<div class="tab-content default-tab" id="tab1">
						<form action="" method="POST">
							<table>
							<!-- HEAD -->
								<thead>
									<tr>
									   <th width="2%">
									   <?php echo $dil['Id'][$lng]; ?>
									   </th>
									   <th width="2%">
											<input class="check-all" type="checkbox" />
									   </th>
									   <th><?php echo $dil['Ad'][$lng]; ?></th>
									   <th><?php echo $dil['Istifadeci_adi'][$lng]; ?></th>
									   <th><?php echo $dil['Aktiv'][$lng]; ?></th>
									   <th width="7%"><?php echo $dil['Idare'][$lng]; ?></th>
									</tr>
								</thead>
							 <!-- BODY -->
								<tbody>
									<?PHP
									$menu = MYSQLI_QUERY($connection,"SELECT * FROM menu WHERE (tip=4 OR tip=6 OR tip=5 OR tip=7) AND l_id=1");
									$num_row_menu = mysqli_num_rows($menu);
									while($row_menu = mysql_fetch_assoc($menu)){
										echo 
										'
										<tr>
										<th>'.$row_menu['id'].'</th>
										<td>
											<input type="checkbox" />
										</td>
										<td>Admin1</td>
										<td>'.$row_menu['name'].'</td>
										<td>Aktiv</td>
										<td>
											<!-- Icons -->
											 <a href="?menu=pages&mod=edit&id='.$row_menu['u_id'].'" title="Duzəliş et">
												<img src="images/pencil.png" alt="Duzəliş et" />
											 </a>
											 <a href="?menu=pages&mod=delete&id='.$row_menu['u_id'].'" title="Sil">
												<img src="images/cross.png" alt="Sil" />
											 </a>
										</td>
										</tr>
										<?php';
										}
									?>
								</tbody>
							</table>
							</form>
					</div></div></div>
				<div class="clear"></div> <!-- clear -->
				<form action="" method="POST" enctype="multipart/form-data">
					<ul class="shortcut-buttons-set">
						
						<li>
							<a class="shortcut-button" href="?menu=links">
							<span>
								<img src="images/link.png" alt="linklər" width="45px" height="45px" /><br />
								<?php echo $dil['Linklər'][$lng]; ?>
							</span>
							</a>
						</li>
						
						<li>
							<a class="shortcut-button" href="?menu=pages&mod=add">
							<span>
								<img src="images/paper_content_pencil_48.png" width="45px" height="45px" alt="Yeni səhifə" /><br />
								<?php echo $dil['Yeni_səhifə'][$lng]; ?>
							</span>
							</a>
						</li>
						
						<li>
							<div class="button_input"><input type="submit" style="cursor: pointer; width:45px; height:45px; background: #F9F9F9 url('images/remember.png'); padding:0px; border:none;" name="save" value="" /><br><br><?php echo $dil['Yadda_saxla'][$lng]; ?></div>
						</li>
						
						<li>
							<div class="button_input"><input type="submit" style="cursor: pointer; width:45px; height:45px; background: #F9F9F9 url('images/delete.png'); padding:0px; border:none;" name="delete" value="" /><br><br><?php echo $dil['Sil'][$lng]; ?></div>
						</li>
						
						<li>
							<div class="button_input"><input type="submit" style="cursor: pointer; width:45px; height:45px; background: #F9F9F9 url('images/on.png'); padding:0px; border:none;" name="aktiv" value="" /><br><br><?php echo $dil['Aktiv'][$lng]; ?></div>
						</li>
						
						<li>
							<div class="button_input"><input type="submit" style="cursor: pointer; width:45px; height:45px; background: #F9F9F9 url('images/off.png'); padding:0px; border:none;" name="passiv" value="" /><br><br><?php echo $dil['Passiv'][$lng]; ?></div>
						</li>
						
					</ul><!-- shortcut-buttons-set -->
				</form>
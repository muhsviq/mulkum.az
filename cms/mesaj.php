					<div id="messages" style="display: none"> <!-- acilmasi ucun element gostericileri: href="#messages" rel="modal"  -->
						<h3>2 <?php echo $dil['Mesaj'][$lng]; ?></h3>
						<!-- mesaj1 -->
						<p>
							<strong>23 Noyabr 2012</strong>/ Sabir<br />
								Salam bu birinci mesajdır.Bu bir test mesajıdır.Salam bu birinci mesajdır.Bu bir test mesajıdır.
							<small>
								<a href="#" class="remove-link" title="Mesajı sil"><code><?php echo $dil['Sil'][$lng]; ?></code></a>
							</small>
						</p>
						<!-- mesaj2 -->
						<p>
							<strong>23 Noyabr 2012</strong>/ Ruslan<br />
								Salam bu birinci mesajdır.Bu bir test mesajıdır.Salam bu birinci mesajdır.Bu bir test mesajıdır.
							<small>
								<a href="#" class="remove-link" title="Mesajı sil"><code><?php echo $dil['Sil'][$lng]; ?></code></a>
							</small>
						</p>
						<!-- msj yaz -->
						<form action="" method="post">
							<h4><?php echo $dil['Yeni Mesaj'][$lng]; ?></h4>
							
							<fieldset>
								<textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
							</fieldset>
							
							<fieldset>
							
								<select name="dropdown" class="small-input">
									<option value=""><?php echo $dil['Göndər'][$lng]; ?>...</option>
									<?PHP
									$send=array('',$dil['Hamiya'][$lng],'Sabir','Ruslan');
									for($x=1;$x<count($send);$x++)
									{
										echo '<option value="'.$x.'">'.$send[$x].'</option>';
									}
									?>
								</select>
								
								<input class="button" type="submit" value="<?php echo $dil['Göndər'][$lng]; ?>" />
								
							</fieldset>
						</form>
						
					</div> <!-- messages -->
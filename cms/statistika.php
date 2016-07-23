				<div class="content-box">
					<div class="content-box-header">
						<h3 style="width:70%;"><?php echo $dil['statistika_title'][$lng]; ?></h3>
						<div class="tab-content">
							<div style="width:61%;height:20px;float:left;"></div><!--mesaje-->
								<p>
									<select class="small-input">
										<option value="option1"><?php echo $dil['statistika_select'][$lng]; ?></option>
										<?PHP
										$statis=array('',$dil['statistika_select1'][$lng],$dil['statistika_select2'][$lng],$dil['statistika_select3'][$lng],$dil['statistika_select4'][$lng]);
										for($s=1;$s<count($statis);$s++)
										{
											echo '<option value="'.$s.'">'.$statis[$s].'</option>';
										}
										?>
									</select> 
								</p>
						</div>
					</div> <!-- content-box-header -->
					<div class="content-box-content">
						<div class="tab-content default-tab">
							<canvas id="cvs" width="920" height="250">[No canvas support]</canvas>
							<!-- statistika scripti -->
							<script>
								window.onload = function ()
								{
									var line = new RGraph.Line('cvs', [5,4,1,6,8,5,3]);
									line.Set('chart.labels', ['Bazar ertəsi','Çərşəmbə axşamı','Çərşəmbə','Cümə axşamı','Cümə','Şəmbə','Bazar']);
									line.Draw();
								}
							</script>
						</div>
					</div> <!-- content-box-content -->
				</div> <!-- content-box -->
<form action="" method="POST" enctype="multipart/form-data"><?PHP if($mod != 'add' and $mod != 'edit'){ ?>
<ul class="shortcut-buttons-set">
	
	
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
<?PHP }else{} ?>
<div class="clear"></div> <!-- clear -->
<div class="content-box">
	<div class="content-box-header">
		<h3 style="width:87%;"><?php echo $dil['Səhifələr / Səhifələrin siyahısı'][$lng]; ?></h3>
		<ul class="content-box-tabs">
			<li>
				<a href="#tab1" class="default-tab"><?php echo $dil['Cədvəl'][$lng]; ?></a>
			</li>
		</ul>
		<div class="clear"></div>
	</div> <!-- content-box-header -->
	
	<div class="content-box-content">
		
		<div class="tab-content default-tab" id="tab1">
			<?PHP
				@$mod = $_GET['mod'];
				@$id = $_GET['id'];
				if($mod == 'add'){ include ('pages/add.php');}
				elseif($mod == 'edit'){ include ('pages/edit.php');}
				elseif($mod == 'delete'){ include ('pages/delete.php');}
				else{ include ('pages/list.php');}
				
				
			?>
		<div>
			
	</div> <!-- content-box-content -->

</div> <!-- content-box -->
</div>
</div><?PHP if($mod != 'add' and $mod != 'edit'){ ?>
<ul class="shortcut-buttons-set">
	
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
	
</ul><!-- shortcut-buttons-set --><?PHP }else{} ?>
<div class="clear"></div> <!-- clear -->
</form>
<ul class="shortcut-buttons-set">
	
	<li>
		<a class="shortcut-button" href="?menu=dil&mod=add">
		<span>
			<img src="images/paper_content_pencil_48.png" width="45px" height="45px" alt="Yeni dil" title="Yeni dil" /><br />
			<?php echo $dil['Yeni dil'][$lng]; ?>
		</span>
		</a>
	</li>
	
</ul><!-- shortcut-buttons-set -->
<div class="clear"></div> <!-- clear -->
<div class="content-box">
	<div class="content-box-header">
		<h3 style="width:70%;"> <?php echo $dil['Admin  /  Dil'][$lng]; ?></h3>
		<ul class="content-box-tabs">
			<li>
				<a href="#tab1" class="default-tab"><?php echo $dil['Dəyiş'][$lng]; ?></a>
			</li>
		</ul>
		<div class="clear"></div>
	</div> <!-- content-box-header -->
	
	<div class="content-box-content">
		<div class="tab-content default-tab" id="tab1">
			<?PHP
				@$mod = $_GET['mod'];
				if($mod == 'add'){ include 'dil/add.php';}
				elseif($mod == 'edit'){ include 'dil/edit.php';}
				elseif($mod == 'passiv'){ include 'dil/passiv.php';}
				elseif($mod == 'aktiv'){ include 'dil/aktiv.php';}
				else{ include 'dil/list.php';}
			?>
		</div>
	</div>
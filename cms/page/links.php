<form action="" method="POST"><?PHP if($mod != 'add' and $mod != 'edit'){ ?>
<ul class="shortcut-buttons-set">
	
	<li>
		<a class="shortcut-button" href="?menu=links&mod=add">
		<span>
			<img src="images/paper_content_pencil_48.png" width="45px" height="45px" alt="Yeni səhifə" /><br />
			<?php echo $dil['Yeni link'][$lng]; ?>
		</span>
		</a>
	</li>
	
	<li>
		<div class="button_input"><input type="submit" style="cursor: pointer; width:45px; height:45px; background: #F9F9F9 url('images/delete.png'); padding:0px; border:none;" name="delete" value="" /><br><br><?php echo $dil['Sil'][$lng]; ?>
	</li>
	
</ul><!-- shortcut-buttons-set --><?PHP }else{} ?>
<div class="clear"></div> <!-- clear -->
<div class="content-box">
	<div class="content-box-header">
		<h3 style="width:87%;"><?php echo $dil['Səhifələr / Linklərin siyahısı'][$lng]; ?></h3>
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
				$mod = $_GET['mod'];
				if($mod == 'add'){ include 'links/add.php';}
				elseif($mod == 'edit'){ include 'links/edit.php';}
				elseif($mod == 'delete'){ include 'links/delete.php';}
				else{ include 'links/list.php';}
			?>
		<div>
			
	</div>
</div>
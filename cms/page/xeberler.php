
<form action="" method="POST" enctype="multipart/form-data"><?PHP if($mod != 'add' and $mod != 'edit'){ ?>
<ul class="shortcut-buttons-set">
	
	<li>
		<a class="shortcut-button" href="?menu=xeberler&mod=add">
		<span>
			<img src="images/paper_content_pencil_48.png" width="45px" height="45px" alt="Yeni səhifə" /><br />
			<?php echo $dil['yeni_xeber'][$lng]; ?>
		</span>
		</a>
	</li>
	
	<li>
		<div class="button_input"><input type="submit" style="cursor: pointer; width:45px; height:45px; background: #F9F9F9 url('images/remember.png'); padding:0px; border:none;" name="save" value="" /><br><br><?php echo $dil['Yadda_saxla'][$lng]; ?>
	</li>
	
	<li>
		<div class="button_input"><input type="submit" style="cursor: pointer; width:45px; height:45px; background: #F9F9F9 url('images/delete.png'); padding:0px; border:none;" name="delete" value="" /><br><br><?php echo $dil['Sil'][$lng]; ?>
	</li>
	
	<li>
		<div class="button_input"><input type="submit" style="cursor: pointer; width:45px; height:45px; background: #F9F9F9 url('images/on.png'); padding:0px; border:none;" name="aktiv" value="" /><br><br><?php echo $dil['Aktiv'][$lng]; ?>
	</li>
	
	<li>
		<div class="button_input"><input type="submit" style="cursor: pointer; width:45px; height:45px; background: #F9F9F9 url('images/off.png'); padding:0px; border:none;" name="passiv" value="" /><br><br><?php echo $dil['Passiv'][$lng]; ?>
	</li>
	
</ul><!-- shortcut-buttons-set --><?PHP }else{} ?>
<div class="clear"></div> <!-- clear -->
<div class="content-box">
	<div class="content-box-header">
		
		<h3 style="width:87%;">Xəbərlər</h3>
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
				if($mod == 'add'){ include 'xeberler/add.php';}
				elseif($mod == 'edit'){ include 'xeberler/edit.php';}
				elseif($mod == 'delete'){ include 'xeberler/delete.php';}
				elseif($mod == 'editphotos'){ include 'xeberler/edit_photos.php';}
				elseif($mod == 'addphotos'){ include 'xeberler/add_photos.php';}
				elseif($mod == 'videolist'){ include 'xeberler/video_list.php';}
				elseif($mod == 'videoadd'){ include 'xeberler/video_add.php';}
				elseif($mod == 'videoedit'){ include 'xeberler/video_edit.php';}
				elseif($mod == 'videodel'){ include 'xeberler/video_delete.php';}
				else{ include 'xeberler/list.php';}
			?>
		<div>
			
	</div>
</div>